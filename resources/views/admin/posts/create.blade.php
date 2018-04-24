@extends('common.app')
@section('content')
    <div class="container">
        <div class="mt-3 ml-auto mr-auto" id="iphone8-container">
            {{--<form action="{{ route('posts.uploadImage') }}" method="post" enctype="multipart/form-data">--}}
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="输入文章标题" name="title">
                    @csrf
                    <input type="hidden" value="{{ $tid }}" name="tid">
                    <input type="hidden" value="{{ $author }}" name="author">
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{ $name }}" disabled="disabled">
                </div>
                <div class="form-group">
                    <textarea id="postext" class="form-control" style="width: 395px; height: 687px" placeholder="开始设计你的图文消息" name="content">
                        {{ old('content') }}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-5">发布</button>
            </form>
        </div>
    </div>

    @push('tcescript')
        <script src="{{ asset('js/tmce.min.js')}}"></script>
        <script src="{{ asset('js/init.tmce.js')}}"></script>
    @endpush
@endsection