<!-- resources/views/property-details.blade.php -->

<h1>{{ $property->title }}</h1>
<img src="{{ asset($property->photo_filename) }}" alt="{{ $property->title }}">
<p>Description: {{ $property->description }}</p>
<p>Number of Bedrooms: {{ $property->number_of_bedrooms }}</p>
<p>Number of Bathrooms: {{ $property->number_of_bathrooms }}</p>
<p>Location: {{ $property->location }}</p>
<p>Price: {{ $property->price }}</p>
<p>Type: {{ $property->type }}</p>
