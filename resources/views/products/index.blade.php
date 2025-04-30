@extends('frontend.layouts.main')

@section('title', 'All Orders')

@section('main-container')
    <div class="container py-5">
        <h2 class="mb-4">All Orders</h2>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Orders Table --}}
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Customer</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Placed On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                        <td>${{ number_format($order->total_price, 2) }}</td>
                        <td>{{ strtoupper($order->payment_method) }}</td>
                        <td>{{ $order->created_at->format('d M Y h:i A') }}</td>
                        <td>
                            <a href="{{ route('view.orders.show', $order->id) }}" class="btn btn-info btn-sm">View</a>
                            <form method="POST" action="{{ route('view.orders.delete', $order->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this order?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center">No orders found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
