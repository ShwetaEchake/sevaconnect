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


    /*oval button desing */
    .oval-container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #ffc107;
            padding: 15px 30px;
            border-radius: 50px;
            width: fit-content;
            margin: auto;
            transition: background-color 0.3s ease-in-out;
        }

        .oval-container:hover {
            background-color: #00715d;
        }

        .oval-container a {
            color: white;
            text-decoration: none;
            font-weight: bold;
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

    .cause-two .cause-two__slider-single img {
    width: 90% !important;
    height: 400px !important;
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


             <section class="common-banner" style="padding-bottom: 60px;">
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

                         <div style="text-align: left;">
                            {{-- <span class="sub-title" style="font-size:50px; height:80px; color:#e98f09;">
                                Happening Now
                            </span>
                            <br><br>
                            <h5 class="title-animation">Stay in the loop. Make a move</h5> --}}

                            <h3 style="color:#e98f09;">
                                <b>Happening Now</b></h3>
                            <br><br>
                            <h5 class="title-animation" style="margin-top: 2%;">Stay in the loop. Make a move</h5>
                        </div>

                         {{-- <h4 class="title-animation" style="color: white; font-weight: bold;">Our Events</h4> --}}
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
             <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 col-xl-7">
                   <div class="section__header text-center"  data-aos-duration="1000">

                      {{-- <h2 class="title-animation"> <span>event</span> list</h2> --}}
                      {{-- <span class="sub-title">Bridging hearts building relations</span> --}}
                      <h4 style="display: block; text-align: center; color:#046a58;"><b>Bridging hearts building relations</b></h4>
                       {{-- <h2 class="title-animation">Events, <span>Need & Job Opportunity</span></h2> --}}
                      {{-- <h2 class="title-animation">Checkout our upcoming full <span>event</span> list</h2> --}}
                   </div>
                </div>
             </div>
             <h3 class="text-center" style="margin-top: 20px;"><b>Events</b></h3>
             <p style="text-align:center;">Events are organized gatherings for a specific purpose, such as celebrations, learning, or networking.</p>
             <section class="cause-two" id="event-section" >
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
                                <div class="cause-two__slider swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($list as $event)
                                            <div class="swiper-slide">
                                                <div class="cause-two__slider-single">
                                                    <div class="cause-thumb">
                                                        <img src="{{ asset($event->image_path) }}" alt="Image">
                                                        <a href="{{ route('eventspecific', ['id' => $event->id]) }}">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <div class="cause-two__content-slider swiper">
                                <div class="swiper-wrapper">
                                    @foreach($list as $event)
                                            <div class="swiper-slide">
                                                <div class="cause-content">
                                                    <h6>{{ $event->address }}</h6>
                                                    <p>{{ date('F d, Y', strtotime($event->to_date)) }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="banner__content-cta cta oval-container" >
                <a href="{{ route('events.records', ['help_name' => 'event']) }}" aria-label="view all" title="view">
                    View All <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <br>
            <hr class="m-4" style=" color: var(--base-color); ">




            <h3 class="text-center" style="margin-top: 50px;"><b>Needs</b></h3>
            <p style="text-align:center;">Needs are the essential requirements or necessities for individuals, organizations, or communities.</p>
            <section class="cause-two" id="need-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="cause-two__inner">
                                <div class="slider-navigation">
                                    <button
                                        type="button"
                                        aria-label="prev slide"
                                        title="prev slide"
                                        class="prev-cause-two_need slider-btn"
                                    >
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </button>
                                    <button
                                        type="button"
                                        aria-label="next slide"
                                        title="next slide"
                                        class="next-cause-two_need slider-btn slider-btn-next"
                                    >
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="cause-two__slider_need swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($need_list as $event)
                                            <div class="swiper-slide">
                                                <div class="cause-two__slider-single">
                                                    <div class="cause-thumb">
                                                        <img src="{{ asset($event->image_path) }}" alt="Image">
                                                        <a href="{{ route('eventspecific', ['id' => $event->id]) }}">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <div class="cause-two__content-slider_need  swiper">
                                <div class="swiper-wrapper">
                                    @foreach($need_list as $event)
                                            <div class="swiper-slide">
                                                <div class="cause-content">
                                                    <h6>{{ $event->address }}</h6>
                                                    <p>{{ date('F d, Y', strtotime($event->to_date)) }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="banner__content-cta cta oval-container">
                <a href="{{ route('events.records',  ['help_name' => 'need']) }}" aria-label="view all" title="view">
                    View All <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <br>
            <hr class="m-4" style=" color: var(--base-color); ">
            <h3 class="text-center" style="margin-top: 50px;"><b>Job Opportunity</b></h3>
            <p style="text-align:center;">A job opportunity refers to an available position in a company or organization that requires a candidate to fulfill certain responsibilities.</p>

            <section class="cause-two " id="job-opportunity-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="cause-two__inner">
                                <div class="slider-navigation">
                                    <button
                                        type="button"
                                        aria-label="prev slide"
                                        title="prev slide"
                                        class="prev-cause-two_need slider-btn"
                                    >
                                        <i class="fa-solid fa-arrow-left"></i>
                                    </button>
                                    <button
                                        type="button"
                                        aria-label="next slide"
                                        title="next slide"
                                        class="next-cause-two_need slider-btn slider-btn-next"
                                    >
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="cause-two__slider_job swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($job_opportunity_list as $event)
                                            <div class="swiper-slide">
                                                <div class="cause-two__slider-single">
                                                    <div class="cause-thumb">
                                                        <img src="{{ asset($event->image_path) }}" alt="Image">
                                                        <a href="{{ route('eventspecific', ['id' => $event->id]) }}">
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <div class="cause-two__content-slider_job  swiper">
                                <div class="swiper-wrapper">
                                    @foreach($job_opportunity_list as $event)
                                            <div class="swiper-slide">
                                                <div class="cause-content">
                                                    <h6>{{ $event->address }}</h6>
                                                    <p>{{ date('F d, Y', strtotime($event->to_date)) }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="banner__content-cta cta oval-container mb-5">
                <a href="{{ route('events.records', ['help_name' => 'job_opportunity']) }}" aria-label="view all" title="view">
                    View All <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>


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

             <!-- ==== / color switcher end ==== -->
          </div>

    </x-frontend.frontend-layout>
