<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function submitCheckout(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
        ]);

        $cart = session('cart', []);
        if (empty($cart)) {
            return back()->withErrors(['cart' => 'Your cart is empty.']);
        }

        $total = collect($cart)->reduce(function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        $shipping = 20;
        $totalWithShipping = $total + $shipping;

        $order = Order::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'country' => $request->country,
            'state' => $request->state,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'create_account' => $request->has('create_account'),
            'password' => $request->has('create_account') ? Hash::make($request->password) : null,
            'ship_to_different_address' => $request->has('ship_to_different_address'),
            'order_note' => $request->order_note,
            'total_price' => $totalWithShipping,
            'payment_method' => $request->payment_method ?? 'cod',
        ]);

        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_name' => $item['name'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'subtotal' => $item['price'] * $item['quantity'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('checkout.success')->with('success', 'Order placed successfully!');
    }

    public function success()
    {
        return view('checkout-success');
    }
}
