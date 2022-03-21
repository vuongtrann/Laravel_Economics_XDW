<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lamada || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--load app.css here-->
    <script src="{{asset('css/app.css') }}" defer></script>
    <!-- Favicon -->
    
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/icons/icon_logo.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/css-plugins-call.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/colors.css">

</head>

<body>


    <!--CONTENT HERE-->
    <div id="app">
        <!-- [if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif] -->

        <!-- Add your site or application content here -->

        <!-- Body main wrapper start -->
        <div class="wrapper home-one">
            <!-- HEADER AREA START -->
            <!-- <header class="header-area"> -->
            <!-- Header top area start -->
            <!-- <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="top-bar-left"> -->
            <!-- welcome -->
            <!-- <div class="welcome">
                                        <p>England's Fastest Online Shopping Destination</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="topbar-nav">
                                    <div class="wpb_wrapper"> -->
            <!-- my account -->
            <!-- <div class="menu-my-account-container">
                                            <a href="#">My Account <i class="ion-ios-arrow-down"></i></a>
                                            <ul>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </div>
                                        <div class="switcher"> -->
            <!-- language-menu -->
            <!-- <div class="language">
                                                <a href="#">
                                                    <img src="assets/images/icons/en.png" alt="language-selector">English
                                                    <i class="ion-ios-arrow-down"></i>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img src="assets/images/icons/fr.png" alt="French">
                                                            <span>French</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> -->
            <!-- currency-menu -->
            <!-- <div class="currency">
                                                <a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                                <ul>
                                                    <li><a href="#">€ EUR</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- Top bar area end -->
            <!-- Header middle area start -->
            <div class="header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-md-12">
                            <!-- site-logo -->
                            <div class="site-logo">
                                <a href='/'><img src="/assets/images/logo/logo.png" alt="Nikado" style="height:70px; width:150px; margin-left:30px;"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <!-- header-search -->
                            <div class="header-search clearfix">

                                <div class="header-search-form">
                                    <form method="get" action="{{route('search')}}">
                                        <input type="text" name="key" placeholder="Search product by name and price...">
                                        <input type="submit" name="submit" value="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <!-- shop-cart-menu -->
                            <div class="shop-cart-menu pull-right" style="color: white; font-size: 15;">



                                @if (Route::has('login'))

                                @auth
                                <div>
                                    <a style="color: white; font-size:15px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        LOGOUT
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                                <cart />

                                @else
                                <span>
                                    <a href="{{ route('login') }}" class="" style="color: white;font-size :medium;">Log in</a>
                                </span>
                                <br>
                                @if (Route::has('register'))
                                <br>
                                <span>
                                    <a href="{{ route('register') }}" style="color: white;font-size :medium;">Register</a>
                                </span>
                                @endif

                                @endauth

                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header middle area end -->
            <!-- Header bottom area start -->
            <div class="header-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 hidden-md hidden-sm pull-left category-wrapper">
                            <div class="categori-menu">

                            </div>
                        </div>
                        <div class="col-lg-9">
                            <!-- main-menu -->
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="current"><a href='/'>Home</a>

                                        </li>
                                        <li><a href="/allProduct">PRODUCT</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                        <li><a href="#">Features <i class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu-3-column">
                                                <li><a href="#">Pages</a>
                                                    <ul>
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="service.html">Services</a></li>
                                                        <li><a href="portfolio.html">Portfolio</a></li>
                                                        <li><a href="faq.html">Frequently Questins</a></li>
                                                        <li><a href="404.html">Error 404</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Blog</a>
                                                    <ul>
                                                        <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                                        <li><a href="blog.html">Sidebar right</a></li>
                                                        <li><a href="single-blog.html">Image Format</a></li>
                                                        <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                                        <li><a href="single-blog-audio.html">Audio Format</a></li>
                                                        <li><a href="single-blog-video.html">Video Format</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-list.html">Shop List View</a></li>
                                                        <li><a href="shop-right.html">Shop Right</a></li>
                                                        <li><a href="single-product.html">Shop Single</a></li>
                                                        <li><a href="cart.html">Shoping Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="mobile-menu-area">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="#">HOME</a>

                                            </li>
                                            <li><a href='layout.allproduct'>PRODUCT</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact-us.html">Contact</a></li>
                                            <li><a href="#">Features</a>
                                                <ul>
                                                    <li><a href="#">Pages</a>
                                                        <ul>
                                                            <li><a href="about-us.html">About Us</a></li>
                                                            <li><a href="service.html">Services</a></li>
                                                            <li><a href="service-2.html">Services Two</a></li>
                                                            <li><a href="portfolio.html">Portfolio</a></li>
                                                            <li><a href="faq.html">Frequently Questins</a></li>
                                                            <li><a href="404.html">Error 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Blog</a>
                                                        <ul>
                                                            <li><a href="blog-no-sidebar.html">None Sidebar</a></li>
                                                            <li><a href="blog.html">Sidebar right</a></li>
                                                            <li><a href="single-blog.html">Image Format</a></li>
                                                            <li><a href="single-blog-gallery.html">Gallery Format</a></li>
                                                            <li><a href="single-blog-audio.html">Audio Format</a></li>
                                                            <li><a href="single-blog-video.html">Video Format</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shop</a>
                                                        <ul>
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="shop-list.html">Shop List View</a></li>
                                                            <li><a href="shop-right.html">Shop Right</a></li>
                                                            <li><a href="single-product.html">Shop Single</a></li>
                                                            <li><a href="cart.html">Shoping Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header bottom area end -->
            <!-- </header> -->
            @if(isset($singleData))

            <div class="entry-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="entry-title">{{$singleData->name}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page title end -->
            <!-- Single product area -->
            <div class="single-product-area">
                <div class="container">
                    <div class="single-product-wrapper">
                        <div class="row">
                            <div class="col-xs-12 col-md-7 col-lg-7">
                                <div class="product-details-img-content">
                                    <div class="product-details-tab mr-40">
                                        <div class="product-details-large tab-content">
                                            <div class="tab-pane active" id="pro-details1">
                                                <div class="product-popup">
                                                    <a href="/assets/images/product/single/product4.jpg">
                                                        <img src="/assets/images/product/{{$singleData->image_name}}" alt="">
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5 col-lg-5">
                                <div class="single-product-info">
                                    <h1>{{$singleData->name}}</h1>
                                    <div class="product-rattings">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-half-o"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </div>
                                    <span class="price">
                                        <del>$ {{$singleData->price}}</del> $ {{$singleData->sale_price}}
                                    </span>
                                    <p>{{$singleData->description}}</p>
                                    <div >
                                    <add-to-cart-button product-id="{{$singleData->id}}"
                                        user-id="{{auth()->user()->id ?? 0}}"
                                    />
                                    </div>

                                    <div class="product_meta">
                                        <span class="posted_in">Categories: <a href="#" rel="tag">Accessories</a>, <a href="#" rel="tag">Clothings</a></span>
                                    </div>
                                    <div class="single-product-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endif
            
        </div>
    </div>

    <!--END CONTENT HERE-->

    <!--Load js here-->
    <script src="{{asset('js/app.js') }}"></script>


    <!-- jQuery CDN -->

    <script src="/assets/js/jquery-1.12.4.min.js"></script>

    <!-- jQuery Local -->


    <!-- Popper min js -->
    <script src="/assets/js/popper.min.js"></script>
    <!-- Bootstrap min js  -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- nivo slider pack js  -->
    <script src="/assets/js/jquery.nivo.slider.pack.js"></script>
    <!-- All plugins here -->
    <script src="/assets/js/plugins.js"></script>
    <!-- Main js  -->
    <script src="/assets/js/main.js"></script>



    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="../../analytics.js" async="" defer=""></script>
  
    <script>
        window.onbeforeunload = function() {
            window.scrollTo(0, 0);
        }
    </script>
</body>

</html>