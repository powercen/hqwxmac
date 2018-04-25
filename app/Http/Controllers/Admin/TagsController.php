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
        return view('admin.tags.index', compact('tags', 'tag'));

    }

    public function update(Request $request, Tag $tag)
    {
        $validation = $request->validate([
            'name' => 'required|min:1',
            'icon' => 'required'
        ],
        [
            'name.required' => '分类名称必须填写',
            'icon.required' => '必须选择一个分类图标'
        ]);

        $tag->update($validation);
        return redirect()->route('tags.index');

    }

    public function destroy($id)
    {
        Tag::destroy($id);

        return back();
    }

}
