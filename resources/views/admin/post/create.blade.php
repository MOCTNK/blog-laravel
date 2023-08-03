@extends('admin.layouts.main')
@section('title', 'Добавить пост')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Добавить пост</h3>
    </div>
    <div style="margin-top: 20px;">
        <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <p>
                <input type="text" placeholder="Введите название поста" name="title"/>
            </p>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </p>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <select name="tag_ids[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </p>
            @error('tag_ids')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <input type="file" placeholder="Введите название поста" name="preview_image"/>
            </p>
            @error('preview_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <input type="file" placeholder="Введите название поста" name="main_image"/>
            </p>
            @error('main_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <textarea placeholder="Введите описание поста" name="content"></textarea>
            </p>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <button type="submit">Добавить</button>
            </p>
        </form>
    </div>
@endsection
