@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

<!-- BANNER-SECTION START -->
<section class="hero-section ev-common-hero" style="background-image: url('{{ url('frontend/assets/images/common-banner/shape-1.png') }}')">
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Shopping Cart</h2>
            <span><a href="{{ route('home') }}">Home</a> <a href="{{ route('shop') }}">Shop</a> > Single</span>
          </div>
    </div>
</section>
<!-- BANNER-SECTION END -->

<!-- SHOPPING-CART-SECTION START -->
<section class="wishlist-section shopping-section">
    <div class="container">
        <div class="wishlist-item">
            <h5>Your Cart Items</h5>
            <div class="wishlist-table">
                <form action="{{ route('cart.update') }}" method="POST">
                    @csrf
                    <table class="table-wrapper">
                        <thead class="t-head">
                          <tr>
                            <th><span>Item Name</span></th>
                            <th><span>Price</span></th>
                            <th><span>Quantity</span></th>
                            <th><span>Total</span></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody class="t-body">
                          @foreach($cartItems as $item)
                          <tr class="wishlist-tr">
                            <td class="d-lg-flex d-lg-block align-items-center">
                                <a href="{{ route('single-product', $item->id) }}">
                                    <img src="{{ url('storage/'.$item->image) }}" alt="shopping">
                                </a>
                                <h2><a href="{{ route('single-product', $item->id) }}">{{ $item->name }}</a></h2>
                            </td>
                            <td><span>${{ number_format($item->price, 2) }}</span></td>
                            <td>
                                <div class="pro-counter d-flex align-items-center justify-content-between">
                                    <button type="button" onclick="decrement('{{ $item->id }}')" class="counter-button">-</button>
                                    <input type="number" name="quantities[{{ $item->id }}]" class="counter-input" id="quantity{{ $item->id }}" value="{{ $item->quantity }}" min="1" readonly>
                                    <button type="button" onclick="increment('{{ $item->id }}')" class="counter-button">+</button>
                                </div>
                            </td>
                            <td><span class="cart-total">${{ number_format($item->price * $item->quantity, 2) }}</span></td>
                            <td>
                                <a href="{{ route('cart.remove', $item->id) }}" class="cart-btn"><i class="fa-solid fa-xmark"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>

                    <div class="shoping-cart-btn d-md-flex d-md-block align-items-center justify-content-md-between justify-content-md-start mt-4">
                        <div class="shoping-cart-btn-left">
                            <div class="checkout-text">
                                <div class="btn_box shoping-btn">
                                    <a href="{{ route('shop') }}">Continue Shopping</a>
                                </div>
                            </div>    
                        </div>
                        <div class="shoping-cart-btn-right d-flex align-items-center">
                            <button type="submit" class="view-all-two shoping-btn-2">Update Cart</button>
                            <a href="{{ route('cart.clear') }}" class="view-all-two shoping-btn-2 ml-2">Clear All</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- SHOPPING-CART-SECTION END -->

<section class="calculate-shipping">
    <div class="container">
        <div class="row">
            <!-- Calculate Shipping -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="calculate-item">
                    <h5>Calculate Shipping</h5>
                    <form action="{{ route('cart.calculate-shipping') }}" method="POST">
                        @csrf
                        <div class="select-item d-flex align-items-center">
                            <h6>Country:</h6>
                            <select name="country" class="select-option">
                                <option value="">Select your country</option>
                                <option value="USA">United States</option>
                                <option value="UK">United Kingdom</option>
                                <option value="Canada">Canada</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                        <div class="select-item d-flex align-items-center">
                            <h6>State:</h6>
                            <select name="state" class="select-option">
                                <option value="">Select your state</option>
                                <option value="NY">New York</option>
                                <option value="CA">California</option>
                                <option value="TX">Texas</option>
                            </select>
                        </div>
                        <div class="select-item d-flex align-items-center">
                            <h6>Zip Code:</h6>
                            <input type="text" name="zipcode" placeholder="Enter your zip code" class="form-control">
                        </div>
                        <button type="submit" class="view-all-two shoping-btn-2">Get A Quote</button>
                    </form>
                </div>
            </div>

            <!-- Coupon Code -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="calculate-item coupon-code-items">
                    <h5>Have A Coupon Code?</h5>
                    <form action="{{ route('cart.apply-coupon') }}" method="POST">
                        @csrf
                        <input type="text" name="coupon_code" placeholder="Write your Coupon Code">
                        <button type="submit" class="view-all-two shoping-btn-2">Apply Code</button>
                    </form>
                </div>
            </div>

            <!-- Cart Totals -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="calculate-item">
                    <div class="chectout-cart">
                        <ul class="sub-total">
                            <li class="d-flex align-items-center justify-content-between">
                                <h6>Sub Total</h6> 
                                <span>${{ number_format($cartSubTotal, 2) }}</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <h6>Shipping</h6> 
                                <span>${{ number_format($shippingCost, 2) }}</span>
                            </li>
                        </ul>
                        <ul class="grand-total">
                            <li class="d-flex align-items-center justify-content-between">
                                <h6>Grand Total</h6> 
                                <span>${{ number_format($cartSubTotal + $shippingCost, 2) }}</span>
                            </li>
                        </ul>
                        <div class="checkout-text">
                            <div class="btn_box checkout-btn">
                                <a href="{{ route('checkout') }}">Proceed To Checkout</a>
                            </div>
                            <span>Checkout with multiple addresses</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

