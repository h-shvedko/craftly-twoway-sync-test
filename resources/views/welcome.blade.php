<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testBlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --color-primary: {{ $colorPrimary ?? '#3B82F6' }};
            --color-secondary: {{ $colorSecondary ?? '#6366F1' }};
            --color-accent: {{ $colorAccent ?? '#F59E0B' }};
            --color-background: {{ $colorBackground ?? '#FFFFFF' }};
            --color-text: {{ $colorText ?? '#1F2937' }};
            --color-surface: {{ $colorSurface ?? '#FFFFFF' }};

        }
    </style>
</head>
<body class="min-h-screen" style="background-color: var(--color-background); color: var(--color-text);">
<nav class="bg-white border-b border-gray-200 sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Brand -->
            <div class="flex-shrink-0">
                <a href="/" class="text-gray-900 text-xl font-bold tracking-tight">testBlog</a>
            </div>

            <!-- Desktop links -->
            <div class="hidden md:flex md:items-center md:space-x-6">
                <div class="flex items-center space-x-4">
                    <a href="/home" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Home</a>
                    <a href="/blog" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Blog</a>
                    <a href="/about" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">About</a>
                    <a href="/contact" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Contact</a>
                </div>

                <!-- Auth links -->
                <div class="flex items-center space-x-3 ml-6 pl-6 border-l border-gray-200">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors">
                            Dashboard
                        </a>
                    @endauth
                    @guest
                        <a href="{{ url('/login') }}" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Sign In</a>
                        <a href="{{ url('/register') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors">
                            Register
                        </a>
                    @endguest
                </div>
            </div>

            <!-- Mobile toggle -->
            <div class="md:hidden">
                <button @click="mobileOpen = !mobileOpen" class="text-gray-600 hover:text-gray-900 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" aria-label="Toggle menu">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="mobileOpen" x-transition class="md:hidden border-t border-gray-200">
        <div class="px-4 py-3 space-y-2">
                    <a href="/home" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Home</a>
                    <a href="/blog" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Blog</a>
                    <a href="/about" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">About</a>
                    <a href="/contact" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Contact</a>

            @auth
                <a href="{{ url('/dashboard') }}" class="block px-3 py-2 rounded-md text-sm font-medium bg-blue-600 text-white text-center">Dashboard</a>
            @endauth
            @guest
                <a href="{{ url('/login') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-gray-900">Sign In</a>
                <a href="{{ url('/register') }}" class="block px-3 py-2 rounded-md text-sm font-medium bg-blue-600 text-white text-center">Register</a>
            @endguest
        </div>
    </div>
</nav>
<section class="relative overflow-hidden bg-gradient-to-b from-[var(--color-gradient-from,#3B82F6)]/10 to-white">
    <!-- Decorative blobs -->
    <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-[var(--color-primary,#3B82F6)]/10 blur-3xl"></div>
    <div class="absolute -bottom-24 -left-24 w-72 h-72 rounded-full bg-[var(--color-accent,#6366F1)]/10 blur-3xl"></div>
    <style>@keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }</style>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32 lg:py-40 text-center">
        <h1 class="text-gray-900 text-[clamp(2.25rem,5vw,3.75rem)] font-extrabold tracking-tight leading-[1.1]" style="animation: fadeInUp 0.6s ease-out both;">
            Welcome to <span class="bg-gradient-to-r from-[var(--color-primary,#3B82F6)] to-[var(--color-accent,#6366F1)] bg-clip-text text-transparent">testBlog</span>
        </h1>
        <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-lg sm:text-xl leading-relaxed" style="animation: fadeInUp 0.6s ease-out 0.15s both;">
            Your source for the latest technology news and insights
        </p>
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4" style="animation: fadeInUp 0.6s ease-out 0.3s both;">
            <a href="/register" class="inline-flex items-center px-8 py-3.5 text-base font-semibold rounded-xl bg-[var(--color-primary,#3B82F6)] text-white shadow-lg shadow-[var(--color-primary,#3B82F6)]/25 hover:brightness-110 transition-all">
                Get Started
            </a>
            <a href="/login" class="inline-flex items-center px-8 py-3.5 text-base font-semibold rounded-xl border border-gray-300 text-gray-700 hover:bg-gray-50 transition-colors">
                Sign In
            </a>
        </div>
    </div>
</section>
<section class="bg-gray-50 py-20 sm:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-gray-900 text-3xl sm:text-4xl font-bold tracking-tight">Everything you need</h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-lg">Powerful features to help you manage, grow, and succeed.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="relative rounded-2xl border p-6 bg-white border-gray-200 transition-shadow hover:shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-blue-500/10 text-blue-500 mb-4">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>
                </div>
                <h3 class="text-gray-900 text-lg font-semibold">Post</h3>
                <p class="text-gray-500 mt-2 text-sm leading-relaxed">Manage and organize your Post with ease.</p>
            </div>
            <div class="relative rounded-2xl border p-6 bg-white border-gray-200 transition-shadow hover:shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-blue-500/10 text-blue-500 mb-4">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" /></svg>
                </div>
                <h3 class="text-gray-900 text-lg font-semibold">Category</h3>
                <p class="text-gray-500 mt-2 text-sm leading-relaxed">Manage and organize your Category with ease.</p>
            </div>
            <div class="relative rounded-2xl border p-6 bg-white border-gray-200 transition-shadow hover:shadow-lg">
                <div class="flex items-center justify-center w-12 h-12 rounded-xl bg-blue-500/10 text-blue-500 mb-4">
                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" /></svg>
                </div>
                <h3 class="text-gray-900 text-lg font-semibold">Tag</h3>
                <p class="text-gray-500 mt-2 text-sm leading-relaxed">Manage and organize your Tag with ease.</p>
            </div>
        </div>
    </div>
</section>
<section class="relative bg-blue-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 text-center">
        <h2 class="text-white text-3xl sm:text-4xl font-bold tracking-tight">
            Ready to get started?
        </h2>
        <p class="text-blue-100 mt-4 text-lg leading-relaxed max-w-2xl mx-auto">
            Join testBlog today and experience a better way to manage your workflow. No credit card required.
        </p>
        <div class="mt-8">
            <a href="/register" class="inline-flex items-center px-8 py-3.5 text-base font-semibold rounded-xl bg-white text-blue-600 shadow-lg hover:bg-blue-50 transition-colors">
                Create Free Account
            </a>
        </div>
    </div>
</section>
<footer class="bg-white border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center space-x-6">
                <a href="/" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Home</a>
                <a href="{{ url('/login') }}" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Login</a>
                <a href="{{ url('/register') }}" class="text-gray-600 hover:text-gray-900 text-sm font-medium transition-colors">Register</a>
            </div>
            <div class="flex flex-col items-center md:items-end gap-1">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} testBlog. All rights reserved.</p>
                <p class="text-gray-500 text-xs">Built with <a href="https://craftly.dev" class="text-blue-500 hover:underline" target="_blank" rel="noopener">Craftly</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>