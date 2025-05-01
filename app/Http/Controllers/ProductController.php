<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class ProductController extends Controller
{
    public function collection(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $collections = Collection::where('name', 'LIKE', '%' . $query . '%')
                ->orWhere('description', 'LIKE', '%' . $query . '%')
                ->paginate(12);
        } else {
            $collections = Collection::paginate(12);
        }

        return view('collection', compact('collections'));
    }    


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price' => 'required|numeric',
            'gender' => 'required|in:men,women,kids,accessories,beauty,shoes,jewellery',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
        }

        Collection::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'gender' => $request->gender,
            'image' => $path,
        ]);

        return redirect()->route('collection')->with('success', 'Product added successfully.');
    }


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
}
