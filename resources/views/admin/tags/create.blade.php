@extends('common.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card mt-5">
                    <div class="card-header"><h5 class="text-center mb-0">创建标签</h5></div>
                    <div class="card-body">
                        <form method="post" action="{{ route('tags.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>标签名称</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <button type="submit" class="btn btn-primary">创建</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection