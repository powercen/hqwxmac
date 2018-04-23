<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TagRequest;
use App\Http\Controllers\Controller;
use App\Tag;

class TagsController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
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
}
