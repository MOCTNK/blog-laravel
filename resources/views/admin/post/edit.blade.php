@extends('admin.layouts.main')
@section('title', 'Редактировать пост')
@section('content')
    <div>
        <h3 style="margin-top: 20px;">Редактировать пост</h3>
    </div>
    <div style="margin-top: 20px;">
        <form action="{{route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <p>
                <input type="text" placeholder="Введите название поста" name="title" value="{{ $post->title }}"/>
            </p>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->title }}</option>
                    @endforeach
                </select>
            </p>
            @error('category_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <select name="tag_ids[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}"
                            {{is_array($post->tags->pluck('id')->toArray()) &&
                                in_array(
                                         $tag->id,
                                         $post->tags->pluck('id')->toArray()
                                ) ? 'selected' : '' }}>{{ $tag->title }}</option>
                    @endforeach
                </select>
            </p>
            @error('tag_ids')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <img style="width: 200px; height: 100px;" src="{{ Storage::url($post->preview_image)}}">
            </p>
            <p>
                <input type="file" placeholder="Введите название поста" name="preview_image"/>
            </p>
            @error('preview_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <img style="width: 200px; height: 100px;" src="{{ Storage::url($post->main_image) }}">
            </p>

            <p>
                <input type="file" placeholder="Введите название поста" name="main_image"/>
            </p>
            @error('main_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <textarea placeholder="Введите описание поста" name="content">{{ $post->content }}</textarea>
            </p>
            @error('content')
            <div class="text-danger">{{ $message }}</div>
            @enderror
            <p>
                <button type="submit">Обновить</button>
            </p>
        </form>
    </div>
@endsection
