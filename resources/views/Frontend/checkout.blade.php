@extends('frontend.layouts.main')
@section('title', 'Checkout')
@section('main-container')

    <!-- BANNER-SECTION START -->
     <!-- BANNER-SECTION START -->
     <section class="hero-section ev-common-hero"
        style="background-image: url('{{ url('frontend/assets/images/common-banner/shape-1.png') }}');">
    </section>
    <!-- BANNER-SECTION END -->

    <div class="container-fluid">
        <div class="ev-hero-content">
            <h2 style="color: white">Checkout</h2>
            <span><a href="{{ url('index') }}">Home</a> > Checkout</span>
        </div>
    </div>
    <!-- BANNER-SECTION END -->

    <section class="checkout-section">
        <div class="container">
            <div class="row">
                <!-- Billing Information Section -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="checkout-left">
                        <ul class="checkout-top d-flex align-items-center">
                            <li><span>Returning Customer ?</span></li>
                            <li><a href="#">Click Here to Login</a></li>
                        </ul>
                        <div class="checkout-form">
                            <h4>Your Billing Address</h4>
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
                                <div class="ev-form-grid">
                                    <input type="text" name="first_name" placeholder="First Name *" required>
                                    <input type="text" name="last_name" placeholder="Last Name *">
                                </div>
                                <input type="tel" name="phone" placeholder="Phone *" required>
                                <div class="ev-form-grid">
                                    <input type="email" name="email" required placeholder="Email Address *">
                                    <input type="text" name="country" placeholder="Country *" required>
                                </div>
                                <div class="select-wrapper d-flex align-items-center justify-content-between">
                                    <select class="select-option" id="state" name="state">
                                        <option value="">Select your Province</option>
                                        <option value="punjab">Punjab</option>
                                        <option value="sindh">Sindh</option>
                                        <option value="kpk">KPK</option>
                                        <option value="balochistan">Balochistan</option>
                                        <option value="gilgit">Gilgit</option>
                                    </select>
                                    <span><i class="fa-solid fa-angle-down"></i></span>
                                </div>
                                <input type="text" name="address" placeholder="Address *" required>
                                <input type="text" name="city" placeholder="City / Town *" required>
                                <div class="ev-form-grid">
                                    <input type="text" name="zip" placeholder="Zip Code *" required>
                                </div>

                                <div class="checkbox-form">
                                    <div class="check-box d-flex align-content-center ">
                                        <input type="checkbox" id="myCheckbox1" name="create_account" value="1">
                                        <label for="myCheckbox1">Create Account ?</label>
                                    </div>
                                    <input class="check-password" type="password" name="password"
                                        placeholder="Account Password *" required>

                                    <div class="check-box d-flex align-content-center ">
                                        <input type="checkbox" id="myCheckbox2" name="ship_to_different_address" value="1">
                                        <label for="myCheckbox2">Ship to Different Address ?</label>
                                    </div>
                                    <textarea class="check-message" id="message" name="order_note"
                                        placeholder="Order Note"></textarea>
                                </div>

                                <div class="common-btn">
                                    <button type="submit">Place Order</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Review Section -->
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="order-review-wrapper">
                        <h4 class="coupon-title">Coupon Code</h4>
                        <div class="checkout-review-order">
                            <form class="coupon-code d-flex align-items-center">
                                <input type="text" id="coupon" name="coupon" placeholder="Enter coupon code">
                                <div class="common-btn coupon-btn">
                                    <button type="submit">Apply Coupon</button>
                                </div>
                            </form>

                            <div class="ev-order-review">
                                <h4 class="order-title">Your Order</h4>
                                <div class="ev-shop-table">
                                    <ul class="order-price d-flex align-items-center justify-content-between">
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
                                                                    @php $subtotal = $item['price'] * $item['quantity'];
                                                                    $total += $subtotal; @endphp
                                                                    <ul class="product-name-price d-flex align-items-center justify-content-between">
                                                                        <li><span>{{ $item['name'] }}</span></li>
                                                                        <li><span>Rs. {{ $item['price'] }}</span></li>
                                                                    </ul>
                                    @endforeach

                                    <div class="cart-item">
                                        <ul
                                            class="product-name-price product-subtotal d-flex align-items-center justify-content-between">
                                            <li><span>Subtotal</span></li>
                                            <li><span>Rs. {{ $total }}</span></li>
                                        </ul>
                                        <ul
                                            class="product-name-price product-subtotal d-flex align-items-center justify-content-between">
                                            <li><span>Shipping (Standard)</span></li>
                                            <li><span>Rs. {{ $shipping }}</span></li>
                                        </ul>
                                    </div>

                                    <ul class="product-total d-flex align-items-center justify-content-between">
                                        <li><span>Total</span></li>
                                        <li><span>Rs. {{ $total + $shipping }}</span></li>
                                    </ul>
                                </div>

                                <!-- Payment Methods -->
                                <div class="checkout-payment">
                                    <form class="checkout-radio">
                                        <ul class="radio-items">
                                            <li class="radio-item">
                                                <span>
                                                    <input type="radio" id="terms_conditions" name="payment_method" checked>
                                                    <label for="terms_conditions">Terms and Conditions</label>
                                                </span>
                                                <div class="radio-text">
                                                    <p>By selecting this, you agree to the terms and conditions.</p>
                                                </div>
                                            </li>
                                            <li class="radio-item">
                                                <span>
                                                    <input type="radio" id="payment_cheque" name="payment_method">
                                                    <label for="payment_cheque">Payment by Cheque</label>
                                                </span>
                                                <div class="radio-text">
                                                    <p>Pay using cheque.</p>
                                                </div>
                                            </li>
                                            <li class="radio-item">
                                                <span>
                                                    <input type="radio" id="cod" name="payment_method">
                                                    <label for="cod">Cash On Delivery</label>
                                                </span>
                                                <div class="radio-text">
                                                    <p>Pay on delivery.</p>
                                                </div>
                                            </li>

                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection