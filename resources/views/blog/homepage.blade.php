@extends('blog.layout')

@section('content')
    @foreach($posts as $post)
        <div class="col-4 post-entry-1">
            <a href="{{ route('post', $post->slug) }}">
                <img src="{{ $post->getFirstMedia('featured_image') ? $post->getFirstMedia('featured_image')->getUrl() : '/public/empty_blog.jpg'}}"
                     alt="" class="img-fluid">
            </a>
            <div class="post-meta">
                <span class="date">{{ $post->category->name }}</span>
                <span class="mx-1">&bullet;</span> <span>{{ \Carbon\Carbon::parse($post->published_at)->format('D, d M Y') }}</span>
            </div>
            <h2>
                <a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a>
            </h2>
        </div>
    @endforeach
@endsection
