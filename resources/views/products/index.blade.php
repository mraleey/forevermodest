
@extends('frontend.layouts.main')

@section('title', 'All Orders')

@section('main-container')
    <div class="container py-5">
        <h2 class="mb-4 text-center">All Orders</h2>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Orders Table --}}
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
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
                            <td>
                                <span class="badge bg-{{ $order->payment_method === 'cod' ? 'secondary' : 'success' }}">
                                    {{ strtoupper($order->payment_method) }}
                                </span>
                            </td>
                            <td>{{ $order->created_at->format('d M Y h:i A') }}</td>
                            <td>
                                <a href="{{ route('view.orders.show', $order->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa-solid fa-eye"></i> View
                                </a>
                                <form method="POST" action="{{ route('view.orders.delete', $order->id) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this order?')">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">No orders found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    .table {
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    .table th, .table td {
        vertical-align: middle;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
        transition: all 0.3s ease;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-danger {
        transition: all 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .badge {
        font-size: 0.9rem;
        padding: 0.4em 0.6em;
    }

    .alert-dismissible .btn-close {
        position: absolute;
        top: 0.75rem;
        right: 1rem;
    }
</style>