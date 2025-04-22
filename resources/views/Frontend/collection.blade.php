@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

    <!-- BANNER-SECTION START  -->

    <section class="hero-section ev-common-hero"
        style="background-image: url('{{ url('frontend/assets/images/common-banner/shape-1.png') }}');">

    </section>


    <!-- BANNER-SECTION END  -->
    <div class="container-fluid">
        <div class="ev-hero-content">
            <h2 style="color: white">Collections</h2>
            <span><a href="{{ url('index') }}">Home</a> > Collections</span>
        </div>
    </div>

    <!-- Filtter Section Start  -->
    <div class="product-filters text-center mb-7">
        <div class="btn-group filter-group" role="group" aria-label="Filter Products">
            <button type="button" class="btn btn-outline-light filter-btn active" data-filter="all">All</button>
            <button type="button" class="btn btn-outline-light filter-btn" data-filter="men">Men</button>
            <button type="button" class="btn btn-outline-light filter-btn" data-filter="women">Women</button>
        </div>
    </div>


    <!-- Filtter Section End  -->

    <!-- `PRODUCT-SECTION START  -->

    <section class="product-section product-section-two product-collection-section">
        <div class="container">
            <div class="product-top d-md-flex align-items-end justify-content-between d-sm-block">
                <h6>Best Seller’s Collections</h6>
                <a href="all-{{url('collections')}}" class="view-all-two">View All</a>
            </div>
            <div class="products collection-items">
                <div class="product" data-gender="men">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-1.png")}}" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Polo Shirt for Men"
                                        data-image="{{ url('frontend/assets/images/collection/shape-1.png') }}"
                                        data-price="$99"
                                        data-description="This is a stylish polo shirt for men. Perfect for casual outings.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="men">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-2.png")}}" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Men Grey T-Shirt"
                                        data-image="{{ url('frontend/assets/images/collection/shape-2.png') }}"
                                        data-price="$99"
                                        data-description="This is a stylish grey color T-Shirt for men. Perfect for casual outings.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Men Grey T-Shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="women">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-3.png")}}" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                            <span class="ev-hot">hot</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Girls stylish T-shirt"
                                        data-image="{{ url('frontend/assets/images/collection/shape-3.png') }}"
                                        data-price="$99"
                                        data-description="This is a stylish polo shirt for girl. Perfect for casual outings.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Girls stylish T-shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="men">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-4.png")}}" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                                <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Men Formal Shirt"
                                        data-image="{{ url('frontend/assets/images/collection/shape-4.png') }}"
                                        data-price="$99"
                                        data-description="This is a Formal Wearing short for men. Perfect for Office and meetings.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>

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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Men Formal Shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-top d-md-flex align-items-end justify-content-between d-sm-block">
                <h6>Best Seller’s Collections</h6>
                <a href="{{url('all-collections')}}" class="view-all-two">View All</a>
            </div>
            <div class="products collection-items">
                <div class="product" data-gender="women">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-5.png")}}" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Polo Shirt for Girls"
                                        data-image="{{ url('frontend/assets/images/collection/shape-5.png') }}"
                                        data-price="$99"
                                        data-description="This is a stylish polo shirt for girls. Perfect for casual outings.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Polo shirt for girls</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="women">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-6.png")}}" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-hot">hot</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Girls night gown"
                                        data-image="{{ url('frontend/assets/images/collection/shape-6.png') }}"
                                        data-price="$99"
                                        data-description="This is Girls night gown shirt. Perfect for night wear.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="women">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-7.png")}}" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Mens stylish T-shirt"
                                        data-image="{{ url('frontend/assets/images/collection/shape-7.png') }}"
                                        data-price="$99"
                                        data-description="This is Mens stylish T-shirt. Perfect for casual outfits.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="men">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-8.png")}}" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                            <span class="ev-hot">hot</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Men Semi-Formal Shirt"
                                        data-image="{{ url('frontend/assets/images/collection/shape-8.png') }}"
                                        data-price="$99"
                                        data-description="This is Men Semi-Formal Shirt. Perfect for casual as well as formal outfits.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Men Semi-Formal Shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="product-top d-md-flex align-items-end justify-content-between d-sm-block">
                <h6>Best Seller’s Collections</h6>
                <a href="all-{{url('collections')}}" class="view-all-two">View All</a>
            </div>
            <div class="products collection-items">
                <div class="product" data-gender="men">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-9.png")}}" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Formal Shirt for Men"
                                        data-image="{{ url('frontend/assets/images/collection/shape-9.png') }}"
                                        data-price="$99"
                                        data-description="This is Formal Shirt for Men. Perfect for formal wearings.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Formal Shirt for Men</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="women">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-10.png")}}" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Girls Casual T-Shirt"
                                        data-image="{{ url('frontend/assets/images/collection/shape-10.png') }}"
                                        data-price="$99"
                                        data-description="This is Girls Casual T-Shirt. Perfect for casual outfits.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Girls Casual T-Shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="men">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-11.png")}}" alt="product">
                        </a>
                        <div class="product-labels d-flex justify-content-between">
                            <span class="ev-offer">-51%</span>
                            <span class="ev-hot">hot</span>
                        </div>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Mens stylish T-shirt"
                                        data-image="{{ url('frontend/assets/images/collection/shape-11.png') }}"
                                        data-price="$99"
                                        data-description="This is Mens stylish T-shirt. Perfect for casual outfits.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product" data-gender="men">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/collection/shape-12.png")}}" alt="product">
                        </a>
                        <div class="p-option">
                            <ul class="d-flex align-items-center justify-content-end">
                            <li class="anim-hidden">
                                    <a href="#" class="view-details" data-bs-toggle="modal"
                                        data-bs-target="#productDetailModal" data-title="Men casual Shirt"
                                        data-image="{{ url('frontend/assets/images/collection/shape-12.png') }}"
                                        data-price="$99"
                                        data-description="This is Men casual Shirt. Perfect for casual outfits.">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Men casual Shirt</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="collection-btn d-flex align-items-center justify-content-center">
            <a href="#" class="view-all-two">Load More</a>
        </div>
    </section>

    <!-- PRODUCT-SECTION END  -->
    <!-- Login for Gender filter -->
    <script>
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');
                document.querySelectorAll('.product').forEach(product => {
                    const gender = product.getAttribute('data-gender');
                    if (filter === 'all' || filter === gender) {
                        product.style.display = 'block';
                    } else {
                        product.style.display = 'none';
                    }
                });

                // toggle active button styling
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });
    </script>
    <!-- Gender fillter logic fillter end here -->

    <!-- Product Detail Modal -->
    <div class="modal fade" id="productDetailModal" tabindex="-1" aria-labelledby="productDetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" style="color: black" id="productTitle">Product Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex flex-wrap">
                    <!-- Product Image -->
                    <div class="col-md-6 text-center mb-3">
                        <img id="productImage" src="" alt="Product" class="img-fluid rounded shadow">
                    </div>

                    <!-- Product Info -->
                    <div class="col-md-6">
                        <p id="productDescription">Product description here...</p>
                        <p><strong>Price: </strong> <span id="productPrice">$0.00</span></p>

                        <!-- Action Buttons -->
                        <div class="mt-4 d-flex gap-3">
                            <button id="addToCartBtn" class="btn btn-outline-primary w-100">
                                <i class="fa-solid fa-cart-plus me-1"></i> Add to Cart
                            </button>
                            <button id="buyNowBtn" class="btn btn-primary w-100">
                                <i class="fa-solid fa-bolt me-1"></i> Buy Now
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Logic for product Card -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const detailLinks = document.querySelectorAll(".view-details");

            detailLinks.forEach(link => {
                link.addEventListener("click", function () {
                    const title = this.getAttribute("data-title");
                    const image = this.getAttribute("data-image");
                    const price = this.getAttribute("data-price");
                    const description = this.getAttribute("data-description");

                    document.getElementById("productTitle").textContent = title;
                    document.getElementById("productImage").src = image;
                    document.getElementById("productPrice").textContent = price;
                    document.getElementById("productDescription").textContent = description;

                    // Optional: You can store product ID here to use in Add to Cart
                    document.getElementById("addToCartBtn").onclick = () => {
                        alert(`Added "${title}" to cart!`);
                        // You can trigger your real cart logic here
                    };

                    document.getElementById("buyNowBtn").onclick = () => {
                        alert(`Proceeding to buy "${title}"!`);
                        // Redirect or trigger your checkout logic here
                    };
                });
            });
        });
    </script>

    <!-- Product Detail Modal End -->



    <!-- PRODUCT-SECTION END  -->
@endsection