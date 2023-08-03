@extends('admin.layouts.main')
@section('title', 'Редактировать пользователя')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Редактировать пользователя</h3>
    </div>
    <div style="margin-top: 20px;">
        <form action="{{route('admin.user.update', $user->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <p>
                <input type="text" placeholder="Введите имя пользователя" name="name" value="{{ $user->name }}"/>
            </p>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <input type="text" placeholder="Введите E-mail" name="email" value="{{ $user->email }}"/>
            </p>
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <select name="role">
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}" {{ $user->role == $id ? 'selected' : ''}}>{{ $role }}</option>
                    @endforeach
                </select>
            </p>
            @error('role_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <button type="submit">Обновить</button>
            </p>
        </form>
    </div>
@endsection
