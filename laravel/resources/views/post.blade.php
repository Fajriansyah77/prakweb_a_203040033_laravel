@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post->title }}</h2>
    <h5>{{ $post->author }}</h5>

    <p>By. <a class="text-decoration-none" href="#">{{$post->user->name}}</a> in <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    <p>{!! $post->body !!}</p>
    <a href="/blog" class="d-block mt-3">Back to posts</a>
</article>

@endsection