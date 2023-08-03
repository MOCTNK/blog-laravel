@extends('admin.layouts.main')
@section('title', $category->title)
@section('content')
    <div>
        <a href="{{ route('admin.category.edit', $category->id) }}">
            <button>Редактировать</button>
        </a>
        <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </div>
    <div>
        <h3 style="margin-top: 20px;">{{$category->title}}</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <tbody>
            <tr>
                <td style="font-weight: bold;">id</td>
                <td>{{$category->id}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">title</td>
                <td>{{$category->title}}</td>
            </tr>
            <tbody>
        </table>
    </div>
@endsection
