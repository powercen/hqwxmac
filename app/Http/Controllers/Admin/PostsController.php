<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $tid = $request->tid;
        $name = urldecode($request->name);
        return view('admin.posts.index', compact('tid', 'name'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function uploadImage(Request $request)
    {
        //dd($request->file('file'));
        $imgpath = request()->file('file')->store('images', 'public');
        return json_encode(['location' => '/storage/'.$imgpath]);
    }
}
