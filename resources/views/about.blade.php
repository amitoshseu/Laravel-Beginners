@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="bg-white border rounded p-5">
        <h2 class="text-2xl font-bold">About</h2>
        <p class="mt-3 text-gray-700">
            This Laravel project is a simple Personal Task Board for beginners. It helps you learn
            routing, controllers, migrations, models, and Blade templates in a practical way.
        </p>
        <p class="mt-3 text-gray-700">
            Start with Create Task, then visit Task List to update status and manage your progress.
        </p>
    </section>
@endsection
