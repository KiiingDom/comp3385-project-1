<!-- resources/views/property-details.blade.php -->

@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ url('/css/app.css') }}" /> 

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $property->photo_filename ) }}" class="img-fluid" alt="Image">
        </div>
        <div class="col-md-8">
            <h1 class="mt-5">{{ $property->title }}</h1>
            <p class="mt-3">Description: {{ $property->description }}</p>
            <p>Number of Bedrooms: {{ $property->number_of_bedrooms }}</p>
            <p>Number of Bathrooms: {{ $property->number_of_bathrooms }}</p>
            <p>Location: {{ $property->location }}</p>
            <p class="rounded-blue">Price: {{ $property->price }}</p>
            <p class="rounded-yellow">Type: {{ $property->type }}</p>
            <button class="btn btn-primary mt-3">Email Realtor</button>
        </div>
    </div>
</div>
@endsection