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

    /*image zoom out*/
    .lightbox {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    text-align: center;
}

.lightbox-content {
    max-width: 90%;
    max-height: 80vh;
    border-radius: 10px;
    margin-top: 50px;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: white;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}

/* Navigation Arrows */
.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 24px;
    transition: 0.3s;
    user-select: none;
}

.next { right: 10px; }
.prev { left: 10px; }

       /*tagline code*/
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

             <section class="common-banner" style="padding-bottom: 60px;">
                <div class="container">
                   <div class="row">
                      <div class="common-banner__content text-center">
                         {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span> --}}
                         {{-- <span class="sub-title">
                            <img src="{{ asset('frontend/assets/images/logo/LogoWhite.jpg') }}"
                                 srcset="{{ asset('frontend/assets/images/logo/LogoWhite@2x.jpg') }} 2x"
                                 alt="Image" class="iconone">
                                 Inspiring Journeys - Stories of hope and impact.
                         </span> --}}
                         <div style="text-align: left;">
                            {{-- <span class="sub-title" style="font-size:50px; height:80px; color:#e98f09;">
                                Inspiring Journeys
                            </span>
                            <br><br>
                            <h5 class="title-animation">Stories of hope and impact</h5> --}}

                            <h3 style="color:#e98f09;">
                                <b>Inspiring Journeys</b></h3>
                            <br><br>
                            <h5 class="title-animation" style="margin-top: 2%;">Stories of hope and impact</h5>
                        </div>

                         {{-- <h4 class="title-animation" style="color: white; font-weight: bold;">Our Connect Stories</h4> --}}
                      </div>
                   </div>
                </div>
                <div class="banner-bg">
                   <img src="{{ asset('frontend/assets/images/aboutus/conncets.jpeg') }}" alt="Image">

                </div>
                <div class="shape">
                   <img src="assets/images/shape.png" alt="Image">
                </div>
                {{-- <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
                   <img src="assets/images/sprade-base.png" alt="Image" class="base-img">
                </div> --}}
             </section>

             <section class="event event-alt" style="padding-top: 20px;">
                <div class="container">
                   <div class="row justify-content-center">
                      <div class="col-12 col-md-8 col-xl-7">
                         <div class="section__header text-center" data-aos-duration="1000">
                            {{-- <span class="sub-title">Bridging hearts building relations</span> --}}
                            <h4 style="display: block; text-align: center; color:#046a58;"><b>Bridging hearts building relations</b></h4>
                            <h2 class="title-animation">Inspiring <span>Journeys</span>list</h2>
                         </div>
                      </div>
                   </div>
                   <div class="row gutter-30">
                      <div class="col-12 col-lg-6 col-xl-7">
                         <div class="event__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <div class="event__single van-tilt">
                               {{-- <div class="event__single-thumb">
                                  <img src="assets/images/event/one.png" alt="Image">
                               </div> --}}
                               {{-- <div class="event__content">
                                  <span>October 19, 2025</span>
                                  <h4><a href="event-details.html">Transforming Lives Charity Golf Tournam
                                     Entdges Charity Networking Event</a>
                                  </h4>
                                  <p><i class="fa-solid fa-location-dot"></i> 135 W, 46nd Street, New York</p>
                               </div> --}}
                            </div>
                         </div>
                      </div>
                      <div class="container mt-4">
                        <div class="row">
                            @foreach($stories as $story)
                                <div class="col-md-4 mb-4"> <!-- Added mb-4 for spacing -->
                                    <div class="card">
                                        <div class="ratio ratio-16x9">
                                            <iframe
                                                src="https://www.youtube.com/embed/{{ trim($story->story_video) }}"
                                                frameborder="0"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{{ $story->story_summary }}</p>
                                            <br> <!-- Added extra line break -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="container mt-4">
                        <div class="row">
                            @foreach($stories as $index => $story)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <img src="{{ asset('assets/connectstories/' . $story->story_image) }}"
                                             alt="Story Image"
                                             width="100%" height="200"
                                             style="object-fit: cover; border-radius: 5px; cursor: pointer;"
                                             class="story-image"
                                             data-index="{{ $index }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Lightbox for Slideshow -->
                    <div id="lightbox" class="lightbox">
                        <span class="close" onclick="closeLightbox()">&times;</span>
                        <img id="lightbox-img" class="lightbox-content">

                        <!-- Navigation Arrows -->
                        <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                        <a class="next" onclick="changeSlide(1)">&#10095;</a>
                    </div>





                </div>
                   {{-- <div class="row">
                      <div class="col-12">
                         <div class="pagination-wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <ul class="pagination main-pagination">
                               <li>
                                  <button>
                                  <i class="fa-solid fa-angles-left"></i>
                                  </button>
                               </li>
                               <li>
                                  <a href="blog-list.html">1</a>
                               </li>
                               <li>
                                  <a href="blog-list.html" class="active">2</a>
                               </li>
                               <li>
                                  <a href="blog-list.html">3</a>
                               </li>
                               <li>
                                  <button>
                                  <i class="fa-solid fa-angles-right"></i>
                                  </button>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div> --}}
                </div>
                <div class="spade">
                   <img src="assets/images/blog/spade-base.png" alt="Image" class="base-img">
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

             <!-- ==== / color switcher end ==== -->
          </div>

    </x-frontend.frontend-layout>
    <script>
        let images = document.querySelectorAll('.story-image');
        let lightbox = document.getElementById('lightbox');
        let lightboxImg = document.getElementById('lightbox-img');
        let currentIndex = 0;
        let imageArray = [];


        images.forEach((img, index) => {
            imageArray.push(img.src);
            img.addEventListener('click', function () {
                currentIndex = index;
                openLightbox();
            });
        });


        function openLightbox() {
            lightbox.style.display = "block";
            lightboxImg.src = imageArray[currentIndex];
        }

        // Close Lightbox
        function closeLightbox() {
            lightbox.style.display = "none";
        }


        function changeSlide(step) {
            currentIndex += step;
            if (currentIndex >= imageArray.length) {
                currentIndex = 0;
            }
            if (currentIndex < 0) {
                currentIndex = imageArray.length - 1;
            }
            lightboxImg.src = imageArray[currentIndex];
        }
    </script>


