@extends('layouts.app')

@section('heading', 'Post Details')

@section('content')
    <div class="mx-auto max-w-2xl rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <dl class="space-y-4">
            <div>
                <dt class="text-sm font-medium text-gray-500">User_id</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->user_id }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Category_id</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->category_id }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Title</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->title }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Slug</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->slug }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Excerpt</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->excerpt }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Body</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->body }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Featured_image</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->featured_image }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Status</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->status }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Published_at</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $post->published_at }}</dd>
            </div>
        </dl>

        <div class="mt-6 flex items-center gap-3">
            <a href="{{ route('admin.posts.edit', $post) }}" class="rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
                Edit
            </a>
            <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-lg border border-red-300 px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50">
                    Delete
                </button>
            </form>
            <a href="{{ route('admin.posts.index') }}" class="text-sm text-gray-500 hover:underline">Back to list</a>
        </div>
    </div>
@endsection
