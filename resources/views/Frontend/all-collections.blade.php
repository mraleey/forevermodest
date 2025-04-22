@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

<!-- BANNER-SECTION START  -->

<section class="hero-section ev-common-hero" style="background-image: "{{url("frontend/assets/images/common-banner/shape-1.png" )}}"> 
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Collections</h2>
            <span><a href="{{url('index')}}">Home</a> > Collections</span>
          </div>
    </div>
</section>

<!-- BANNER-SECTION END  -->


<!-- `PRODUCT-SECTION START  -->

<section class="product-section product-section-two product-collection-section shop-product-section">
    <div class="container">
        <div class="before-shop-loop d-lg-flex d-lg-block align-items-center justify-content-between">
            <div class="showing-items d-flex align-items-center">
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
                <div class="products collection-items">
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-1.png")}}" alt="product">
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
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-2.png")}}"  alt="product">
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
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-3.png")}}"  alt="product">
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
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-4.png")}}"  alt="product">
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
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="products collection-items">
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-5.png")}}"  alt="product">
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
                                <h2 class="product-title"><a href="{{url('single-product')}}">polo shirt for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-6.png" )}}" alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Girls night gown</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-7.png" )}}" alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Mens stylish T-shirt</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-8.png")}}"  alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Simple soft towel</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="products collection-items">
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-9.png" )}}" alt="product">
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
                                <h2 class="product-title"><a href="{{url('single-product')}}">polo shirt for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-10.png")}}"  alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Girls night gown</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-11.png")}}"  alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Mens stylish T-shirt</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-1/shape-12.png")}}"  alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Simple soft towel</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-product-two" role="tabpanel" aria-labelledby="pills-product-two-tab">
                <div class="products collection-items">
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-1.png")}}"  alt="product">
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
                                <h2 class="product-title"><a href="{{url('single-product')}}">polo shirt for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-2.png" )}}" alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Girls night gown</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-3.png" )}}" alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Mens stylish T-shirt</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-4.png" )}}" alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Simple soft towel</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="products collection-items">
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-5.png" )}}" alt="product">
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
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-6.png" )}}" alt="product">
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
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-7.png" )}}" alt="product">
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
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-8.png" )}}" alt="product">
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
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="products collection-items">
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-9.png")}}"  alt="product">
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
                                <h2 class="product-title"><a href="{{url('single-product')}}">polo shirt for men</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-10.png" )}}" alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Girls night gown</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                                <li><span>$200</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-11.png")}}"  alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Mens stylish T-shirt</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <a href="{{url('single-product')}}">
                                <img src="{{url("frontend/assets/images/all-collection/product-2/shape-12.png")}}"  alt="product">
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
                            <h2 class="product-title"><a href="{{url('single-product')}}">Simple soft towel</a></h2>
                            <ul class="d-flex align-items-center">
                                <li><span>$99</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="collection-btn d-flex align-items-center justify-content-center">
        <a href="#" class="view-all-two">Load More</a>
    </div>
</section>

<!-- PRODUCT-SECTION END  -->

 

<!-- PRODUCT-SECTION END  -->
@endsection