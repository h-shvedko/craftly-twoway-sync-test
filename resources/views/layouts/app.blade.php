<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('heading', 'Dashboard') &mdash; testBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --color-primary: #3B82F6;
            --color-primary-hover: #2563EB;
            --color-bg: #FFFFFF;
            --color-text: #1F2937;
            --color-surface: #FFFFFF;
        }
    </style>
</head>
<body class="bg-white text-gray-900" x-data="{ sidebarOpen: false }">
    <div class="min-h-screen flex">
        <!-- Sidebar overlay (mobile) -->
        <div x-show="sidebarOpen" @click="sidebarOpen = false"
             class="fixed inset-0 z-30 bg-black/50 lg:hidden" x-transition.opacity></div>

        <!-- Sidebar -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
               class="fixed inset-y-0 left-0 z-40 w-64 bg-gray-50 border-r border-gray-200 transform transition-transform lg:translate-x-0 lg:static lg:inset-auto lg:z-auto">
            <div class="flex items-center h-16 px-6 border-b border-gray-200">
                <a href="/" class="text-gray-900 text-lg font-bold tracking-tight">testBlog</a>
            </div>
            <nav class="p-4 space-y-1">
                <a href="{{ url('/dashboard') }}"
                   class="flex items-center gap-3 px-3 py-2 rounded-lg text-sm font-medium {{ request()->is('dashboard') ? 'bg-blue-600 text-white' : 'text-gray-600 hover:text-gray-900' }} transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
                    Dashboard
                </a>
            </nav>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Top header -->
            <header class="sticky top-0 z-20 bg-white border-b border-gray-200 h-16 flex items-center px-4 sm:px-6 lg:px-8">
                <button @click="sidebarOpen = true" class="lg:hidden mr-4 text-gray-600 hover:text-gray-900 p-1.5 rounded-md" aria-label="Open sidebar">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
                </button>

                <h1 class="text-gray-900 text-lg font-semibold">@yield('heading', 'Dashboard')</h1>

                <div class="ml-auto flex items-center space-x-4">
                    @auth
                        <span class="text-gray-500 text-sm hidden sm:inline">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Logout</button>
                        </form>
                    @endauth
                </div>
            </header>

            <!-- Page content -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>
        </div>
    </div>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>