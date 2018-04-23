<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Tag extends Model
{
    protected $fillable = ['name', 'icon'];

    public function posts()
    {
        $this->hasMany(Post::class, 'tid', 'id');
    }
}
