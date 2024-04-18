<!-- resources/views/properties-list.blade.php -->

<h1>Properties List</h1>
@foreach ($properties as $property)
    <div>
        <img src="{{ asset($property->photo_filename) }}" alt="{{ $property->title }}">
        <h2>{{ $property->title }}</h2>
        <p>Location: {{ $property->location }}</p>
        <p>Price: {{ $property->price }}</p>
        <a href="{{ route('properties.show', ['property_id' => $property->id]) }}">View Details</a>
    </div>
@endforeach
