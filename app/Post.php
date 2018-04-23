<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Post extends Model
{
    protected $fillable = ['title', 'summary', 'content', 'author', 'content', 'thumbnail'];

    public function tag()
    {
        $this->belongsTo(Tag::class, 'id', 'tid');
    }
}
