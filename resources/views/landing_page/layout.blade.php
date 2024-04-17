<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themedox.com/demo/cycure/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Apr 2024 19:22:20 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Spoofix</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="/landing-page/assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="/landing-page/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/landing-page/assets/css/animate.min.css">
        <link rel="stylesheet" href="/landing-page/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/landing-page/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/landing-page/assets/css/odometer.css">
        <link rel="stylesheet" href="/landing-page/assets/css/flaticon.css">
        <link rel="stylesheet" href="/landing-page/assets/css/slick.css">
        <link rel="stylesheet" href="/landing-page/assets/css/default.css">
        <link rel="stylesheet" href="/landing-page/assets/css/style.css">
        <link rel="stylesheet" href="/landing-page/assets/css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header header-style-two">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                    <span class="d-block mx-auto text-warning font-weight-bold" style="font-size: 40px; ">Spoo<span style="color: white;">fix</span></span>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="#">Home</a>
                                                <ul class="sub-menu">
                                                    <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/about">About</a></li>
                                            <li><a href="/services">Services</a></li>
                                            <li><a href="/contacts">contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-social">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="offcanvas-btn">
                                        <a href="#"><img src="/landing-page/assets/img/icons/dots.png" alt="Icon"></a>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="/landing-page/assets/img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- offCanvas-start -->
            <div class="offCanvas-wrap">
                <div class="offCanvas-toggle"><img src="/landing-page/assets/img/icons/cross.svg" alt="icon"></div>
                <div class="offCanvas-body">
                    <div class="offCanvas-content">
                        <h3 class="title">Digital safety <span>starts here</span> for both commercial and personal</h3>
                        <p>Nam libero tempore, cum soluta nobis eligendi cumque quod placeat facere possimus assumenda omnis dolor repellendu sautem temporibus officiis</p>
                    </div>
                    <div class="offcanvas-contact footer-contact-info">
                        <h4 class="number">+1 488 246 5357</h4>
                        <h4 class="email">cycure.agency@mail.com</h4>
                        <p>3828 Delmas Terrace, Culver City, <br> CA, United States</p>
                        <ul class="footer-social list-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="offCanvas-overlay"></div>
            <!-- offCanvas-end -->

        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main class="main-area fix">
        @yield('content')
        @show
        </main>
        <!-- main-area-end -->


        <!-- footer-start -->
        <footer class="footer-area footer-bg" data-background="assets/img/bg/footer_bg.jpg">
            <div class="container">
                <div class="footer-top-wrap">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget">
                                <div class="footer-contact-info">
                                    <h4 class="number">+1 488 246 5357</h4>
                                    <h4 class="email">cycure.agency@mail.com</h4>
                                    <p>3828 Delmas Terrace, Culver City, <br> CA, United States</p>
                                    <ul class="footer-social list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-4 column-2">
                            <div class="footer-widget">
                                <h4 class="fw-title">Quick Links</h4>
                                <ul class="footer-link">
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="srevices.html">Case Studies</a></li>
                                    <li><a href="contact.html">Terms & Conditions</a></li>
                                    <li><a href="contact.html">Privacy Poilicy</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-4 column-3">
                            <div class="footer-widget">
                                <h4 class="fw-title">Our Services</h4>
                                <ul class="footer-link">
                                    <li><a href="services-details.html">Spyware Protection</a></li>
                                    <li><a href="services-details.html">Fast Cloud Backup</a></li>
                                    <li><a href="services-details.html">Database Security</a></li>
                                    <li><a href="services-details.html">Transaction Security</a></li>
                                    <li><a href="services-details.html">Spambot Shield</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-6 col-sm-7">
                            <div class="footer-widget">
                                <form action="#" class="newsletter-form">
                                    <div class="form-grp">
                                        <input type="email" required placeholder="Your email address">
                                    </div>
                                    <button type="submit" class="btn">Subscribe now <span class="shape"></span></button>
                                    <p class="newsletter-alert"><span>*</span> Don't worry, we don't spam</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <p class="copyright-text">Copyright ©2023 Design By <span>ThemeDox</span></p>
                </div>
            </div>
        </footer>
        <!-- footer-start-end -->



		<!-- JS here -->
        <script src="/landing-page/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/landing-page/assets/js/bootstrap.min.js"></script>
        <script src="/landing-page/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/landing-page/assets/js/jquery.odometer.min.js"></script>
        <script src="/landing-page/assets/js/jquery.appear.js"></script>
        <script src="/landing-page/assets/js/particles.min.js"></script>
        <script src="/landing-page/assets/js/slick.min.js"></script>
        <script src="/landing-page/assets/js/ajax-form.js"></script>
        <script src="/landing-page/assets/js/wow.min.js"></script>
        <script src="/landing-page/assets/js/main.js"></script>
    </body>

<!-- Mirrored from themedox.com/demo/cycure/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Apr 2024 19:23:59 GMT -->
</html>