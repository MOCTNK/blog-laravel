@extends('admin.layouts.main')
@section('title', 'Редактировать тег')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Редактировать тег</h3>
    </div>
    <div style="margin-top: 20px;">
        <form action="{{route('admin.tag.update', $tag->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <input type="text" placeholder="Введите название категории" name="title" value="{{$tag->title}}"/>
            <button type="submit">Обновить</button>
            @error('title')
                <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
        </form>
    </div>
@endsection
