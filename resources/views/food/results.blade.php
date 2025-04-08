@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-6 text-center">
            <span class="text-blue-600">"{{ $category }}"</span>
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse($results as $item)
                <a href="{{ route('boughtTogether.show', ['prod_id' => $item['prod_id']]) }}" class="block group">
                    <div class="bg-white shadow-md rounded-xl overflow-hidden border group-hover:shadow-lg group-hover:ring-2 group-hover:ring-blue-500 transition">
                        <div class="p-4 flex">
                            <img src="{{ $item['img'] ?? '/placeholder.jpg' }}" alt="{{ $item['title'] ?? 'Product Image' }}" class="w-20 h-20 object-cover rounded">
                            <div class="ml-4 flex-1">
                                <h2 class="text-lg font-semibold">
                                    {{ $item['title'] }}
                                </h2>
                                <p class="text-gray-700 mt-1">
                                    Price: <span class="font-medium">{{ $item['price'] }}</span> kr
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <p class="text-center text-gray-500 col-span-full">No results found for this category.</p>
            @endforelse
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('index') }}"
               class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">
                Back to Categories
            </a>
        </div>
    </div>
@endsection