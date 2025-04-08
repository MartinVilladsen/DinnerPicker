@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-5 text-center">
            Often bought with
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @forelse($results as $item)
                <div class="bg-white shadow-md rounded-xl overflow-hidden border transition">
                    <div class="p-4 flex">
                         <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" class="w-20 h-20 object-cover rounded">
                         <div class="ml-4 flex-1">
                             <h2 class="text-lg font-semibold">
                                 {{ ucfirst($item['title']) }}
                             </h2>
                             <p class="text-gray-700 mt-1">
                                 Price: <span class="font-medium">{{ $item['price'] }}</span> kr
                             </p>
                         </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500 col-span-full">No "bought together" suggestions found for this item.</p>
            @endforelse
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('index') }}"
               class="inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition mr-4">
                Back to Categories
            </a>
            <button onclick="window.history.back()"
                    class="inline-block bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600 transition">
                Back to Results
            </button>
        </div>
    </div>
@endsection