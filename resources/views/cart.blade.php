@extends('frontend.layouts.main')
@section('title', 'Cart')
@section('main-container')

<div class="container mt-5">
    <h2>Your Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(empty($cart))
        <p>Your cart is empty.</p>
    @else
        <table class="table align-middle">
            <thead>
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
                        <td><img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" width="60" height="60"></td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>Rs. {{ $item['price'] }}</td>
                        <td>Rs. {{ $subtotal }}</td>
                        <td>
                            <form action="{{ route('cart.increment', $id) }}" method="POST" style="display:inline-block">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success">+</button>
                            </form>

                            <form action="{{ route('cart.decrement', $id) }}" method="POST" style="display:inline-block">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">-</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="text-end"><strong>Total:</strong></td>
                    <td colspan="2"><strong>Rs. {{ $total }}</strong></td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
    @endif
</div>

@endsection
