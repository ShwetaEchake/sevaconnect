<x-frontend.frontend-layout>





         <div class="search-popup">
            <button class="close-search" aria-label="close search box" title="close search box">
            <i class="fa-solid fa-xmark"></i>
            </button>
            <form action="#" method="post">
               <div class="search-popup__group">
                  <input type="text" name="search-field" id="searchField" placeholder="Search...." required>
                  <button type="submit" aria-label="search products" title="search products">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
               </div>
            </form>
         </div>
         <!-- ==== / search popup end ==== -->         <!-- ==== search popup start ==== -->
         <div class="search-popup">
            <button class="close-search" aria-label="close search box" title="close search box">
            <i class="fa-solid fa-xmark"></i>
            </button>
            <form action="#" method="post">
               <div class="search-popup__group">
                  <input type="text" name="search-field" id="searchField" placeholder="Search...." required>
                  <button type="submit" aria-label="search products" title="search products">
                  <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
               </div>
            </form>
         </div>

         <div class="off-canvas-backdrop"></div>
         <!-- ==== / off canvas end ==== -->
         <!-- ==== sidebar cart start ==== -->
         <div class="sidebar-cart" >
            <div class="der">
               <button class="close-cart">
               <span class="close-icon">X</span>
               </button>
               <h2>
                  Shopping Bag
                  <span class="count">2</span>
               </h2>
               <div class="cart-items">
                  <div class="cart-item-single">
                     <div class="cart-item-thumb">
                        <a href="service-details.html">
                        <img src="assets/images/cart.jpg" alt="Image">
                        </a>
                     </div>
                     <div class="cart-item-content">
                        <h6 class="h6 title-anim">
                           <a href="service-details.html">Product One</a>
                        </h6>
                        <p class="price">
                           $
                           <span class="item-price">34.99</span>
                        </p>
                        <div class="measure">
                           <button aria-label="decrease item" class="quantity-decrease">
                           <i class="fa-solid fa-minus"></i>
                           </button>
                           <span class="item-quantity">0</span>
                           <button aria-label="add item" class="quantity-increase">
                           <i class="fa-solid fa-plus"></i>
                           </button>
                        </div>
                     </div>
                     <button aria-label="delete item" class="delete-item">
                     <i class="fa-solid fa-trash"></i>
                     </button>
                  </div>
                  <div class="cart-item-single">
                     <div class="cart-item-thumb">
                        <a href="service-details.html">
                        <img src="assets/images/cart.jpg" alt="Image">
                        </a>
                     </div>
                     <div class="cart-item-content">
                        <h6 class="h6 title-anim">
                           <a href="service-details.html">Product Two</a>
                        </h6>
                        <p class="price">
                           $
                           <span class="item-price">34.99</span>
                        </p>
                        <div class="measure">
                           <button aria-label="decrease item" class="quantity-decrease">
                           <i class="fa-solid fa-minus"></i>
                           </button>
                           <span class="item-quantity">0</span>
                           <button aria-label="add item" class="quantity-increase">
                           <i class="fa-solid fa-plus"></i>
                           </button>
                        </div>
                     </div>
                     <button aria-label="delete item" class="delete-item">
                     <i class="fa-solid fa-trash"></i>
                     </button>
                  </div>
               </div>
               <div class="totals">
                  <div class="subtotal">
                     <span class="label">Subtotal:</span>
                     <span class="amount ">
                     $
                     <span class="total-price">0.00</span>
                     </span>
                  </div>
               </div>
               <div class="action-buttons">
                  <a class="view-cart-button" href="cart.html" aria-label="go to cart">Cart</a>
                  <a class="checkout-button" href="checkout.html" aria-label="go to checkout">
                  Checkout
                  <i class="fa-solid fa-arrow-right-long"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="cart-backdrop"></div>
         <!-- ==== / sidebar cart end ==== -->
         <!-- ==== banner section start ==== -->
         <section class="banner-three">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12 col-lg-8">
                     <div class="banner-three__slider swiper">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="banner-three__content">
                                 {{-- <span class="sub-title"><i
                                    class="icon-donation"></i>Start donating poor
                                 people</span> --}}
                                 <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                                 <h1 class="title-animation">We Are non <br>
                                    profit charity <span class="bottom-line">World</span>
                                    organization
                                 </h1>
                                 <p>Denouncing pleasure and
                                    praising pain was born and will give you saidul complete great
                                    explorer of the truth the master-builder.
                                 </p>
                                 <div class="banner__content-cta cta">
                                    <a href="{{route('causes') }}" aria-label="about us" title="about us"
                                       class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                    <a href="{{ route('contact-us')}}" aria-label="contact us" title="contact us"
                                       class="btn--primary">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                                 </div>


                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="banner-three__content">
                                 {{-- <span class="sub-title"><i
                                    class="icon-donation"></i>Start donating poor
                                 people</span> --}}
                                 <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                                 <h1 class="title-animation">We Are non <br>
                                    profit charity <span class="bottom-line">World</span>
                                    organization
                                 </h1>
                                 <p>Denouncing pleasure and
                                    praising pain was born and will give you saidul complete great
                                    explorer of the truth the master-builder.
                                 </p>
                                 <div class="banner__content-cta cta">
                                    <a href="our-causes.php" aria-label="about us" title="about us"
                                       class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                    <a href="contact-us.php" aria-label="contact us" title="contact us"
                                       class="btn--primary">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="banner-three__content">
                                 {{-- <span class="sub-title"><i
                                    class="icon-donation"></i>Start donating poor
                                 people</span> --}}
                                 <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                                 <h1 class="title-animation">We Are non <br>
                                    profit charity <span class="bottom-line">World</span>
                                    organization
                                 </h1>
                                 <p>Denouncing pleasure and
                                    praising pain was born and will give you saidul complete great
                                    explorer of the truth the master-builder.
                                 </p>
                                 <div class="banner__content-cta cta">
                                    <a href="our-causes.php" aria-label="about us" title="about us"
                                       class="btn--tertiary">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                                    <a href="contact-us.php" aria-label="contact us" title="contact us"
                                       class="btn--primary">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 d-none d-lg-block">
                     <div class="banner-three__thumb">
                        <div class="banner-three__thumb-inner">
                           <div class="group">
                              <div class="m-one move-image">
                                 <img src="assets/images/banner/m-one.png" alt="Image" data-aos="fade-right"
                                    data-aos-duration="1000">
                              </div>
                              <div class="m-three move-image">
                                 <img src="assets/images/banner/m-three.png" alt="Image" data-aos="fade-right"
                                    data-aos-duration="1000" data-aos-delay="300">
                              </div>
                           </div>
                           <div class="group">
                              <div class="m-two move-image">
                                 <img src="assets/images/banner/m-two.png" alt="Image" data-aos="zoom-in"
                                    data-aos-duration="1000">
                              </div>
                              <div class="m-four move-image">
                                 <img src="assets/images/banner/m-four.png" alt="Image" data-aos="zoom-in"
                                    data-aos-duration="1000" data-aos-delay="300">
                              </div>
                           </div>
                           <div class="group">
                              <div class="m-five move-image">
                                 <img src="assets/images/banner/m-five.png" alt="Image" data-aos="fade-left"
                                    data-aos-duration="1000" data-aos-delay="300">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="shape-lg">
               <img src="assets/images/banner/banner-three-bg.png" alt="Image" data-aos="zoom-in"
                  data-aos-duration="1000">
            </div>
            <div class="sprade-shape">
               <img src="assets/images/sprade-base.png" alt="Image" class="base-img" data-aos="zoom-in"
                  data-aos-duration="1000">
            </div>
            <div class="parasuit">
               <img src="assets/images/parasuit.png" alt="Image">
            </div>
         </section>
         <!-- ==== / banner section end ==== -->
         <!-- ==== overview section start ==== -->
         <!-- <section class="overview">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="overview__inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="overview__single overview__left">
                           <h4>Total Raised Fund</h4>
                           <div class="cause__progress progress-bar-single">
                              <div class="cause-progress__bar">
                                 <div class="progress-bar-wrapper" data-percent="85%">
                                    <div class="progress-bar">
                                       <div class="progress-bar-percent"><span class="percent-value">85%</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="cause-progress__goal">
                              <div class="goal-single">
                                 <span>Raised</span>
                                 <h5>$40,802</h5>
                              </div>
                              <div class="goal-single">
                                 <span>Goal</span>
                                 <h5>$100,000</h5>
                              </div>
                           </div>
                        </div>
                        <div class="overview__single overview__right">
                           <span>Healtcare</span>
                           <h4><a href="cause-details.php">Water For All Children, America</a></h4>
                           <p>Charity is the act of extending love and kindness to others which is a conscious act
                              but the decision is made by the heart,
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!-- ==== / overview section end ==== -->
         <!-- ==== difference section start ==== -->
         <!-- <section class="difference-three">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12 col-lg-5">
                     <div class="difference-three__thumb d-none d-lg-block">
                        <div class="difference-three__thumb-inner">
                           <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                              <img src="assets/images/difference/thumb-lg-two.png" alt="Image"
                                 >
                           </div>
                           <div class="spade">
                              <img src="assets/images/difference/spade.png" alt="Image" class="base-img">
                           </div>
                           <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                              <img src="assets/images/difference/thub-sm-two.png" alt="Image">
                           </div>
                           <div class="line">
                              <img src="assets/images/difference/line.png" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-7">
                     <div class="difference-three__content">
                        <div class="section__content">
                           <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                           <h2 class="title-animation">Donate <span>Support</span> to giving
                              Make a Difference
                           </h2>
                           <p>Lorem Ipsum is simply dummy a of the printing and type setting industry Loreaim Ipsum
                              has been the industry's standard dummy
                           </p>
                        </div>
                        <div class="differnce-quote">
                           <blockquote>
                              <q><span>Lorem ipsum dolor</span> sit amet consectetur convallis
                              ultrices sociis fermentum orci convallis</q>
                           </blockquote>
                        </div>
                        <div class="help__content-list">
                           <ul>
                              <li><i class="fa-regular fa-circle-check"></i> Giving Hope, Changing Lives</li>
                              <li><i class="fa-regular fa-circle-check"></i> Empower Through Charity
                              </li>
                              <li><i class="fa-regular fa-circle-check"></i> Together We Can</li>
                              <li><i class="fa-regular fa-circle-check"></i> Healing Communities</li>
                              <li><i class="fa-regular fa-circle-check"></i> Every Act Counts</li>
                              <li><i class="fa-regular fa-circle-check"></i> Compassion in Action</li>
                           </ul>
                        </div>
                        <div class="difference-three-cta">
                           <a href="about-us.php" aria-label="about us" title="about us"
                              class="btn--primary">About Us <i class="fa-solid fa-arrow-right"></i></a>
                           <div class="author-info">
                              <div class="author-thumb">
                                 <img src="assets/images/author-two.png" alt="Image">
                              </div>
                              <div class="author-content">
                                 <span>Software Engineer</span>
                                 <h6>James Anderson</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!-- ==== / difference section end ==== -->
         <!-- ==== donation section start ==== -->
         <!-- <section class="donation-future">
            <div class="container">
               <div class="row gutter-40">
                  <div class="col-12 col-lg-6 col-xl-7">
                     <div class="donation-future__content">
                        <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                           <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                           <h2 class="title-animation">Building A Better <span>Future</span>
                              Together By Donations
                           </h2>
                           <div class="video-btn-wrapper">
                              <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                                 title="video Player" class="open-video-popup">
                              <i class="icon-play"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-5">
                     <div class="donation-future__thumb" data-background="assets/images/donation/thumb-bg.png"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <h4>Support for Food Expenses</h4>
                        <div class="cause__progress progress-bar-single">
                           <div class="cause-progress__bar">
                              <div class="progress-bar-wrapper" data-percent="60%">
                                 <div class="progress-bar">
                                    <div class="progress-bar-percent"><span class="percent-value"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="cause-progress__goal">
                           <p>Raised: <span class="raised">$8500</span></p>
                           <p>Goal: <span class="goal">$1,00,000</span></p>
                        </div>
                        <hr>
                        <div class="made-amount">
                           <span class="donation-amount">$100</span>
                           <span class="donation-amount">$200</span>
                           <span class="donation-amount active">$500</span>
                           <span class="donation-amount">$1000</span>
                           <span class="donation-amount">$10000</span>
                        </div>
                        <div class="cta">
                           <a href="donate-us.php" class="btn--primary">Donate Now <i class="icon-heart"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="donation-bg">
               <img src="assets/images/donation/bg.png" alt="Image" class="parallax-image">
               <img src="assets/images/donation/shape.png" alt="Image" class="shape">
            </div>
         </section> -->
         <!-- ==== / donation section end ==== -->
         <!-- ==== cause slider section start ==== -->
         <!-- <section class="cause cause-three">
            <div class="container">
               <div class="row gutter-30 align-items-center">
                  <div class="col-12 col-md-8 col-xl-7">
                     <div class="section__header">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                        <h2 class="title-animation">Help & <span>donate</span> them when
                           they're in need
                        </h2>
                     </div>
                  </div>
                  <div class="col-12 col-md-4 col-xl-5">
                     <div class="slider-navigation">
                        <button type="button" aria-label="prev slide" title="prev slide"
                           class="prev-cause slider-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button type="button" aria-label="next slide" title="next slide"
                           class="next-cause slider-btn slider-btn-next">
                        <i class="fa-solid fa-arrow-right"></i>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="cause__slider-wrapper">
                        <div class="cause__slider swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.php">
                                          <img src="assets/images/cause/one.png" alt="Image">
                                          </a>
                                          <div class="tag">
                                             <a href="our-causes.php">Health</a>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.php">Children we work with</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                       </div>
                                       <div class="cause__slider-cta">
                                          <div class="cause__progress progress-bar-single">
                                             <div class="cause-progress__intro">
                                                <p><span>Donation</span>
                                                   <span class="percent-value">85%</span>
                                                </p>
                                             </div>
                                             <div class="cause-progress__bar">
                                                <div class="progress-bar-wrapper" data-percent="85%">
                                                   <div class="progress-bar">
                                                      <div class="progress-bar-percent">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="cause-progress__goal">
                                                <p>Raised: <span class="raised">$8500</span></p>
                                                <p>Goal: <span class="goal">$1,0000</span></p>
                                             </div>
                                          </div>
                                          <div class="cause__cta">
                                             <a href="donate-us.php" aria-label="donate now"
                                                title="donate now" class="btn--secondary">Donate Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.php">
                                          <img src="assets/images/cause/two.png" alt="Image">
                                          </a>
                                          <div class="tag">
                                             <a href="our-causes.php">Food</a>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.php">Help For Education</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                       </div>
                                       <div class="cause__slider-cta">
                                          <div class="cause__progress progress-bar-single">
                                             <div class="cause-progress__intro">
                                                <p><span>Donation</span>
                                                   <span class="percent-value">90%</span>
                                                </p>
                                             </div>
                                             <div class="cause-progress__bar">
                                                <div class="progress-bar-wrapper" data-percent="90%">
                                                   <div class="progress-bar">
                                                      <div class="progress-bar-percent">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="cause-progress__goal">
                                                <p>Raised: <span class="raised">$8500</span></p>
                                                <p>Goal: <span class="goal">$1,0000</span></p>
                                             </div>
                                          </div>
                                          <div class="cause__cta">
                                             <a href="donate-us.php" aria-label="donate now"
                                                title="donate now" class="btn--secondary">Donate Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.php">
                                          <img src="assets/images/cause/three.png" alt="Image">
                                          </a>
                                          <div class="tag">
                                             <a href="our-causes.php">Health</a>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.php">Help For Food</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                       </div>
                                       <div class="cause__slider-cta">
                                          <div class="cause__progress progress-bar-single">
                                             <div class="cause-progress__intro">
                                                <p><span>Donation</span>
                                                   <span class="percent-value">75%</span>
                                                </p>
                                             </div>
                                             <div class="cause-progress__bar">
                                                <div class="progress-bar-wrapper" data-percent="75%">
                                                   <div class="progress-bar">
                                                      <div class="progress-bar-percent">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="cause-progress__goal">
                                                <p>Raised: <span class="raised">$8500</span></p>
                                                <p>Goal: <span class="goal">$1,0000</span></p>
                                             </div>
                                          </div>
                                          <div class="cause__cta">
                                             <a href="donate-us.php" aria-label="donate now"
                                                title="donate now" class="btn--secondary">Donate Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.php">
                                          <img src="assets/images/cause/four.png" alt="Image">
                                          </a>
                                          <div class="tag">
                                             <a href="our-causes.php">Food</a>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.php">Give health support</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                       </div>
                                       <div class="cause__slider-cta">
                                          <div class="cause__progress progress-bar-single">
                                             <div class="cause-progress__intro">
                                                <p><span>Donation</span>
                                                   <span class="percent-value">65%</span>
                                                </p>
                                             </div>
                                             <div class="cause-progress__bar">
                                                <div class="progress-bar-wrapper" data-percent="65%">
                                                   <div class="progress-bar">
                                                      <div class="progress-bar-percent">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="cause-progress__goal">
                                                <p>Raised: <span class="raised">$8500</span></p>
                                                <p>Goal: <span class="goal">$1,0000</span></p>
                                             </div>
                                          </div>
                                          <div class="cause__cta">
                                             <a href="donate-us.php" aria-label="donate now"
                                                title="donate now" class="btn--secondary">Donate Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.php">
                                          <img src="assets/images/cause/one.png" alt="Image">
                                          </a>
                                          <div class="tag">
                                             <a href="our-causes.php">Health</a>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.php">Children we work with</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                       </div>
                                       <div class="cause__slider-cta">
                                          <div class="cause__progress progress-bar-single">
                                             <div class="cause-progress__intro">
                                                <p><span>Donation</span>
                                                   <span class="percent-value">85%</span>
                                                </p>
                                             </div>
                                             <div class="cause-progress__bar">
                                                <div class="progress-bar-wrapper" data-percent="85%">
                                                   <div class="progress-bar">
                                                      <div class="progress-bar-percent">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="cause-progress__goal">
                                                <p>Raised: <span class="raised">$8500</span></p>
                                                <p>Goal: <span class="goal">$1,0000</span></p>
                                             </div>
                                          </div>
                                          <div class="cause__cta">
                                             <a href="donate-us.php" aria-label="donate now"
                                                title="donate now" class="btn--secondary">Donate Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.php">
                                          <img src="assets/images/cause/two.png" alt="Image">
                                          </a>
                                          <div class="tag">
                                             <a href="our-causes.php">Food</a>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.php">Help For Education</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                       </div>
                                       <div class="cause__slider-cta">
                                          <div class="cause__progress progress-bar-single">
                                             <div class="cause-progress__intro">
                                                <p><span>Donation</span>
                                                   <span class="percent-value">90%</span>
                                                </p>
                                             </div>
                                             <div class="cause-progress__bar">
                                                <div class="progress-bar-wrapper" data-percent="90%">
                                                   <div class="progress-bar">
                                                      <div class="progress-bar-percent">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="cause-progress__goal">
                                                <p>Raised: <span class="raised">$8500</span></p>
                                                <p>Goal: <span class="goal">$1,0000</span></p>
                                             </div>
                                          </div>
                                          <div class="cause__cta">
                                             <a href="donate-us.php" aria-label="donate now"
                                                title="donate now" class="btn--secondary">Donate Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.php">
                                          <img src="assets/images/cause/three.png" alt="Image">
                                          </a>
                                          <div class="tag">
                                             <a href="our-causes.php">Health</a>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.php">Help For Food</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                       </div>
                                       <div class="cause__slider-cta">
                                          <div class="cause__progress progress-bar-single">
                                             <div class="cause-progress__intro">
                                                <p><span>Donation</span>
                                                   <span class="percent-value">75%</span>
                                                </p>
                                             </div>
                                             <div class="cause-progress__bar">
                                                <div class="progress-bar-wrapper" data-percent="75%">
                                                   <div class="progress-bar">
                                                      <div class="progress-bar-percent">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="cause-progress__goal">
                                                <p>Raised: <span class="raised">$8500</span></p>
                                                <p>Goal: <span class="goal">$1,0000</span></p>
                                             </div>
                                          </div>
                                          <div class="cause__cta">
                                             <a href="donate-us.php" aria-label="donate now"
                                                title="donate now" class="btn--secondary">Donate Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.php">
                                          <img src="assets/images/cause/four.png" alt="Image">
                                          </a>
                                          <div class="tag">
                                             <a href="our-causes.php">Food</a>
                                          </div>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.php">Give health support</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                       </div>
                                       <div class="cause__slider-cta">
                                          <div class="cause__progress progress-bar-single">
                                             <div class="cause-progress__intro">
                                                <p><span>Donation</span>
                                                   <span class="percent-value">65%</span>
                                                </p>
                                             </div>
                                             <div class="cause-progress__bar">
                                                <div class="progress-bar-wrapper" data-percent="65%">
                                                   <div class="progress-bar">
                                                      <div class="progress-bar-percent">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="cause-progress__goal">
                                                <p>Raised: <span class="raised">$8500</span></p>
                                                <p>Goal: <span class="goal">$1,0000</span></p>
                                             </div>
                                          </div>
                                          <div class="cause__cta">
                                             <a href="donate-us.php" aria-label="donate now"
                                                title="donate now" class="btn--secondary">Donate Now</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="spade">
               <img src="assets/images/help/spade.png" alt="Image">
            </div>
         </section> -->
         <!-- ==== / cause slider section end ==== -->
         <!-- ==== team section start ==== -->
         <!-- <section class="team-three">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-10 col-xl-6">
                     <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                        <h2 class="title-animation">Meet Our Volunteer
                           <span>Team</span> members
                        </h2>
                     </div>
                  </div>
               </div>
               <div class="row gutter-40">
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                        <div class="team__single van-tilt">
                           <div class="team__single-thumb">
                              <a href="team-details.php">
                              <img src="assets/images/team/five.png" alt="Image">
                              </a>
                           </div>
                           <div class="team__content-wrapper">
                              <div class="team__single-content">
                                 <h5><a href="team-details.php">Michel Fokluz</a></h5>
                                 <p>Software Engineer</p>
                              </div>
                              <div class="team__icons">
                                 <div class="team__single-content__icon">
                                    <i class="icon-share"></i>
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
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="300">
                        <div class="team__single van-tilt">
                           <div class="team__single-thumb">
                              <a href="team-details.php">
                              <img src="assets/images/team/six.png" alt="Image">
                              </a>
                           </div>
                           <div class="team__content-wrapper">
                              <div class="team__single-content">
                                 <h5><a href="team-details.php">Jara Kroft</a></h5>
                                 <p>Front End Engineer</p>
                              </div>
                              <div class="team__icons">
                                 <div class="team__single-content__icon">
                                    <i class="icon-share"></i>
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
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="600">
                        <div class="team__single van-tilt">
                           <div class="team__single-thumb">
                              <a href="team-details.php">
                              <img src="assets/images/team/seven.png" alt="Image">
                              </a>
                           </div>
                           <div class="team__content-wrapper">
                              <div class="team__single-content">
                                 <h5><a href="team-details.php">Billu Devis</a></h5>
                                 <p>Operations Manager</p>
                              </div>
                              <div class="team__icons">
                                 <div class="team__single-content__icon">
                                    <i class="icon-share"></i>
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
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="section__cta cta text-center">
                        <a href="our-team.php" aria-label="our team" title="our team" class="btn--primary">View All
                        <i class="fa-solid fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="spade">
               <img src="assets/images/sprade-green.png" alt="Image">
            </div>
         </section> -->
         <!-- ==== / team section end ==== -->
         <!-- ==== help section start ==== -->
         <section class="help-three mt-5">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="help-three__inner">
                        <div class="section__header-secondary" data-aos="fade-up" data-aos-duration="1000">
                           <div class="row gutter-30 align-items-center">
                              <div class="col-12 col-lg-8 col-xxl-7">
                                 <div class="section__header mb-0">
                                    {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                                    people</span> --}}
                                    <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                                    <h2 class="title-animation">Helping each other can
                                       make <span>world</span> better
                                    </h2>
                                 </div>
                              </div>
                              <div class="col-12 col-lg-4 col-xxl-5">
                                 <div class="help-cta">
                                    <a href="{{route('aboutus') }}" aria-label="our team" title="our team"
                                       class="btn--primary">More About Us<i
                                       class="fa-solid fa-arrow-right"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="help-three__wrapper">
                           <div class="row gutter-60">
                              <div class="col-12 col-md-6 col-xxl-3">
                                 <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="help-three__thumb">
                                       <div class="thumb">
                                          <i class="icon-pack"></i>
                                       </div>
                                       <div class="help-three__tag">
                                          <h6>Step - 01</h6>
                                       </div>
                                    </div>
                                    <div class="help-three__content">
                                       <h6>Select Services</h6>
                                       <p>Pellentesque habitant morbi trist
                                          fames ac turp egestas. Aliquam
                                          enim feugiat mattis.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-xxl-3">
                                 <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="300">
                                    <div class="help-three__thumb">
                                       <div class="thumb">
                                          <i class="icon-credit-card"></i>
                                       </div>
                                       <div class="help-three__tag">
                                          <h6>Step - 02</h6>
                                       </div>
                                    </div>
                                    <div class="help-three__content">
                                       <h6>Percel Information</h6>
                                       <p>Pellentesque habitant morbi trist
                                          fames ac turp egestas. Aliquam
                                          enim feugiat mattis.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-xxl-3">
                                 <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="600">
                                    <div class="help-three__thumb">
                                       <div class="thumb">
                                          <i class="icon-ship"></i>
                                       </div>
                                       <div class="help-three__tag">
                                          <h6>Step - 03</h6>
                                       </div>
                                    </div>
                                    <div class="help-three__content">
                                       <h6>Transportation</h6>
                                       <p>Pellentesque habitant morbi trist
                                          fames ac turp egestas. Aliquam
                                          enim feugiat mattis.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-xxl-3">
                                 <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="900">
                                    <div class="help-three__thumb">
                                       <div class="thumb">
                                          <i class="icon-truck"></i>
                                       </div>
                                       <div class="help-three__tag">
                                          <h6>Step - 04</h6>
                                       </div>
                                    </div>
                                    <div class="help-three__content">
                                       <h6>Takeover Products</h6>
                                       <p>Pellentesque habitant morbi trist
                                          fames ac turp egestas. Aliquam
                                          enim feugiat mattis.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row gutter-60 mt-5">
                              <div class="col-12 col-md-6 col-xxl-3">
                                 <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="help-three__thumb">
                                       <div class="thumb">
                                          <i class="icon-pack"></i>
                                       </div>
                                       <div class="help-three__tag">
                                          <h6>Step - 01</h6>
                                       </div>
                                    </div>
                                    <div class="help-three__content">
                                       <h6>Select Services</h6>
                                       <p>Pellentesque habitant morbi trist
                                          fames ac turp egestas. Aliquam
                                          enim feugiat mattis.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-xxl-3">
                                 <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="300">
                                    <div class="help-three__thumb">
                                       <div class="thumb">
                                          <i class="icon-credit-card"></i>
                                       </div>
                                       <div class="help-three__tag">
                                          <h6>Step - 02</h6>
                                       </div>
                                    </div>
                                    <div class="help-three__content">
                                       <h6>Percel Information</h6>
                                       <p>Pellentesque habitant morbi trist
                                          fames ac turp egestas. Aliquam
                                          enim feugiat mattis.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-xxl-3">
                                 <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="600">
                                    <div class="help-three__thumb">
                                       <div class="thumb">
                                          <i class="icon-ship"></i>
                                       </div>
                                       <div class="help-three__tag">
                                          <h6>Step - 03</h6>
                                       </div>
                                    </div>
                                    <div class="help-three__content">
                                       <h6>Transportation</h6>
                                       <p>Pellentesque habitant morbi trist
                                          fames ac turp egestas. Aliquam
                                          enim feugiat mattis.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-12 col-md-6 col-xxl-3">
                                 <div class="help-three__single" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-delay="900">
                                    <div class="help-three__thumb">
                                       <div class="thumb">
                                          <i class="icon-truck"></i>
                                       </div>
                                       <div class="help-three__tag">
                                          <h6>Step - 04</h6>
                                       </div>
                                    </div>
                                    <div class="help-three__content">
                                       <h6>Takeover Products</h6>
                                       <p>Pellentesque habitant morbi trist
                                          fames ac turp egestas. Aliquam
                                          enim feugiat mattis.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <img src="assets/images/v-line.png" alt="Image" class="v-line d-none d-xxl-block">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="help-three-bg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
               <img src="assets/images/bg-one.png" alt="Image" class="bg-help">
               <div class="poor-boy">
                  <img src="assets/images/poor-boy.png" alt="Image" class="poor">
                  <img src="assets/images/shape-three.png" alt="Image" class="shape">
               </div>
               <div class="parasuit">
                  <img src="assets/images/parasuit.png" alt="Image">
               </div>
            </div>
         </section>
         <!-- ==== / help section end ==== -->
         <!-- ==== partner section start ==== -->
         <!-- <div class="partner">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="partner__slider swiper">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/one.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/two.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/three.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/four.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/five.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/one.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/two.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/three.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/four.png" alt="Image">
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="partner__slider-single">
                                 <img src="assets/images/sponsor/five.png" alt="Image">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- ==== / partner section end ==== -->
         <!-- ==== counter section start ==== -->
         <!-- <section class="counter">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="counter__inner">
                        <div class="counter__single" data-aos="fade-up" data-aos-duration="1000">
                           <div class="thumb">
                              <i class="icon-support-hand"></i>
                           </div>
                           <div class="counter__content">
                              <h2><span class="odometer" data-odometer-final="400"></span><span
                                 class="prefix">+</span>
                              </h2>
                              <h5>Team member</h5>
                           </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single" data-aos="fade-up" data-aos-duration="1000"
                           data-aos-delay="300">
                           <div class="thumb">
                              <i class="icon-review"></i>
                           </div>
                           <div class="counter__content">
                              <h2><span class="odometer" data-odometer-final="80"></span>K<span
                                 class="prefix">+</span>
                              </h2>
                              <h5>Client's review</h5>
                           </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single" data-aos="fade-up" data-aos-duration="1000"
                           data-aos-delay="600">
                           <div class="thumb">
                              <i class="icon-documents"></i>
                           </div>
                           <div class="counter__content">
                              <h2><span class="odometer" data-odometer-final="100"></span>K<span
                                 class="prefix">+</span>
                              </h2>
                              <h5>Completed projects</h5>
                           </div>
                        </div>
                        <div class="divider"></div>
                        <div class="counter__single" data-aos="fade-up" data-aos-duration="1000"
                           data-aos-delay="900">
                           <div class="thumb">
                              <i class="icon-award"></i>
                           </div>
                           <div class="counter__content">
                              <h2><span class="odometer" data-odometer-final="40"></span>K<span
                                 class="prefix">+</span>
                              </h2>
                              <h5>Winning award</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="poor">
               <img src="assets/images/poor-two.png" alt="Image" class="parallax-image">
            </div>
            <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
               <img src="assets/images/cta/shape-left.png" alt="Image" class="base-img">
            </div>
         </section> -->
         <!-- ==== / counter section end ==== -->
         <!-- ==== testimonial section start ==== -->
         <!-- <section class="testimonial-three">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-md-8 col-xl-7">
                     <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                        <h2 class="title-animation">What Our <span>Clients</span> Say About Our Volunteers</h2>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-12 col-lg-10 col-xl-9 col-xxl-12">
                     <div class="testimonial-three__inner">
                        <div class="testimonial-three__slider swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="testimonial-three__single">
                                    <div class="thumb">
                                       <img src="assets/images/author-three.png" alt="Image">
                                       <div class="review">
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                       </div>
                                    </div>
                                    <div class="testimonial-three__content">
                                       <div class="author-info">
                                          <div class="author-content">
                                             <h6>Charlie Dublin</h6>
                                             <p>Global Partner</p>
                                          </div>
                                          <div class="quote">
                                             <i class="icon-quotation-two"></i>
                                          </div>
                                       </div>
                                       <p>Foundation was established with a small idea that was incepted in the
                                          minds of its promoters in the year 1994! We skilfully guide
                                          applicants for immigration process to any country they aspire to
                                          settle down immigration advisory
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="testimonial-three__single">
                                    <div class="thumb">
                                       <img src="assets/images/author-four.png" alt="Image">
                                       <div class="review">
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                       </div>
                                    </div>
                                    <div class="testimonial-three__content">
                                       <div class="author-info">
                                          <div class="author-content">
                                             <h6>Lablu Kuel</h6>
                                             <p>Global Partner</p>
                                          </div>
                                          <div class="quote">
                                             <i class="icon-quotation-two"></i>
                                          </div>
                                       </div>
                                       <p>Foundation was established with a small idea that was incepted in the
                                          minds of its promoters in the year 1994! We skilfully guide
                                          applicants for immigration process to any country they aspire to
                                          settle down immigration advisory
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="testimonial-three__single">
                                    <div class="thumb">
                                       <img src="assets/images/author-three.png" alt="Image">
                                       <div class="review">
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                       </div>
                                    </div>
                                    <div class="testimonial-three__content">
                                       <div class="author-info">
                                          <div class="author-content">
                                             <h6>Charlie Dublin</h6>
                                             <p>Global Partner</p>
                                          </div>
                                          <div class="quote">
                                             <i class="icon-quotation-two"></i>
                                          </div>
                                       </div>
                                       <p>Foundation was established with a small idea that was incepted in the
                                          minds of its promoters in the year 1994! We skilfully guide
                                          applicants for immigration process to any country they aspire to
                                          settle down immigration advisory
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="testimonial-three__single">
                                    <div class="thumb">
                                       <img src="assets/images/author-four.png" alt="Image">
                                       <div class="review">
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                          <i class="icon-star"></i>
                                       </div>
                                    </div>
                                    <div class="testimonial-three__content">
                                       <div class="author-info">
                                          <div class="author-content">
                                             <h6>Lablu Kuel</h6>
                                             <p>Global Partner</p>
                                          </div>
                                          <div class="quote">
                                             <i class="icon-quotation-two"></i>
                                          </div>
                                       </div>
                                       <p>Foundation was established with a small idea that was incepted in the
                                          minds of its promoters in the year 1994! We skilfully guide
                                          applicants for immigration process to any country they aspire to
                                          settle down immigration advisory
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="slider-navigation">
                        <button type="button" aria-label="prev slide" title="prev slide"
                           class="prev-testimonial-three slider-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button type="button" aria-label="next slide" title="next slide"
                           class="next-testimonial-three slider-btn slider-btn-next">
                        <i class="fa-solid fa-arrow-right"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="spade">
               <img src="assets/images/community/spade.png" alt="Image" class="base-img">
            </div>
            <div class="spade-green">
               <img src="assets/images/sprade-green.png" alt="Image">
            </div>
         </section> -->
         <!-- ==== / testimonial section end ==== -->
         <!-- ==== faq section start ==== -->
         <!-- <section class="faq">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12 col-lg-8 col-xl-6">
                     <div class="faq__content">
                        <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                           <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                           <h2 class="title-animation">Frequently <span>Asked</span>
                              Questions
                           </h2>
                        </div>
                        <div class="faq__content-inner cta" data-aos="fade-up" data-aos-duration="1000"
                           data-aos-delay="100">
                           <div class="accordion" id="accordion">
                              <div class="accordion-item" >
                                 <h6 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">
                                    What kind of recipes can I find on your website?
                                    </button>
                                 </h6>
                                 <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                       aria-expanded="false" aria-controls="collapseTwo">
                                    Are the recipes suitable for beginners?
                                    </button>
                                 </h6>
                                 <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                       aria-expanded="false" aria-controls="collapseThree">
                                    Do you offer cooking tips and techniques?
                                    </button>
                                 </h6>
                                 <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                       aria-expanded="false" aria-controls="collapseFour">
                                    How frequently do you update your recipe collection?
                                    </button>
                                 </h6>
                                 <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
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
                           <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                              <img src="assets/images/faq/thumb-lg.png" alt="Image">
                           </div>
                           <div class="thumb-sm" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                              <img src="assets/images/faq/thumb-sm.png" alt="Image">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="shape d-none d-lg-block">
               <img src="assets/images/faq/shape.png" alt="Image">
            </div>
         </section> -->
         <!-- ==== / faq section end ==== -->
         <!-- ==== event section start ==== -->
         <!-- <section class="event">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-md-8 col-xl-7">
                     <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                        <h2 class="title-animation">Checkout our upcoming full <span>event</span> list</h2>
                     </div>
                  </div>
               </div>
               <div class="row gutter-30">
                  <div class="col-12 col-lg-6 col-xl-7">
                     <div class="event__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                        <div class="event__single van-tilt">
                           <div class="event__single-thumb">
                              <img src="assets/images/event/one.png" alt="Image" >
                           </div>
                           <div class="event__content">
                              <span>October 19, 2025</span>
                              <h4><a href="event-details.php">Transforming Lives Charity Golf Tournam
                                 Entdges Charity Networking Event</a>
                              </h4>
                              <p><i class="fa-solid fa-location-dot"></i> 135 W, 46nd Street, New York</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-5">
                     <div class="event__single-wrapper" data-aos="fade-left" data-aos-duration="1000">
                        <div class="event__single event-single-alt van-tilt">
                           <div class="event__single-thumb">
                              <img src="assets/images/event/two.png" alt="Image" >
                           </div>
                           <div class="event__content">
                              <span>October 19, 2025</span>
                              <h4><a href="event-details.php">Unity in Giving Community
                                 Charity Event</a>
                              </h4>
                              <p><i class="fa-solid fa-location-dot"></i> 135 W, 46nd Street, New York</p>
                           </div>
                        </div>
                     </div>
                     <div class="event__single-wrapper" data-aos="fade-left" data-aos-duration="1000"
                        data-aos-delay="300">
                        <div class="event__single  event-single-alt van-tilt">
                           <div class="event__single-thumb">
                              <img src="assets/images/event/three.png" alt="Image" >
                           </div>
                           <div class="event__content">
                              <span>October 19, 2025</span>
                              <h4><a href="event-details.php">Unity in Giving Community
                                 Charity Event</a>
                              </h4>
                              <p><i class="fa-solid fa-location-dot"></i> 135 W, 46nd Street, New York</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="section__cta cta text-center">
                        <a href="events.php" aria-label="our events" title="our events" class="btn--primary">View
                        All <i class="fa-solid fa-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="spade">
               <img src="assets/images/blog/spade-base.png" alt="Image" class="base-img">
            </div>
         </section> -->
         <!-- ==== / event section end ==== -->
         <!-- ==== contact section start ==== -->
         <!-- <section class="contact">
            <div class="container">
               <div class="row justify-content-end">
                  <div class="col-12 col-md-10 col-xl-7">
                     <div class="contact__content">
                        <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                           <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                           <h2 class="title-animation">Send Us <span>message</span>
                              For donation!
                           </h2>
                        </div>
                        <div class="contact__form cta" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <form action="#" method="post">
                              <div class="input-group" >
                                 <div class="input-single">
                                    <input type="email" name="contact-email" id="contactEmail"
                                       placeholder="your email...">
                                    <i class="fa-solid fa-paper-plane"></i>
                                 </div>
                                 <div class="input-single">
                                    <input type="text" name="contact-number" id="contactNumber"
                                       placeholder="your phone...">
                                    <i class="fa-solid fa-phone"></i>
                                 </div>
                              </div>
                              <div class="input-single">
                                 <input type="text" name="contact-address" id="contactAddress"
                                    placeholder="your address...">
                                 <i class="fa-solid fa-location-dot"></i>
                              </div>
                              <div class="input-single alter-input">
                                 <textarea name="contact-message" id="contactMessage"
                                    placeholder="your message..."></textarea>
                                 <i class="fa-solid fa-envelope"></i>
                              </div>
                              <div class="form-cta">
                                 <button type="submit" aria-label="submit message" title="submit message"
                                    class="btn--primary">Contact Us <i class="fa-solid fa-arrow-right"></i></button>
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
         </section> -->
         <!-- ==== / contact section end ==== -->


         <div class="mouseCursor cursor-outer"></div>
         <div class="mouseCursor cursor-inner"></div>
         <!-- ==== / custom cursor end ==== -->
         <!-- ==== scroll to top start ==== -->
         <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
            <span></span>
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
               <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
         </button>
         <!-- ==== / scroll to top end ==== -->
         <!-- ==== color switcher start ==== -->
         <div class="color-palate" >
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
         </div>

      </div>


</x-frontend.frontend-layout>
