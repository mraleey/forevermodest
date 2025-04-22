@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

<!-- BANNER-SECTION START  -->

<section class="hero-section ev-common-hero" style="background-image: "{{url("frontend/assets/images/common-banner/shape-1.png" )}}"> 
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Shopping Cart</h2>
            <span><a href="{{url('index')}}">Home</a> <a href="{{url('shop')}}">Shop</a> > Single</span>
          </div>
    </div>
</section>

<!-- BANNER-SECTION END  -->


<!-- `SHOPPING-CART-SECTION START  -->


<section class="wishlist-section shopping-section">
    <div class="container">
        <div class="wishlist-item">
            <h5>Your Cart Items</h5>
            <div class="wishlist-table">
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
                      <tr class="wishlist-tr">
                        <td class="d-lg-flex d-lg-block align-items-center">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/shopping-cart/shape-1.png" )}}"  alt="shopping">
                            </a>
                            <h2><a href="{{url('single-product')}}">Tritan steel water bottle</a></h2>
                        </td>
                        <td><span>$42.00</span></td>
                        <td>
                            <div class="pro-counter d-flex align-items-center justify-content-between">
                                <button onclick="decrement('quantity1')" class="counter-button">-</button>
                                <input type="number" class="counter-input" id="quantity1" value="0" min="0" readonly>
                                <button onclick="increment('quantity1')" class="counter-button">+</button>
                            </div>
                        </td>
                        <td><span class="cart-total">$42.00</span></td>
                        <td>
                            <a href="#" class="cart-btn"><i class="fa-solid fa-xmark"></i></a>
                        </td>
                      </tr>
                      <tr class="wishlist-tr">
                        <td class="d-lg-flex d-lg-block align-items-center">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/shopping-cart/shape-2.png" )}}"  alt="shopping">
                            </a>
                            <h2><a href="{{url('single-product')}}">Ray Ban fashion sunglass</a></h2>
                        </td>
                        <td><span>$93.00</span></td>
                        <td>
                            <div class="pro-counter d-flex align-items-center justify-content-between">
                                <button onclick="decrement('quantity2')" class="counter-button">-</button>
                                <input type="number" class="counter-input" id="quantity2" value="0" min="0" readonly>
                                <button onclick="increment('quantity2')" class="counter-button">+</button>
                            </div>
                        </td>
                        <td><span class="cart-total">$93.00</span></td>
                        <td>
                            <ul class="product-cart d-flex align-items-center justify-content-between">
                                <li><a href="#" class="cart-btn"><i class="fa-solid fa-xmark"></i></a></li>
                            </ul>
                        </td>
                      </tr>
                      <tr class="wishlist-tr">
                        <td class="d-lg-flex d-lg-block align-items-center">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/shopping-cart/shape-3.png" )}}"  alt="shopping">
                            </a>
                            <h2><a href="{{url('single-product')}}">Mens fashion running shoes</a></h2>
                        </td>
                        <td><span>$48.00</span></td>
                        <td>
                            <div class="pro-counter d-flex align-items-center justify-content-between">
                                <button onclick="decrement('quantity3')" class="counter-button">-</button>
                                <input type="number" class="counter-input" id="quantity3" value="0" min="0" readonly>
                                <button onclick="increment('quantity3')" class="counter-button">+</button>
                            </div>
                        </td>
                        <td><span class="cart-total">$48.00</span></td>
                        <td>
                            <a href="#" class="cart-btn"><i class="fa-solid fa-xmark"></i></a>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>
              <div class="shoping-cart-btn d-md-flex d-md-block align-items-center justify-content-md-between justify-content-md-start">
                <div class="shoping-cart-btn-left">
                    <div class="checkout-text">
                        <div class="btn_box shoping-btn">
                            <a href="#">Continue Shopping</a>
                        </div>
                    </div>    
                </div>
                <div class="shoping-cart-btn-right d-flex align-items-center">
                    <a href="#" class="view-all-two shoping-btn-2">Update Cart</a>
                    <a href="#" class="view-all-two shoping-btn-2">Clear All</a>
                </div>
              </div>
        </div>
    </div>
</section>

<!-- `SHOPPING-CART-SECTION END  -->

 
<section class="calculate-shipping">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="calculate-item">
                    <h5>Calculate Shipping</h5>
                    <div class="select-item d-flex align-items-center">
                        <h6>Country:</h6>
                        <div class="select-wrapper d-flex align-items-center justify-content-between">
                            <select class="select-option">
                                <option value="">Select your country </option>
                                <option value="USA">United States</option>
                                <option value="UK">United Kingdom</option>
                                <option value="Canada">Canada</option>
                                <option value="Australia">Australia</option>
                              </select>
                              <span><i class="fa-solid fa-angle-down"></i></span>
                        </div>
                    </div>
                    <div class="select-item d-flex align-items-center">
                        <h6>State:</h6>
                        <div class="select-wrapper d-flex align-items-center justify-content-between">
                            <select class="select-option">
                                <option value="">Select your State</option>
                                <option value="USA">United States</option>
                                <option value="UK">United Kingdom</option>
                                <option value="Canada">Canada</option>
                                <option value="Australia">Australia</option>
                              </select>
                              <span><i class="fa-solid fa-angle-down"></i></span>
                        </div>
                    </div>
                    <div class="select-item d-flex align-items-center">
                        <h6>Zip Code:</h6>
                        <div class="select-wrapper d-flex align-items-center justify-content-between">
                            <select class="select-option">
                                <option value="">Write your zip code</option>
                                <option value="USA">United States</option>
                                <option value="UK">United Kingdom</option>
                                <option value="Canada">Canada</option>
                                <option value="Australia">Australia</option>
                              </select>
                              <span><i class="fa-solid fa-angle-down"></i></span>
                        </div>
                    </div>
                    <button class="view-all-two shoping-btn-2">Get A Quote</button>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="calculate-item coupon-code-items">
                    <h5>Have A Coupon Code ?</h5>
                    <form>
                        <input type="text" id="name" name="name" placeholder="Write your Coupon Code">
                    </form>
                    <button class="view-all-two shoping-btn-2">Apply Code</button>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="calculate-item">
                    <div class="select-item">
                        <div class="chectout-cart">
                            <ul class="sub-total">
                                <li class="d-flex align-items-center justify-content-between"><h6>Sub Total</h6> <span>$183.00</span></li>
                                <li class="d-flex align-items-center justify-content-between"><h6>Shipping </h6> <span>$10.00</span></li>
                            </ul>
                            <ul class="grand-total">
                                <li class="d-flex align-items-center justify-content-between"><h6>Grand Total</h6><span>$193.00</span></li>
                            </ul>
                            <div class="checkout-text">
                                <div class="btn_box checkout-btn">
                                    <a href="#">Proceed To Checkout</a>
                                </div>
                                <span >Checkout with multiple address</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection