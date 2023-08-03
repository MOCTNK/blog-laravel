@extends('personal.layouts.main')
@section('title', 'Лайки')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Лайки</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>content</th>
                <th>category</th>
                <th>tags</th>
                <th>preview_image</th>
                <th>main_image</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->category->title}}</td>
                    <td>
                        <ul>
                            @foreach($post->tags->pluck('title')->toArray() as $tag)
                                <li>{{ $tag }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <img style="width: 200px; height: 100px;" src="{{ Storage::url($post->preview_image) }}" />
                    </td>
                    <td>
                        <img style="width: 200px; height: 100px;" src="{{ Storage::url($post->main_image) }}" />
                    </td>
                    <td>
                        <form action="{{ route('personal.liked.delete', $post->id) }}" method="POST" style="display: inline;">
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
