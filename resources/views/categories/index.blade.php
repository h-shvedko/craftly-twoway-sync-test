@extends('layouts.app')

@section('heading', 'Category')

@section('content')
    <div class="mb-4 flex items-center justify-between">
        <h2 class="text-xl font-bold text-gray-800">All Category</h2>
        <a href="{{ route('admin.categories.create') }}" class="rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
            Create Category
        </a>
    </div>

    @if ($categories->isEmpty())
        {{-- Empty state --}}
        <div class="rounded-lg border border-gray-200 bg-white px-6 py-16 text-center shadow-sm">
            <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-gray-100">
                <svg class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
            </div>
            <h3 class="text-lg font-semibold text-gray-800">No Category yet</h3>
            <p class="mt-1 text-sm text-gray-500">Create your first Category to get started.</p>
            <div class="mt-6">
                <a href="{{ route('admin.categories.create') }}" class="inline-flex items-center rounded-lg px-4 py-2 text-sm font-medium text-white" style="background-color: var(--color-primary-600);">
                    Create Category
                </a>
            </div>
        </div>
    @else
        {{-- Data table --}}
        <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Name</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Slug</th>
                        <th class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Description</th>
                        <th class="px-4 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500" style="background-color: color-mix(in srgb, var(--color-primary-600) 8%, transparent);">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($categories as $category)
                        <tr>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $category->name }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $category->slug }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-sm text-gray-700">{{ $category->description }}</td>
                        <td class="whitespace-nowrap px-4 py-3 text-right text-sm">
                                <a href="{{ route('admin.categories.show', $category) }}" class="hover:underline" style="color: var(--color-primary-600);">View</a>
                                <a href="{{ route('admin.categories.edit', $category) }}" class="ml-3 hover:underline" style="color: var(--color-primary-600);">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $categories->links() }}
        </div>
    @endif
@endsection
