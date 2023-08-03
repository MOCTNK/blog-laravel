@extends('layouts.main')
@section('content')
    <!-- end #header -->
    <!-- end #header-wrapper -->
    <hr />
    <!-- end #logo -->
    <div id="page">
        <div id="page-bgtop">
            <div id="content">
                @foreach($posts as $post)
                    <div class="post">
                        <p class="meta">
                            <span>Дата: {{ $post->created_at }}, </span>
                            <span>Категория: {{ $post->category->title }}</span>
                        </p>
                        <h2 class="title"><a href="{{route('post.show', $post->id)}}">{{ $post->title }}</a></h2>
                        <div style="margin-top: 20px;">
                            <img style="width: 100%; height: 300px;" src="{{ Storage::url($post->preview_image) }}" alt="">
                        </div>
                        <div style="margin-top: 20px;">
                            <span>
                                Теги:
                                @foreach($post->tags as $tag)
                                    {{ ' '.$tag->title }}
                                @endforeach
                            </span>
                        </div>
                        <div class="entry">
                            <p>{{ $post->content }}</p>
                        </div>
                        <div>
                            <span>Количество лайков: </span>
                            <span>{{ $post->liked_users_count }}</span>
                        </div>
                        @auth()
                            <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                @csrf
                                @if(!auth()->user()->likedPosts->contains($post->id))
                                    <div>
                                        <button>Лайкнуть</button>
                                    </div>
                                @else
                                    <div>
                                        <button>Отменить лайк</button>
                                    </div>
                                @endif
                            </form>
                        @endauth
                    </div>
                @endforeach
            </div>
            <!-- end #content -->
            <div id="sidebar">
                <ul>
                    <li>
                        <h2>Категории</h2>
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{ route('post.category.index', $category->id) }}">{{ $category->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end #sidebar -->
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #page -->
    </div>
    <div id="footer">
        <p>blog-laravel</p>
    </div>
@endsection
