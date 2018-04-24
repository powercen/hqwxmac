<?php
/**
 * Created by PhpStorm.
 * User: powercen
 * Date: 2018/4/23
 * Time: 下午11:53
 */

namespace App\Observers;
use App\Post;

class PostObserver
{
    public function saving(Post $post)
    {
        $post->summary = generate_brief($post->content);
    }
}