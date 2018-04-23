@extends('common.app')
@section('content')
    <div class="container pt-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col mr-auto"><a class="btn btn-outline-dark disabled">{{ $name }}</a></div>
                    <div class="col-auto"><a class="btn btn-success text-white"
                         href="{{ route('posts.create', ['tid' => $tid, 'name' => urlencode($name)]) }}">创建文章</a></div>
                </div>

            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <h4 class="col-1">ID</h4>
                        <h4 class="col-7">标题</h4>
                        <h4 class="col-2">更新时间</h4>
                        <h4 class="col-2">操作</h4>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-1">1</div>
                        <div class="col-7">起来去问驱蚊器我去问看情况了千万</div>
                        <div class="col-2">2018-04-22</div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col-4"><a class="btn btn-sm btn-primary text-white">编辑</a></div>
                                <div class="col-4"><a class="btn btn-sm btn-danger text-white">删除</a></div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                </li>
            </ul>
        </div>
    </div>
@endsection