<x-frontend.frontend-layout>
    <style>
        /* Logo design */
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

        /* Tagline */
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

        /* Card design */
        .sector-card {
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 20px;
            padding: 10px;
            text-align: center;
            background-color: #fff;
        }

        .sector-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .sector-card img {
            border-radius: 8px;
            height: 65%;
            width: 52%;
            object-fit: cover;
        }

        .sector-card .card-body {
            padding: 15px;
            text-align: center;
        }

        .sector-card .card-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        /* Grid setup for smaller cards */
        .sector-card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            padding: 20px;
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

    <!-- Banner section start -->
    <section class="common-banner" style="padding-bottom: 60px;">
        <div class="container">
            <div class="row">
                <div class="common-banner__content text-center">
                    <div style="text-align:left;">
                        <h3 style="color:#e98f09;">
                            <b>Happening Now</b></h3>
                        <br><br>
                        <h5 class="title-animation" style="margin-top: 2%;">Stay in the loop. Make a move</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-bg">
            <img src="{{ asset('frontend/assets/images/aboutus/events.jpeg') }}" alt="Image">
        </div>
        <div class="shape">
            <img src="assets/images/shape.png" alt="Image">
        </div>
    </section>

    <!-- Event section start -->
    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-12 col-xl-12">
                    <div class="section__header text-center" data-aos-duration="1000">
                        <h4 style="display: block; text-align: center; color:#046a58;"><b>Bridging hearts building relations</b></h4>
                        <h2 class="title-animation">Meet Our <span>Sectors</span></h2>
                    </div>
                </div>
            </div>
            <div class="sector-card-container">
                @foreach($sectorlists as $sector)
                    <div class="sector-card">
                        <img src="{{ $sector->image_path }}" alt="{{ $sector->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $sector->name }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Custom cursor start -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>
    <!-- Scroll to top start -->
    <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
        <span></span>
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </button>
</x-frontend.frontend-layout>
