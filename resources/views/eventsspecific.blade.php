<x-frontend.frontend-layout>
    {{-- <h1>{{ $event->title }}</h1>
    <p>{{ $event->description }}</p> --}}
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
       <section class="common-banner"  style="padding-bottom: 60px;">
          <div class="container">
             <div class="row">
                <div class="common-banner__content text-center">
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


                   {{-- <h4 class="title-animation" style="color: white; font-weight: bold;">Event Details</h4> --}}
                </div>
             </div>
          </div>
          <div class="banner-bg">
            <img src="{{ asset('frontend/assets/images/aboutus/events.jpeg') }}" alt="Image">
          </div>
          <div class="shape">
            <img src="{{ asset('assets/images/shape.png') }}">
          </div>
          {{-- <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">

             <img src="{{ asset('assets/images/sprade-base.png') }}" alt="Image" class="base-img">
          </div> --}}
       </section>
       <!-- ==== / banner section end ==== -->
       <!-- ==== event details section start ==== -->
       <div class="cm-details">
          <div class="container">
             <div class="row gutter-60">
                <div class="col-12 col-xl-8">
                    <div class="section__header text-center"  data-aos-duration="1000">
                        {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span> --}}
                        {{-- <span class="sub-title">Bridging hearts building relations</span> --}}
                        <h4 style="display: block; text-align: center; color:#046a58;"><b>Bridging hearts building relations</b></h4>
                        {{-- <h2 class="title-animation">Meet Our Sectors --}}
                          {{-- <h2 class="title-animation">list of <span>event details</span> --}}
                           {{-- <span>Team</span> members --}}
                        </h2>
                     </div>
                     <div class="cm-details__content">
                        <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">

                            <img src="{{$event->image_path}}" alt="Event Image" style="height:100px;width:100%">
                        </div>
                          <div class="cm-details-meta">
                            <p><i class="fa-solid fa-calendar-days"></i> {{ \Carbon\Carbon::parse($event['to_date'])->format('d M Y') }}</p>
                            <p><i class="fa-solid fa-location-dot"></i> {{ $event['address'] }}</p>
                          </div>
                          {{-- <div class="cm-group cta">
                             <h3 class="title-animation">Give african childrens a good education</h3>
                             <p>Charity and Donation is a categorys that involves giving financial category that involves giving financial or material support various causes organizations. It allows individuals towards the a addressing social category that involves giving financial or material support various causes of organizations. It allows individuals towards addressing social</p>
                          </div> --}}
                          <div class="cm-group cta">
                             <h3 class="title-animation">Summary</h3>
                             <p>{{ $event['summary'] }}</p>
                             {{-- <div class="cm-details__list">
                                <ul>
                                   <li><i class="icon-circle-check"></i>Empower Through Charity</li>
                                   <li><i class="icon-circle-check"></i>Giving Hope, Changing Lives</li>
                                   <li><i class="icon-circle-check"></i>Healing Communities</li>
                                   <li><i class="icon-circle-check"></i>Together We Can</li>
                                   <li><i class="icon-circle-check"></i>Compassion in Action</li>
                                   <li><i class="icon-circle-check"></i>Every Act Counts</li>
                                </ul>
                             </div> --}}
                          </div>
                          <div class="cm-img-group cta">
                                @foreach($event->multiple_images_path as $image)
                                    <div class="cm-img-single">
                                      <img src="{{ $image }}" alt="Event Image" style="height:100px;width:100%">
                                    </div>
                                @endforeach
                        </div>

                          {{-- <div class="cm-event cta">
                             <div class="cm-event-single">
                                <a href="index.html">
                                <i class="fa-brands fa-facebook-f"></i>
                                Facebook

                                <img src="{{asset('assets/images/shape-sc.png')}}" alt="Image">
                                </a>
                             </div>
                             <div class="cm-event-single">
                                <a href="index.html">
                                <i class="fa-brands fa-twitter"></i>
                                Twitter

                                <img src="{{asset('assets/images/shape-sc.png')}}" alt="Image">

                                </a>
                             </div>
                             <div class="cm-event-single">
                                <a href="index.html">
                                <i class="fa-brands fa-pinterest"></i>
                                Pinterest

                                <img src="{{asset('assets/images/shape-sc.png')}}" alt="Image">
                                </a>
                             </div>
                             <div class="cm-event-single">
                                <a href="index.html">
                                <i class="fa-brands fa-linkedin-in"></i>
                                Linkedin

                                <img src="{{asset('assets/images/shape-sc.png')}}" alt="Image">
                                </a>
                             </div>
                             <div class="cm-event-single">
                                <a href="index.html">
                                <i class="fa-brands fa-stumbleupon"></i>
                                Tumblr

                                <img src="{{asset('assets/images/shape-sc.png')}}" alt="Image">
                                </a>
                             </div>
                          </div> --}}
                          {{-- <div class="cm-map cta">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.25280051853!2d-74.14448645698116!3d40.69763123317469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1731143311697!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                          </div> --}}


                          {{-- <div class="blog-comment" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                             <div class="comment-header mb-40">
                                <h4 class="mt-8 title-animation">03 Comments</h4>
                             </div>
                             <div class="comment-single">
                                <div class="thumb">

                                   <img src="{{asset('assets/images/author-four.png')}}" alt="Image">
                                </div>
                                <div class="comment-single__content">
                                   <h5>Martha Grey</h5>
                                   <p>Ut sint posse sit, eum sumo diam ea. Liber consectetuer in mei, sea in imperdiet assueverit
                                      contentiones, an his cib.
                                   </p>
                                   <div class="comment-single__meta">
                                      <button title="like" class="single"><i class="icon-heart"></i> Like</button>
                                      <div class="reply-button">
                                         <button aria-label="reply"><i class="fa-solid fa-reply"></i>Reply</button>
                                      </div>
                                      <p>2 min ago</p>
                                   </div>
                                   <div class="reply-comment">
                                      <form action="#" method="post">
                                         <div class="input-group">
                                            <div class="input-single">
                                               <textarea placeholder="Join the discussion..." required=""></textarea>
                                            </div>
                                            <div class="btn-wrapper">
                                               <button type="submit" class="btn--secondary">Reply</button>
                                            </div>
                                         </div>
                                      </form>
                                   </div>
                                </div>
                             </div>
                              <div class="comment-single comment-single-reply">
                                <div class="thumb">

                                   <img src="{{asset('assets/images/team/one.png')}}" alt="Image">
                                </div>
                                <div class="comment-single__content">
                                   <h5>Jackie Dawson</h5>
                                   <p>Ut sint posse sit, eum sumo diam ea. Liber consectetuer in mei, sea in imperdiet assueverit
                                      contentiones, an his cib.
                                   </p>
                                   <div class="comment-single__meta">
                                      <button title="like" class="single"><i class="icon-heart"></i> Like</button>
                                      <div class="reply-button">
                                         <button aria-label="reply"><i class="fa-solid fa-reply"></i>Reply</button>
                                      </div>
                                      <p>2 min ago</p>
                                   </div>
                                   <div class="reply-comment">
                                      <form action="#" method="post">
                                         <div class="input-group">
                                            <div class="input-single">
                                               <textarea placeholder="Join the discussion..." required=""></textarea>
                                            </div>
                                            <div class="btn-wrapper">
                                               <button type="submit" class="btn--secondary">Reply</button>
                                            </div>
                                         </div>
                                      </form>
                                   </div>
                                </div>
                             </div>
                              <div class="comment-single">
                                <div class="thumb">

                                   <img src="{{asset('assets/images/author-two.png')}}" alt="Image">

                                </div>
                                <div class="comment-single__content">
                                   <h5>Hesia Lara</h5>
                                   <p>Ut sint posse sit, eum sumo diam ea. Liber consectetuer in mei, sea in imperdiet assueverit
                                      contentiones, an his cib.
                                   </p>
                                   <div class="comment-single__meta">
                                      <button title="like" class="single"><i class="icon-heart"></i> Like</button>
                                      <div class="reply-button">
                                         <button aria-label="reply"><i class="fa-solid fa-reply"></i>Reply</button>
                                      </div>
                                      <p>2 min ago</p>
                                   </div>
                                   <div class="reply-comment">
                                      <form action="#" method="post">
                                         <div class="input-group">
                                            <div class="input-single">
                                               <textarea placeholder="Join the discussion..." required=""></textarea>
                                            </div>
                                            <div class="btn-wrapper">
                                               <button type="submit" class="btn--secondary">Reply</button>
                                            </div>
                                         </div>
                                      </form>
                                   </div>
                                </div>
                             </div>
                              <div class="comment__form mt-120" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <div class="comment-header mb-40">
                                   <h4 class="mt-8 fw-6">Leave A Comment</h4>
                                </div>
                                <form action="#" method="post">
                                   <div class="form-group">
                                      <div class="input-icon">
                                         <input type="text" required="" name="comment-name" id="commentName" placeholder="Your Name">
                                         <i class="fa-solid fa-user"></i>
                                      </div>
                                      <div class="input-icon">
                                         <input type="email" required="" name="comment-email" id="commentEmail" placeholder="Enter Email">
                                         <i class="fa-regular fa-envelope"></i>
                                      </div>
                                   </div>
                                   <div class="input-icon input-icon-alt">
                                      <textarea name="comment-message" id="commentMessage" cols="30" rows="10" placeholder="Type Your Comments..."></textarea>
                                      <i class="fa-regular fa-comments"></i>
                                   </div>
                                   <div class="cta mt-40">
                                      <div class="btn-wrapper">
                                         <button type="submit" class="btn--secondary">Submit
                                         Comment</button>
                                      </div>
                                   </div>
                                </form>
                             </div>
                          </div> --}}
                       </div>
                </div>
                <div class="col-12 col-xl-4">
                   <div class="cm-details__sidebar">
                      <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                         <div class="intro">
                            <h5>search here</h5>
                         </div>
                         <form action="#" method="post">
                            <input type="text" name="search-product" id="searchProduct" placeholder="Search Here..." required="">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                         </form>
                      </div>

                      <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="intro">
                            <h5>Recent Posts</h5>
                        </div>
                        <div class="cm-sidebar-post">
                            @foreach($latestEvents as $event)
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="{{ route('event.specific', $event->id) }}">
                                        <img src="{{$event->image_path}}" alt="Image">

                                    </a>
                                </div>
                                <div class="content">
                                    <p><i class="fa-solid fa-calendar-days"></i>
                                       <span>{{ \Carbon\Carbon::parse($event->to_date)->format('F d, Y') }}</span>
                                    </p>
                                    <p><a href="{{ route('event.details', $event->id) }}">{{ $event->help_name }}</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>



                      {{-- <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                         <div class="intro">
                            <h5>Tags</h5>
                         </div>
                         <div class="tag-wrapper">
                            <a href="shop.html">t-shirt</a>
                            <a href="shop.html">Banner Design</a>
                            <a href="shop.html">Brochures</a>
                            <a href="shop.html">Landing</a>
                            <a href="shop.html">Print</a>
                            <a href="shop.html">Business Card</a>
                         </div>
                      </div> --}}
                      {{-- <div class="cm-sidebar-overview" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                         <div class="cm-logo">

                            <img src="{{asset('assets/images/event/logo.png')}}" alt="Image">
                         </div>
                         <div class="cm-content">
                            <p>Small Donations Bigger Impact</p>
                            <h4>Education Health
                               for Every Child
                            </h4>
                         </div>
                         <div class="cm-cta">
                            <a href="contact-us.html" aria-label="contact us" title="contact us" class="btn--primary"> Get A Quote <i class="fa-solid fa-arrow-right"></i>
                            </a>
                         </div>

                         <img src="{{asset('assets/images/event/overview.png')}}" alt="Image" class="parallax-image">
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- ==== / event details section end ==== -->

       <!-- ==== / footer end ==== -->
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




