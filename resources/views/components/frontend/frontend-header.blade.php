<style>
    .dropdown-menu {
        padding: 5px 0;
        min-width: 200px;
    }

    .dropdown-item {
        padding: 5px 10px;
        font-size: 14px;
    }




@media only screen and (min-width: 1400px) {
    .header-secondary .navbar__menu-wrapper {
        -webkit-padding-start: 55px;
        padding-inline-start: 55px;
        background-color:white;
    }
}
</style>
<div class="topbar topbar--secondary d-lg-block">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="topbar__inner">
                  <div class="row align-items-center">
                     <div class="col-12 col-lg-6 col-xxl-4">
                        <div class="topbar__list-wrapper">
                           <ul class="topbar__list">
                              <li><a href="mailto:support@example.com"><i class="fa-regular fa-envelope"></i>seva.connect@sevasahayog.org</a>
                              </li>
                              <li><a href="tel:2305-587-3407"><i class="fa-solid fa-phone"></i>+91 9167448285</a>
                              </li>
                           </ul>
                        </div>

                     </div>

                     <div class="col-12 col-xxl-4 d-none d-xxl-block">
                        <div class="topbar__extra text-center">
                           <p><i class="icon-heart-hand"></i> Are you ready to help them? Let's become a
                              volunteer!
                           </p>
                        </div>
                     </div>
                     <div class="col-12 col-lg-6 col-xxl-4">
                        <div class="topbar__items justify-content-end">
                           {{-- <div class="select-currency">
                              <select name="currency" class="currency-select select">
                                 <option value="usd">USD</option>
                                 <option value="gbp">GBP</option>
                                 <option value="aud">AUD</option>
                                 <option value="euro">Euro</option>
                              </select>
                           </div> --}}
                           {{-- <div class="select-country">
                              <select name="country" class="country-select select">
                                 <option data-flag="fi-gb-eng">English</option>
                                 <option data-flag="fi-us">Spanish</option>
                                 <option data-flag="fi-cn">Chinese</option>
                                 <option data-flag="fi-it">Italian</option>
                              </select>
                           </div> --}}

                           <div class="topbar__list-wrapper">
                              <ul class="topbar__list">
                                 {{-- <li><a href="{{ route('recommendation.form') }}"><i class="fa fa-user-minus"></i>Recommendation</a></li> --}}
                                  {{-- <li><a href="{{ route('registerfrontend.form') }}"><i class="fa fa-user-plus"></i> Register</a></li>
                                  <li><a href="{{ route('loginfrontend.form') }}"><i class="fas fa-sign-in"></i> Login</a></li> --}}
                              </ul>
                          </div>
                           <div class="social">
                              <a href="https://www.facebook.com/share/15wsPUy6c4/" target="_blank" aria-label="share us on facebook" title="facebook">
                              <i class="fa-brands fa-facebook-f"></i>
                              </a>
                              <a href="https://www.instagram.com/seva_connect?igsh=MWh5MGNtdzU4MDRrcQ==" target="_blank" aria-label="share us on instagram" title="instagram">
                                <i class="fa-brands fa-instagram"></i>
                             </a>

                              {{-- <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                              <i class="fa-brands fa-vimeo-v"></i>
                              </a>
                              <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                              <i class="fa-brands fa-twitter"></i>
                              </a>
                              <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin" title="linkedin">
                              <i class="fa-brands fa-linkedin-in"></i>
                              </a> --}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ==== / topbar end ==== -->
   <!-- ==== header start ==== -->
   <header class="header header-secondary">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="main-header__menu-box">
                  <nav class="navbar p-0">
                     <div class="navbar-logo">
                        <a href="/">
                        {{-- <img src="frontend/assets/images/logo.png" alt="Image"> --}}
                        <img src="{{ asset('frontend/assets/images/logo/LogoColouri.png') }}" alt="" style="height: 70px; width: auto" class="img-fluid">
                        {{-- <img src="{{ asset('frontend/assets/images/logo/logotwo.png') }}" alt="" style="height:140px; width:110px" class="img-fluid"> --}}

                        {{-- Seva Connect --}}
                     </a>
                     </div>
                     <div class="navbar__menu-wrapper">
                        <div class="navbar__menu d-none d-xl-block">
                           <ul class="navbar__list">
                              {{-- <li class="navbar__item navbar__item--has-children nav-fade">
                                 <a href="#" aria-label="dropdown menu" class="navbar__dropdown-label dropdown-label-alter">Home</a>
                                 <ul class="navbar__sub-menu mega-menu">
                                    <li>
                                       <div class="mega-content-wrapper">
                                          <img src="assets/images/home-one.png" alt="Image">
                                          <div class="mega-content">
                                             <a href="index.html" class="btn--primary">Multipage</a>
                                             <a href="index-one-page.html" class="btn--secondary">One
                                             Page</a>
                                          </div>
                                       </div>
                                       <a href="index.html">Home One</a>
                                    </li>
                                    <li>
                                       <div class="mega-content-wrapper">
                                          <img src="assets/images/home-two.png" alt="Image">
                                          <div class="mega-content">
                                             <a href="index-two.html" class="btn--primary">Multipage</a>
                                             <a href="index-two-one-page.html" class="btn--secondary">One Page</a>
                                          </div>
                                       </div>
                                       <a href="index-two.html">Home Two</a>
                                    </li>
                                    <li>
                                       <div class="mega-content-wrapper">
                                          <img src="assets/images/home-three.png" alt="Image">
                                          <div class="mega-content">
                                             <a href="index-three.html" class="btn--primary">Multipage</a>
                                             <a href="index-three-one-page.html" class="btn--secondary">One Page</a>
                                          </div>
                                       </div>
                                       <a href="index-three.html">Home Three</a>
                                    </li>
                                 </ul>
                              </li> --}}

                              {{-- <li class="navbar__item nav-fade">
                                <a href="{{route('home') }}" style="color: black; text-decoration: none;">
                                    <h6><b>Home</b></h6>
                                </a>

                             </li> --}}

                              {{-- <li class="navbar__item nav-fade">
                                <a href="{{route('aboutus') }}" style="color: black; text-decoration: none;">
                                    <h6><b>About Us</b></h6>
                                </a> --}}
                            {{-- </li> --}}
                                <li class="navbar__item navbar__item--has-children nav-fade">
                                    <a href="" aria-label="dropdown menu" style="color: black; text-decoration: none;" class="navbar__dropdown-label dropdown-label-alter">
                                        <h6><b>About Us</b></h6>
                                    </a>
                                    <ul class="navbar__sub-menu">
                                        <li>
                                            <a href="{{route('aboutus') }}#what-section">Who We Are</a>
                                            {{-- <a href="{{route('aboutus')}}#what-section">What is Sevaconnect?</a> --}}
                                        </li>
                                        <li>
                                            <a href="{{route('aboutus') }}#why-us-section">Why Us</a>
                                            {{-- <a href="{{route('aboutus')}}#why-us-section">Why Us?</a> --}}
                                        </li>
                                        <li>
                                            <a href="{{route('aboutus') }}#where-section">Our Locations</a>
                                            {{-- <a href="{{route('aboutus')}}#where-section">Where?</a> --}}
                                        </li>
                                        <li>
                                            {{-- <a href="{{route('aboutus')}}#how-section">How?</a> --}}
                                            <a href="{{route('aboutus') }}#how-section">What We Do</a>
                                        </li>

                                    </ul>
                                </li>



                              {{-- <li class="navbar__item navbar__item--has-children nav-fade">
                                <a href="#" aria-label="dropdown menu" class="navbar__dropdown-label dropdown-label-alter">About Us</a>
                                <ul class="navbar__sub-menu">
                                   <li>
                                      <a href="{{route('causes') }}">What is Sevaconnect?</a>
                                   </li>
                                   <li>
                                      <a href="donate-us.html">Why</a>
                                   </li>
                                   <li>
                                      <a href="become-volunteer.html">Register with SevaConnect</a>
                                   </li>
                                   <li>
                                    <a href="become-volunteer.html"> FAQs</a>
                                 </li>
                                </ul>
                             </li> --}}

                              {{-- <li class="navbar__item nav-fade">
                                 <a href="{{route('causes') }}">WHAT ARE YOU LOOKING FOR </a>
                              </li> --}}

                              {{-- <li class="navbar__item navbar__item--has-children nav-fade">
                                <a href="#" aria-label="dropdown menu" class="navbar__dropdown-label dropdown-label-alter">WHAT ARE YOU LOOKING FOR</a>
                                <ul class="navbar__sub-menu">
                                   <li>
                                      <a href="{{route('causes') }}">Social Organizations(SO)</a>
                                   </li>
                                   <li>
                                      <a href="donate-us.html">Volunteering Opportunities</a>
                                   </li>
                                   <li>
                                      <a href="become-volunteer.html">Register with SevaConnect</a>
                                   </li>
                                   <li>
                                    <a href="become-volunteer.html"> FAQs</a>
                                 </li>
                                </ul>
                             </li> --}}





                              <li class="navbar__item nav-fade">
                                <a href="{{route('causes') }}" style="color: black; text-decoration: none;">
                                    <h6><b>Sectors</b></h6>
                                </a>

                              </li>

                              {{-- <li class="navbar__item nav-fade">

                                 <a href="{{route('event') }}" style="color: black; text-decoration: none;">
                                    <h6><b>Opportunities</b></h6>
                                </a>
                              </li> --}}

                                <li class=" navbar__item navbar__item--has-children nav-fade">

                                    <a href="" aria-label="dropdown menu" style="color: black; text-decoration: none;" class="navbar__dropdown-label dropdown-label-alter">
                                        <h6><b>Opportunities</b></h6>
                                    </a>
                                    <ul class="navbar__sub-menu">
                                        <li>
                                            <a href="{{route('event') }}#event-section">Event</a>

                                        </li>
                                        <li>
                                            <a href="{{route('event') }}#need-section">Need</a>

                                        </li>
                                        <li>
                                            <a href="{{route('event') }}#job-opportunity-section">Job/Internship/Volunteer</a>

                                        </li>
                                        <li>
                                          <a href="{{route('event') }}#job-opportunity-section">Skill Developments</a>

                                      </li>
                                    </ul>
                                </li>
                              <li class="navbar__item nav-fade">
                                <a href="{{route('connect_stories') }}" style="color: black; text-decoration: none;">
                                    <h6><b>Impact Stories</b></h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                     <div class="navbar__options">
                        <div class="navbar__mobile-options ">
                           <div class="search-box">
                              <button class="open-search" aria-label="search products" title="open search box">
                              <i class="fa-solid fa-magnifying-glass"></i>
                              </button>
                           </div>
                           {{-- <a href="{{ route('recommendations.form') }}" class="btn--primary d-none d-md-flex">Recommendation <i class="fa-solid fa-arrow-right"></i></a> --}}
                           <a href="{{ route('induction.form') }}" class="btn--primary d-none d-md-flex">Connect<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <button class="open-offcanvas-nav d-flex d-xl-none" aria-label="toggle mobile menu" title="open offcanvas menu">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                        </button>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <div class="mobile-menu mobile-menu--primary d-block d-xxl-none">
    <nav class="mobile-menu__wrapper">
        <div class="mobile-menu__header nav-fade">
            <div class="logo">
                <a
                    href="index.html"
                    aria-label="home page"
                    title="logo"
                >
                    <img src="{{asset('frontend/assets/images/logo/LogoColouri.png') }}" alt="Image" />
                </a>
            </div>
            <button
                aria-label="close mobile menu"
                class="close-mobile-menu"
            >
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="mobile-menu__list"></div>
        <div class="mobile-menu__cta nav-fade d-block d-md-none">
            <a href="{{ route('induction.form') }}" class="btn--primary"
                >Connect <i class="fa-solid fa-arrow-right"></i
            ></a>
        </div>
        {{-- <div class="mobile-menu__social social nav-fade">
            <a
                href="https://www.facebook.com/"
                target="_blank"
                aria-label="share us on facebook"
                title="facebook"
            >
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a
                href="https://vimeo.com/"
                target="_blank"
                aria-label="share us on vimeo"
                title="vimeo"
            >
                <i class="fa-brands fa-vimeo-v"></i>
            </a>
            <a
                href="https://x.com/"
                target="_blank"
                aria-label="share us on twitter"
                title="twitter"
            >
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a
                href="https://www.linkedin.com/"
                target="_blank"
                aria-label="share us on linkedin"
                title="linkedin"
            >
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div> --}}
    </nav>
</div>

   <!-- ==== / header end ==== -->
