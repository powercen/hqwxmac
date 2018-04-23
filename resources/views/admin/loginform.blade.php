<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '华庆公众号后台管理系统')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app" class="{{ route_name() }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card mt-5">
                    <div class="card-header"><h5 class="text-center mb-0">华庆公众号后台管理登陆</h5></div>

                    <div class="card-body">
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>用户名</label>
                                <input type="text" class="form-control" name="name">

                            </div>
                            <div class="form-group">
                                <label>密码</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">登陆</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
