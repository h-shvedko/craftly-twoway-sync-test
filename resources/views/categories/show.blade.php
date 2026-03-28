@extends('layouts.app')

@section('heading', 'Category Details')

@section('content')
    <div class="mx-auto max-w-2xl rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <dl class="space-y-4">
            <div>
                <dt class="text-sm font-medium text-gray-500">Name</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $category->name }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Slug</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $category->slug }}</dd>
            </div>
            <div>
                <dt class="text-sm font-medium text-gray-500">Description</dt>
                <dd class="mt-1 text-sm text-gray-900">{{ $category->description }}</dd>
            </div>
        </dl>

        <div class="mt-6 flex items-center gap-3">
            <a href="{{ route('admin.categories.edit', $category) }}" class="rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
                Edit
            </a>
            <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="rounded-lg border border-red-300 px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-50">
                    Delete
                </button>
            </form>
            <a href="{{ route('admin.categories.index') }}" class="text-sm text-gray-500 hover:underline">Back to list</a>
        </div>
    </div>
@endsection
