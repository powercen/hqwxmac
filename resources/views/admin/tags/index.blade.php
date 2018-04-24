@extends('common.app')
@section('content')
    <div class="container mt-4 bg-white py-3" id="tags">
        <div class="row mb-2">
            <h4 class="col-1 font-weight-bold">#</h4>
            <h4 class="col-3 font-weight-bold">分类名称</h4>
            <h4 class="col-4 font-weight-bold">分类图标</h4>
            <h4 class="col-4 font-weight-bold">操作</h4>
        </div>
        <!--创建分类-->
            <form action="{{ route('tags.store') }}" method="post">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="输入分类名称" name="name">
                        @csrf
                    </div>
                    <div class="col-4 position-relative">
                        <button type="button" class="btn btn-primary d-inline mr-2 btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        +
                        </button>
                        <div class="position-absolute" style="top:-10px;left: 70px;"><span class="iconfont f36" :class="selected"></span></div>
                            <!-- Modal -->
                            <div class="modal" id="exampleModalCenter" tabindex="-1" data-backdrop="false" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">选择分类图标</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                                <ul class="mui-table-view mui-grid-view mui-grid-9" v-on:click="changeSelected">
                                                    <li v-for="icon in icons" class="mui-table-view-cell mui-media mui-col-xs-4 mui-col-sm-3">
                                                        <a>
                                                            <span class="iconfont f36" :class="icon"  :data-icon="icon">
                                                        </span></a></li>
                                                </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <select class="custom-select d-none" id="inputGroupSelect01" v-model="selected" name="icon">
                            <option :value="icon" v-for="icon in icons"></option>
                        </select>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary">创建</button>
                    </div>
                </div>
            </form>
        <!---end--->
        <hr>
        @foreach($tags as $tag)
        <div class="row mb-3">
            <div class="col-1 mt-2">{{ $tag->id }}</div>
            <div class="col-3 mt-2">{{ $tag->name }}</div>
            <div class="col-4 mt-2 position-relative">
                <div class="position-absolute" style="top:-20px;left:12px;">
                    <span class="iconfont f36 {{ $tag->icon }}"></span>
                </div>
            </div>
            <div class="col-4">
                <button href="" class="btn btn-primary btn-sm mr-2">编辑</button>
                <button href="" class="btn btn-danger btn-sm mr-3">删除</button>
                <a href="{{ route('posts.index', ['tid' => $tag->id, 'name' => urlencode($tag->name)]) }}"
                   class="btn btn-success btn-sm">编辑文章</a>
            </div>
        </div>
        @endforeach
        {{ $tags->links() }}
    </div>

@endsection