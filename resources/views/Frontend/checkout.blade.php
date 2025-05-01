@extends('frontend.layouts.main')
@section('title', 'Checkout')
@section('main-container')

    <!-- BANNER-SECTION START -->
    <section class="hero-section ev-common-hero"
        style="background-image: url('{{ url('frontend/assets/images/common-banner/shape-1.png') }}');">
    </section>
    <!-- BANNER-SECTION END -->

    <div class="container-fluid">
        <div class="ev-hero-content text-center py-4">
            <h2 class="text-white">Checkout</h2>
            <span><a href="{{ url('index') }}" class="text-white">Home</a> > Checkout</span>
        </div>
    </div>

    <section class="checkout-section py-5">
        <div class="container">
            <div class="row">
                <!-- Billing Information Section -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="checkout-left p-4 border rounded">
                        <ul class="checkout-top d-flex align-items-center justify-content-between mb-3">
                            <li><span>Returning Customer?</span></li>
                            <li><a href="#" class="text-primary">Click Here to Login</a></li>
                        </ul>
                        <div class="checkout-form">
                            <h4 class="mb-4">Your Billing Address</h4>
                            <form method="POST" action="{{ route('checkout.submit') }}">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" name="first_name" class="form-control" placeholder="First Name *"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="tel" name="phone" class="form-control" placeholder="Phone *" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address *"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="country" class="form-control" placeholder="Country *"
                                            required>
                                    </div>
                                    <div class="col-md-12">
                                        <select class="form-select" id="state" name="state" required>
                                            <option value="">Select your Province</option>
                                            <option value="punjab">Punjab</option>
                                            <option value="sindh">Sindh</option>
                                            <option value="kpk">KPK</option>
                                            <option value="balochistan">Balochistan</option>
                                            <option value="gilgit">Gilgit</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="address" class="form-control" placeholder="Address *"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="city" class="form-control" placeholder="City / Town *"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="zip" class="form-control" placeholder="Zip Code *"
                                            required>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary w-100">Place Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Review Section -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="order-review-wrapper p-4 border rounded">
                        <h4 class="coupon-title mb-4">Coupon Code</h4>
                        <form class="coupon-code d-flex align-items-center mb-4">
                            <input type="text" id="coupon" name="coupon" class="form-control me-2"
                                placeholder="Enter coupon code">
                            <button type="submit" class="btn btn-outline-primary">Apply Coupon</button>
                        </form>

                        <div class="ev-order-review">
                            <h4 class="order-title mb-4">Your Order</h4>
                            <div class="ev-shop-table">
                                <ul class="order-price d-flex align-items-center justify-content-between mb-3">
                                    <li>
                                        <h6>Item</h6>
                                    </li>
                                    <li>
                                        <h6>Price</h6>
                                    </li>
                                </ul>

                                <!-- Cart Items Loop -->
                                @php $total = 0;
                                $shipping = 20; @endphp
                                @foreach(session('cart', []) as $id => $item)
                                                            @php 
                                                                                                $subtotal = $item['price'] * $item['quantity'];
                                                                $total += $subtotal;
                                                            @endphp
                                                            <ul class="product-name-price d-flex align-items-center justify-content-between mb-2">
                                                                    <li>{{ $item['name'] }}</li>
                                                                    <li>Rs. {{ number_format($item['price'], 2) }}</li>
                                                                </ul>
                                @endforeach

                                <div class="cart-item">
                                    <ul class="product-name-price product-subtotal d-flex align-items-center justify-content-between mb-2">

                                        <li>Subtotal</li>
                                        <li>Rs. {{ number_format($total, 2) }}</li>
                                    </ul>
                                    <ul class="product-name-price product-subtotal d-flex align-items-center justify-content-between mb-2">
                                        <li>Shipping (Standard)</li>
                                        <li>Rs. {{ number_format($shipping, 2) }}</li>
                                    </ul>
                                </div>

                                <ul class="product-total d-flex align-items-center justify-content-between mt-3">
                                    <li><strong>Total</strong></li>
                                    <li><strong>Rs. {{ number_format($total + $shipping, 2) }}</strong></li>
                                </ul>
                            </div>

                            <!-- Payment Methods -->
                            <div class="checkout-payment mt-4">
                                <h5 class="mb-3">Payment Method</h5>
                                <div class="form-check">
                                    <input type="radio" id="cod" name="payment_method" class="form-check-input" checked>
                                    <label for="cod" class="form-check-label">Cash On Delivery</label>
                                    <p class="text-muted small">Pay on delivery.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

<style>
    .checkout-section {
        background-
   color: #f9f9f9;
    }

    .checkout-left, .order-review-wrapper {
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

    .btn-outline-primary {
        transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: #ff
   f;
    }

    .form-control, .form-select {
        border-radius: 0
   .25rem;
    }

    .form-control:focus, .form-select:focus {
        box-shadow: none;
        border-color: #007bff;
    }
</style>