<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $paymentMethod = $request->input('payment_method');
        $cart = $request->input('cart');
        $totalAmount = $request->input('total_amount');

        // You can save the order into database here
        // Example only:
        /*
        $order = new Order();
        $order->user_id = auth()->id();
        $order->payment_method = $paymentMethod;
        $order->total_amount = $totalAmount;
        $order->cart_items = json_encode($cart);
        $order->status = 'pending';
        $order->save();
        */

        // Return success response
        return response()->json(['success' => true, 'message' => 'Order placed successfully.']);
    }

    public function index()
    {
        $orders = Order::with('items')->orderByDesc('created_at')->get();
        return view('products.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('items')->findOrFail($id);
        return view('products.show', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->items()->delete(); // Delete order items first
        $order->delete();

        return redirect()->route('view.orders')->with('success', 'Order deleted successfully.');
    }
}
