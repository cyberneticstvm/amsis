<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
    <title>AMS Industrial Solutions</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/hover-revel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/timepickers.min.css') }}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="index-eight">
    <!-- header style two -->
    <!-- header seven area start -->
    <header class="header-seven header--sticky">
        <div class="container container-header-7">
            <div class="row">
                <div class="col-12">
                    <!-- header top area -->
                    <div class="header-top-area">
                        <div class="left">
                            <i class="fa-sharp fa-solid fa-bolt"></i>
                            <span>Simple, easy and innovative EPC solutions in the industry</span>
                        </div>
                        <div class="end-top">
                            <div class="single-info">
                                <div class="icon"><i class="fa-thin fa-location-dot"></i> </div>
                                <p>Kunnicode, Kollam, Kerala - 691508</p>
                            </div>
                            <div class="single-info">
                                <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                                <a href="mailto:mva@amsisindia.com">mva@amsisindia.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- header top end -->
                    <div class="header-main">
                        <div class="logo-area">
                            <a href="/" class="logo">
                                <img src="{{ asset('assets/images/logo/logo-amsis.jpg') }}" alt="logo-amsis">
                            </a>
                        </div>
                        <div class="menu-area-start">
                            <!-- header style two -->
                            <!-- nav area start -->
                            <div class="main-nav-desk nav-area">
                                <nav>
                                    <ul>
                                        <li class="menu-item">
                                            <a class="nav-item" href="/">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="/about">About Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="/services">Services</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="/sustainability">Sustainability</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="/careers">Careers</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="nav-item" href="/contact">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- nav-area end -->
                            <!-- header style two End -->
                        </div>
                        <div class="right-area">
                            <div class="menu-area ml--30 ml_md--15 ml_sm--10" id="menu-btn">
                                <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0H5V6H0V0Z" fill="#D9D9D9" />
                                    <path d="M0 11H5V17H0V11Z" fill="#D9D9D9" />
                                    <path d="M0 22H5V28H0V22Z" fill="#D9D9D9" />
                                    <path d="M12 0H17V6H12V0Z" fill="#D9D9D9" />
                                    <path d="M24 0H29V6H24V0Z" fill="#D9D9D9" />
                                    <path d="M12 11H17V17H12V11Z" fill="#D9D9D9" />
                                    <path d="M12 22H17V28H12V22Z" fill="#D9D9D9" />
                                    <path d="M24 11H29V17H24V11Z" fill="#D9D9D9" />
                                    <path d="M24 22H29V28H24V22Z" fill="#D9D9D9" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header seven area end -->
    <!-- header style two End -->
    @yield("content")
    <!-- side bar start -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="assets/images/banner/04.jpg" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-seconday">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="/" class="main">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="main">About Us</a>
                    </li>
                    <li>
                        <a href="/services" class="main">Services</a>
                    </li>
                    <li>
                        <a href="/sustainability" class="main">Sustainability</a>
                    </li>
                    <li>
                        <a href="/careers" class="main">Careers</a>
                    </li>
                    <li>
                        <a href="/contact" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- side bar end -->

    <!-- rts footer area start -->
    <div class="rts-footer-two footer-8 rts-section-gap2Top">
        <div class="container">
            <div class="row g-0 main-ftop-wrapper mb--70">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <!-- single fil footer eight -->
                    <div class="single-fill-footer logo">
                        <h5 class="text-center text-white">AMSIS INDIA</h5>
                        <!-- single fil footer eight end -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <!-- single fil footer eight -->
                    <div class="single-fill-footer info">
                        <div class="icon">
                            <i class="fa-sharp fa-solid fa-phone"></i>
                        </div>
                        <div class="info">
                            <span>Phone Number</span>
                            <a href="#">0475 2999599</a>
                        </div>
                        <!-- single fil footer eight end -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <!-- single fil footer eight -->
                    <div class="single-fill-footer info">
                        <div class="icon">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <div class="info">
                            <span>Email Us Here</span>
                            <a href="#">mva@amsisindia.com</a>
                        </div>
                        <!-- single fil footer eight end -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <!-- single fil footer eight -->
                    <div class="single-fill-footer info">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info">
                            <span>Office Address</span>
                            <a href="#">Kunnicode, Kollam, Kerala - 691508</a>
                        </div>
                        <!-- single fil footer eight end -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- ,main footer area start -->
                    <div class="main-footer-wrapper-two">
                        <div class="single-footer-wized-two logo-area" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                            <h6 class="title">About Company</h6>
                            <p class="disc-f">
                            Our comprehensive technologies, products and services, enable our multidisciplinary teams of experts to cater to Industries, Institutions, Municipalities, Communities, and Homes.
                            </p>
                            <div class="rts-social-wrapper-three">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-footer-wized-two pages" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                            <div class="footer-header-two pages">
                                <h6 class="title">Useful Links</h6>
                                <div class="pages">
                                    <ul>
                                        <li><a href="about.html"><i class="fa-solid fa-arrow-right"></i> About Us</a></li>
                                        <li><a href="project.html"><i class="fa-solid fa-arrow-right"></i> Our Projects</a></li>
                                        <li><a href="service.html"><i class="fa-solid fa-arrow-right"></i>Our Services</a></li>
                                        <li><a href="team.html"><i class="fa-solid fa-arrow-right"></i> Our Team</a></li>
                                        <li><a href="contact.html"><i class="fa-solid fa-arrow-right"></i> Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-footer-wized-two pages" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                            <div class="footer-header-two pages">
                                <h6 class="title">What We Do</h6>
                                <div class="pages">
                                    <ul>
                                        <li><a href="#"><i class="fa-solid fa-arrow-right"></i> Cleaning Service</a></li>
                                        <li><a href="#"><i class="fa-solid fa-arrow-right"></i> Plumbing Service</a></li>
                                        <li><a href="#"><i class="fa-solid fa-arrow-right"></i>Roofing Services</a></li>
                                        <li><a href="#"><i class="fa-solid fa-arrow-right"></i>Electrical Service</a></li>
                                        <li><a href="#"><i class="fa-solid fa-arrow-right"></i> Air Conditionar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-footer-wized-two newsletter" data-sal="slide-up" data-sal-delay="550" data-sal-duration="800">
                            <div class="footer-header-two newsletter">
                                <h6 class="title">Newsletter</h6>
                                <p class="letters">
                                    Aplications prodize before front end ortals visualize front end
                                </p>
                                <form class="subscribe-2-footer">
                                    <input type="email" required placeholder="Email Address">
                                    <button class="rts-btn btn-primary">Subscribe Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ,main footer area end -->
                </div>
            </div>
        </div>
        <div class="menu-row-wrapper mt--80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-wrapper-footer-row">
                            <!-- single menu wrapper -->
                            <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <a href="about.html">About Us</a>
                            </div>
                            <!-- single menu wrapper end -->
                            <!-- single menu wrapper -->
                            <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <a href="project.html">Projects</a>
                            </div>
                            <!-- single menu wrapper end -->
                            <!-- single menu wrapper -->
                            <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <a href="safety.html">Updates</a>
                            </div>
                            <!-- single menu wrapper end -->
                            <!-- single menu wrapper -->
                            <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <a href="vision.html">Mission</a>
                            </div>
                            <!-- single menu wrapper end -->
                            <!-- single menu wrapper -->
                            <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <a href="blog-list.html">Inside</a>
                            </div>
                            <!-- single menu wrapper end -->
                            <!-- single menu wrapper -->
                            <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <a href="contact.html">Contact</a>
                            </div>
                            <!-- single menu wrapper end -->
                            <!-- single menu wrapper -->
                            <div class="single-menu" data-sal="zoom-in" data-sal-delay="150" data-sal-duration="800">
                                <a href="company-story.html">History</a>
                            </div>
                            <!-- single menu wrapper end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- copy right area start -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-footer-two">
                            <p class="disc">
                                © {{ date('Y') }} AMSIS India. All rights reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer area end -->

    <!-- header style two -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- progress area end -->

    <!-- cart area start -->
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image1.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Construct Map</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image2.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name"> Bridge product</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">$88.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/slider/image5.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Labour helmet</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">$289.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
            FOR FREE SHIPPING</span>
            <span class="total-price">TOTAL: <span class="price">$556</span></span>
            <a href="checkout.html" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href="cart.html" class="view-btn cart-btn">VIEW CART</a>
        </div>
    </div>
    <!-- cart area edn -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>


    <div id="anywhere-home" class="">
    </div>

    <!-- pre loader start -->
    <div id="elevate-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->


    <!-- jquery js -->
    <script src="{{ asset('assets/js/plugins/jquery.min.js') }}"></script>
    <!-- jquery ui -->
    <script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/js/plugins/counter-up.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('assets/js/vendor/twinmax.js') }}"></script>
    <!-- split text js -->
    <script src="{{ asset('assets/js/vendor/split-text.js') }}"></script>
    <!-- text plugins -->
    <script src="{{ asset('assets/js/plugins/text-plugins.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('assets/js/plugins/metismenu.js') }}"></script>
    <!-- waypoint js -->
    <script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
    <!-- waw -->
    <script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
    <!-- aos js -->
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
    <!-- timepickers -->
    <script src="{{ asset('assets/js/plugins/jquery-timepicker.js') }}"></script>
    <!-- sal animation -->
    <script src="{{ asset('assets/js/vendor/sal.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/plugins/jquery-slideNav.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('assets/js/plugins/hover-revel.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('assets/js/plugins/contact-form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- swip image -->
    <script src="{{ asset('assets/js/plugins/swip-img.js') }}"></script>
    <!-- header style two End -->

</body>

</html>