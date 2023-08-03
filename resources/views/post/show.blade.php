@extends('layouts.main')
@section('content')
<!-- end #header -->
<!-- end #header-wrapper -->
<hr />
<!-- end #logo -->
<div id="page">
    <div id="page-bgtop">
        <div id="content" style="width: 100%;">
            <div class="post">
                <p class="meta">
                    <span>Дата: {{ $post->created_at }}, </span>
                    <span>Категория: {{ $post->category->title }}</span>
                </p>
                <h2 class="title">{{ $post->title }}</h2>
                <div style="margin-top: 20px;">
                    <img style="width: 100%; height: 300px;" src="{{ Storage::url($post->main_image) }}" alt="">
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
            @auth()
                <div>
                    <form action="{{ route('post.comment.store', $post->id) }}" method="POST">
                        @csrf
                        <p>Оставить комментарий:</p>
                        <textarea name="message" style=" width: 100%; height: 100px;"></textarea>
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            @endauth
            <div>
                @foreach($comments as $comment)
                    <div class="comment">
                        <p><b>{{ $comment->user->name }}</b></p>
                        <p>{{ $comment->message }}</p>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- end #content -->
        <!-- end #sidebar -->
        <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
@endsection
