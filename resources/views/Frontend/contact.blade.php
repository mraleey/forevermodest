@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')

    <!-- BANNER-SECTION START  -->

    <section class="hero-section ev-common-hero"
        style="background-image: "{{ url('frontend/assets/images/common-banner/shape-1.png') }}">
        <div class="container-fluid">
            <div class="ev-hero-content">
                <h2>Contact Us</h2>
                <span><a href="{{ url('index') }}">Home</a> > Blog</span>
            </div>
        </div>
    </section>

    <!-- BANNER-SECTION END  -->


    <!--  CONTACT-US-SECTION START  -->

    <section class="ev-contact-us-section">
        <div class="container">
            <div class="ev-top-content justify-content-md-center justify-content-sm-start">
                <span>Contact Us</span>
                <h2>Stay Connected</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="contact-left">
                        <div class="contact-inner">
                            <p>Stay connected with us! Follow us for the latest updates, deals, and more."</p>
                            <ul>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <div class="inner-text">
                                            <h6>Address</h6>
                                            <span>20, Mountain Street, Pakistan</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-solid fa-phone"></i>
                                        <div class="inner-text">
                                            <h6>Call us</h6>
                                            <span>+92 300 6949416</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex align-items-center">
                                        <i class="fa-regular fa-envelope"></i>
                                        <div class="inner-text">
                                            <h6>Email Us</h6>
                                            <span>hello@forevermodest.com</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-12">
                    <div class="contact-right">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-block p-4 border-left-warning"
                                style="background-color:#EC8E22; opacity:1">
                                <strong>
                                    <h1 style="color:#ffffff">{{ $message }}</h1>
                                </strong>
                            </div>
                        @endif
                        <form class="contuct-form" method="POST" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="row form-group">
                                <div class="col-12">
                                    <label for="inputName" class="form-label visually-hidden">Name</label>
                                    <input type="text" placeholder="Your name" name="inputName" id="inputName"
                                        class="form-control" required>
                                    @if ($errors->has('inputName'))
                                        <span class="text-danger">{{ $errors->first('inputName') }}</span>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label visually-hidden">Email</label>
                                    <input type="email" placeholder="Your email" name="inputEmail" id="inputEmail"
                                        class="form-control" required>
                                    @if ($errors->has('inputEmail'))
                                        <span class="text-danger">{{ $errors->first('inputEmail') }}</span>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="inputNumber" class="form-label visually-hidden">Phone</label>
                                    <input type="tel" placeholder="Your phone" name="inputNumber" id="inputNumber"
                                        class="form-control">
                                    @if ($errors->has('inputNumber'))
                                        <span class="text-danger">{{ $errors->first('inputNumber') }}</span>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="inputMessage" class="form-label visually-hidden">Message</label>
                                    <textarea class="form-control" name="inputMessage" rows="8" id="inputMessage"
                                        placeholder="Write your message here" required
                                        style="height: 200px; border: 2px solid #ccc; padding: 10px; display: block; visibility: bold;"></textarea>
                                    @if ($errors->has('inputMessage'))
                                        <span class="text-danger">{{ $errors->first('inputMessage') }}</span>
                                    @endif
                                </div>


                                <div class="col-12">
                                    <div class="common-btn submit-btn pt-3">
                                        <button type="submit" class="vs-btn style4" name="submit">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--  CONTACT-US-SECTION END  -->


    <!-- CONTACT-MAP-SECTION START  -->

    <div class="map-section">
        <div class="container">
            <div class="map-heading">
                <h2>Evani theme</h2>
            </div>
            <div id="map">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7050398.573097836!2d68.9966984!3d30.36295725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38db52d2f8fd751f%3A0x46b7a1f7e614925c!2sPakistan!5e0!3m2!1sen!2s!4v1731238463738!5m2!1sen!2s"
                    style="border: 1px solid black">
                </iframe>
            </div>
        </div>
    </div>

    <!-- CONTACT-MAP-SECTION START  -->

@endsection
