<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    // Display all products (Updated with Search Support)
    public function index(Request $request)
{
    $query = Collection::query();

    if ($request->filled('search')) {
        $search = $request->search;
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%')
              ->orWhere('description', 'like', '%' . $search . '%');
        });
    }

    if ($request->filled('gender') && $request->gender !== 'all') {
        $query->where('gender', $request->gender);
    }

    $collections = $query->paginate(12)->appends($request->query());

    return view('collection', compact('collections'));
}

    

    // Show form to add new product
    public function create()
    {
        return view('add-collection');
    }

    // Store new product in database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Collection::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('collections.index')->with('success', 'Product added successfully.');
    }

    public function show($id)
    {
        $product = Collection::findOrFail($id);
        return view('show', compact('product'));
    }
}
