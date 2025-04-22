@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

<!-- BANNER-SECTION START  -->

<section class="hero-section ev-common-hero" style="background-image: "{{url("frontend/assets/images/common-banner/shape-1.png" )}}"> 
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Checkout</h2>
            <span><a href="{{url('index')}}">Home</a> ><a href="{{url('shop')}}">Shop</a> > Single</span>
          </div>
    </div>
</section>

<!-- BANNER-SECTION END  -->


<!-- `CECKOUT-SECTION START  -->


<!-- `CECKOUT-SECTION END  -->

 <section class="checkout-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6 col-12">
                <div class="checkout-left">
                    <ul class="checkout-top d-flex align-items-center">
                        <li><span>Returning Customer ?</span></li>
                        <li><a href="#">Click Here to Login </a></li>
                    </ul>
                    <div class="checkout-form">
                        <h4>Your Billing Address</h4>
                        <form>
                            <div class="ev-form-grid">
                                <input type="text" name="name" placeholder="First Name *" required>
                                <input type="text" name="company" placeholder="Last Name *">
                            </div>
                            <input type="tel" name="phone" placeholder="Company Name">
                            <div class="ev-form-grid">
                                <input type="email" name="email" required placeholder="Email Address *">
                                <input type="text" name="country" placeholder="Your country *">
                            </div>
                            <div class="select-wrapper d-flex align-items-center justify-content-between">
                                <select class="select-option" id="country" name="country">
                                    <option value="">Select your State</option>
                                    <option value="USA">United States</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                  </select>
                                  <span><i class="fa-solid fa-angle-down"></i></span>
                            </div>
                            <input type="text" name="state" placeholder="Address *">
                            <input type="text" name="city" placeholder="City / Town *">
                            <div class="ev-form-grid">
                                <input type="text" name="zip" placeholder="State *">
                                <input type="text" name="zip" placeholder="Zip Code *">
                            </div>
                        </form>
                        <div class="checkbox-form">
                            <div class="check-box d-flex align-content-center ">
                                <input type="checkbox" id="myCheckbox1" name="myCheckbox" value="checkboxValue">
                                <label for="myCheckbox1">Create Account ?</label>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                              ut labore et dolore magna aliqua.</p>
                            <input class="check-password" type="password" name="password" placeholder="Account Password *" required>
                            <div class="check-box d-flex align-content-center ">
                                <input type="checkbox" id="myCheckbox2" name="myCheckbox" value="checkboxValue">
                                <label for="myCheckbox2">Ship to Different Address ?</label>
                            </div>
                            <textarea class="check-message" id="message" name="message" placeholder="Order Note" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
                <div class="order-review-wrapper">
                    <h4 class="coupon-title">Coupon Code</h4>
                    <div class="checkout-review-order">
                        <form class="coupon-code d-flex align-items-center">
                            <input type="text" id="coupon" name="coupon" placeholder="Enter coupon code">
                            <div class="common-btn coupon-btn">
                                <button type="submit" value="Submit Payment">Place Order</button>
                            </div>
                        </form>
                        <div class="ev-order-review">
                                <h4 class="order-title">Your Order</h4>
                            <div class="ev-shop-table">
                                <ul class="order-price d-flex align-items-center justify-content-between">
                                    <li><h6>Item</h6></li>
                                    <li><h6>Price</h6></li>
                                </ul>
                                <div class="cart-item">
                                    <ul class="product-name-price d-flex align-items-center justify-content-between">
                                        <li><span>Tritan steel water bottle</span></li>
                                        <li><span> $42.00</span></li>
                                    </ul>
                                    <ul class="product-name-price d-flex align-items-center justify-content-between">
                                        <li><span>Ray Ban fashion sunglass</span></li>
                                        <li><span> $93.00</span></li>
                                    </ul>
                                    <ul class="product-name-price d-flex align-items-center justify-content-between">
                                        <li><span>Mens fashion running shoes </span></li>
                                        <li><span>$48.00</span></li>
                                    </ul>
                                </div>
                                <div class="cart-item">
                                    <ul class="product-name-price product-subtotal d-flex align-items-center justify-content-between">
                                        <li><span>Subtotal </span></li>
                                        <li><span> $183.00</span></li>
                                    </ul>
                                    <ul class="product-name-price product-subtotal d-flex align-items-center justify-content-between">
                                        <li><span>Shipping  ( Standard )</span></li>
                                        <li><span> $20.00</span></li>
                                    </ul>
                                </div>
                                <ul class="product-total d-flex align-items-center justify-content-between">
                                    <li><span>Total </span></li>
                                    <li><span>  $203.00</span></li>
                                </ul>
                                <div class="checkout-payment">
                                    <form class="checkout-radio">
                                        <ul class="radio-items">
                                            <li class="radio-item">
                                            <span>
                                                <input type="radio" id="flexRadioDefault1" name="radio-group" checked>
                                                <label for="flexRadioDefault1">Terms and Conditions:</label>
                                            </span>
                                            <div class="radio-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid gna aliqua.</p>
                                            </div>
                                            </li>
                                            <li class="radio-item">
                                                <span>
                                                    <input type="radio" id="flexRadioDefault2" name="radio-group">
                                                    <label for="flexRadioDefault2">Payment by cheque</label>
                                                </span>
                                                <div class="radio-text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid gna aliqua.</p>
                                                </div>
                                            </li>
                                            <li class="radio-item">
                                                <span>
                                                    <input type="radio" id="flexRadioDefault3" name="radio-group">
                                                    <label for="flexRadioDefault3">Cash On Delivery</label>
                                                </span>
                                                <div class="radio-text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid gna aliqua.</p>
                                                </div>
                                            </li>
                                            <li class="radio-item">
                                                <span>
                                                    <input type="radio" id="flexRadioDefault4" name="radio-group">
                                                    <label for="flexRadioDefault4">Paypal</label>
                                                </span>
                                                <div class="radio-text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid gna aliqua.</p>
                                                </div>
                                            </li>
                                        </ul>
                                      </form>
                                    <div class="common-btn">
                                        <button type="submit" value="Submit Payment">Place Order</button>
                                    </div>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

<!-- PRODUCT-SECTION END  -->
@endsection