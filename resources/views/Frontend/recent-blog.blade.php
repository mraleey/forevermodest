
@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
<!-- BANNER-SECTION START  -->

<section class="hero-section ev-common-hero" style="background-image: "{{url("frontend/assets/images/common-banner/shape-1.png" )}}"> 
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Blog one</h2>
            <span><a href="{{url('index')}}">Home</a> > Blog</span>
          </div>
    </div>
</section>

<!-- BANNER-SECTION END  -->

<section class="recent-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 col-12">
                <div class="ev-blog-items">
                    <div class="blog-inner">
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="{{url("frontend/assets/images/blog/recent-blog/shape-1.png" )}}" alt="blog">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul class="blog-date d-flex align-items-center">
                                <li><h3><a href="#">Web Design</a></h3></li>
                                <li><span>April 20, 2021 </span></li>
                                <li><span>John Doe</span></li>
                            </ul>
                            <h2><a href="single-blog.html">How to buy a T-shirt for a friend</a></h2>
                            <p class="preview-text">Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, cnsect etur adipi sicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqu ma gna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut .. ..aliquip ex ea commodo consequa ...</p>
                            <div class="social-items">
                                <div class="btn_box blog-btn">
                                    <a href="#">Read More</a>
                                </div>
                                <div class="blog-social"> 
                                    <ul class="social-icon d-flex align-items-center">
                                        <li><span>Share</span></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-inner">
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="{{url("frontend/assets/images/blog/recent-blog/shape-2.png")}}"  alt="blog">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul class="blog-date d-flex align-items-center">
                                <li><h3><a href="#">Web Design</a></h3></li>
                                <li><span>April 20, 2021 </span></li>
                                <li><span>John Doe</span></li>
                            </ul>
                            <h2><a href="single-blog.html">How to buy a T-shirt for a friend</a></h2>
                            <p class="preview-text">Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, cnsect etur adipi sicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqu ma gna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut .. ..aliquip ex ea commodo consequa ...</p>
                            <div class="social-items">
                                <div class="btn_box blog-btn">
                                    <a href="#">Read More</a>
                                </div>
                                <div class="blog-social"> 
                                    <ul class="social-icon d-flex align-items-center">
                                        <li><span>Share</span></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-inner">
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="{{url("frontend/assets/images/blog/recent-blog/shape-3.png")}}"  alt="blog">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul class="blog-date d-flex align-items-center">
                                <li><h3><a href="#">Web Design</a></h3></li>
                                <li><span>April 20, 2021 </span></li>
                                <li><span>John Doe</span></li>
                            </ul>
                            <h2><a href="single-blog.html">How to buy a T-shirt for a friend</a></h2>
                            <p class="preview-text">Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, cnsect etur adipi sicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqu ma gna aliqua. Ut enim ad minim veniam, 
                            quis nostrud exercitation ullamco laboris nisi ut .. ..aliquip ex ea commodo consequa ...</p>
                            <div class="social-items">
                                <div class="btn_box blog-btn">
                                    <a href="#">Read More</a>
                                </div>
                                <div class="blog-social"> 
                                    <ul class="social-icon d-flex align-items-center">
                                        <li><span>Share</span></li>
                                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
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
            <div class="col-xl-4 col-lg-5 col-md-12 col-12">
                <div class="ev-side-bar">
                    <form class="side-bar-form common-blog-item d-flex align-items-center justify-content-between" action="https://ethemestudio.com/search" method="GET">
                        <input type="text" name="query" placeholder="Type to search i.e “sunglass”...">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form> 
                    <div class="preo-shop common-blog-item">
                        <div class="preo-shop-img">
                            <img src="{{url("frontend/assets/images/blog/more/shape-1.png")}}"  alt="blog">
                        </div>
                        <div class="preo-shop-inner">
                            <div class="shop-inner-info">
                                <span>Preo Shop</span>
                                <h4>Guide to buy best thing</h4>
                                <p>Kimod tempoer incididunt onomes sundo ritoma amar consectetur adipi sicing elit</p>
                                <div class="btn_box blog-btn border-btn">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bar-recent-post common-blog-item">
                        <div class="post-title">
                            <h5>Recent Posts <i class="fa-solid fa-angles-right"></i></h5>
                        </div>
                        <div class="recent-post d-flex align-items-center">
                            <div class="post-img">
                                <a href="single-blog.html">
                                    <img src="{{url("frontend/assets/images/blog/sidebar-post/shape-1.png" )}}" alt="blog">
                                </a>
                            </div>
                            <div class="blog-text">
                                <span>April 15, 2021</span>
                                <h2><a href="single-blog.html">Dalia enim ad minim olok veniam quis</a></h2>
                            </div>
                        </div>
                        <div class="recent-post d-flex align-items-center">
                            <div class="post-img">
                                <a href="single-blog.html">
                                    <img src="{{url("frontend/assets/images/blog/sidebar-post/shape-2.png")}}"  alt="blog">
                                </a> 
                            </div>
                            <div class="blog-text">
                                <span>April 15, 2021</span>
                                <h2><a href="single-blog.html">Dalia enim ad minim olok veniam quis</a></h2>
                            </div>
                        </div>
                        <div class="recent-post d-flex align-items-center">
                            <div class="post-img">
                                <a href="single-blog.html">
                                    <img src="{{url("frontend/assets/images/blog/sidebar-post/shape-3.png")}}"  alt="blog">
                                </a>
                            </div>
                            <div class="blog-text">
                                <span>April 15, 2021</span>
                                <h2><a href="single-blog.html">Dalia enim ad minim olok veniam quis</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="bar-catagories common-blog-item">
                        <div class="catagories-title">
                            <h6>Categories <i class="fa-solid fa-angles-right"></i></h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> Business Management</a></li>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> System Administration</a></li>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> Social Media Marketing</a></li>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> Critical Analysis</a></li>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> Human Resources</a></li>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> Virtual Management</a></li>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> Marketing Research</a></li>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> Search Engine Optimization</a></li>
                            <li><a href="#"><i class="fa-solid fa-caret-right"></i> Business Tips n Tricks</a></li>
                        </ul>
                    </div>
                    <div class="bar-tag common-blog-item">
                        <div class="tag-title">
                            <h6>Tags  <i class="fa-solid fa-angles-right"></i></h6>
                        </div>
                        <ul class="tag-items">
                            <li><a href="#">Mirgbai</a></li>
                            <li><a href="#">Bangla</a></li>
                            <li><a href="#">Algorithm</a></li>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Social Network</a></li>
                            <li><a href="#">Ios</a></li>
                            <li><a href="#">Bootstraping</a></li>
                            <li><a href="#">Android</a></li>
                        </ul>
                    </div>
                    <div class="bar-gallery common-blog-item">
                        <div class="gallery-title">
                            <h6>Tags  <i class="fa-solid fa-angles-right"></i></h6>
                        </div>
                        <ul class="gallery-items">
                            <li><a href="#"><img src="{{url("frontend/assets/images/blog/tag/shape-1.png")}}"  alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/blog/tag/shape-2.png")}}"  alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/blog/tag/shape-3.png")}}"  alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/blog/tag/shape-4.png")}}"  alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/blog/tag/shape-5.png")}}"  )}}" alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/blog/tag/shape-6.png" )}}" alt="gallery"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- `PRODUCT-SECTION START  -->


<!-- PRODUCT-SECTION END  -->
@endsection