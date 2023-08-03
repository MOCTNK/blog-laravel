<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div id="header-wrapper">
    <div id="header">
        <div id="menu">
            <ul>
                <li class="current_page_item"><a href="{{ route('index') }}">Главная</a></li>
                <li><a href="{{ route('personal.index') }}">Профиль</a></li>
            </ul>
        </div>
        <!-- end #menu -->
        <div id="search">

        </div>
        <!-- end #search -->
    </div>
</div>
<div id="logo">
    <h1><a href="{{ route('index') }}">blog-laravel</a></h1>
</div>
    @yield('content')
</body>
</html>

