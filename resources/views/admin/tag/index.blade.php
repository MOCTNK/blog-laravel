@extends('admin.layouts.main')
@section('title', 'Теги')
@section('content')
    <div>
        <a href="{{route('admin.tag.create')}}">
            <button>Добавить</button>
        </a>
    </div>
    <div>
        <h3 style="margin-top: 20px;">Теги</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->title}}</td>
                    <td>
                        <a href="{{ route('admin.tag.show', $tag->id) }}">
                            <button>Просмотр</button>
                        </a>
                        <a href="{{ route('admin.tag.edit', $tag->id) }}">
                            <button>Редактировать</button>
                        </a>
                        <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST" style="display: inline;">
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
