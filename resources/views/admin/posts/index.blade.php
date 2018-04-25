@extends('common.app')
@section('content')
    <div class="container pt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col mr-auto"><a class="btn btn-outline-dark disabled">{{ $name }}</a></div>
                    <div class="col-auto"><a class="btn btn-success text-white"
                         href="{{ route('posts.create', ['tid' => $tid, 'name' => urlencode($name)]) }}">创建文章</a></div>

                    <div class="col-auto"><a class="btn btn-dark text-white"
                                             href="{{ route('tags.index') }}">返回</a></div>
                </div>

            </div>
            <ul class="list-group list-group-flush mb-2">
                <li class="list-group-item">
                    <div class="row">
                        <h4 class="col-1">ID</h4>
                        <h4 class="col-7">标题</h4>
                        <h4 class="col-2">更新时间</h4>
                        <h4 class="col-2">操作</h4>
                    </div>
                </li>
                @if(count($posts))
                    @foreach($posts as $post)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-1">{{ $post->id }}</div>
                                <div class="col-7">{{ $post->title }}</div>
                                <div class="col-2">{{ $post->updated_at }}</div>
                                <div class="col-2">
                                    <div class="row">
                                        <div class="col-4"><a class="btn btn-sm btn-primary text-white"
                                            href="{{ route('posts.edit', ['post'=> $post->id, 'name' => urlencode($name)]) }}">编辑</a></div>
                                        <div class="col-4">
                                            <a class="btn btn-sm btn-danger text-white"
                                               onclick="document.getElementById('deleteform').submit()">删除</a></div>
                                        <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post" id="deleteform">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <li class="list-group-item">
                        <div class="alert alert-info">没有文章了，请添加文章</div>
                    </li>
                @endif

            </ul>
            {{ $posts->links() }}
        </div>
    </div>
@endsection