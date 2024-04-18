<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function create()
    {
        return view('properties-form');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'number_of_bedrooms' => 'required|integer',
        'number_of_bathrooms' => 'required|integer',
        'location' => 'required',
        'price' => 'required|numeric',
        'type' => 'required|in:House,Apartment',
        'description' => 'required',
        'photo' => 'required|image',
    ]);

    $photoPath = $request->file('photo')->storeAs('public/property_pictures', $request->file('photo')->hashName());

    $property = new Property();
    $property->title = $validatedData['title'];
    $property->number_of_bedrooms = $validatedData['number_of_bedrooms'];
    $property->number_of_bathrooms = $validatedData['number_of_bathrooms'];
    $property->location = $validatedData['location'];
    $property->price = $validatedData['price'];
    $property->type = $validatedData['type'];
    $property->description = $validatedData['description'];
    $property->photo_filename = str_replace('public/', '', $photoPath); // Remove 'public/' from the path
    $property->save();

    return redirect()->route('properties.index')->with('success', 'Property added successfully');
}


        public function index()
    {
        $properties = Property::all();
        return view('properties-list', ['properties' => $properties]);
    }

    public function show($property_id)
    {
        $property = Property::findOrFail($property_id);
        return view('property-details', ['property' => $property]);
    }

}
