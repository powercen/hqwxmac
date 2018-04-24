<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

/**
 * App\Post
 *
 * @property int $id
 * @property int $tid 分类标签id
 * @property string $title 标题
 * @property string|null $thumbnail
 * @property string|null $summary
 * @property string $content 正文
 * @property string $author
 * @property int $visited_count
 * @property int $fab_count 点赞数
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereFabCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereTid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereVisitedCount($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    protected $fillable = ['title', 'summary', 'author', 'content', 'thumbnail', 'tid'];

    public function tag()
    {
        $this->belongsTo(Tag::class, 'id', 'tid');
    }
}
