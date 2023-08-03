@extends('admin.layouts.main')
@section('title', $post->title)
@section('content')
    <div>
        <a href="{{ route('admin.post.edit', $post->id) }}">
            <button>Редактировать</button>
        </a>
        <form action="{{ route('admin.post.delete', $post->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button>
        </form>
    </div>
    <div>
        <h3 style="margin-top: 20px;">{{$post->title}}</h3>
    </div>
    <div style="margin-top: 20px;">
        <table class="fl-table">
            <tbody>
            <tr>
                <td style="font-weight: bold;">id</td>
                <td>{{$post->id}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">title</td>
                <td>{{$post->title}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">content</td>
                <td>{{$post->content}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">category</td>
                <td>{{$post->category->title}}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">tags</td>
                <td>
                    <ul>
                        @foreach($post->tags->pluck('title')->toArray() as $tag)
                            <li>{{ $tag }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold;">preview_image</td>
                <td>
                    <img style="width: 200px; height: 100px;" src="{{ Storage::url($post->preview_image) }}" />
                </td>
            </tr>
            <tr>
                <td style="font-weight: bold;">main_image</td>
                <td>
                    <img style="width: 200px; height: 100px;" src="{{ Storage::url($post->main_image) }}" />
                </td>
            </tr>
            <tbody>
        </table>
    </div>
@endsection
