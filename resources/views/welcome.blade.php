@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<section class="bg-white border rounded p-5">
    <h2 class="text-2xl font-bold">Welcome</h2>
    <p class="mt-2 text-gray-700">This is a simple task board for beginners.</p>

    <div class="mt-4 flex gap-2">
        <a href="{{ route('tasks.create') }}" class="bg-gray-900 text-white px-3 py-2 rounded">Create Task</a>
        <a href="{{ route('tasks.index') }}" class="bg-gray-200 px-3 py-2 rounded">Task List</a>
    </div>
</section>

<section class="mt-4 bg-white border rounded p-5">
    <h3 class="text-lg font-semibold">How to use</h3>
    <ul class="list-disc ml-5 mt-2 text-gray-700">
        <li>Create a task</li>
        <li>Open task list</li>
        <li>Mark done or delete</li>
    </ul>
</section>
@endsection
