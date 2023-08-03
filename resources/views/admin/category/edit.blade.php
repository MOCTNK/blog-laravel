@extends('admin.layouts.main')
@section('title', 'Редактировать категорию')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Редактировать категорию</h3>
    </div>
    <div style="margin-top: 20px;">
        <form action="{{route('admin.category.update', $category->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <input type="text" placeholder="Введите название категории" name="title" value="{{$category->title}}"/>
            <button type="submit">Обновить</button>
            @error('title')
                <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
        </form>
    </div>
@endsection
