@extends('common.app')
@section('content')
    <div class="container mt-4 bg-white py-3" id="tags">
        <div class="card border-bottom-0">
            <div class="card-header">
                <div class="row mb-2">
                    <h4 class="col-1 font-weight-bold"></h4>
                    <h4 class="col-3 font-weight-bold">分类名称</h4>
                    <h4 class="col-4 font-weight-bold">分类图标</h4>
                    <h4 class="col-4 font-weight-bold">操作</h4>
                </div>
            </div>
            <div class="card-body">
        <!--创建分类-->
            @includeWhen(!isset($tag), 'admin.tags._create')
            @includeWhen(isset($tag), 'admin.tags._edit')
            </div>
        </div>
        <!---end--->
        <ul class="list-group">
        @foreach($tags as $tag)
        <li class="list-group-item">
            <div class="row">
                <div class="col-1 mt-2">{{ $tag->id }}</div>
                <div class="col-3 mt-2">{{ $tag->name }}</div>
                <div class="col-4 mt-2 position-relative">
                    <div class="position-absolute" style="top:-20px;left:12px;">
                        <span class="iconfont f36 {{ $tag->icon }}"></span>
                    </div>
                </div>
                <div class="col-4">
                    <a  href="{{ route('tags.edit', ['tag' => $tag->id]) }}" class="btn btn-primary btn-sm mr-2">修改分类</a>
                    <a href="{{ route('posts.index', ['tid' => $tag->id, 'name' => urlencode($tag->name)]) }}"
                       class="btn btn-success btn-sm mr-3">编辑文章</a>
                    @if($tag->posts_count)
                        <button class="btn btn-danger btn-sm mr-3" disabled="disabled">删除分类</button>
                    @else
                        <button class="btn btn-danger btn-sm mr-3">删除分类</button>
                    @endif
                </div>
            </div>
        </li>
        @endforeach
        </ul>
        {{ $tags->links() }}
    </div>

@endsection