@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

<!-- BANNER-SECTION START  -->

<section class="hero-section ev-common-hero" style="background-image: "{{url("frontend/assets/images/common-banner/shape-1.png" ) }}"> 
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Wish List</h2>
            <span><a href="{{url('index')}}">Home</a> > Wishlist</span>
          </div>
    </div>
</section>

<!-- BANNER-SECTION END  -->


<!-- `WISHLIST-SECTION START  -->

<section class="wishlist-section">
    <div class="container">
        <div class="wishlist-item">
            <h5>Your Wishlist</h5>
            <div class="wishlist-table">
                <table class="table-wrapper">
                    <thead class="t-head">
                      <tr>
                        <th><span>Item Name</span></th>
                        <th><span>Price</span></th>
                        <th><span>Availability</span></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="t-body">
                      <tr class="wishlist-tr">
                        <td class="d-lg-flex d-lg-block align-items-center">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/wishlist/shape-1.png" )}}" alt="wishlist">
                            </a>     
                            <h2><a href="{{url('single-product')}}">Tritan steel water bottle</a></h2>
                        </td>
                        <td><span>$42.00</span></td>
                        <td>In Stock</td>
                        <td>
                            <ul class="product-cart d-flex align-items-center justify-content-between">
                                <li class="common-btn table-btn">
                                    <button><span>Add to Cart </span><i class="fa-solid fa-cart-shopping"></i></button>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
                            </ul>
                        </td>
                      </tr>
                      <tr class="wishlist-tr">
                        <td class="d-lg-flex d-lg-block align-items-center">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/wishlist/shape-2.png")}}"  alt="wishlist">
                            </a>
                            <h2><a href="{{url('single-product')}}">Ray Ban fashion sunglass</a></h2>
                        </td>
                        <td><span>$93.00</span></td>
                        <td>In Stock</td>
                        <td>
                            <ul class="product-cart d-flex align-items-center justify-content-between">
                                <li class="common-btn table-btn">
                                    <button><span>Add to Cart </span><i class="fa-solid fa-cart-shopping"></i></button>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
                            </ul>
                        </td>
                      </tr>
                      <tr class="wishlist-tr">
                        <td class="d-lg-flex d-lg-block align-items-center">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/wishlist/shape-3.png" )}}" alt="wishlist">
                            </a>
                            <h2><a href="{{url('single-product')}}">Mens fashion running shoes</a></h2>
                        </td>
                        <td><span>$48.00</span></td>
                        <td>In Stock</td>
                        <td>
                            <ul class="product-cart d-flex align-items-center justify-content-between">
                                <li class="common-btn table-btn">
                                    <button><span>Add to Cart </span><i class="fa-solid fa-cart-shopping"></i></button>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
                            </ul>
                        </td>
                      </tr>
                      <tr class="wishlist-tr">
                        <td class="d-lg-flex d-lg-block align-items-center">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/wishlist/shape-4.png")}}"  alt="wishlist">
                            </a>
                            <h2><a href="{{url('single-product')}}">Ray Ban fashion sunglass</a></h2>
                        </td>
                        <td><span>$93.00</span></td>
                        <td>In Stock</td>
                        <td>
                            <ul class="product-cart d-flex align-items-center justify-content-between">
                                <li class="common-btn table-btn">
                                    <button><span>Add to Cart </span><i class="fa-solid fa-cart-shopping"></i></button>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
                            </ul>
                        </td>
                      </tr>
                      <tr class="wishlist-tr">
                        <td class="d-lg-flex d-lg-block align-items-center">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/wishlist/shape-5.png" )}}" alt="wishlist">
                            </a>
                            <h2><a href="{{url('single-product')}}">Mens fashion running shoes</a></h2>
                        </td>
                        <td><span>$48.00</span></td>
                        <td>In Stock</td>
                        <td>
                            <ul class="product-cart d-flex align-items-center justify-content-between">
                                <li class="common-btn table-btn">
                                    <button><span>Add to Cart </span><i class="fa-solid fa-cart-shopping"></i></button>
                                </li>
                                <li><a href="#"><i class="fa-solid fa-xmark"></i></a></li>
                            </ul>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>

<!-- `WISHLIST-SECTION END  -->

 

<!-- PRODUCT-SECTION END  -->
@endsection