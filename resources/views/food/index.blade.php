@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Find Related Foods</h1>
    <form method="POST" action="{{ route('search') }}" class="space-y-4">
        @csrf
        <label for="category" class="block font-medium">Choose a category:</label>
        <select name="category" id="category" class="w-full border p-2 rounded">
            @foreach($categories as $category)
                <option value="{{ $category }}">{{ $category }}</option>
            @endforeach
        </select>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
    </form>
</div>
@endsection
