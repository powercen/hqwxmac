@extends('common.app')
@section('content')
    <div class="container">
        @if(count($members))
        <div class="card mt-2">
            <div class="card-header">
                <div class="row">
                    <div class="col-2 font-weight-bold">人员编号</div>
                    <div class="col-2 font-weight-bold">姓名</div>
                    <div class="col-2 font-weight-bold">单位</div>
                    <div class="col-3 font-weight-bold">身份证号</div>
                    <div class="col-3 font-weight-bold">联系电话</div>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="list-group mb-3">
                    @foreach($members as $member)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-2">{{ $member->enumber }}</div>
                            <div class="col-2">{{ $member->name }}</div>
                            <div class="col-2">{{ $member->group }}</div>
                            <div class="col-3">{{ $member->id_number }}</div>
                            <div class="col-3">{{ $member->phone }}</div>
                        </div>
                    </li>
                    @endforeach
                </ul>

                {{ $members->links() }}
            </div>
        </div>
        @endif

        <hr>
        <div class="row mt-4 justify-content-center mb-4">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('office.uploadfile') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlFile1">上传.xls格式的excel表格，覆盖当前信息进行修改</label>
                                <input type="file" class="form-control-file" name="data">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">上传并修改</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection