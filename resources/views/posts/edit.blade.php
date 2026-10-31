@extends('layouts.posts')

@section('title', 'Edit Post')

@section('content')

<div class="card">
    <h1>Edit Blog Post</h1>

    <p style="color:#64748b; margin-bottom:25px;">
        Update your existing blog post.
    </p>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Post Title</label>
        <input type="text" name="title"
               value="{{ $post->title }}" required>

        <label>Post Content</label>
        <textarea name="body" required>{{ $post->body }}</textarea>

        <button type="submit" class="btn btn-success">
            Update Post
        </button>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">
            Cancel
        </a>
    </form>
</div>

@endsection
