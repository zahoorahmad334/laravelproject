@extends('layouts.app')

@section('content')
    <h2>Task Edit Karein</h2>
    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf @method('PUT')
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title', $task->title) }}">
        @error('title') <div class="error">{{ $message }}</div> @enderror

        <label>Description</label>
        <textarea name="description" rows="4">{{ old('description', $task->description) }}</textarea>

        <button>Update</button>
        <a href="{{ route('tasks.index') }}">Wapis</a>
    </form>
@endsection
