@extends('admin.layouts.main')
@section('title', 'Пользователи')
@section('content')
    <div>
        <a href="{{route('admin.user.create')}}">
            <button>Добавить</button>
        </a>
    </div>
    <div>
        <h3 style="margin-top: 20px;">Пользователи</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>email_verified</th>
                <th>role</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->email_verified_at}}</td>
                    <td>{{\App\Models\User::getRoles()[$user->role]}}</td>
                    <td>
                        <a href="{{ route('admin.user.show', $user->id) }}">
                            <button>Просмотр</button>
                        </a>
                        <a href="{{ route('admin.user.edit', $user->id) }}">
                            <button>Редактировать</button>
                        </a>
                        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tbody>
        </table>
    </div>
@endsection
