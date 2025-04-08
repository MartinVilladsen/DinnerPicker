@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">Related Foods for: "{{ $category }}"</h1>

    @if(!empty($results))
        <ul class="space-y-2">
            @foreach($results as $item)
                <li class="p-4 bg-gray-100 rounded shadow">
                    <strong>{{ $item['title'] ?? 'Unknown item' }}</strong>
                    <br>
                    <span>{{ $item['description'] ?? 'N/A' }}</span>
                </li>
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif

    <a href="{{ route('home') }}" class="text-blue-500 mt-4 inline-block">← Back</a>
</div>
@endsection
