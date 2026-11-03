@extends('layouts.posts')

@section('title', 'Blog Posts')

@section('content')

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px;">
        <div>
            <h1>My Blog Posts</h1>
            <p style="color:#64748b;">Manage and explore your blog posts.</p>
        </div>

        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            + Create New Post
        </a>
        <a href="{{ route('posts.reports.index') }}" class="btn btn-primary">
             View Reports
             </a>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @forelse($posts as $post)

        <div class="card">
            <h2 style="margin-bottom:12px;">
                {{ $post->title }}
            </h2>

            <p style="color:#64748b; line-height:1.7; margin-bottom:15px;">
                {{ Str::limit($post->body, 180) }}
            </p>

            <div class="post-actions">
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">
                    View
                </a>

                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">
                    Edit
                </a>
               

                <form action="{{ route('posts.destroy', $post->id) }}"
                      method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this post?')">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>

    @empty

        <div class="card" style="text-align:center;">
            <h3>No blog posts yet.</h3>
            <p style="color:#64748b; margin-top:10px;">
                Start by creating your first blog post.
            </p>
        </div>

    @endforelse

@endsection