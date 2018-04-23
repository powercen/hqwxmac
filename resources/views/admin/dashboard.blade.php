@extends('common.app')
@section('content')

<div class="container mt-3">
    <div class="row justify-content-between">
        <div class="col-3">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    属性检视器
                </button>
                <a type="button" class="list-group-item list-group-item-action" href="{{ route('posts.create') }}">创建文章</a>
                <button type="button" class="list-group-item list-group-item-action">文章管理</button>
                <a type="button" class="list-group-item list-group-item-action" href="{{ route('tags.index') }}">分类管理</a>
            </div>
        </div>
        <div class="col-9">
            x
        </div>
    </div>
</div>
@endsection


