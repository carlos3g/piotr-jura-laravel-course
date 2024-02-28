@extends('layouts.app')

@section('title', 'Show Task')

@section('content')
    <nav class="mb-4">
        <a class="link" href="{{ route('tasks.create') }}">Add Task!</a>
    </nav>

    @forelse ($tasks as $task)
        <div>
            <a @class(['line-through' => $task->completed]) href="{{ route('tasks.show', ['task' => $task]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
