@extends('layouts.app')

@section('heading', 'Create Comment')

@section('content')
    <div class="mx-auto max-w-2xl rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf

            <div class="space-y-5">
            <div>
                <label for="post_id" class="block text-sm font-medium text-gray-700">Post_id</label>
                <input type="text" name="post_id" id="post_id" value="{{ old('post_id') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('post_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-700">User_id</label>
                <input type="text" name="user_id" id="user_id" value="{{ old('user_id') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('user_id')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="author_name" class="block text-sm font-medium text-gray-700">Author_name</label>
                <input type="text" name="author_name" id="author_name" value="{{ old('author_name') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('author_name')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="author_email" class="block text-sm font-medium text-gray-700">Author_email</label>
                <input type="text" name="author_email" id="author_email" value="{{ old('author_email') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('author_email')
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
                <label for="is_approved" class="block text-sm font-medium text-gray-700">Is_approved</label>
                <input type="text" name="is_approved" id="is_approved" value="{{ old('is_approved') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('is_approved')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            </div>

            <div class="mt-6 flex items-center gap-3">
                <button type="submit" class="rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
                    Create
                </button>
                <a href="{{ route('comments.index') }}" class="text-sm text-gray-500 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
