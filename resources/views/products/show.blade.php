@extends('frontend.layouts.main')

@section('title', 'Order Details')

@section('main-container')
    <div class="container py-5">
        <h2 class="mb-4">Order #{{ $order->id }} Details</h2>

        {{-- Customer Information --}}
        <div class="card mb-4">
            <div class="card-header"><strong>Customer Info</strong></div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $order->first_name }} {{ $order->last_name ?? '' }}</p>
                <p><strong>Email:</strong> {{ $order->email }}</p>
                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                <p>
                    <strong>Address:</strong>
                    {{ $order->address }}, {{ $order->city }},
                    {{ $order->state ?? '' }}, {{ $order->country }} - {{ $order->zip }}
                </p>
            </div>
        </div>

        {{-- Order Items --}}
        <div class="card">
            <div class="card-header"><strong>Order Items</strong></div>
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($order->items as $item)
                            <tr>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>${{ number_format($item->price, 2) }}</td>
                                <td>${{ number_format($item->subtotal, 2) }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No items found in this order.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-end">
                <strong>Total: ${{ number_format($order->total_price, 2) }}</strong>
            </div>
        </div>
    </div>
@endsection
