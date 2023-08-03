@extends('personal.layouts.main')
@section('title', 'Профиль')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Профиль</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <tbody>
            <tr>
                <td style="font-weight: bold;">Лайки</td>
                <td>{{$data['likedCount']}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Комментарии</td>
                <td>{{$data['commentCount']}}</td>
            </tr>
            <tbody>
        </table>
    </div>
@endsection
