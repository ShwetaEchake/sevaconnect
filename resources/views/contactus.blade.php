<x-frontend.frontend-layout>


      <div class="page-wrapper">
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

         <section class="common-banner">
            <div class="container">
               <div class="row">
                  <div class="common-banner__content text-center">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                     <h2 class="title-animation">Contact Us</h2>
                  </div>
               </div>
            </div>
            <div class="banner-bg">
               <img src="assets/images/banner/banner-bg.png" alt="Image">
            </div>
            <div class="shape">
               <img src="assets/images/shape.png" alt="Image">
            </div>
            <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
               <img src="assets/images/sprade-base.png" alt="Image" class="base-img">
            </div>
         </section>
         <!-- ==== / banner section end ==== -->
         <!-- ==== contact section start ==== -->
         <section class="contact-main volunteer">
            <div class="container">
               <div class="row gutter-40">
                  <div class="col-12 col-xl-6">
                     <div class="contact__content">
                        <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                           <span class="sub-title"><i class="icon-donation"></i> Get In Touch</span>
                           <h2 class="title-animation">Contact Us</h2>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                              doloremque laudantium, totam rem aperiam, eaque inventore
                           </p>
                        </div>
                        <div class="contact-main__inner cta">
                           <div class="contact-main__single">
                              <div class="thumb">
                                 <i class="fa-solid fa-location-dot"></i>
                              </div>
                              <div class="content">
                                 <h6>Location</h6>
                                 <p><a href="https://maps.app.goo.gl/Gr9pTNqz5FRNrjQw8" target="_blank">
                                    55 Main street, 2nd block,
                                    Melbourne, Australia
                                    </a>
                                 </p>
                              </div>
                           </div>
                           <div class="contact-main__single">
                              <div class="thumb">
                                 <i class="fa-solid fa-phone"></i>
                              </div>
                              <div class="content">
                                 <h6>Phone</h6>
                                 <p><a href="tel:2305-587-3407">+1 (368) 567 89 54 </a></p>
                                 <p><a href="tel:2305-587-3407">+236 (456) 896 22</a></p>
                              </div>
                           </div>
                           <div class="contact-main__single">
                              <div class="thumb">
                                 <i class="fa-solid fa-envelope"></i>
                              </div>
                              <div class="content">
                                 <h6>Email</h6>
                                 <p><a href="mailto:support@example.com">example@email.com</a></p>
                                 <p><a href="mailto:support@example.com">charifund@email.com</a></p>
                              </div>
                           </div>
                           <div class="contact-main__single">
                              <div class="thumb">
                                 <i class="fa-solid fa-share-nodes"></i>
                              </div>
                              <div class="content">
                                 <h6>Social</h6>
                                 <div class="social">
                                    <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                                    <i class="fa-brands fa-vimeo-v"></i>
                                    </a>
                                    <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin" title="linkedin">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="contact-main__thumb cta">
                           <img src="assets/images/contact-thumb.png" alt="Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-xl-6">
                     <div class="contact__form volunteer__form checkout__form" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="volunteer__form-content">
                           <h4 class="title-animation">Fill Up The Form</h4>
                           <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <form action="#" method="post" class="cta">
                           <div class="input-single">
                              <input type="text" name="full-name" id="fullName" placeholder="Enter Name" required="">
                              <i class="fa-solid fa-user"></i>
                           </div>
                           <div class="input-single">
                              <input type="email" name="c-email" id="cEmail" placeholder="Enter Email" required="">
                              <i class="fa-solid fa-envelope"></i>
                           </div>
                           <div class="input-single">
                              <input type="text" name="phone-number" id="phoneNumber" placeholder="Phone Number" required="">
                              <i class="fa-solid fa-phone"></i>
                           </div>
                           <div class="input-single alter-input">
                              <textarea name="contact-message" id="contactMessage" placeholder="Your Message..."></textarea>
                              <i class="fa-solid fa-comments"></i>
                           </div>
                           <div class="form-cta">
                              {{-- <button type="submit" aria-label="submit message" title="submit message" class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></button> --}}
                              <a href="" class="btn--primary" aria-label="Contact Us" title="Contact Us">
                                Contact Us <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / contact section end ==== -->

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
      <!-- ==== js dependencies start ==== -->
      <!-- jquery -->
      <script src="assets/js/jquery-3.7.1.min.js"></script>
      <!-- bootstrap five js -->
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <!-- nice select js -->
      <script src="assets/js/jquery.nice-select.min.js"></script>
      <!-- magnific popup js -->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!-- swiper slider js -->
      <script src="assets/js/swiper-bundle.min.js"></script>
      <!-- viewport js -->
      <script src="assets/js/viewport.jquery.js"></script>
      <!-- odometer js -->
      <script src="assets/js/odometer.min.js"></script>
      <!-- vanilla tilt js -->
      <script src="assets/js/vanilla-tilt.min.js"></script>
      <!-- aos js -->
      <script src="assets/js/aos.js"></script>

      <!-- splittext js -->
      <script src="assets/js/SplitText.min.js"></script>
      <!-- scrollto js -->
      <script src="assets/js/ScrollToPlugin.min.js"></script>
      <!-- scrolltrigger js -->
      <script src="assets/js/ScrollTrigger.min.js"></script>
      <!-- gsap js -->
      <script src="assets/js/gsap.min.js"></script>
      <!-- ==== / js dependencies end ==== -->
      <!-- template settings js -->
      <script src="assets/js/template-settings.js"></script>
      <!-- main js -->
      <script src="assets/js/custom.js"></script>
   </body>
</html>
</x-frontend.frontend-layout>
