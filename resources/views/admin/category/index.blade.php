@extends('admin.layouts.main')
@section('title', 'Категории')
@section('content')
    <div>
        <a href="{{route('admin.category.create')}}">
            <button>Добавить</button>
        </a>
    </div>
    <div>
        <h3 style="margin-top: 20px;">Категории</h3>
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
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        <a href="{{ route('admin.category.show', $category->id) }}">
                            <button>Просмотр</button>
                        </a>
                        <a href="{{ route('admin.category.edit', $category->id) }}">
                            <button>Редактировать</button>
                        </a>
                        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" style="display: inline;">
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
