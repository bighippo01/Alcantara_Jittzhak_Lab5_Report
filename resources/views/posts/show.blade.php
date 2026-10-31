@extends('layouts.posts')

@section('title', 'View Post')

@section('content')

<div class="card">

    <h1>{{ $post->title }}</h1>

    <hr style="border:0; border-top:1px solid #e2e8f0; margin:20px 0;">

    <div style="font-size:16px; line-height:1.9; white-space:pre-wrap;">
        {{ $post->body }}
    </div>

    <br>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">
        Back to Posts
    </a>

    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">
        Edit Post
    </a>

</div>

@endsection