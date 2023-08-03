<!doctype html>
<html lang="ru" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body style="height: 100%;">
<div id="header-wrapper">
    @include('personal.includes.headmenu')
</div>
<div style="width: 100%; height: calc(100% - 60px);">
    <div style="width: 200px; height: 100%; background-color: #343a40; float: left;">
        @include('personal.includes.sidebar')
    </div>
    <div style="width: calc(100% - 220px); float: left; padding: 10px;">
        @yield('content')
    </div>
</div>
</body>
</html>

