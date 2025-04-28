<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/awesome.min.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/unpkg.swiper.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('frontend/assets/css/leaflet.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/webfonts/all.min.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/webfonts/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">

    <title> Forever Modest</title>

    <link rel="icon" href="{{ url('frontend/assets/images/head/logo/shape-1.png') }}">

</head>

<body>

    <!-- HEADER-SECTION START  -->

    <header class="header-section">
        <div class="top-bar">
            <div class="container d-flex align-items-center justify-content-between">
                <div class="top-bar-contact d-flex align-items-center">
                    <ul class="d-flex align-items-center">
                        <li><a href="tel:+92 3212771497"><i class="fa-solid fa-phone"></i>+92 3212771497</a></li>
                        <li><a href="mailto:fatimakanwal490@gmail.com"><i class="fa-regular fa-envelope"></i>ForeverModest@gmail.com</a></li>
                        <li><a href=""><i class="fa-sharp fa-solid fa-location-dot"></i>Locate Our Shop</a></li>
                    </ul>
                </div>
                <div class="top-bar-social d-flex align-items-center">
                    <ul class="view-switcher d-flex align-items-center">
                        <li class="currency-dropdown">
                            <span id="selected-currency">RS <i class="fa-solid fa-angle-down"></i></span>
                            <ul class="forevermodest-currency">
                                <li><a href="#" data-currency="EUR">Euro</a></li>
                                <li><a href="#" data-currency="RS">Rupees</a></li>
                                <li><a href="#" data-currency="USD">USD</a></li>
                            </ul>
                        </li>
                        <li class="language-dropdown">
                            <span id="selected-language">PK <i class="fa-solid fa-angle-down"></i></span>
                            <ul class="forevermodest-language">
                                <li><a href="#" data-lang="EN">English</a></li>
                                <li><a href="#" data-lang="PK">Pakistani</a></li>
                                <li><a href="#" data-lang="GER">German</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                    <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Function to update currency selection
                        function updateCurrency(currency) {
                            localStorage.setItem("selectedCurrency", currency);
                            document.getElementById("selected-currency").innerHTML = currency + ' <i class="fa-solid fa-angle-down"></i>';
                            // Call a function here to update prices if necessary
                        }
                    
                        // Function to update language selection
                        function updateLanguage(language) {
                            localStorage.setItem("selectedLanguage", language);
                            document.getElementById("selected-language").innerHTML = language + ' <i class="fa-solid fa-angle-down"></i>';
                            // You can reload the page or update the language dynamically here
                        }
                    
                        // Load stored values
                        let storedCurrency = localStorage.getItem("selectedCurrency");
                        let storedLanguage = localStorage.getItem("selectedLanguage");
                    
                        if (storedCurrency) updateCurrency(storedCurrency);
                        if (storedLanguage) updateLanguage(storedLanguage);
                    
                        // Event listeners for currency selection
                        document.querySelectorAll(".forevermodest-currency a").forEach(item => {
                            item.addEventListener("click", function (e) {
                                e.preventDefault();
                                updateCurrency(this.getAttribute("data-currency"));
                            });
                        });
                    
                        // Event listeners for language selection
                        document.querySelectorAll(".forevermodest-language a").forEach(item => {
                            item.addEventListener("click", function (e) {
                                e.preventDefault();
                                updateLanguage(this.getAttribute("data-lang"));
                            });
                        });
                    });
                    </script>
                    <ul class="social-icon d-flex align-items-center">
                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-wrapper">
            <div class="header-middle">
                <div class="container d-flex align-items-center justify-content-between">
                    <div class="forevermodest-brand">
                        <a href="index-2.html">

                            <img src="{{ url('frontend/assets/images/header/logo/LOGO 2.png') }}" alt="header">
                        </a>
                    </div>
                    <style>
                        .forevermodest-search-form {
                            position: relative;
                            width: 100%;
                            max-width: 400px;
                            margin: 0 auto;
                        }
                    
                        .search-product {
                            width: 100%;
                            background: #f8f9fa;
                            border: 1px solid #ddd;
                            border-radius: 25px;
                            padding: 10px 15px;
                            display: flex;
                            align-items: center;
                            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
                        }
                    
                        .search-product input {
                            flex: 1;
                            border: none;
                            outline: none;
                            background: transparent;
                            font-size: 16px;
                            padding-left: 10px;
                        }
                    
                        .search-product button {
                            background: #ff6f61;
                            border: none;
                            border-radius: 50%;
                            width: 40px;
                            height: 40px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            cursor: pointer;
                            transition: 0.3s ease;
                        }
                    
                        .search-product button i {
                            color: #fff;
                            font-size: 18px;
                        }
                    
                        .search-product button:hover {
                            background: #ff3f3f;
                        }
                    
                        /* Responsive Design */
                        @media (max-width: 768px) {
                            .forevermodest-search-form {
                                max-width: 300px;
                            }
                        }
                    </style>
                    
                    <div class="forevermodest-search-form">
                        <form class="search-product" id="search-product" action="{{url('single-product')}}" method="GET">
                            <input type="text" name="query" placeholder="Search for products...">
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    
                    <div class="inner-wrapper">
                        <ul class="d-flex align-items-center">
                            <li class="search-popup">
                                <a class="header-popup d-flex align-items-center" id="header-popup" href="#"><span
                                        class="log-in-text"><i class="fa-solid fa-magnifying-glass"></i></span></a>
                                <div class="popup-wraper">
                                    <div class="view-popup">
                                        <label class="close-btn fas fa-times popup-label"></label>
                                        <label class="la-search-pr">Search Product</label>
                                        <form class="search-product d-flex align-items-center justify-content-between"
                                            action="{{url('single-product')}}" method="GET">
                                            <input type="text" name="query"
                                                placeholder="Type to search i.e “sunglass”...">
                                            <button type="submit">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="log-in header-popup log-in-btn d-flex align-items-center" id="header-popup1"
                                    href="#"><span class="log-in-text">log in</span><i
                                        class="fa-solid fa-user"></i></a>
                                <div class="popup-wraper1">
                                    <div class="view-popup">
                                        <label class="close-btn fas fa-times popup-label"></label>
                                        <h6>Login</h6>
                                        <form action="{{ route(name: 'login.submit') }}" method="POST">
                                            @csrf

                                            <!-- Email Field -->
                                            <div class="mb-2">
                                                <label for="email" class="form-label" style="font-size: 14px;">Email:</label>
                                                <input
                                                    type="email"
                                                    class="form-control form-control-sm"
                                                    id="email"
                                                    name="email"
                                                    required
                                                    style="font-size: 14px; padding: 5px;">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>

                                            <!-- Password Field -->
                                            <div class="mb-2">
                                                <label for="password" class="form-label" style="font-size: 14px;">Password:</label>
                                                <input
                                                    type="password"
                                                    class="form-control form-control-sm"
                                                    id="password"
                                                    name="password"
                                                    required
                                                    style="font-size: 14px; padding: 5px;">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                            <!-- Remember Me Checkbox and Forgot Password Link -->
                                            <div class="d-flex justify-content-between align-items-center mb-2" style="font-size: 12px;">
                                                <div class="d-flex align-items-center">
                                                    <input
                                                        type="checkbox"
                                                        class="form-check-input"
                                                        id="remember"
                                                        name="remember"
                                                        style="width: 17px; height: 22px;">
                                                    <label for="remember" class="ms-1">Remember me</label>
                                                </div>
                                                <a href="{{ route('password.request') }}" class="text-decoration-none" style="font-size: 12px;">Forgot password?</a>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-warning text-white" style="font-size: 14px; padding: 5px 10px;">LOGIN</button>
                                            </div>
                                        </form>



                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="sign-up header-popup d-flex align-items-center" id="header-popup2"
                                    href="#"><span class="log-in-text">sign up</span></a>
                                <div class="popup-wraper2">
                                    <div class="view-popup">
                                        <label class="close-btn fas fa-times popup-label"></label>
                                        <h6>Sign Up</h6>

                                        <form action="{{ route('signup') }}" method="POST">
                                            @csrf

                                            <!-- Username Field -->
                                            <div class="mb-2">
                                                <label for="username" class="form-label" style="font-size: 14px;">Username:</label>
                                                <input
                                                    type="text"
                                                    class="form-control form-control-sm"
                                                    id="username"
                                                    name="username"
                                                    required
                                                    style="font-size: 14px; padding: 5px;">
                                                @if ($errors->has('username'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>

                                            <!-- Email Field -->
                                            <div class="mb-2">
                                                <label for="email" class="form-label" style="font-size: 14px;">Email:</label>
                                                <input
                                                    type="email"
                                                    class="form-control form-control-sm"
                                                    id="email"
                                                    name="email"
                                                    required
                                                    style="font-size: 14px; padding: 5px;">
                                                @if ($errors->has('email'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>

                                            <!-- Password Field -->
                                            <div class="mb-2">
                                                <label for="password" class="form-label" style="font-size: 14px;">Password:</label>
                                                <input
                                                    type="password"
                                                    class="form-control form-control-sm"
                                                    id="password"
                                                    name="password"
                                                    required
                                                    style="font-size: 14px; padding: 5px;">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                            <!-- Confirm Password Field -->
                                            <div class="mb-2">
                                                <label for="password_confirmation" class="form-label" style="font-size: 14px;">Confirm Password:</label>
                                                <input
                                                    type="password"
                                                    class="form-control form-control-sm"
                                                    id="password_confirmation"
                                                    name="password_confirmation"
                                                    required
                                                    style="font-size: 14px; padding: 5px;">
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="text-danger" style="font-size: 12px;">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-warning text-white" style="font-size: 14px; padding: 5px 10px;">SIGN UP</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                            <li class="product-cart">
                                <a href="#" class="cart-icon" id="toggleButton"><i
                                        class="fa-solid fa-cart-shopping"></i><span class="cart-number">0</span></a>
                                <div class="view-cart content" id="content">
                                    <div class="cart-title d-flex align-items-center justify-content-between">
                                        <span class="product-item">1 ITEM</span>
                                        <a href="{{ url('shopping-cart') }}">View cart</a>
                                    </div>
                                    <div class="product-item d-flex justify-content-between">
                                        <div class="product-inner">
                                            <a href="#" class="d-block">Brown Bag</a>
                                            <span>1*199.00</span>
                                        </div>
                                        <div class="product-img">
                                            <img src="{{ url('frontend/assets/images/header/cart/shape-1.png') }}"
                                                alt="header">
                                            <a href="#">
                                                <span><i class="fa-solid fa-x"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-item d-flex justify-content-between">
                                        <div class="product-inner">
                                            <a href="#" class="d-block">Brown Bag</a>
                                            <span>1*199.00</span>
                                        </div>
                                        <div class="product-img">
                                            <img src="{{ url('frontend/assets/images/header/cart/shape-2.png') }}"
                                                alt="header">
                                            <a href="#">
                                                <span><i class="fa-solid fa-x"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub-total d-flex align-items-center justify-content-between">
                                        <span>Subtotal:</span>
                                        <span>$199.00</span>
                                    </div>
                                    <div class="popup-btn">
                                        <a href="#" class="popup-link">Checkout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mega-menu-wrapper">
                <div class="container">
                    <div class="wrapper-items d-flex align-items-center">
                        <!-- menu start here -->
                        <div class="header-item item-left">
                            <div class="menu-overlay">
                            </div>
                            <nav class="nav-menu">
                                <div class="mobile-menu-head">
                                    <div class="go-back"><i class="fa fa-angle-left"></i></div>
                                    <div class="current-menu-title"></div>
                                    <div class="mobile-menu-close"><i class="fa-solid fa-x"></i></div>
                                </div>
                                <ul class="menu-items">
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('index') }}" class="nav-link  active ">Home </a>

                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('shop') }}" class="nav-link">Shop <i
                                                class="fa fa-angle-down"></i></a>
                                        <div class="sub-menu mega-menu mega-menu-column-4">
                                            <div class="list-item">
                                                <h4 class="title">Men's Fashion</h4>
                                                <ul>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Men's T-Shirt</a>
                                                    </li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Men's Suit</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Casual Shirts</a>
                                                    </li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Men's Jeans</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Men's shoes</a></li>
                                                </ul>
                                                <h4 class="title">Men's Beauty</h4>
                                                <ul>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Face Care</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Hair care</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Body care</a></li>
                                                </ul>
                                            </div>
                                            <div class="list-item">
                                                <h4 class="title">Women's Fashion</h4>
                                                <ul>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Night Gown</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Soft Towel</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Fashion Dress</a>
                                                    </li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Women's Bag</a></li>
                                                </ul>
                                                <h4 class="title">Women's Beauty</h4>
                                                <ul>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Face Care</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Lip Make-up</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Hand care</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Cross-body Bags</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-item">
                                                <h4 class="title">Home, Kitchen</h4>
                                                <ul>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Kitchen
                                                            Appliances</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Lights &
                                                            Electrical</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Basket & Bucket</a>
                                                    </li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Kitchen
                                                            Accessories</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Box & Container</a>
                                                    </li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Disposables</a></li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Rack & Organizer</a>
                                                    </li>
                                                    <li><a href="{{ route('shopwithsidebar') }}">Gardening</a></li>
                                                </ul>
                                            </div>
                                            <div class="list-item">
                                                <img src="{{ url('frontend/assets/images/header/shop/shape-1.png') }}"
                                                    alt="header">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{ url('collection') }}" class="nav-link">Collections <i
                                                class="fa fa-angle-down"></i></a>
                                        <div class="sub-menu mega-menu mega-menu-column-4">
                                            <div class="list-item text-center">
                                                <a href="{{ url('collection') }}">
                                                    <img src="{{ url('frontend/assets/images/header/collection/shape-1.png') }}"
                                                        alt="header">
                                                    <h4 class="title">Men's T-Shirt</h4>
                                                </a>
                                            </div>
                                            <div class="list-item text-center">
                                                <a href="{{ url('collection') }}">
                                                    <img src="{{ url('frontend/assets/images/header/collection/shape-2.png') }}"
                                                        alt="header">
                                                    <h4 class="title">Women's Bag</h4>
                                                </a>
                                            </div>
                                            <div class="list-item text-center">
                                                <a href="{{ url('collection') }}">
                                                    <img src="{{ url('frontend/assets/images/header/collection/shape-3.png') }}"
                                                        alt="header">
                                                    <h4 class="title">Ball Gown</h4>
                                                </a>
                                            </div>
                                            <div class="list-item text-center">
                                                <a href="{{ url('collection') }}">
                                                    <img src="{{ url('frontend/assets/images/header/collection/shape-4.png') }}"
                                                        alt="header">
                                                    <h4 class="title">Night Gown</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ url('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- menu end here -->
                        <div class="header-item item-right">
                            <a href="{{ route('faqs') }}"><i class="fa-solid fa-headset"></i>Help & Support</a>
                            <div class="mobile-menu-trigger">
                                <span></span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- HEADER-SECTION END  -->
