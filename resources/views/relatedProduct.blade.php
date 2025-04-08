<ul>
    @foreach($suggestedProduct as $item)
        <li>{{ $item['title'] ?? 'No name' }}</li>
    @endforeach

    
</ul>