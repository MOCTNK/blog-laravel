@extends('admin.layouts.main')
@section('title', 'Добавить пользователя')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Добавить пользователя</h3>
    </div>
    <div style="margin-top: 20px;">
        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            <p>
                <input type="text" placeholder="Введите имя пользователя" name="name"/>
            </p>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <input type="text" placeholder="Введите E-mail" name="email"/>
            </p>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <select name="role">
                    @foreach($roles as $id => $role)
                        <option value="{{ $id }}">{{ $role }}</option>
                    @endforeach
                </select>
            </p>
            @error('role')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <button type="submit">Добавить</button>
            </p>
        </form>
    </div>
@endsection
