@extends('admin.layouts.main')
@section('title', $tag->title)
@section('content')
    <div>
        <a href="{{ route('admin.tag.edit', $tag->id) }}">
            <button>Редактировать</button>
        </a>
        <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </div>
    <div>
        <h3 style="margin-top: 20px;">{{$tag->title}}</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <tbody>
            <tr>
                <td style="font-weight: bold;">id</td>
                <td>{{$tag->id}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">title</td>
                <td>{{$tag->title}}</td>
            </tr>
            <tbody>
        </table>
    </div>
@endsection
