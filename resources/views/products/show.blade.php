@extends('frontend.layouts.main')

@section('title', 'Order Details')

@section('main-container')
    <div class="container py-5">
        <h2 class="mb-4 text-center">Order #{{ $order->id }} Details</h2>

        {{-- Customer Information --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-primary text-white">
                <strong>Customer Information</strong>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $order->first_name }} {{ $order->last_name ?? '' }}</p>
                <p><strong>Email:</strong> <a href="mailto:{{ $order->email }}">{{ $order->email }}</a></p>
                <p><strong>Phone:</strong> <a href="tel:{{ $order->phone }}">{{ $order->phone }}</a></p>
                <p>
                    <strong>Address:</strong>
                    {{ $order->address }}, {{ $order->city }},
                    {{ $order->state ?? '' }}, {{ $order->country }} - {{ $order->zip }}
                </p>
            </div>
        </div>

        {{-- Order Items --}}
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <strong>Order Items</strong>
            </div>
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
                                <td colspan="4" class="text-center text-muted">No items found in this order.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-end bg-light">
                <h5><strong>Total: ${{ number_format($order->total_price, 2) }}</strong></h5>
            </div>
        </div>
    </div>
@endsection

<style>
    .card-header {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .card-body p {
        margin-bottom: 0.5rem;
        font-size: 1rem;
    }

    .table th, .table td {
        vertical-align: middle;
    }

    .table th {
        font-weight: bold;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }

    .text-muted {
        color: #6c757d !important;
    }

    .text-center {
        text-align: center !important;
    }

    .text-end {
        text-align: right !important;
    }

    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }
</style>