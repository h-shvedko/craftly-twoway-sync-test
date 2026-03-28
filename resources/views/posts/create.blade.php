@extends('layouts.app')

@section('heading', 'Create Post')

@section('content')
    <div class="mx-auto max-w-2xl rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <form method="POST" action="{{ route('admin.posts.store') }}">
            @csrf

            <div class="space-y-5">
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700">User_id</label>
                <input type="text" name="user_id" id="user_id" value="{{ old('user_id') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('user_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="category_id" class="block text-sm font-medium text-gray-700">Category_id</label>
                <input type="text" name="category_id" id="category_id" value="{{ old('category_id') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('category_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('slug')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="excerpt" class="block text-sm font-medium text-gray-700">Excerpt</label>
                <input type="text" name="excerpt" id="excerpt" value="{{ old('excerpt') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('excerpt')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <input type="text" name="body" id="body" value="{{ old('body') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('body')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="featured_image" class="block text-sm font-medium text-gray-700">Featured_image</label>
                <input type="text" name="featured_image" id="featured_image" value="{{ old('featured_image') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('featured_image')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <input type="text" name="status" id="status" value="{{ old('status') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('status')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="published_at" class="block text-sm font-medium text-gray-700">Published_at</label>
                <input type="text" name="published_at" id="published_at" value="{{ old('published_at') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('published_at')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            </div>

            <div class="mt-6 flex items-center gap-3">
                <button type="submit" class="rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
                    Create
                </button>
                <a href="{{ route('admin.posts.index') }}" class="text-sm text-gray-500 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
