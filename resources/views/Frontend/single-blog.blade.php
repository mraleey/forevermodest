@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

<!-- BANNER-SECTION START  -->

<section class="hero-section ev-common-hero" style="background-image: "{{url("frontend/assets/images/common-banner/shape-1.png" )}}"> 
    <div class="container-fluid">
          <div class="ev-hero-content">
            <h2>Blog Details</h2>
            <span><a href="{{url('index')}}">Home</a> > Blog</span>
          </div>
    </div>
</section>

<!-- BANNER-SECTION END  -->

<section class="recent-blog-section single-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 col-12">
                <div class="ev-blog-items single-blog-items">
                    <div class="blog-inner">
                        <div class="blog-img">
                            <a href="single-blog.html">
                                <img src="{{url("frontend/assets/images/single-blog/details/shape-1.png")}}"  alt="blog">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul class="blog-date d-flex align-items-center">
                                <li><h3><a href="#">Web Design</a></h3></li>
                                <li><span>April 20, 2021 </span></li>
                                <li><span>John Doe</span></li>
                            </ul>
                            <h2><a href="single-blog.html"> How to buy a T-shirt for a friend</a></h2>
                            <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, consec tetur adipi sicing elit, sed do eiusmod tempor inci didunt ut labore et 
                            dolore magna aliqu magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                            <p>Minisi ut aliquip ex ea commodo conseq Lorem ipsum dolor sit amet, consectetur 
                            adipisic ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con sequat. Duis aute irure dolor 
                            in reprehenderit in voluptate velit esse cillum dol</p>
                            <ul class="d-flex quote-text">
                                <li><img src="{{url("frontend/assets/images/single-blog/quot/shape-1.png")}}"  alt="quot"> </li>
                                <li><p>sint occaecat cupidatat non proident, sunt in culpa qui officia 				
                                deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste 
                                natus error sit voluptatem accusantium </p></li>
                            </ul>
                            <p>et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore etlorem
                             ipsum quia dolor sit a dolore magnam aliquam quaerat voluptatem.</p>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehender it in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupi 
                            datat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae 
                            ab illo inventore veritatis et quasi archi tecto beatae vitae dicta sunt explicabo. </p>
                            <div class="social-items single-blog-tags d-lg-flex d-lg-block align-items-center justify-content-between">
                                <div class="pn-ProductNav_Wrapper">
                                    <nav  id="pnProductNavContents" class="pn-ProductNav_Contents">
                                        <ul class="post-tag">
                                            <li><a href="#" class="pn-ProductNav_Link">Tags</a></li>
                                            <li><a href="#" class="pn-ProductNav_Link">Web Design</a></li>
                                            <li><a href="#" class="pn-ProductNav_Link">Apps</a></li>
                                            <li><a href="#" class="pn-ProductNav_Link">Salman</a></li>
                                            <li><a href="#" class="pn-ProductNav_Link">Shah</a></li>
                                            <li><a href="#" class="pn-ProductNav_Link">shabnur</a></li>
                                        </ul>
                                    </nav>
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
                            <ul  class="blog-next-prev d-flex align-content-center justify-content-between">
                                <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i> Prev Post</a></li>
                                <li><a href="#">Prev Post <i class="fa-solid fa-arrow-right-long"></i></a></li>
                            </ul>
                            <ul class="product-details d-flex align-items-center justify-content-between">
                                <li><a href="#" class="preview-text">Jokod tempor incididunt ut labore et dolore magna aliqua.</a></li>
                                <li><a href="#" class="preview-text">Jokod tempor incididunt ut labore et dolore magna aliqua.</a></li>
                            </ul>
                            <div class="blog-author-bio d-lg-flex d-md-blog">
                                <div class="author-img">
                                    <img src="{{url("frontend/assets/images/single-blog/author/shape-1.png" )}}" alt="author">
                                </div>
                                <div class="authoi-info">
                                    <div class="author-personal d-flex align-items-center justify-content-between">
                                        <h5>Jacob Oramson</h5>
                                        <ul class="authoi-social d-flex align-items-center justify-content-end">
                                            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                    <p class="preview-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit  consequuntur magni dolores eos qui ratione voluptatem 
                                    sequi nesciu nt. Neque porro quisquam est, qui dolorem </p>
                                    <a href="#" class="view-post">View All Posts</a>
                                </div>
                            </div>
                            <div class="ev-comments">
                                <h2>20 Comments</h2>
                                <div class="comment-wrapper">
                                    <div class="comment-inner  d-lg-flex d-md-block">
                                        <div class="comment-img">
                                            <img src="{{url("frontend/assets/images/single-blog/comment/shape-1.png")}}"  alt="comment">
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
                                            <img src="{{url("frontend/assets/images/single-blog/comment/shape-2.png" )}}" alt="comment">
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
                                            <img src="{{url("frontend/assets/images/single-blog/comment/shape-3.png")}}"  alt="comment">
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
                                            <img src="{{url("frontend/assets/images/single-blog/comment/shape-4.png")}}"  alt="comment">
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
                        </div>
                    </div>
                    <form class="contuct-form" action="https://ethemestudio.com/demo/Forever Modest/process_form.php" method="post">
                        <div class="form-text">
                            <h4>Add A Comment</h4>
                            <p>Sectetur adipisicing elit, sed do eiusmod tempor incididunt ut labo</p>
                        </div>
                        <div class="form-grid">
                            <input class="input-name" type="text" name="name" placeholder="Your name" required>
                            <input class="input-email" type="email" name="email" placeholder="Your email *" required>
                        </div>
                        <textarea class="input-textarea" name="message" rows="5" cols="30" placeholder="Your name *" required></textarea>
                        <div class="common-btn blog-btn">
                            <button type="submit" value="Submit Payment">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-12 col-12">
                <div class="ev-side-bar">
                    <form class="side-bar-form common-blog-item d-flex align-items-center justify-content-between">
                        <input type="text" name="search" placeholder="Type to search i.e “sunglass”...">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form> 
                    <div class="preo-shop common-blog-item">
                        <div class="preo-shop-img">
                            <img src="{{url("frontend/assets/images/single-blog/more/shape-1.png")}}"  alt="blog">
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
                                    <img src="{{url("frontend/assets/images/single-blog/sidebar-post/shape-1.png" )}}" alt="post">
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
                                    <img src="{{url("frontend/assets/images/single-blog/sidebar-post/shape-2.png")}}"  alt="post">
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
                                    <img src="{{url("frontend/assets/images/single-blog/sidebar-post/shape-3.png" )}}" alt="post">
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
                            <li><a href="#"><img src="{{url("frontend/assets/images/single-blog/tag/shape-1.png" )}}" alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/single-blog/tag/shape-2.png" )}}" alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/single-blog/tag/shape-3.png" )}}" alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/single-blog/tag/shape-4.png" )}}" alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/single-blog/tag/shape-5.png" )}}" alt="gallery"></a></li>
                            <li><a href="#"><img src="{{url("frontend/assets/images/single-blog/tag/shape-6.png" )}}" alt="gallery"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- `PRODUCT-SECTION START  -->
@endsection