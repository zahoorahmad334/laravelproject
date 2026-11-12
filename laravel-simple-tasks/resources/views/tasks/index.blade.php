@extends('layouts.app')

@section('content')
    <p><a class="btn" href="{{ route('tasks.create') }}">+ Naya Task</a></p>

    @forelse ($tasks as $task)
        <div class="task">
            <div>
                <strong class="{{ $task->is_done ? 'done' : '' }}">{{ $task->title }}</strong><br>
                <small>{{ $task->description }}</small>
            </div>
            <div>
                <form class="inline" method="POST" action="{{ route('tasks.toggle', $task) }}">
                    @csrf @method('PATCH')
                    <button>{{ $task->is_done ? 'Undo' : 'Done' }}</button>
                </form>
                <a class="btn" href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form class="inline" method="POST" action="{{ route('tasks.destroy', $task) }}" onsubmit="return confirm('Pakka delete karna hai?')">
                    @csrf @method('DELETE')
                    <button class="danger">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p>Abhi koi task nahi hai.</p>
    @endforelse
@endsection
