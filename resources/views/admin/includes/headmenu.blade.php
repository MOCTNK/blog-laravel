<div>
    <a href="{{ route('index') }}">
        <button style="float: left; height: 60px; border: 0;">Блог</button>
    </a>
    <a href="{{ route('personal.index') }}">
        <button style="float: left; height: 60px; border: 0;">Профиль</button>
    </a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" style="float: right; height: 60px; border: 0;">Выйти</button>
    </form>
</div>
