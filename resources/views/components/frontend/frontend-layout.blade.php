<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- required meta -->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- #favicon -->
      <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logo/LogoColouri.png') }}" type="image/x-icon">
      <link rel="icon" href="{{ asset('frontend/assets/images/logo/LogoColouri.png') }}" type="image/x-icon">
      <!-- #title -->

      <title>Seva Connect</title>
      <!-- #keywords -->
      <meta name="keywords" content="charity, nonprofit, fundraising, donation, html, bootstrap, scss">
      <!-- #description -->
      <meta name="description" content="Nonprofit NGO Fundraising HTML5 Template">
      <!-- google fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
      <link href="../../../css2?family=Caveat:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
      <!-- main css -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

      <!-- responsive css -->

      <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css')}}">
      <!-- color themes -->

      <link rel="stylesheet" href="{{ asset('frontend/assets/css/default-theme.css') }}" id="switch-color">
      <!-- want sticky header -->

      <link rel="stylesheet" href="{{ asset('frontend/assets/css/sticky-header.css')}}">

      <!-- box layout css -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/box-layout.css') }}">

      <!-- dark mode css -->

      <link rel="stylesheet" href="{{ asset('frontend/assets/css/dark-mode.css') }}">
      <!-- rtl css -->

      <link rel="stylesheet" href="{{ asset('frontend/assets/css/rtl.css') }}">
      <!--frontend ka design isme hai -->

      <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">

   </head>


   @stack('styles')
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>

    <!--preloader code-->
        <div class="page-wrapper">
            <!-- ==== preloader start ==== -->
            <div class="preloader">
                <img src="{{asset('frontend/assets/images/logo/logseva.gif')}}" style="width:500px;">
             </div>
            <!--end pre loader-->
            <!-- ==== / preloader end ==== -->


    <!-- Page Wrapper Start -->
    <div class="page-wrapper">

        <!-- Header Start -->
        <x-frontend.frontend-header/>


        <!-- Header End -->
        {{ $slot }}
        <!-- Page Body Start -->


            <!-- Footer Start -->
        <x-frontend.frontend-footer/>
            <!-- Footer End -->

            <!-- Main Content Slot -->


            <!-- Footer -->


        <!-- Page Body End -->

    </div>
    <!-- Page Wrapper End -->

    <!-- Image Preview Modal -->
    <section>
        <div id="myModal" class="modal">
            <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
    </section>

    <!-- ==== js dependencies start ==== -->
      <!-- jquery -->

      <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
      <!-- bootstrap five js -->

      <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
      <!-- nice select js -->

      <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
      <!-- magnific popup js -->

      <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
      <!-- swiper slider js -->

      <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
      <!-- viewport js -->

      <script src="{{ asset('frontend/assets/js/viewport.jquery.js') }}"></script>
      <!-- odometer js -->

      <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
      <!-- vanilla tilt js -->

      <script src="{{ asset('frontend/assets/js/vanilla-tilt.min.js') }}"></script>
      <!-- aos js -->

      <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
      <!-- splittext js -->

      <script src="{{ asset('frontend/assets/js/SplitText.min.js') }}"></script>
      <!-- scrollto js -->

      <script src="{{ asset('frontend/assets/js/ScrollToPlugin.min.js') }}"></script>
      <!-- scrolltrigger js -->

      <script src="{{ asset('frontend/assets/js/ScrollTrigger.min.js') }}"></script>
      <!-- gsap js -->

      <script src="{{ asset('frontend/assets/js/gsap.min.js') }}"></script>

      <!-- ==== / js dependencies end ==== -->
      <!-- template settings js -->

      <script src="{{ asset('frontend/assets/js/template-settings.js') }}"></script>
      <!-- main js -->

      <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>





</html>
