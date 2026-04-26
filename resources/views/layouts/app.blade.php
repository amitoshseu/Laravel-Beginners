<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 text-gray-900 font-sans antialiased">
        <header class="bg-white shadow-md py-4">
            <div class="container mx-auto flex flex-wrap items-center justify-between gap-3 px-6">
                <a href="{{ route('home') }}" class="text-xl font-bold">Brand</a>

                <nav>
                    <ul class="flex flex-wrap items-center gap-4">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-500">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-500">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a></li>
                        <li><a href="{{ route('tasks.create') }}" class="hover:text-blue-500">Create Task</a></li>
                        <li><a href="{{ route('tasks.index') }}" class="hover:text-blue-500">Task List</a></li>
                    </ul>
                </nav>

                <div class="flex items-center gap-3 text-sm">
                    @auth
                        <span class="text-gray-600">{{ Auth::user()->name }}</span>
                        <a href="{{ route('profile.edit') }}" class="hover:text-blue-500">Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-gray-900 text-white px-3 py-1 rounded">Log Out</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-blue-500">Log in</a>
                        <a href="{{ route('register') }}" class="hover:text-blue-500">Register</a>
                    @endauth
                </div>
            </div>
        </header>

        @isset($header)
            <section class="bg-white border-t">
                <div class="container mx-auto px-6 py-4">
                    {{ $header }}
                </div>
            </section>
        @endisset

        <main class="container mx-auto mt-8 px-6">
            @isset($slot)
                {{ $slot }}
            @else
                @yield('content')
            @endisset
        </main>

        <footer class="mt-10 py-6 bg-white text-center shadow-md">
            <p class="text-gray-600">&copy; 2026 Brand. All rights reserved.</p>
        </footer>
    </body>
</html>
