<?php

namespace App\Http\Controllers;

use App\Models\LikedProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikedProductController extends Controller
{
    public function index()
    {
        $liked = LikedProduct::with('product')->where('user_id', Auth::id())->get();
        return view('liked_products', compact('liked'));
    }

    public function store(Request $request, $productId)
    {
        $user = Auth::user();
    
        if (!$user) {
            return redirect()->route('login')->with('error', 'You must be logged in.');
        }
    
        $product = Product::find($productId);
        if (!$product) {
            return back()->with('error', 'Product not found.');
        }
    
        $exists = LikedProduct::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->exists();
    
        if (!$exists) {
            LikedProduct::create([
                'user_id' => $user->id,
                'product_id' => $productId,
            ]);
        }
    
        return redirect()->route('liked-products.index')->with('success', 'Product added to liked list!');
    }
    

}
