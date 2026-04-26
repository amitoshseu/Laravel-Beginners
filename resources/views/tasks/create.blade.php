@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
<section class="bg-white border rounded p-5">
    <h2 class="text-xl font-semibold">Create Task</h2>

    <form action="{{ route('tasks.store') }}" method="POST" class="mt-4 space-y-4">
        @csrf

        <div>
            <label for="title" class="block mb-1">Task title</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title') }}"
                class="w-full border rounded px-3 py-2"
                placeholder="Example: Finish Laravel homework"
                required
            >
            @error('title')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="due_date" class="block mb-1">Due date (optional)</label>
            <input
                type="date"
                id="due_date"
                name="due_date"
                value="{{ old('due_date') }}"
                class="w-full border rounded px-3 py-2"
            >
            @error('due_date')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-gray-900 text-white px-3 py-2 rounded">
                Save Task
            </button>
            <a href="{{ route('tasks.index') }}" class="bg-gray-200 px-3 py-2 rounded">
                Back to List
            </a>
        </div>
    </form>
</section>
@endsection
