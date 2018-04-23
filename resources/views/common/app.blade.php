<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '华庆公众号后台管理系统')</title>
    <link rel="stylesheet" href="{{ asset('fonts/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminapp.css') }}">
</head>
<body>
<div id="adminapp" class="{{ route_name() }}">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">华庆微信</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" href="{{ route('dashboard') }}">厂部培训</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#">华庆互动</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#">考勤成绩</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">系统设置</a>
                    </li>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="{{ route('posts.create') }}">新增文章</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="document.getElementById('logoutform').submit()">
                            <span class="mui-icon iconfont icon-tuichu text-danger f20 font-weight-bold"></span></a>

                        <form class="mb-0" action="{{ route('logout') }}" method="post" id="logoutform">@csrf</form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>
<script src="{{ asset('js/adminapp.js') }}"></script>
@stack('tcescript')
</body>
</html>
