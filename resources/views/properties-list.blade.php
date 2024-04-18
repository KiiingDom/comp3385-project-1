@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1 class="mt-5">Properties List</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($properties as $property)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $property->photo_filename) }}" class="card-img-top" alt="Property Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $property->title }}</h5>
                        <p class="card-text">Location: {{ $property->location }}</p>
                        <p class="card-text">Price: {{ $property->price }}</p>
                        <a href="{{ route('properties.show', ['property_id' => $property->id]) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection