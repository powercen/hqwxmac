@extends('common.app')
@section('content')
    <div class="container">
        <div class="mt-3 ml-auto mr-auto" id="iphone8-container">
            <form action="{{ route('posts.uploadImage') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="输入文章的标题">
                    @csrf
                </div>
                <div class="form-group">
                    <select class="form-control" name="tid" disabled>
                        <option>1</option>
                        <option>2</option>
                        <option selected>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea id="postext" class="form-control" style="width: 395px; height: 687px" placeholder="开始设计你的图文消息" name="content">
                        {{ old('content') }}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">发布</button>
            </form>

        </div>
    </div>

    @push('tcescript')
        <script src="{{ asset('js/tmce.min.js')}}"></script>
        <script src="{{ asset('js/init.tmce.js')}}"></script>
    @endpush
@endsection