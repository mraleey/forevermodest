@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

<!-- BANNER-SECTION START  -->

<section class="hero-section ev-common-hero" style="background-image: "{{url("frontend/assets/images/common-banner/shape-1.png")}}"  )}}"> 
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Shop Details</h2>
            <span><a href="{{url('index')}}">Home</a> > Shop</span>
          </div>
    </div>
</section>

<!-- BANNER-SECTION END  -->


<!-- `PRODUCT-SECTION START  -->

<section class="product-section shop-product-section single-shop-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-12  order-lg-0 order-1">
                <div class="shop-product-sidebar">
                    <div class="sidebar-categories">
                        <h6>Item Categories</h6>
                        <div class="section-wrapper">
                            <nav class="accordion-wrapper">
                                <ul class="ul-reset">
                                    <li>
                                        <a href="#">Accessories</a>
                                        <ul class="ul-reset"> 
                                            <li><a href="#">Sub-Category One</a></li>
                                            <li><a href="#">Sub-Category Two</a></li>
                                            <li><a href="#">Sub-Category Three</a></li>
                                            <li><a href="#">Sub-Category Four</a></li>
                                            <li><a href="#">Sub-Category Five</a></li>
                                        </ul><!-- .ul-reset -->
                                    </li>
                                    <li>
                                        <a href="#">Clothing</a>
                                        <ul class="ul-reset">
                                            <li><a href="#">Sub-Category One</a></li>
                                            <li><a href="#">Sub-Category Two</a></li>
                                            <li><a href="#">Sub-Category Three</a></li>
                                            <li><a href="#">Sub-Category Four</a></li>
                                            <li><a href="#">Sub-Category Five</a></li>
                                        </ul><!-- .ul-reset -->
                                    </li>
                                    <li>
                                        <a href="#">Fashions</a>
                                        <ul class="ul-reset">
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Kids</a></li>
                                        </ul><!-- .ul-reset -->
                                    </li>
                                    <li><a href="#">Electronics</a></li>
                                    <li>
                                        <a href="#">Furniture</a>
                                        <ul class="ul-reset">
                                            <li><a href="#">Sub-Category One</a></li>
                                            <li><a href="#">Sub-Category Two</a></li>
                                            <li><a href="#">Sub-Category Three</a></li>
                                            <li><a href="#">Sub-Category Four</a></li>
                                            <li><a href="#">Sub-Category Five</a></li>
                                        </ul><!-- .ul-reset -->
                                    </li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li>
                                        <a href="#">Jewellary</a>
                                        <ul class="ul-reset">
                                            <li><a href="#">Sub-Category One</a></li>
                                            <li><a href="#">Sub-Category Two</a></li>
                                            <li><a href="#">Sub-Category Three</a></li>
                                            <li><a href="#">Sub-Category Four</a></li>
                                            <li><a href="#">Sub-Category Five</a></li>
                                        </ul><!-- .ul-reset -->
                                    </li>
                                    <li>
                                        <a href="#">Others</a>
                                        <ul class="ul-reset">
                                            <li><a href="#">Sub-Category One</a></li>
                                            <li><a href="#">Sub-Category Two</a></li>
                                            <li><a href="#">Sub-Category Three</a></li>
                                            <li><a href="#">Sub-Category Four</a></li>
                                            <li><a href="#">Sub-Category Five</a></li>
                                        </ul><!-- .ul-reset -->
                                    </li>
                                </ul><!-- .ul-reset -->
                            </nav>
                        </div><!-- .accordion-wrapper -->
                    </div>
                    <div class="prise-range">
                        <h6>Price Range</h6>
                        <div class="price-range-slider">
                            <div id="slider-range" class="range-bar"></div>
                            <p class="range-value align-items-center">
                                <span>Price</span>
                                <input type="text" id="amount" readonly>
                            </p>
                        </div>                     
                    </div>
                    <div class="product-size">
                        <h6>Size</h6>
                        <ul class="d-flex align-items-center">
                            <li><a href="#">s</a></li>
                            <li><a href="#">m</a></li>
                            <li><a href="#">l</a></li>
                            <li><a href="#">xl</a></li>
                        </ul>
                    </div>
                    <div class="product-color">
                        <h6>Color</h6>
                        <ul class="palette d-flex align-items-center">
                            <li><span class="Color"></span></li>
                            <li><span class="Color"></span></li>
                            <li><span class="Color"></span></li>
                            <li><span class="Color"></span></li>
                        </ul>
                    </div>
                    <div class="brand-name">
                        <h6>Brand Name</h6>
                        <ul>
                            <li><a href="#">Sony</a></li>
                            <li><a href="#">Lenovo</a></li>
                            <li><a href="#">Jonson & Handson</a></li>
                            <li><a href="#">Apple</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">Hp</a></li>
                            <li><a href="#">Uniliver</a></li>
                        </ul>
                    </div> 
                    <div class="shop-featured">
                        <h6>Featured Item</h6>
                        <ul>
                            <li>
                                <div class="single-featured d-flex align-items-center">
                                    <div class="shop-featured-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/post/shape-1.png" )}}" alt="post">
                                        </a>
                                    </div>
                                    <div class="inner-text">
                                        <h6><a href="{{url('single-product')}}">Tritan steel water bottle</a></h6>
                                        <span>30000 RS</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-featured d-flex align-items-center">
                                    <div class="shop-featured-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/post/shape-2.png")}}"  alt="post">
                                        </a>
                                    </div>
                                    <div class="inner-text">
                                        <h6><a href="{{url('single-product')}}">Ray Ban fashion sunglass</a></h6>
                                        <span>30000 RS</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-featured d-flex align-items-center">
                                    <div class="shop-featured-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/post/shape-3.png")}}"  alt="post">
                                        </a>
                                    </div>
                                    <div class="inner-text">
                                        <h6><a href="{{url('single-product')}}">Men’s running dark shoes</a></h6>
                                        <span>30000 RS</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-12 order-lg-1 order-0">
                <div class="item-wrapper">
                    <div class="before-shop-loop d-lg-flex d-lg-block align-items-center justify-content-between">
                        <div class="product-items d-flex align-items-center">
                            <p>Showing <span>1 - 16</span> of <span>300</span> Items</p>
                         </div>
                        <div class="product-views-buttons d-flex align-items-center">
                            <div class="dropdown  d-flex align-items-center">
                                <span>Short By :</span>
                                <div class="filterBox">
                                    <input type="text" class="filterBtn" value="Default" readonly>
                                    <ul class=" filter-list">
                                        <li class="link-item"> Popular</li>
                                        <li class="link-item"> Latest</li>
                                        <li class="link-item"> price low</li>
                                        <li class="link-item"> price high</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="menu-fulter">
                                <ul class="product-list justify-content-center nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation"><a href="#" class="nav-link active" id="pills-product-one-tab" data-bs-toggle="tab" data-bs-target="#pills-product-one" role="tab" aria-selected="true"><i class="fa-solid fa-list"></i></a></li>
                                    <li class="nav-item" role="presentation"><a href="#" class="nav-link" id="pills-product-two-tab" data-bs-toggle="tab" data-bs-target="#pills-product-two" role="tab" aria-selected="true"><i class="fa-solid fa-grip"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-product-one" role="tabpanel" aria-labelledby="pills-product-one-tab">
                            <div class="products ev-products">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-1.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-51%</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                            <h2 class="product-title"><a href="{{url('single-product')}}">polo shirt for men</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li> <del><span>60000 RS</span></del></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-2.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-51%</span>
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Boys Casual Shirt</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-8.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Mens stylish T-shirt</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li> <del><span>60000 RS</span></del></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-4.png")}}"  alt="product">
                                        </a>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Formal Shirt</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-5.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-51%</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Woman polo shirt</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-6.png" )}}" alt="product">
                                        </a>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Half sleeves T-shirt</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-7.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-51%</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Formal dress</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-8.png")}}"  alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Women Stylish dress</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-1/shape-9.png" )}}" alt="product">
                                        </a>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Original Formal men shirt</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-product-two" role="tabpanel" aria-labelledby="pills-product-two-tab">
                            <div class="products ev-products">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-1.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-51%</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                            <h2 class="product-title"><a href="{{url('single-product')}}">polo shirt for men</a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-2.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-51%</span>
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Girls night gown</a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-3.png" )}}" alt="product">
                                        </a>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Mens stylish T-shirt</a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>30000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-4.png")}}"  alt="product">
                                        </a>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Simple soft towel</a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>30000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-5.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                            <h2 class="product-title"><a href="{{url('single-product')}}">polo shirt for men</a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-6.png")}}"  alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-51%</span>
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Girls night gown</a></h2>
                                        <ul class="d-flex align-items-center">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-7.png" )}}" alt="product">
                                        </a>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Formal dress</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-8.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-offer">-51%</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Formal dress</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('single-product')}}">
                                            <img src="{{url("frontend/assets/images/shop-sidebar/product-2/shape-9.png" )}}" alt="product">
                                        </a>
                                        <div class="product-labels d-flex justify-content-between">
                                            <span class="ev-hot">hot</span>
                                        </div>
                                        <div class="p-option">
                                            <ul class="d-flex align-items-center justify-content-end">
                                                <li class="anim-hidden"><a href="#"><i class="fa-regular fa-eye"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                                                <li class="anim-hidden"><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <ul class="product-stars d-flex">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        </ul>
                                        <h2 class="product-title"><a href="{{url('single-product')}}">Formal dress</a></h2>
                                        <ul class="d-flex">
                                            <li><span>30000 RS</span></li>
                                            <li><span>60000 RS</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ev-pagination">
                        <ul class="d-flex align-items-center">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCT-SECTION END  -->
@endsection