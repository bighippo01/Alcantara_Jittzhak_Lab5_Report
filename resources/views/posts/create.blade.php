@extends('layouts.posts')

@section('title', 'Create Post')

@section('content')

<div class="card">
    <h1>Create New Post</h1>

    <p style="color:#64748b; margin-bottom:25px;">
        Write and publish a new blog post.
    </p>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>Post Title</label>
        <input type="text" name="title" placeholder="Enter your post title" required>

        <label>Post Content</label>
        <textarea name="body" placeholder="Write your post here..." required></textarea>

        <button type="submit" class="btn btn-primary">
            Save Post
        </button>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">
            Cancel
        </a>
    </form>
</div>

@endsection