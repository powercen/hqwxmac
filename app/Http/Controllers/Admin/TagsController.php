<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TagRequest;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;
use Cookie;

class TagsController extends Controller
{

    public function index()
    {
        $tags = Tag::orderByDesc('created_at')->paginate(10);
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(TagRequest $request, Tag $tag)
    {

        $tag->fill(['name' => $request->name, 'icon' => $request->icon]);
        $tag->save();
        return back();
    }

    public function edit(Tag $tag)
    {
        $tags = Tag::paginate(10);
        //写入cookie
        Cookie::queue('tag_icon', $tag->icon, 100000);
        return view('admin.tags.index', compact('tags', 'tag'));

    }

}
