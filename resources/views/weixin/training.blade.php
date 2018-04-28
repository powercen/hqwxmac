<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/mui.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/mui.js') }}"></script>
    <script type="text/javascript" charset="utf-8">
        mui.init();
    </script>
</head>
<body>
    <div id="app" class="{{ route_name() }}">
        <router-view></router-view>
        <tabbar v-if="tabbarShow"></tabbar>
    </div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
