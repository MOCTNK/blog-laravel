@extends('admin.layouts.main')
@section('title', 'Добавить категорию')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Добавить категорию</h3>
    </div>
    <div style="margin-top: 20px;">
        <form action="{{ route('admin.category.store') }}" method="POST">
            @csrf
            <input type="text" placeholder="Введите название категории" name="title"/>
            <button type="submit">Добавить</button>
            @error('title')
                <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
        </form>
    </div>
@endsection
