@extends('frontend.layouts.main')
@section('title', 'Cart')
@section('main-container')

<div class="container mt-5">
    <h2 class="mb-4 text-center">Your Cart</h2>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(empty($cart))
        <div class="text-center">
            <p class="text-muted">Your cart is empty.</p>
            <a href="{{ route('collections.index') }}" class="btn btn-outline-primary">Continue Shopping</a>
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach($cart as $id => $item)
                        @php 
                            $subtotal = $item['price'] * $item['quantity']; 
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" class="img-thumbnail" width="80" height="80">
                            </td>
                            <td>{{ $item['name'] }}</td>
                            <td class="text-center">{{ $item['quantity'] }}</td>
                            <td>Rs. {{ number_format($item['price'], 2) }}</td>
                            <td>Rs. {{ number_format($subtotal, 2) }}</td>
                            <td class="text-center">
                                <form action="{{ route('cart.increment', $id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-success">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                </form>

                                <form action="{{ route('cart.decrement', $id) }}" method="POST" style="display:inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" class="text-end"><strong>Total:</strong></td>
                        <td colspan="2"><strong>Rs. {{ number_format($total, 2) }}</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('collections.index') }}" class="btn btn-outline-secondary">
                <i class="fa-solid fa-arrow-left"></i> Continue Shopping
            </a>
            <a href="{{ route('checkout') }}" class="btn btn-primary">
                Proceed to Checkout <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    @endif
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

    .btn-outline-success, .btn-outline-danger {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .btn-outline-success:hover {
        background-color: #28a745;
        color: #fff;
    }

    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-outline-secondary {
        transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: #fff;
    }
</style>