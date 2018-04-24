<?php
/**
 * Created by PhpStorm.
 * User: powercen
 * Date: 2018/4/23
 * Time: 下午11:53
 */

namespace App\Observers;
use App\Post;
use Sunra\PhpSimple\HtmlDomParser as HtmlParser;

class PostObserver
{
    protected $length = 20;

    public function saving(Post $post)
    {
        //$post->summary = generate_brief($post->content);
        $html = HtmlParser::str_get_html($post->content);
        $imgs = $html->find('img');
        if(count($imgs)){
            $post->thumbnail = $this->fix_path(reset($imgs));
        }

        $post->summary = str_limit(trim($html->plaintext ?: '请至少输入几个字作为摘要', $this->length));

        // 修复tinymce路径bug
        foreach ($html->find('img') as $img){
            $img->src = $this->fix_path($img);
        }

        $post->content = $html;

    }

    public function saved(Post $post)
    {
        $post->tag()->increment('posts_count', 1);
    }

    public function deleted(Post $post)
    {
        $post->tag()->decrement('posts_count', 1);
    }

    protected function fix_path($img_element)
    {
        return config('app.url'). str_replace('..', '', $img_element->src);
    }

}