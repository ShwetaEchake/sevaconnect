<x-frontend.frontend-layout>
<style>
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
         {{-- <section class="common-banner">

                        <div class="container">
                            <div class="row">
                                <div class="text-center">
                                    <span class="sub-title">Vision & Purpose - Our Story, Your Impact</span>
                                </div>
                            </div>
                        </div>

                        <div class="banner-bg">
                        <div class="">
                            <img src="{{ asset('frontend/assets/images/aboutus/people.jpeg') }}" alt="Image" style="width: 300%; max-height: 500px; object-fit: cover;">
                        </div>

                        <div class="shape">
                            <img src="{{ asset('frontend/assets/images/shape.png') }}" alt="Image" style="width: 150px; height: auto;">
                        </div>

                        <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="{{ asset('frontend/assets/images/sprade-base.png') }}" alt="Image" style="width: 200px; height: auto;">
                        </div>
                    </section> --}}

                    <section class="common-banner" style="padding-bottom: 60px;">
                        <div class="container">
                           <div class="row">
                              <div class="common-banner__content text-center">
                                 {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span> --}}
                                 <span class="sub-title"></span>
                                 {{-- <span class="sub-title">
                                    <img src="{{ asset('frontend/assets/images/logo/LogoWhite.jpg') }}"
                                         srcset="{{ asset('frontend/assets/images/logo/LogoWhite@2x.jpg') }} 2x"
                                         alt="Image" class="iconone">
                                         Vision & Purpose Our Story,Your Impact
                                 </span> --}}

                                    <div style="text-align:left;">
                                        {{-- <span class="sub-title" style="font-size:50px;height:80px; color:#e98f09;">
                                            Vision & Mission
                                        </span> --}}
                                        <h3 style="color:#e98f09;">
                                            <b>Vision & Mission</b></h3>
                                        <br><br>
                                        <h5 class="title-animation" style="margin-top: 2%;">Our Story, Your Impact</h5>
                                    </div>
                                    {{-- <h4 class="title-animation" style="color: white; font-weight: bold;">About Us</h4> --}}
                                </div>
                           </div>
                        </div>
                        <div class="banner-bg">
                           <img src="{{ asset('frontend/assets/images/aboutus/people.jpeg') }}" alt="Image">
                        </div>
                        <div class="shape">
                           <img src="assets/images/shape.png" alt="Image">
                        </div>
                        {{-- <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
                           <img src="assets/images/sprade-base.png" alt="Image" class="base-img">
                        </div> --}}
                    </section>




                    <section class="faq" style="padding-top: 20px;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-8 col-xl-6">
                                    <div class="faq__content">
                                        <div class="section__content">
                                            {{-- Bridging hearts building relations --}}
                                            {{-- <span class="sub-title">About Sevaconnect</span> --}}
                                            <h5 class=""><b>About Sevaconnect</b></h5>
                                            {{-- <h5 class="sub-title" style="margin-top: 5%;">About Sevaconnect</h5> --}}
                                        </div>
                                        <div class="faq__content-inner cta">
                                            <div class="accordion" id="accordion">
                                                <!-- Accordion item 1 -->
                                                <div class="accordion-item" id="what-section">
                                                    <h6 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Who We Are
                                                        </button>
                                                    </h6>
                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            <p>Seva Sahayog Foundation has been working relentlessly since 2009 imerging as a platform to engage socially conscious individuals, groups, and corporates with interventions that match their interests.  We observed that  individuals, organizations or corporates have wish to give something back to the society in the form of their time or some things or expertise etc, though it’s not always possible due to one’s personal or professional commitments or as one doesnt know where to start or lack of resources. The SevaConnect project under Seva Sahyog Foundation , attempts to bridge this gap between the User-Corporate World -Volunteers and the Social Organization (SO) (includes NGO / trust/ foundations / volunteer group) thus create a symbiotic atmosphere for both.</p>
                                                        </div>
                                                    </div>
                                                </div>




                                                <!-- Accordion item 2 -->
                                                {{-- <div class="accordion-item">
                                                    <h6 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                            Why Us?
                                                        </button>
                                                    </h6>
                                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            <p>Simplifying the journey of giving
                                                                Easy Collaboration: Connect with stakeholders seamlessly.
                                                                Custom Opportunities: Find causes that align with your goals.
                                                                Transparency: Track initiatives and measure impact.
                                                                Diverse Initiatives: Covering 20 sectors and 94 subsectors</p>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                <div class="accordion-item" id="why-us-section">
                                                    <h6 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                            Why Us
                                                        </button>
                                                    </h6>
                                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            <p>Simplifying the journey of giving
                                                                Easy Collaboration: Connect with stakeholders seamlessly.
                                                                Custom Opportunities: Find causes that align with your goals.
                                                                Transparency: Track initiatives and measure impact.
                                                                Diverse Initiatives: Covering 20 sectors and 94 subsectors</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Accordion item 3 -->
                                                <div class="accordion-item" id="where-section">
                                                    <h6 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                            Our Locations
                                                        </button>
                                                    </h6>
                                                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            <p>Currently the pilot run will be in the MMR region.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Accordion item 4 -->
                                                <div class="accordion-item" id="how-section">
                                                    <h6 class="accordion-header" id="headingFour">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                                            What We Do
                                                        </button>
                                                    </h6>
                                                    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                                        <div class="accordion-body">
                                                            <p>A smarter way to serve and support
                                                                Automated search engine
                                                                Curated suggestions based on cause of interest, area, event etc
                                                                Social organization can gain more visibility. and thus new connects</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-xl-5 offset-xl-1">
                                    <div class="faq__thumb d-none d-lg-block">
                                        <div class="faq__thumb-inner">
                                            <div class="thumb-lg">
                                                <img src="{{asset('frontend/assets/images/aboutus/gang.jpeg') }}" alt="Image">
                                            </div>
                                            <div class="thumb-sm">
                                                <img src="{{asset('frontend/assets/images/aboutus/stydy.jpeg') }}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape d-none d-lg-block">
                            <img src="assets/images/faq/shape.png" alt="Image">
                        </div>
                    </section>





         {{-- <section class="help">
            <div class="container">
               <div class="row align-items-center gutter-40">
                  <div class="col-12 col-lg-5 col-xxl-6 d-none d-lg-block">
                     <div class="help__thumb">
                        <div class="help__thumb-inner">
                           <div class="thumb-top thumb">
                              <img src="assets/images/help/thumb-top.png" alt="Image">
                           </div>
                           <div class="thumb-lg thumb" data-aos="fade-left" data-aos-duration="1000">
                              <img src="assets/images/help/thumb-lg.png" alt="Image">
                              <div class="video-btn-wrapper">
                                 <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player" class="open-video-popup">
                                 <i class="icon-play"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="thumb thumb-bottom">
                              <img src="assets/images/help/thumb-bottom.png" alt="Image">
                           </div>
                           <div class="line">
                              <img src="assets/images/help/line.png" alt="Image">
                           </div>
                           <div class="grid-line">
                              <img src="assets/images/help/grid.png" alt="Image" class="base-img">
                           </div>
                           <div class="vertical-text">
                              <h5>We Give <span>Donations</span> to Poor People </h5>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-7 col-xxl-6">
                     <div class="help__content">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                        <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                        <h2 class="title-animation">Helping each other can
                           make <span>world</span> better
                        </h2>
                        <p>Volunteering offers opportunities to develop new skills and gain valuable
                           experience. This can include leadership, communication, project management, and teamwork
                           skills.
                        </p>
                        <div class="help__content-icon-group">
                           <div class="help__content-icon">
                              <div class="thumb">
                                 <i class="icon-make-donation"></i>
                              </div>
                              <div class="content">
                                 <h6>Start helping them</h6>
                                 <p>Raising awareness about the charity's mission and cause.</p>
                              </div>
                           </div>
                           <div class="help__content-icon">
                              <div class="thumb">
                                 <i class="icon-support-heart"></i>
                              </div>
                              <div class="content">
                                 <h6>Make Donations</h6>
                                 <p>Raising awareness about the charity's mission and cause.</p>
                              </div>
                           </div>
                        </div>
                        <div class="help__content-list">
                           <ul>
                              <li><i class="fa-solid fa-circle-check"></i> Helped fund 3,265 Project powerful
                                 corporate poor.
                              </li>
                              <li><i class="fa-solid fa-circle-check"></i> We give child a gift of a education
                              </li>
                              <li><i class="fa-solid fa-circle-check"></i> We help companies develop powerful
                                 corporate social Responsibility,
                              </li>
                           </ul>
                        </div>
                        <div class="help__content-cta cta">
                           <a href="{{route('aboutus') }}" aria-label="more about us" title="about us" class="btn--primary">More About Us</a>
                           <div class="contact-btn">
                              <div class="contact-icon">
                                 <i class="icon-phone"></i>
                              </div>
                              <div class="contact-content">
                                 <p>Phone</p>
                                 <a href="tel:01-793-7938">+236 (456) 896 22</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="hand">
               <img src="assets/images/help/hand.png" alt="Image">
            </div>
            <div class="parasuit">
               <img src="assets/images/parasuit.png" alt="Image">
            </div>
            <div class="spade">
               <img src="assets/images/help/spade.png" alt="Image">
            </div>
         </section> --}}
         <!-- ==== / help section end ==== -->
         <!-- ==== cta section start ==== -->
         {{-- <section class="cta-section-two">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-7">
                     <div class="cta__section__content">
                        <div class="section__content text-center" data-aos="fade-up" data-aos-duration="1000">
                           <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                           <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                           <h2 class="title-animation">children need your help
                              by donating today
                           </h2>
                           <div class="banner__content-cta cta">
                              <a href="" aria-label="about us" title="about us" class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                              <a href="contact-us.html" aria-label="contact us" title="contact us" class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></a>
                              <a href="" aria-label="about us" title="about us" class="btn--tertiary">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                           </div>
                           <div class="banner__content-cta cta">
                              <a href="{{route('causes') }}" aria-label="about us" title="about us"
                                 class="btn--tertiary">Discover More <i
                                 class="fa-solid fa-arrow-right"></i></a>
                              <a href="{{ route('contact-us')}}" aria-label="contact us" title="contact us"
                                 class="btn--primary">Contact Us <i
                                 class="fa-solid fa-arrow-right"></i></a>
                           </div>


                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cta-bg">
               <img src="assets/images/cta/cta-bg.png" alt="Image" class="parallax-image">
            </div>
            <div class="shape-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
               <img src="assets/images/cta/shape-left.png" alt="Image">
            </div>
            <div class="shape">
               <img src="assets/images/shape-two.png" alt="Image">
            </div>
         </section> --}}
         <!-- ==== / cta section end ==== -->
         <!-- ==== team section start ==== -->
         {{-- <section class="team">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-10 col-xl-6">
                     <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                        <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                        <h2 class="title-animation">Meet Our Volunteer
                           <span>Team</span> members
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="row gutter-40">

                  @foreach ($aboutuslist as $volunteer)
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <div class="team__single van-tilt">
                                <div class="team__single-thumb">
                                    <a href="team-details.html">
                                        <img src="{{ asset('assets/volunteer/' . $volunteer->image) }}"

                                            style="width: 100%; height: auto; object-fit: cover;">
                                    </a>
                                    <div class="team__icons">
                                        <div class="team__single-content__icon">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                        <div class="team__single__thumb-social">
                                            <ul>
                                                <li>
                                                    <a href="index.html">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index.html">
                                                        <i class="fa-brands fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index.html">
                                                        <i class="fa-brands fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index.html">
                                                        <i class="fa-brands fa-behance"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__single-content">
                                    <h6><a href="team-details.html">{{ $volunteer->name }}</a></h6>
                                    <p>{{ $volunteer->details }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="section__cta cta text-center">
                        <a href="{{route('our_team')}}" aria-label="our team" title="our team" class="btn--primary">View All
                        <i class="fa-solid fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="spade">
               <img src="assets/images/sprade-green.png" alt="Image">
            </div>
         </section> --}}
         <!-- ==== / team section end ==== -->
         <!-- ==== faq section start ==== -->

         <!-- ==== / faq section end ==== -->
         <!-- ==== testimonial section start ==== -->
         {{-- <section class="testimonial testimonial-alter" data-background="assets/images/bg-one.png">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-md-8 col-xl-7">
                     <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                        <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                        <h2 class="title-animation">Our valueable <span>customer</span>
                           Awesome Feedback
                        </h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="testimonial__inner">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="testimonial__slider swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="testimonial__slider-single">
                                    <div class="review">
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                    </div>
                                    <div class="content">
                                       <blockquote><q>Charity is the voluntary act of giving help, typically in
                                          the form of money, time, or resources, to those in need.
                                          Charitable organizations aim to solve social, environmental, and
                                          economic challenges by addressing issues like poverty</q>
                                       </blockquote>
                                    </div>
                                    <div class="author-info">
                                       <div class="author-thumb">
                                          <img src="assets/images/author.png" alt="Image">
                                       </div>
                                       <div class="author-content">
                                          <h6>Michel Smith</h6>
                                          <p>Cloth Store Inc.</p>
                                       </div>
                                    </div>
                                    <div class="quote">
                                       <img src="assets/images/quote.png" alt="Image">
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="testimonial__slider-single">
                                    <div class="review">
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                    </div>
                                    <div class="content">
                                       <blockquote><q>Charity is the voluntary act of giving help, typically in
                                          the form of money, time, or resources, to those in need.
                                          Charitable organizations aim to solve social, environmental, and
                                          economic challenges by addressing issues like poverty</q>
                                       </blockquote>
                                    </div>
                                    <div class="author-info">
                                       <div class="author-thumb">
                                          <img src="assets/images/author.png" alt="Image">
                                       </div>
                                       <div class="author-content">
                                          <h6>Ruby Klara</h6>
                                          <p>Cloth Store Inc.</p>
                                       </div>
                                    </div>
                                    <div class="quote">
                                       <img src="assets/images/quote.png" alt="Image">
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="testimonial__slider-single">
                                    <div class="review">
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                    </div>
                                    <div class="content">
                                       <blockquote><q>Charity is the voluntary act of giving help, typically in
                                          the form of money, time, or resources, to those in need.
                                          Charitable organizations aim to solve social, environmental, and
                                          economic challenges by addressing issues like poverty</q>
                                       </blockquote>
                                    </div>
                                    <div class="author-info">
                                       <div class="author-thumb">
                                          <img src="assets/images/author.png" alt="Image">
                                       </div>
                                       <div class="author-content">
                                          <h6>Bishu Kiev</h6>
                                          <p>Cloth Store Inc.</p>
                                       </div>
                                    </div>
                                    <div class="quote">
                                       <img src="assets/images/quote.png" alt="Image">
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="testimonial__slider-single">
                                    <div class="review">
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                    </div>
                                    <div class="content">
                                       <blockquote><q>Charity is the voluntary act of giving help, typically in
                                          the form of money, time, or resources, to those in need.
                                          Charitable organizations aim to solve social, environmental, and
                                          economic challenges by addressing issues like poverty</q>
                                       </blockquote>
                                    </div>
                                    <div class="author-info">
                                       <div class="author-thumb">
                                          <img src="assets/images/author.png" alt="Image">
                                       </div>
                                       <div class="author-content">
                                          <h6>Michel Smith</h6>
                                          <p>Cloth Store Inc.</p>
                                       </div>
                                    </div>
                                    <div class="quote">
                                       <img src="assets/images/quote.png" alt="Image">
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="testimonial__slider-single">
                                    <div class="review">
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                    </div>
                                    <div class="content">
                                       <blockquote><q>Charity is the voluntary act of giving help, typically in
                                          the form of money, time, or resources, to those in need.
                                          Charitable organizations aim to solve social, environmental, and
                                          economic challenges by addressing issues like poverty</q>
                                       </blockquote>
                                    </div>
                                    <div class="author-info">
                                       <div class="author-thumb">
                                          <img src="assets/images/author.png" alt="Image">
                                       </div>
                                       <div class="author-content">
                                          <h6>Ruby Klara</h6>
                                          <p>Cloth Store Inc.</p>
                                       </div>
                                    </div>
                                    <div class="quote">
                                       <img src="assets/images/quote.png" alt="Image">
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="testimonial__slider-single">
                                    <div class="review">
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                       <i class="icon-star"></i>
                                    </div>
                                    <div class="content">
                                       <blockquote><q>Charity is the voluntary act of giving help, typically in
                                          the form of money, time, or resources, to those in need.
                                          Charitable organizations aim to solve social, environmental, and
                                          economic challenges by addressing issues like poverty</q>
                                       </blockquote>
                                    </div>
                                    <div class="author-info">
                                       <div class="author-thumb">
                                          <img src="assets/images/author.png" alt="Image">
                                       </div>
                                       <div class="author-content">
                                          <h6>Bishu Kiev</h6>
                                          <p>Cloth Store Inc.</p>
                                       </div>
                                    </div>
                                    <div class="quote">
                                       <img src="assets/images/quote.png" alt="Image">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slider-navigation">
                  <button type="button" aria-label="prev slide" title="prev slide" class="prev-testimonial slider-btn">
                  <i class="fa-solid fa-arrow-left"></i>
                  </button>
                  <button type="button" aria-label="next slide" title="next slide" class="next-testimonial slider-btn slider-btn-next">
                  <i class="fa-solid fa-arrow-right"></i>
                  </button>
               </div>
            </div>
         </section> --}}
         <!-- ==== / testimonial section end ==== -->
         <!-- ==== contact section start ==== -->
         {{-- <section class="contact">
            <div class="container">
               <div class="row justify-content-end">
                  <div class="col-12 col-md-10 col-xl-7">
                     <div class="contact__content">
                        <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                           <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                           <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                           <h2 class="title-animation">Send Us <span>message</span>
                              For donation!
                           </h2>
                        </div>
                        <div class="contact__form cta" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <form action="#" method="post">
                              <div class="input-group">
                                 <div class="input-single">
                                    <input type="email" name="contact-email" id="contactEmail" placeholder="your email...">
                                    <i class="fa-solid fa-paper-plane"></i>
                                 </div>
                                 <div class="input-single">
                                    <input type="text" name="contact-number" id="contactNumber" placeholder="your phone...">
                                    <i class="fa-solid fa-phone"></i>
                                 </div>
                              </div>
                              <div class="input-single">
                                 <input type="text" name="contact-address" id="contactAddress" placeholder="your address...">
                                 <i class="fa-solid fa-location-dot"></i>
                              </div>
                              <div class="input-single alter-input">
                                 <textarea name="contact-message" id="contactMessage" placeholder="your message..."></textarea>
                                 <i class="fa-solid fa-envelope"></i>
                              </div>
                              <div class="form-cta">
                                 <button type="submit" aria-label="submit message" title="submit message" class="btn--primary">Contact Us<i class="fa-solid fa-arrow-right"></i></button>
                              </div>
                              <div class="form-cta">
                              <a href="{{ route('contact-us') }}" class="btn--primary" aria-label="Contact Us" title="Contact Us">
                                 Contact Us <i class="fa-solid fa-arrow-right"></i>
                             </a>
                           </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="contact-bg">
               <img src="assets/images/contact/contact-bg.png" alt="Image" class="parallax-image">
            </div>
            <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
               <img src="assets/images/cta/shape-left.png" alt="Image" class="base-img">
            </div>
         </section> --}}
         <!-- ==== / contact section end ==== -->
         <!-- ==== difference two section start ==== -->
         {{-- <section class="difference-two">
            <div class="container">
               <div class="row gutter-40 align-items-center">
                  <div class="col-12 col-lg-4 col-xxl-5 d-none d-lg-block">
                     <div class="difference-two__thumb-wrapper">
                        <div class="difference-two__thumb">
                           <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                              <img src="assets/images/difference/thumb-sm.png" alt="Image">
                              <div class="grid-line">
                                 <img src="assets/images/help/grid.png" alt="Image" class="base-img">
                              </div>
                              <div class="video-btn-wrapper">
                                 <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player" class="open-video-popup">
                                 <i class="icon-play"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                              <img src="assets/images/difference/thumb-lg.png" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-8 col-xxl-7">
                     <div class="difference-two__content" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                        <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                        <h2 class="title-animation">Donate <span>Support</span> to Make
                           Difference way
                        </h2>
                        <p>Charity is the voluntary act of giving help,
                           typically in the form of money, time, or resources, to those in need. Charitable
                           organizations aim to solve social, environmental, and economic challenges by addressing
                           issues like poverty,
                        </p>
                        <div class="difference-two__inner cta">
                           <div class="difference-two__inner-content">
                              <div class="difference-two__tab">
                                 <div class="difference-two__tab-btns">
                                    <button class="difference-two__tab-btn active" data-target="#mission" aria-label="mission" title="mission">Our Mission</button>
                                    <button class="difference-two__tab-btn" data-target="#vision" aria-label="vision" title="vision">Our Vision</button>
                                    <button class="difference-two__tab-btn" data-target="#excellence" aria-label="excellence" title="excellence">Excellence</button>
                                 </div>
                                 <div class="difference-two__tab-content">
                                    <div class="difference-two__content-single" id="mission">
                                       <ul>
                                          <li><i class="fa-solid fa-check"></i>We help companies develop
                                             powerful corporate social
                                          </li>
                                          <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project
                                             powerful corporate poor
                                          </li>
                                          <li><i class="fa-solid fa-check"></i>Dedicated Tech Services</li>
                                       </ul>
                                    </div>
                                    <div class="difference-two__content-single" id="vision">
                                       <ul>
                                          <li><i class="fa-solid fa-check"></i>We help companies develop
                                             powerful corporate social
                                          </li>
                                          <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project
                                             powerful corporate poor
                                          </li>
                                          <li><i class="fa-solid fa-check"></i>Dedicated Tech Services</li>
                                       </ul>
                                    </div>
                                    <div class="difference-two__content-single" id="excellence">
                                       <ul>
                                          <li><i class="fa-solid fa-check"></i>We help companies develop
                                             powerful corporate social
                                          </li>
                                          <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project
                                             powerful corporate poor
                                          </li>
                                          <li><i class="fa-solid fa-check"></i>Dedicated Tech Services</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="difference-two__progress">
                                 <div class="difference-progress-single">
                                    <div class="progress-bar-single" data-percent="75%">
                                       <div class="circular-progress">
                                          <div class="percent-value">0%</div>
                                          <svg class="progress-circle" viewbox="0 0 36 36">
                                             <path class="circle-bg" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                             <path class="circle-progress" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                          </svg>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <p>Treatment <br>
                                          Helping
                                       </p>
                                    </div>
                                 </div>
                                 <div class="difference-progress-single">
                                    <div class="progress-bar-single" data-percent="92%">
                                       <div class="circular-progress">
                                          <div class="percent-value">0%</div>
                                          <svg class="progress-circle" viewbox="0 0 36 36">
                                             <path class="circle-bg" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                             <path class="circle-progress" d="M18 2.0845
                                                a 15.9155 15.9155 0 0 1 0 31.831
                                                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                          </svg>
                                       </div>
                                    </div>
                                    <div class="content">
                                       <p>Highest <br>
                                          Fund Raised
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="difference-two__card">
                              <div class="card-group">
                                 <div class="thumb">
                                    <i class="icon-donation-card"></i>
                                 </div>
                                 <div class="content">
                                    <h6>Donate Now</h6>
                                    <p>$40,456</p>
                                 </div>
                              </div>
                              <hr>
                              <div class="card-group card-group-alt">
                                 <div class="thumb">
                                    <i class="icon-fund"></i>
                                 </div>
                                 <div class="content">
                                    <h6>Total Fundraised</h6>
                                    <p>$1,540,456</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="spade">
               <img src="assets/images/spade-green-two.png" alt="Image">
            </div>
         </section> --}}
         <!-- ==== / difference two section end ==== -->
         <!-- ==== image gallery section start ==== -->
         {{-- <div class="gallery">
            <div class="gallery__inner">
               <div class="gallery__slider">
                  <div class="gallery__single">
                     <img src="assets/images/gallery/one.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/two.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/three.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/four.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/five.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/six.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/one.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/two.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/three.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/four.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/five.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
                  <div class="gallery__single">
                     <img src="assets/images/gallery/six.png" alt="Image">
                     <a href="index.html">
                     <i class="fa-brands fa-instagram"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div> --}}

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
