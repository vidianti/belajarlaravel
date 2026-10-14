<!doctype html>
<html class="no-js" lang="">
    <head>
         @extends('landing.layouts.head')
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/preloader.svg" alt="">
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
        @extends('landing.layouts.header')
        <!-- header-area-end -->


        <!-- main-area -->
        @yield('content')
        <!-- main-area-end -->


        <!-- footer-area -->
       @extends('landing.layouts.footer')
        <!-- footer-area-end -->





		<!-- JS here -->
        @extends('landing.layouts.script')
    </body>
</html>