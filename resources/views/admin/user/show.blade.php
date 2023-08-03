@extends('admin.layouts.main')
@section('title', $user->title)
@section('content')
    <div>
        <a href="{{ route('admin.user.edit', $user->id) }}">
            <button>Редактировать</button>
        </a>
        <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </div>
    <div>
        <h3 style="margin-top: 20px;">{{$user->name}}</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <tbody>
            <tr>
                <td style="font-weight: bold;">id</td>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">name</td>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">email</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">email_verified</td>
                <td>{{$user->email_verified_at}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">role</td>
                <td>{{\App\Models\User::getRoles()[$user->role]}}</td>
            </tr>
            <tbody>
        </table>
    </div>
@endsection
