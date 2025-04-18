@extends('layouts.app')
@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6 text-center">Dinner Picker</h1>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        @foreach($categories as $category => $image)
            <a href="{{ route('show', ['category' => $category]) }}" class="block">
                 <div class="border rounded-xl overflow-hidden shadow hover:ring-4 hover:ring-blue-400 transition cursor-pointer">
                     <img src="{{ $image }}" alt="{{ $category }}" class="w-full h-32 object-cover">
                     <div class="p-2 text-center font-semibold">{{ $category }}</div>
                 </div>
            </a>
        @endforeach
    </div>
</div>
@endsection