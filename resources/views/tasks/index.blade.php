@extends('layouts.app')

@section('title', 'Task List')

@section('content')
<section class="bg-white border rounded p-5">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">My Task List</h2>
            <div class="flex items-center gap-2">
                <span class="text-sm text-gray-600">{{ $tasks->count() }}</span>
                <a href="{{ route('tasks.create') }}" class="bg-gray-900 text-white px-3 py-2 rounded text-sm">
                    + New Task
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="mb-4 bg-green-100 text-green-800 px-3 py-2 rounded text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if($tasks->isEmpty())
            <div class="border border-dashed p-4 text-center text-gray-600 rounded">
                No tasks yet. Add your first one from the form.
            </div>
        @else
            <div class="space-y-3">
                @foreach($tasks as $task)
                    <article class="border rounded p-4 {{ $task->is_done ? 'bg-gray-50' : 'bg-white' }}">
                        <div>
                            <h3 class="font-medium {{ $task->is_done ? 'line-through text-gray-500' : 'text-gray-800' }}">
                                {{ $task->title }}
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">
                                Due: {{ $task->due_date ? $task->due_date->format('M d, Y') : 'No due date' }}
                            </p>
                        </div>

                        <div class="flex gap-2 mt-3">
                            <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="px-3 py-2 rounded text-sm {{ $task->is_done ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800' }}">
                                    {{ $task->is_done ? 'Mark Pending' : 'Mark Done' }}
                                </button>
                            </form>

                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Delete this task?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-2 rounded text-sm bg-red-100 text-red-700">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
</section>
@endsection
