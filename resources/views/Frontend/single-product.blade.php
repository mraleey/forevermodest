@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

<!-- BANNER-SECTION START  -->

<section class="hero-section ev-common-hero" style="background-image: "{{url("frontend/assets/images/common-banner/shape-1.png" )}}"> 
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Single Product</h2>
            <span><a href="{{url('index')}}">Home</a> > <a href="{{url('all-collections')}}"> product ></a> Single</span>
          </div>
    </div>
</section>

<!-- BANNER-SECTION END  -->


<section class="single-product-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="product-img-glarry">
                    <div class="product-glarry-slider">
                        <div class="slider__flex">
                          <div class="slider__col">
                            <div class="slider__thumbs">
                              <div class="swiper-container"> <!-- Слайдер с превью -->
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-1.png" )}}" alt="products"></div>
                                  </div>
                                  <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-2.png")}}"  alt="products"></div>
                                  </div>
                                  <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-3.png")}}"  alt="products"></div>
                                  </div>
                                  <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-4.png")}}"  alt="products"></div>
                                  </div>
                                  <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-5.png")}}"  alt="products"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="slider__images">
                            <div class="swiper-container"> <!-- Слайдер с изображениями -->
                              <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-1.png" )}}" alt="products"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-2.png")}}"  alt="products"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-3.png")}}"  alt="products"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-4.png")}}"  alt="products"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__image"><img src="{{url("frontend/assets/images/single-product/products/shape-5.png")}}"  alt="products "></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="product-summery">
                    <div class="single-product-inner">
                        <h6><a href="#">Fashion, Sports</a></h6>
                        <h3><a href="#">Preo mens red polo shirt</a></h3>
                        <ul class="single-product-price d-flex">
                            <li><h3>$108</h3></li>
                            <li><h4> $120</h4></li>
                        </ul>
                        <div class="product-review d-flex justify-content-between">
                            <ul class="d-flex">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><a href="#">33 Review</a></li>
                            </ul>
                            <div class="product-available"><span> Available : </span> <span>12</span></div>
                        </div>
                        <p class="product-txt">Stay stylish and comfortable with our Men's Casual Shirt, crafted from breathable fabric for all-day ease</p>
                         <ul class="product-color d-flex align-items-center">
                            <li><span>Color</span></li>
                            <li><p></p></li>
                            <li><p></p></li>
                            <li><p></p></li>
                         </ul>
                         <ul class="product-size d-flex align-items-center">
                            <li><span>Size</span></li>
                            <li><a href="#"><span>S</span></a></li>
                            <li><a href="#"><span>M</span></a></li>
                            <li><a href="#"><span>L</span></a></li>
                            <li><a href="#"><span>XL</span></a></li>
                         </ul>
                         <ul class="product-add-cart d-flex align-items-center">
                            <li>
                                <div class="pro-counter d-flex align-items-center justify-content-between">
                                    <button data-decrease class="counter-button">-</button>
                                    <input  data-value type="text" class="counter-input" id="quantity" value="0" min="0" readonly>
                                    <button data-increase class="counter-button">+</button>
                                </div>
                            </li>
                            <li class="btn_box add-cart-btn">
                                <a href="{{url('shopping-cart')}}">Add to Cart <i class="fa-solid fa-cart-shopping"></i></a>
                            </li>
                            <li class="btn_box heart-btn">
                                <a href="#"><i class="fa-solid fa-heart"></i></a>
                            </li>
                            <li class="btn_box arrow-btn">
                                <a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a>
                            </li>
                        </ul>
                        <ul class="product-tag d-flex align-items-center">
                            <li><h6>Share</h6></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Girls</a></li>
                        </ul>
                        <ul class="product-social d-flex align-items-center">
                            <li><h6>Share</h6></li>
                            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.google.com/"><i class="fa-brands fa-google-plus-g"></i></a></li>
                            <li><a href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-tabs">
            <div class="menu-fulter">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link active" id="pills-home-tab" data-bs-toggle="tab" data-bs-target="#pills-home" role="tab" aria-selected="true">Item Description</a></li>
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link" id="pills-profile-tab" data-bs-toggle="tab" data-bs-target="#pills-profile" role="tab" aria-selected="true">Item information</a></li>
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link " id="pills-contact-tab" data-bs-toggle="tab" data-bs-target="#pills-contact" role="tab" aria-selected="true">Item Review</a></li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="product-discription">
                        <p>Experience comfort and style with our Men's Casual Shirt. Made from high-quality fabric, it offers a perfect fit and a breathable feel for all-day wear. Whether you're heading to work, a casual outing, or just relaxing, this shirt is designed to keep you looking sharp. Its classic design and durable stitching make it a must-have for your wardrobe</p>
                        <ul class="single-product-features">
                            <li><h6>Share</h6></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Love this shirt? Share it with your friends and let them upgrade their style too! </span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Tag us in your looks and get featured on our page </span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Perfect for casual outings, workdays, or weekend getaways.</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Made for comfort and designed for effortless style </span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Available in multiple colors and sizes—find your perfect match!</span></li>
                            <li><i class="fa-solid fa-angles-right"></i><span>Spread the word and let everyone know about this must-have wardrobe essential!"

                                Let me know if you need any refinements! 😊</span></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="product-information">
                        <div class="product-info">
                            <h3>Product Name</h3>
                            <p><strong>Category:</strong> Mens T-shirt ;</p>
                            <p><strong>Price: </strong> $99 ;</p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget mauris urna.</p>
                            <p><strong>Available Colors:</strong> Red ;</p>
                            <p><strong>Available Sizes:</strong> XL ;</p>
                            <button class="add-cart">Add to Cart</button>
                        </div>
                    </div> 
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="review-form">
                        <div class="ev-comments">
                            <div class="comment-wrapper">
                                <div class="comment-headding">
                                    <h3>20 Review</h3>
                                </div>
                                <div class="comment-inner  d-lg-flex d-md-block">
                                    <div class="comment-img">
                                        <img src="{{url("frontend/assets/images/single-product/review/shape-1.png")}}"  alt="product">
                                    </div>
                                    <div class="comment-text">
                                        <ul class="comment-top d-flex justify-content-between">
                                            <li>
                                                <h6>Sarah Pulmar</h6>
                                                <span>April 21, 2021  10.40 Pm</span>
                                            </li>
                                            <li><a href="#" class="reply-btn">reply</a></li>
                                        </ul>
                                        <p class="preview-text">Lnseq uuntur magni dolores eos qui ratione voluptatem sequi nesciu nt. uis quam est, qui dolorem Lorem ipsum dolor sit amet, 
                                        consectetur adipisicing elit, sed do ecididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="comment-inner  d-lg-flex d-md-block">
                                    <div class="comment-img">
                                        <img src="{{url("frontend/assets/images/single-product/review/shape-2.png")}}"  alt="product">
                                    </div>
                                    <div class="comment-text">
                                        <ul class="comment-top d-flex justify-content-between">
                                            <li>
                                                <h6>Juwel Khan</h6>
                                                <span>April 21, 2021  10.40 Pm</span>
                                            </li>
                                            <li><a href="#" class="reply-btn">reply</a></li>
                                        </ul>
                                        <p class="preview-text">Lnseq uuntur magni dolores eos qui ratione voluptatem sequi nesciu nt. uis quam est, qui dolorem Lorem ipsum dolor sit amet, 
                                        consectetur adipisicing elit, sed do ecididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="comment-inner d-lg-flex d-md-block">
                                    <div class="comment-img">
                                        <img src="{{url("frontend/assets/images/single-product/review/shape-3.png")}}"  alt="product">
                                    </div>
                                    <div class="comment-text">
                                        <ul class="comment-top d-flex justify-content-between">
                                            <li>
                                                <h6>Mike Harnandez</h6>
                                                <span>April 21, 2021  10.40 Pm</span>
                                            </li>
                                            <li><a href="#" class="reply-btn">reply</a></li>
                                        </ul>
                                        <p class="preview-text">Lnseq uuntur magni dolores eos qui ratione voluptatem sequi nesciu nt. uis quam est, qui dolorem Lorem ipsum dolor sit amet, 
                                        consectetur adipisicing elit, sed do ecididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="comment-inner d-lg-flex d-md-block">
                                    <div class="comment-img">
                                        <img src="{{url("frontend/assets/images/single-product/review/shape-4.png")}}"  alt="product">
                                    </div>
                                    <div class="comment-text">
                                        <ul class="comment-top d-flex justify-content-between">
                                            <li>
                                                <h6>Sanjida Ema</h6>
                                                <span>April 21, 2021  10.40 Pm</span>
                                            </li>
                                            <li><a href="#" class="reply-btn">reply</a></li>
                                        </ul>
                                        <p class="preview-text">Lnseq uuntur magni dolores eos qui ratione voluptatem sequi nesciu nt. uis quam est, qui dolorem Lorem ipsum dolor sit amet, 
                                        consectetur adipisicing elit, sed do ecididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner-form">
                            <h3>Add Review</h3>
                            <form>
                                <!-- General Information -->
                                <input type="text" name="name" placeholder="Your Name" required>
                        
                                <input type="email" name="email" placeholder="Your Email" required>
                        
                                <input type="text" name="date" placeholder="Date of Purchase" required>
                        
                                <!-- Overall Rating -->
                                <div class="overall-rating">
                                    <div class="rating-wrapper d-flex align-content-center justify-content-between">
                                        <select class="inner-rating">
                                            <option>Overall experience:</option>
                                            <option>1 - Poor</option>
                                            <option>2 - Fair</option>
                                            <option>3 - Good</option>
                                            <option>4 - Very Good</option>
                                            <option>5 - Excellent</option>
                                        </select>
                                        <span><i class="fa-solid fa-angle-down"></i></span>
                                    </div>
                                </div>
                        
                                <!-- Specific Feedback -->
                                <div class="overall-review d-flex align-items-center">
                                    <div class="review-comment">
                                        <label>Overall Review :</label>
                                    </div>
                                    <div class="review-container">
                                        <button class="star"><span class="stararea">★</span></button>
                                        <button class="star"><span class="stararea">★</span></button>
                                        <button class="star"><span class="stararea">★</span></button>
                                        <button class="star"><span class="stararea">★</span></button>
                                        <button class="star"><span class="stararea">★</span></button>
                                      </div>
                                </div>
    
    
                                <!-- Add other input fields as needed -->
                        
                                <!-- Comments and Suggestions -->
                                <div class="user-comment">
                                    <textarea id="comments" name="comments" rows="5" placeholder="Write your review here"></textarea>
                                </div>
                                
                                <!-- Add other input fields as needed -->
                        
                                <!-- Submit Button -->
                                <button class="submit-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
</section>

<!-- `PRODUCT-SECTION START  -->

<section class="popular-product-section single-popular-product-section">
    <div class="container">
        <div class="heading-text">
            <h3>Related Items</h3>
        </div>
        <div class="swiper products single-product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide product single-slide">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/single-product/popular-product/shape-1.png")}}"  alt="product">
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Original desi jeans</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide product single-slide">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/single-product/popular-product/shape-2.png")}}"  alt="product">
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Bag for woman</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide product single-slide">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/single-product/popular-product/shape-3.png")}}"  alt="product">
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Blue keds for men</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide product single-slide">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/single-product/popular-product/shape-4.png")}}"  alt="product">
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Original desi jeans</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide product single-slide">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/single-product/popular-product/shape-5.png")}}"  alt="product">
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Bag for woman</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide product single-slide">
                    <div class="product-img">
                        <a href="{{url('single-product')}}">
                            <img src="{{url("frontend/assets/images/single-product/popular-product/shape-6.png")}}"  alt="product">
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
                        <h2 class="product-title"><a href="{{url('single-product')}}">Blue keds for men</a></h2>
                        <ul class="d-flex align-items-center">
                            <li><span>$99</span></li>
                            <li><span>$200</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- PRODUCT-SECTION END  -->
@endsection