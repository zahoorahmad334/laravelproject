@extends('layouts.app')

@section('content')
    <h2>Naya Task</h2>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <div class="error">{{ $message }}</div> @enderror

        <label>Description</label>
        <textarea name="description" rows="4">{{ old('description') }}</textarea>

        <button>Save</button>
        <a href="{{ route('tasks.index') }}">Wapis</a>
    </form>
@endsection
