@extends('personal.layouts.main')
@section('title', 'Комментарии')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Комментарии</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <thead>
            <tr>
                <th>id</th>
                <th>post</th>
                <th>message</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->post()}}</td>
                    <td>{{$comment->message}}</td>
                    <td>
                        <a href="{{ route('personal.comment.edit', $comment->id) }}">
                            <button>Редактировать</button>
                        </a>
                        <form action="{{ route('personal.comment.delete', $comment->id) }}" method="POST" style="display: inline;">
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
