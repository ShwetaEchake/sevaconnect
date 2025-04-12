<x-frontend.frontend-layout>
   <style>
       .contact-main.volunteer {
           display: flex;
           justify-content: center;
           align-items: flex-start;
           min-height: 100vh;
           background: #f5f7fa;
           padding: 150px 20px; 
       }

       .contact__form {
           width: 100%;
           max-width: 500px; 
           padding: 40px;
           background: #fff;
           margin-top: 30px; /* Reduced margin to move it up */
           border-radius: 15px; 
           box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
           text-align: center;
           border: 2px solid #ddd; 
       }

       .volunteer .volunteer__form h4 {
           font-weight: 700;
           color: var(--black);
           margin-top: -20px; /* Move the heading higher */
           margin-bottom: 20px; /* Add spacing below */
           font-size: 24px; /* Adjust font size if needed */
       }

       /* Set hyperlink color */
       .contact__form p a {
           color: #edbf19;
           font-weight: bold; /* Optional: Make it bold */
           text-decoration: none; /* Optional: Remove underline */
       }

       .contact__form p a:hover {
           text-decoration: underline; /* Optional: Underline on hover */
       }
   </style>

   <section class="contact-main volunteer">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-12 col-xl-6 d-flex justify-content-center">
                   <div class="contact__form volunteer__form checkout__form" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                       <div class="volunteer__form-content">
                           <h4 class="title-animation">Login Details Form</h4>
                       </div>
                       <form action="{{ route('registerfrontend') }}" method="POST">
                           <div class="input-single">
                               <input type="email" name="c-email" id="cEmail" placeholder="Enter Email" required="">
                               <i class="fa-solid fa-envelope"></i>
                           </div>
                           <div class="input-single">
                               <input type="password" name="password" id="password" placeholder="Password" required="">
                               <i class="fa-solid fa-lock"></i>
                           </div>
                           <div class="form-cta">
                               <button type="submit" class="btn--primary">Login<i class="fa-solid fa-arrow-right"></i></button>
                           </div>
                       </form>
                       <p>Don't have an account? <a href="{{ route('registerfrontend.form') }}">Register here</a></p>
                   </div>
               </div>
           </div>
       </div>
   </section>
</x-frontend.frontend-layout>
