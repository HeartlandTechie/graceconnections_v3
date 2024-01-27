@php use Carbon\Carbon; @endphp
@extends('blog.layout')

@section('content')
    <div class="post-content" data-aos="fade-up">

        <!-- ======= Single Post Content ======= -->
        <div class="single-post">
            <div class="post-meta">
                <span class="date">{{ $post->category->name }}</span> <span class="mx-1">&bullet;</span>
                <span>{{ Carbon::parse($post->published_at)->format('D, d M Y') }}</span>
            </div>
            <h1 class="mb-5">{{ $post->title }}</h1>
            <div>
                {!! $post->content !!}
            </div>
        </div><!-- End Single Post Content -->

        <hr/>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $post->author->getFirstMedia('avatar')?->getUrl() }}" class="card-img" alt="{{ $post->author->name }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->author->name }}</h5>
                        <p>
                            Author of the post, creator of news and articles.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        img {
            display: block;
            max-width: 100%;
            width: auto;
            height: auto;
        }
    </style>
@endsection