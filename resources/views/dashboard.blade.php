@extends('layouts.app')

@section('heading', 'Dashboard')

@section('content')
    {{-- Stats row --}}
    <div class="mb-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <div class="rounded-lg border bg-white border-gray-200 p-6 shadow-sm">
            <p class="text-sm font-medium text-gray-500">Total Posts</p>
            <p class="mt-2 text-3xl font-bold" style="color: var(--color-primary-600);">{{ $totalPosts ?? 0 }}</p>
        </div>
        <div class="rounded-lg border bg-white border-gray-200 p-6 shadow-sm">
            <p class="text-sm font-medium text-gray-500">Total Comments</p>
            <p class="mt-2 text-3xl font-bold" style="color: var(--color-primary-600);">{{ $totalComments ?? 0 }}</p>
        </div>
        <div class="rounded-lg border bg-white border-gray-200 p-6 shadow-sm">
            <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
                Write New Post
            </a>
        </div>
    </div>

    {{-- Recent Posts --}}
    <div class="rounded-lg border bg-white border-gray-200 shadow-sm">
        <div class="border-b border-gray-200 px-6 py-4">
            <h3 class="text-lg font-semibold text-gray-800">Recent Posts</h3>
        </div>
        <ul class="divide-y border-gray-200">
            @forelse ($recentPosts ?? [] as $item)
                <li class="flex items-center justify-between px-6 py-4">
                    <div>
                        <p class="text-sm font-medium text-gray-800">{{ $item->title ?? $item->name ?? 'Untitled' }}</p>
                        <p class="text-xs text-gray-500">{{ $item->created_at?->diffForHumans() }}</p>
                    </div>
                    <a href="{{ route('admin.posts.index') }}/{{ $item->id }}" class="text-sm hover:underline" style="color: var(--color-primary-600);">View</a>
                </li>
            @empty
                <li class="px-6 py-8 text-center text-sm text-gray-500">No posts yet. Start writing!</li>
            @endforelse
        </ul>
    </div>
@endsection
