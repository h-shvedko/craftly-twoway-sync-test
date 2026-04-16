@extends('layouts.app')

@section('heading', 'Latest Articles')

@section('content')
    <div class="mb-4 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold text-gray-800">Latest Articles</h2>
            <p class="mt-1 text-sm text-gray-500">Stay updated with our tech news</p>
        </div>
        <a href="{{ route('admin.posts.create') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
            Create Post
        </a>
    </div>

    @if ($posts->isEmpty())
        {{-- Empty state --}}
        <div class="rounded-lg border border-gray-200 bg-white px-6 py-16 text-center shadow-sm">
            <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-gray-100">
                <svg class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-gray-800">No Articles yet</h3>
            <p class="mt-1 text-sm text-gray-500">Create your first article to get started.</p>
            <div class="mt-6">
                <a href="{{ route('admin.posts.create') }}" class="inline-flex items-center rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
                    Create Post
                </a>
            </div>
        </div>
    @else
        {{-- Data table --}}
        <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">User_id</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Category_id</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Title</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Slug</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Excerpt</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Body</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Featured_image</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Status</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Published_at</th>
                        <th class="px-4 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($posts as $post)
                        <tr>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->user_id }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->category_id }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->title }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->slug }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->excerpt }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->body }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->featured_image }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->status }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $post->published_at }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-right text-sm">
                                <a href="{{ route('admin.posts.show', $post) }}" class="hover:underline" style="color: var(--color-primary-600);">View</a>
                                <a href="{{ route('admin.posts.edit', $post) }}" class="ml-3 hover:underline" style="color: var(--color-primary-600);">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    @endif
@endsection
