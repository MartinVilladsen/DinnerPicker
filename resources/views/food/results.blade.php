@extends('layouts.app')
@section('content')
    <div class="max-w-5xl mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-6 text-center">
            <span class="text-blue-600">"{{ $category }}"</span>
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($results as $item)
                <div class="bg-white shadow-md rounded-xl overflow-hidden border hover:shadow-lg transition">
                    <div class="p-4 flex">
                        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="w-20 h-20 object-cover rounded">
                        <div class="ml-4 flex-1">
                            <h2 class="text-lg font-semibold">
                                {{ $item['title'] }}
                            </h2>
                            <p class="text-gray-700 mt-1">
                                Price: <span class="font-medium">{{ $item['price'] ?? 'N/A' }}</span> kr
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('home') }}"
                class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Back
            </a>
        </div>
    </div>
@endsection