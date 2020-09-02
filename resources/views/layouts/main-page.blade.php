<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.hasthemes.com/pebona-v1/pebona/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Apr 2020 15:09:32 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pebona - eCommerce HTML5 Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('assets/images/favicon.ico')!!}">


    <!-- CSS files
    ============================================ -->

    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="{!!asset('assets/css/bootstrap.min.css')!!}">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{!!asset('assets/css/ionicons.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/font-awesome.min.css')!!}">
    <link rel="stylesheet" href="{!!asset('assets/css/pe-icon-7-stroke.css')!!}">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="{!!asset('assets/css/plugins.css')!!}">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="{!!asset('assets/css/style.css')!!}">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{!!asset('assets/css/responsive.css')!!}">
</head>

<body>

    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please upgrade your browser to improve your experience.</p>
    <![endif]-->

    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper boxed-layout bgc-offset">

       

        <!-- Start of Header -->
        @include('layouts._share.header-home')
        <!-- End of Header -->

        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">

            <!-- Start of Primary Slider Section -->
            @include('layouts._share.slide-show')
            <!-- End of Primary Slider Section -->

            <!-- Start of Banner Section -->
            @include('layouts._share.banner')
            <!-- End of Banner Section -->

            <!-- Start of New Arrivals Section -->
            @yield('main-product')
            <!-- End of New Arrivals Section -->

            <!-- Start of Instagram Section -->
            @include('layouts._share.follow-intagram')
			<!-- End of Instagram Section -->
        </main>
        <!-- End of Main Content Wrapper -->

        <!-- Start of Footer -->
        @include('layouts._share.footer-home')
        <!-- End of Footer -->

        <!-- Quick View Content Start -->
        <!-- chưa biết là cái gì  ////////////////////////////////////////-->
        <!-- Quick View Content End -->

        <!-- Start of Scroll to Top -->
        <div id="to_top">
            <i class="ion ion-ios-arrow-forward"></i>
            <i class="ion ion-ios-arrow-forward"></i>
        </div>
        <!-- End of Scroll to Top -->
    </div>
    <!-- End of Whole Site Wrapper -->

    <!-- Initializing Photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Photoswipe -->


    <!-- JS
    ============================================ -->

    <!-- jQuery JS -->
    <script src="{!!asset('assets/js/jquery.1.12.4.min.js')!!}"></script>

    <!-- Popper JS -->
    <script src="{!!asset('assets/js/popper.min.js')!!}"></script>

    <!-- Bootstrap JS -->
    <script src="{!!asset('assets/js/bootstrap.min.js')!!}"></script>

    <!-- Plugins JS -->
    <script src="{!!asset('assets/js/plugins.js')!!}"></script>

    <!-- Main JS -->
	<script src="{!!asset('assets/js/main.js')!!}"></script>
	
	 <!-- modernizr JS
    ============================================ -->
    <script src="{!!asset('assets/js/modernizr-2.8.3.min.js')!!}"></script>

</body>

<!-- Mirrored from preview.hasthemes.com/pebona-v1/pebona/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Apr 2020 15:09:37 GMT -->
</html>