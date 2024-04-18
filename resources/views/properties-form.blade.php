@extends('layouts.app')

@section('content')

<h1>Add New Property</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/properties/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="number_of_bedrooms" class="form-label">Number of Bedrooms:</label>
            <input type="number" id="number_of_bedrooms" name="number_of_bedrooms" class="form-control" value="{{ old('number_of_bedrooms') }}">
        </div>

        <div class="mb-3">
            <label for="number_of_bathrooms" class="form-label">Number of Bathrooms:</label>
            <input type="number" id="number_of_bathrooms" name="number_of_bathrooms" class="form-control" value="{{ old('number_of_bathrooms') }}">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" id="location" name="location" class="form-control" value="{{ old('location') }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" id="price" name="price" class="form-control" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <select id="type" name="type" class="form-control">
                <option value="House" {{ old('type') === 'House' ? 'selected' : '' }}>House</option>
                <option value="Apartment" {{ old('type') === 'Apartment' ? 'selected' : '' }}>Apartment</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo:</label>
            <input type="file" id="photo" name="photo" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Press me to add new property</button>
        </div>
    </form>
@endsection
