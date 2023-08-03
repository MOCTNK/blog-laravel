<div>
    <a href="{{ route('index') }}">
        <button style="float: left; height: 60px; border: 0;">Блог</button>
    </a>
    @if($isAdmin)
        <a href="{{ route('admin.index') }}">
            <button style="float: left; height: 60px; border: 0;">Панель администратора</button>
        </a>
    @endif
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" style="float: right; height: 60px; border: 0;">Выйти</button>
    </form>

</div>
