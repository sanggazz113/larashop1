<!DOCTYPE html>
<html lang="en">
<!-- Phần head dùng chung -->
<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta name="csrf-token" content="{{ csrf_token() }}" />
 <title>@yield('title', 'Trang chủ') - {{ config('app.name', 'Laravel') }}</title>
 <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.png') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/animate.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/bootstrap/css/bootstrap.min.css') }}" />
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/all.min.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/ionicons.min.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/themify-icons.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/linearicons.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/flaticon.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/simple-line-icons.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/owlcarousel/css/owl.carousel.min.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/owlcarousel/css/owl.theme.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/owlcarousel/css/owl.theme.default.min.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/jquery-ui.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/slick.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/slick-theme.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}" />
 <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
 <!-- Hiệu ứng tải trang -->
 <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
 
 <!-- Phần header chứa logo và menu chính -->
 <header class="header_wrap fixed-top header_with_topbar">
        <div class="bottom_header dark_skin main_menu_uppercase">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img class="logo_light" src="public/assets/images/logo_light.png" alt="logo" />
                        <img class="logo_dark" src="public/assets/images/logo_dark.png" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a class="nav-link nav_item" href="index.html">Trang chủ</a></li>
                            <li class="dropdown dropdown-mega-menu">
                                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega menu</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header">Woman's</li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vestibulum sed</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Donec porttitor</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae facilisis</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Curabitur tempus</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vivamus in tortor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header">Men's</li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae ante ante</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Etiam ac rutrum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Quisque condimentum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Curabitur laoreet</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vivamus in tortor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header">Kid's</li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae facilisis</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Quisque condimentum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Etiam ac rutrum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae ante ante</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Donec porttitor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header">Accessories</li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Curabitur tempus</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Quisque condimentum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Vivamus in tortor</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Donec vitae facilisis</a></li>
                                                <li><a class="dropdown-item nav-link nav_item" href="#">Donec porttitor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="d-lg-flex menu_banners">
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="public/assets/images/menu_banner1.jpg" alt="menu_banner1">
                                                <div class="banne_info">
                                                    <h6>10% Off</h6>
                                                    <h4>New Arrival</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="public/assets/images/menu_banner2.jpg" alt="menu_banner2">
                                                <div class="banne_info">
                                                    <h6>15% Off</h6>
                                                    <h4>Men's Fashion</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="public/assets/images/menu_banner3.jpg" alt="menu_banner3">
                                                <div class="banne_info">
                                                    <h6>23% Off</h6>
                                                    <h4>Kids Fashion</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown dropdown-mega-menu">
                                <a class="dropdown-toggle nav-link active" href="#" data-toggle="dropdown">Cửa hàng</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                        <li class="mega-menu-col col-lg-9">
                                            <ul class="d-lg-flex">
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Shop Page Layout</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="index.html">shop List view</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Shop Load More</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Other Pages</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Cart</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item active" href="checkout.html">Checkout</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Wishlist</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="compare.html">compare</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Order Completed</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Product Pages</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Default</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Thumbnails Left</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <div class="header_banner">
                                                <div class="header_banner_content">
                                                    <div class="shop_banner">
                                                        <div class="banner_img overlay_bg_40">
                                                            <img src="public/assets/images/shop_banner.jpg" alt="shop_banner" />
                                                        </div>
                                                        <div class="shop_bn_content">
                                                            <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                                            <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                                            <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="nav-link nav_item" href="contact.html">Liên hệ</a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li>
                            <a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form>
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">
                                    <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div><div class="search_overlay"></div>
                        </li>
                        <li>
                            <a href="{{ route('frontend.dangnhap') }}"><i class="bi bi-person"></i></a>
                        </li>
                        <li class="dropdown cart_dropdown">
                            <a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                            <div class="cart_box dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                    </li>
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                    </li>
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                    <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
 
 @yield('content')
 
 <!-- Phần footer dùng chung -->
 <footer class="footer_dark">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget">
                            <div class="footer_logo">
                                <a href="#"><img src="assets/images/logo_light.png" alt="logo" /></a>
                            </div>
                            <p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
                        </div>
                        <div class="widget">
                            <ul class="social_icons social_white">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Category</h6>
                            <ul class="widget_links">
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Woman</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Best Saller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Contact Info</h6>
                            <ul class="contact_info contact_info_light">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>123 Street, Old Trafford, New South London , UK</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:info@sitename.com">info@sitename.com</a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+ 457 789 789 65</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer border-top-tran">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Bestwebcreator</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer_payment text-center text-lg-right">
                            <li><a href="#"><img src="assets/images/visa.png" alt="visa"></a></li>
                            <li><a href="#"><img src="assets/images/discover.png" alt="discover"></a></li>
                            <li><a href="#"><img src="assets/images/master_card.png" alt="master_card"></a></li>
                            <li><a href="#"><img src="assets/images/paypal.png" alt="paypal"></a></li>
                            <li><a href="#"><img src="assets/images/amarican_express.png" alt="amarican_express"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 <!-- Nút quay về đầu trang -->
 <a href="#" class="scrollup" style="display:none;"><i class="ion-ios-arrow-up"></i></a>
 
 <!-- Phần javascript dùng chung -->
 <script src="{{ asset('public/assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('public/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('public/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('public/assets/js/parallax.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('public/assets/js/hoverparallax.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('public/assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.parallax-scroll.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.dd.min.js') }}"></script>
<script src="{{ asset('public/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('public/assets/js/scripts.js') }}"></script>
</body>
</html>