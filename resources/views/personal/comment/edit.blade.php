@extends('personal.layouts.main')
@section('title', 'Редактировать комментарий')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Редактировать комментарий</h3>
    </div>
    <div style="margin-top: 20px;">
        <form action="{{route('personal.comment.update', $comment->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <p>
                <textarea name="message">{{ $comment->message }}</textarea>
            </p>
            @error('message')
            <div class="text-danger">{{ $message }}</div>
            @enderror

            <p>
                <button type="submit">Обновить</button>
            </p>
        </form>
    </div>
@endsection
