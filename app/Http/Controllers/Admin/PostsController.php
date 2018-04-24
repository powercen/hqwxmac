<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $tid = $request->tid;
        $name = urldecode($request->name);
        $tag = Tag::find($tid);
        $posts = $tag->posts()->paginate(15);
        return view('admin.posts.index', compact('tid', 'name', 'posts'));
    }

    public function create(Request $request)
    {
        $tid = $request->tid;
        $name = urldecode($request->name);
        $author = \Auth::user()->name;
        return view('admin.posts.create', compact('tid', 'name', 'author'));
    }

    public function uploadImage(Request $request)
    {
        //dd($request->file('file'));
        $imgpath = request()->file('file')->store('images', 'public');
        return response()->json(['location' => config('app.url') . '/storage/'.$imgpath]);
        //return response()->json(['location' => $imgpath]);
    }

    public function store(Request $request)
    {
        $validation = $request->validate( [
            'title' => 'required|min:3',
            'content' => 'required|min:3',
            'tid' => 'required',
            'author' => 'required'
        ], [
            'title.required' => '标题必须填写',
            'content.required' => '文章内容必须填写'
        ]);

        $post = Post::create($validation);
        $tid = $post->tid;
        $name = urlencode($post->tag->name);
        return redirect()->route('posts.index', compact('tid', 'name'));
    }

    public function edit(Post $post)
    {
        $name = urldecode(request('name'));
        return view('admin.posts.create', compact('post', 'name'));
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return back();
    }

    public function update(Request $request, Post $post)
    {
        $validation = $request->validate( [
            'title' => 'required|min:3',
            'content' => 'required|min:3',
        ], [
            'title.required' => '标题必须填写',
            'content.required' => '文章内容必须填写'
        ]);

        $post->update($validation);
        $tid = $post->tid;
        $name = urlencode($post->tag->name);
        return redirect()->route('posts.index', compact('tid', 'name'));
    }

}
