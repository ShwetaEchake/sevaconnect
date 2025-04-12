<x-frontend.frontend-layout>
    <style>
           /*logo design*/
           .icon {
       width: 66px;
       height: 65px;
       vertical-align: middle;
       margin-right: 6px;
       image-rendering: crisp-edges;
       image-rendering: -webkit-optimize-contrast;
       object-fit: contain;
    }
    .iconone {
       width: 66px;
       height: 65px;
       vertical-align: middle;
       margin-right: 6px;
       image-rendering: crisp-edges;
       image-rendering: -webkit-optimize-contrast;
       object-fit: contain;
    }


    .calendar-icon {
        color: #ffc107;
    }
    .event-date {
        color: black;
    }

    .location-icon {
        color: #ffc107;
    }
    .event-address {
        color: black;
    }

    /*tagline*/
    .sub-title {
    animation: typing 3s steps(30, end) forwards;
    caret-color: transparent;
}

.title-animation {
    color: white;
    font-weight: bold;
    overflow: hidden;
    white-space: nowrap;
    display: inline-block;
    animation: typing 3s steps(30, end) 1s forwards;
    caret-color: transparent;

}


</style>
<div class="search-popup">
                <button class="close-search" aria-label="close search box" title="close search box">
                <i class="fa-solid fa-xmark"></i>
                </button>
                <form action="#" method="post">
                   <div class="search-popup__group">
                      <input type="text" name="search-field" id="searchField" placeholder="Search...." required="">
                      <button type="submit" aria-label="search products" title="search products">
                      <i class="fa-solid fa-magnifying-glass"></i>
                      </button>
                   </div>
                </form>
             </div>
             <!-- ==== / search popup end ==== -->
             <!-- ==== banner section start ==== -->


             <!-- ==== / banner section end ==== -->
             <!-- ==== event section start ==== -->

             <section class="common-banner"  style="padding-bottom: 60px;">
                <div class="container">
                   <div class="row">
                      <div class="common-banner__content text-center">
                         {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span> --}}
                         {{-- <span class="sub-title">
                            <img src="{{ asset('frontend/assets/images/logo/LogoWhite.jpg') }}"
                                 srcset="{{ asset('frontend/assets/images/logo/LogoWhite@2x.jpg') }} 2x"
                                 alt="Image" class="iconone">
                                 Happening Now - Stay in the loop. Make a move
                         </span> --}}
                         <div style="text-align:left;">
                            <h3 style="color:#e98f09;">
                                <b>Happening Now</b></h3>
                            <br><br>
                            <h5 class="title-animation" style="margin-top: 2%;">Stay in the loop. Make a move</h5>
                        </div>

                         {{-- <h4 class="title-animation" style="color: white; font-weight: bold;">Events Lists</h4> --}}
                      </div>


                   </div>
                </div>
                <div class="banner-bg">
                   <img src="{{ asset('frontend/assets/images/aboutus/events.jpeg') }}" alt="Image">
                </div>
                <div class="shape">
                   <img src="assets/images/shape.png" alt="Image">
                </div>
                {{-- <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
                   <img src="assets/images/sprade-base.png" alt="Image" class="base-img">
                </div> --}}
             </section>

             <section class="" >
                <div class="container">
                   <div class="row justify-content-center mt-5">
                      <div class="col-12 col-md-12 col-xl-12 ">
                         <div class="section__header text-center "data-aos-duration="1000">
                            {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                            people</span> --}}
                            {{-- <span class="sub-title">
                                <img src="{{ asset('frontend/assets/images/logo/LogoColouri.png') }}"
                                     srcset="{{ asset('frontend/assets/images/logo/LogoColouri@2x.png') }} 2x"
                                     alt="Image" class="icon">
                                Bridging hearts, building relations
                             </span> --}}
                             {{-- <span class="sub-title">Bridging hearts building relations</span> --}}
                             <h4 style="display: block; text-align: center; color:#046a58;"><b>Bridging hearts building relations</b></h4>
                            <h2 class="title-animation" style="text-align: center;">our upcoming full <span>event</span> list</h2>
                         </div>
                      </div>
                   </div>
                    <div class="row gutter-30">

                    </div>
                </div>
                {{-- <div class="spade">
                   <img src="assets/images/blog/spade-base.png" alt="Image" class="base-img">
                </div> --}}
             </section>

             <section class="cause-two" id="event-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="cause-two__inner">
                                <div class="slider-navigation">
                                    <button
                                        type="button"
                                        aria-label="prev slide"
                                        title="prev slide"
                                        class="prev-cause-two slider-btn"
                                    >
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </button>
                                    <button
                                        type="button"
                                        aria-label="next slide"
                                        title="next slide"
                                        class="next-cause-two slider-btn slider-btn-next"
                                    >
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="cause-two__slider swiper" >
                                    <div class="swiper-wrapper">
                                        @foreach($eventsrecords as $eventrec)
                                            <div class="swiper-slide">
                                                <div class="cause-two__slider-single ">
                                                    <div class="cause-thumb">
                                                        <img src="{{ asset($eventrec->image_path) }}" alt="Image">
                                                        <a href="{{ route('eventspecific', ['id' => $eventrec->id]) }}">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <div class="cause-two__content-slider swiper mb-1">
                                <div class="swiper-wrapper">
                                    @foreach($eventsrecords as $eventrec)
                                            <div class="swiper-slide">
                                                <div class="cause-content">
                                                    <h4>{{ $eventrec->help_name }}</h4>
                                                    <p>{{ date('F d, Y', strtotime($eventrec->to_date)) }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
             <!-- ==== / event section end ==== -->

             <!-- ==== custom cursor start ==== -->
             <div class="mouseCursor cursor-outer"></div>
             <div class="mouseCursor cursor-inner"></div>
             <!-- ==== / custom cursor end ==== -->
             <!-- ==== scroll to top start ==== -->
             <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
                <span></span>
                <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
                   <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
                </svg>
             </button>
             <!-- ==== / scroll to top end ==== -->
             <!-- ==== color switcher start ==== -->
             {{-- <div class="color-palate">
                <button class="color-trigger">
                <i class="fa-solid fa-gear"></i>
                </button>
                <button class="close-color-trigger">
                <i class="fa-solid fa-xmark"></i>
                </button>
                <div class="color-palate-inner">
                   <div class="various-color clearfix">
                      <h6>Multiple Colors</h6>
                      <br>
                      <div class="colors-list">
                         <span class="palate default-color active" data-theme-file="assets/css/default-theme.css"></span>
                         <span class="palate blue-color" data-theme-file="assets/css/blue-theme.css"></span>
                         <span class="palate brown-color" data-theme-file="assets/css/brown-theme.css"></span>
                         <span class="palate green-color" data-theme-file="assets/css/green-theme.css"></span>
                         <span class="palate orange-color" data-theme-file="assets/css/orange-theme.css"></span>
                         <span class="palate purple-color" data-theme-file="assets/css/purple-theme.css"></span>
                         <span class="palate teal-color" data-theme-file="assets/css/teal-theme.css"></span>
                         <span class="palate yellow-color" data-theme-file="assets/css/yellow-theme.css"></span>
                      </div>
                   </div>
                   <h6>RTL Version</h6>
                   <ul class="rtl-version option-box">
                      <li class="rtl">RTL Version</li>
                      <li>LTR Version</li>
                   </ul>
                   <h6>Boxed Version</h6>
                   <ul class="box-version option-box">
                      <li class="box">Boxed</li>
                      <li>Full width</li>
                   </ul>
                   <h6>Sticky Header</h6>
                   <ul class="header-version option-box">
                      <li class="box">Yes</li>
                      <li>No</li>
                   </ul>
                   <h6>Dark Verion</h6>
                   <ul class="dark-version option-box">
                      <li class="box">Yes</li>
                      <li>No</li>
                   </ul>
                   <div class="purchase-box">
                      <p>You will find much more options for colors and styling in admin panel. This color picker is used
                         only for demonstration purposes.
                      </p>
                      <a href="index.html" class="purchase-box__btn">buy now</a>
                   </div>
                </div>
             </div> --}}
             <!-- ==== / color switcher end ==== -->
          </div>

    </x-frontend.frontend-layout>
