<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Personal Task Board')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-gray-900 text-white">
        <div class="max-w-4xl mx-auto p-4">
            <h1 class="text-xl font-bold">Personal Task Board</h1>
            <nav class="mt-3 flex flex-wrap gap-2 text-sm">
                <a href="{{ route('home') }}" class="px-3 py-1 rounded {{ request()->routeIs('home') ? 'bg-white text-gray-900' : 'bg-gray-700' }}">Home</a>
                <a href="{{ route('about') }}" class="px-3 py-1 rounded {{ request()->routeIs('about') ? 'bg-white text-gray-900' : 'bg-gray-700' }}">About</a>
                <a href="{{ route('tasks.create') }}" class="px-3 py-1 rounded {{ request()->routeIs('tasks.create') ? 'bg-yellow-300 text-gray-900' : 'bg-gray-700' }}">Create Task</a>
                <a href="{{ route('tasks.index') }}" class="px-3 py-1 rounded {{ request()->routeIs('tasks.index') ? 'bg-yellow-300 text-gray-900' : 'bg-gray-700' }}">Task List</a>
                <a href="{{ route('contact') }}" class="px-3 py-1 rounded {{ request()->routeIs('contact') ? 'bg-white text-gray-900' : 'bg-gray-700' }}">Contact</a>
            </nav>
        </div>
    </header>

    <main class="max-w-4xl mx-auto p-4">
        @yield('content')
    </main>

    <footer class="mt-6 border-t bg-white">
        <div class="max-w-4xl mx-auto p-4 text-sm text-center text-gray-600">
            Beginner Personal Task Board - Built with Laravel Blade
        </div>
    </footer>
</body>
</html>
