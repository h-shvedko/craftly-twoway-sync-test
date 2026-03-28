@extends('layouts.app')

@section('heading', 'Create Category')

@section('content')
    <div class="mx-auto max-w-2xl rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <form method="POST" action="{{ route('admin.categories.store') }}">
            @csrf

            <div class="space-y-5">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('name')
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
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <input type="text" name="description" id="description" value="{{ old('description') }}"
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 text-sm shadow-sm focus:outline-none" style="--tw-ring-color: var(--color-primary-600); border-color: var(--color-primary-600);" onfocus="this.style.borderColor='var(--color-primary-600)'" onblur="this.style.borderColor='#D1D5DB'">
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            </div>

            <div class="mt-6 flex items-center gap-3">
                <button type="submit" class="rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
                    Create
                </button>
                <a href="{{ route('admin.categories.index') }}" class="text-sm text-gray-500 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
@endsection
