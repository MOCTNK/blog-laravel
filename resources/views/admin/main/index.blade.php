@extends('admin.layouts.main')
@section('title', 'Панель администратора')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Панель администратора</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <tbody>
            <tr>
                <td style="font-weight: bold;">Категории</td>
                <td>{{$data['categoriesCount']}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Теги</td>
                <td>{{$data['tagsCount']}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Посты</td>
                <td>{{$data['postsCount']}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Пользователи</td>
                <td>{{$data['usersCount']}}</td>
            </tr>
            <tbody>
        </table>
    </div>
@endsection
