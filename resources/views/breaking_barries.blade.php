<x-frontend.frontend-layout>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            text-align: center;
        }
        .team-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }
        .team-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            justify-content: center;
        }
        .team-member {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }
        .team-member:hover {
            transform: translateY(-5px);
        }
        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .team-member h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #555;
        }
        .team-member p {
            font-size: 1rem;
            color: #777;
        }

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

/*faq design*/
.faq-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}
.faq-card {
    width: 300px;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.faq-card h3 {
    font-size: 18px;
    margin-bottom: 10px;
}
.faq-card p {
    font-size: 14px;
    color: #666;
}

/*faq card design */
.card-container {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  padding: 20px;
  flex-wrap: wrap;  /* Ensures cards wrap to the next line if space is limited */
}

.card {
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 10px;
  padding: 20px;  /* Adjusted padding for better spacing */
  width: 30%; /* Ensures cards fit in a row, adjust this for responsiveness */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);  /* Slightly stronger shadow for depth */
  text-align: left;
  transition: transform 0.3s ease, box-shadow 0.3s ease;  /* Added transition for hover effect */
}

.card:hover {
  transform: translateY(-5px);  /* Slight lift effect on hover */
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);  /* Increased shadow on hover for emphasis */
}

.card h2 {
  font-size: 22px;  /* Slightly smaller font size for better fit */
  margin-bottom: 15px;
  color: #333;
  font-weight: 600;  /* Increased font weight for emphasis */
}

.card ul {
  list-style-type: none;
  padding-left: 0;
  margin-top: 10px;  /* Added some margin for spacing from title */
}

.card ul li {
  font-size: 16px;
  color: #666;
  margin-bottom: 10px;  /* Increased space between list items */
}

@media (max-width: 768px) {
  .card {
    width: 45%;  /* Cards will take up more space on smaller screens */
  }
}

@media (max-width: 480px) {
  .card {
    width: 100%;  /* Cards will stack in one column on very small screens */
  }
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
                      <div class="common-banner__content text-center">
                         <span class="sub-title">Bridging hearts, building relations </span>
                         <h2 class="title-animation">Causes & Connect</h2>
                      </div>
                   </div>
                </div>
                <div class="">
                   <img src="{{ asset('frontend/assets/images/aboutus/sectps.jpeg') }}" alt="Image">
                </div>
                <div class="shape">
                   <img src="assets/images/shape.png" alt="Image">
                </div>
                <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
                   <img src="assets/images/sprade-base.png" alt="Image" class="base-img">
                </div>
             </section> --}}

             <section class="common-banner" style="padding-bottom: 60px;">
                <div class="container">
                   <div class="row">
                      <div class="common-banner__content text-center">
                         {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span> --}}
                         {{-- <span class="sub-title">Causes & Connections</span>
                         <span class="sub-title">Explore your path of change</span> --}}
                         <div style="text-align: left;">

                            <h3 style="color:#e98f09;">
                                <b>Addressing the concerns</b></br>
                                <b>For giving</b></h3>

                               
                            <br><br>

                            <h5 class="title-animation" style="margin-top: 2%;">Addressing Concerns and Inspiring Action</h5>
                        </div>

                         {{-- <h4 class="title-animation" style="color: white; font-weight: bold;">Our Sectors</h4> --}}
                      </div>
                   </div>
                </div>
                <div class="banner-bg">
                   <img src="{{ asset('frontend/assets/images/aboutus/sectps.jpeg') }}" alt="Image">
                </div>
                <div class="shape">
                   <img src="assets/images/shape.png" alt="Image">
                </div>
                {{-- <div class="sprade" data-aos="zoom-in" data-aos-duration="1000">
                   <img src="assets/images/sprade-base.png" alt="Image" class="base-img">
                </div> --}}
             </section>





             {{-- <section class="difference">
                <div class="container">
                   <div class="row justify-content-center">
                      <div class="col-12 col-lg-10 col-xl-8">
                         <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">

                            <span class="sub-title"><i class="icon-donation"></i>Bridging hearts building relations</span>
                            <h2 class="title-animation">Charity With Difference</h2>
                            <p>Join our monthly giving program to provide consistent support to our initiatives. Regular
                               contributions, no matter the size, help us plan and sustain long-term projects.
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="difference__inner">
                   <div class="container">
                      <div class="row">
                         <div class="col-12">
                            <div class="difference__slider swiper">
                               <div class="swiper-wrapper">





                                  <div class="swiper-slide">
                                     <div class="difference__single-wrapper">
                                        <div class="difference__single difference__single-third "
                                           data-background="{{asset('frontend/assets/images/difference/bg-three.png')}}">
                                           <div class="difference__single-thumb">
                                              <img src="{{ asset('frontend/assets/images/sectos/Enviornment.png') }}"

                                                   style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                          </div>
                                           <div class="difference__single-content">
                                              <h5><a href="cause-details.php">Environment</a></h5>
                                              <p></p>

                                           </div>
                                        </div>
                                     </div>
                                  </div>

                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="slider-navigation">
                      <button type="button" aria-label="prev slide" title="prev slide"
                         class="prev-difference slider-btn">
                      <i class="fa-solid fa-arrow-left"></i>
                      </button>
                      <button type="button" aria-label="next slide" title="next slide"
                         class="next-difference slider-btn slider-btn-next">
                      <i class="fa-solid fa-arrow-right"></i>
                      </button>
                   </div>
                </div>
                <div class="shape-hand" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                   <img src="assets/images/difference/shape-hand.png" alt="Image">
                </div>
             </section> --}}

             <section class="team" style="padding-top:20px;">
                <div class="team-container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-6">
                           <div class="section__header text-center"  data-aos-duration="1000">
                              {{-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                              people</span> --}}
                              <h4 style="display: block; text-align: center; color:#046a58;"><b>Bridging hearts building relations</b></h4>
                              {{-- <h2 class="title-animation">Meet Our Sectors --}}
                                {{-- <h2 class="title-animation">Meet Our <span>Sectors</span> --}}
                                 {{-- <span>Team</span> members --}}
                              </h2>
                           </div>
                        </div>
                     </div>


                   {{-- <div class="row">
                      <div class="col-12">
                         <div class="section__cta cta text-center">
                            <a href="{{route('our_team')}}" aria-label="our team" title="our team" class="btn--primary">View All
                            <i class="fa-solid fa-arrow-right"></i></a>
                         </div>
                      </div>
                   </div> --}}
                {{-- </div> --}}
                {{-- <div class="spade">
                   <img src="assets/images/sprade-green.png" alt="Image">
                </div> --}}
             </section>

             <section class="faq" style="margin-top: -350px;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-8 col-xl-12">
                            <div class="faq__content">
                                <div class="section__content">
                                    {{-- Bridging hearts building relations --}}
                                     <h5><b>A.Pertaining to Self</b></h5>
                                </div>
                                <div class="faq__content-inner cta">
                                    <div class="accordion" id="accordion">
                                        <!-- Accordion item 1 -->
                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"  aria-expanded="false" aria-controls="collapseOne">
                                                    I prefer doing good directly; seeing the impact is much more satisfying.
                                                </button>
                                            </h6>
                                            <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Direct involvement is valuable, but NGOs often have the expertise, networks, and scale to create a more sustainable and far-reaching impact than individual efforts.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"  aria-expanded="false" aria-controls="collapseTwo">
                                                    I support specific NGOs already.
                                                </button>
                                            </h6>
                                            <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Supporting multiple organizations diversifies your impact. Each NGO addresses unique aspects of societal issues that may complement your current contributions.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"  aria-expanded="false" aria-controls="collapseThree">
                                                    There’s no naming opportunity, photo-op, or public acknowledgment
                                                </button>
                                            </h6>
                                            <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>True philanthropy is about the impact, not recognition. However, many NGOs are happy to acknowledge donors in a discreet or formal manner if requested
                                                        .
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Accordion item 4 -->
                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"  aria-expanded="false" aria-controls="collapseFour">
                                                    I would prefer to give for capital expenditure rather than operating expenses.
                                                </button>
                                            </h6>
                                            <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Operational expenses are critical for enabling on-ground impact. Without administrative support, even capital projects cannot function effectively.</p>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading5">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5"  aria-expanded="false" aria-controls="collapse5">
                                                    If I had a reference of a donor or volunteer whom I know.
                                                </button>
                                            </h6>
                                            <div id="collapse5" class="accordion-collapse collapse " aria-labelledby="heading5" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Many NGOs can provide testimonials from existing donors and volunteers, and offer visits to projects to build trust.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading6">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6"  aria-expanded="false" aria-controls="collapse6">
                                                    My small amount won’t make any difference, and I won’t give a large amount for this.
                                                </button>
                                            </h6>
                                            <div id="collapse6" class="accordion-collapse collapse " aria-labelledby="heading6" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Small contributions from many people lead to big changes. NGOs often rely on collective giving to create large-scale impacts.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading7">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7"  aria-expanded="false" aria-controls="collapse7">
                                                    It’s not a cause that I am interested in.
                                                </button>
                                            </h6>
                                            <div id="collapse7" class="accordion-collapse collapse " aria-labelledby="heading7" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>While personal interest matters, societal change often requires support across diverse causes, even those outside one’s immediate preferences.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading8">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8"  aria-expanded="false" aria-controls="collapse8">
                                                    It’s not in a geographic area of my interest.
                                                </button>
                                            </h6>
                                            <div id="collapse8" class="accordion-collapse collapse " aria-labelledby="heading8" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Poverty and social issues transcend boundaries. Supporting work in underserved regions can create systemic change benefiting the larger society.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading9">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9"  aria-expanded="false" aria-controls="collapse9">
                                                    It’s not in a geographic area of my interest.
                                                </button>
                                            </h6>
                                            <div id="collapse9" class="accordion-collapse collapse " aria-labelledby="heading9" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Poverty and social issues transcend boundaries. Supporting work in underserved regions can create systemic change benefiting the larger society.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading10">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10"  aria-expanded="false" aria-controls="collapse10">
                                                    I don’t want to be pestered after a donation.
                                                </button>
                                            </h6>
                                            <div id="collapse10" class="accordion-collapse collapse " aria-labelledby="heading10" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Most NGOs respect donor boundaries. Clear communication can ensure you receive updates at a preferred frequency or opt-out entirely.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading11">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11"  aria-expanded="false" aria-controls="collapse11">
                                                    Why do the beneficiaries want to go to private schools, hospitals?
                                                </button>
                                            </h6>
                                            <div id="collapse11" class="accordion-collapse collapse " aria-labelledby="heading11" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Often, private institutions are the only ones providing adequate quality where public systems fall short. Supporting this ensures access to necessary services.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading12">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12"  aria-expanded="false" aria-controls="collapse12">
                                                    Individual appeals are endless—supporting them doesn’t solve the problem.
                                                </button>
                                            </h6>
                                            <div id="collapse12" class="accordion-collapse collapse " aria-labelledby="heading12" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>While individual help matters, NGOs work to address root causes, creating long-term solutions that reduce dependency.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading13">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13"  aria-expanded="false" aria-controls="collapse13">
                                                    I have enough problems of my own and no one helps.
                                                </button>
                                            </h6>
                                            <div id="collapse13" class="accordion-collapse collapse " aria-labelledby="heading13" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Helping others can bring immense personal fulfilment and meaning. Solving societal problems can indirectly improve your own environment.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading14">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14"  aria-expanded="false" aria-controls="collapse14">
                                                    I give to religious ones—that way I hope God will answer my prayers.
                                                </button>
                                            </h6>
                                            <div id="collapse14" class="accordion-collapse collapse " aria-labelledby="heading14" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Supporting NGOs complements religious giving by addressing practical issues, amplifying your overall impact.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading15">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15"  aria-expanded="false" aria-controls="collapse15">
                                                    It’s not my problem, so I don’t care.
                                                </button>
                                            </h6>
                                            <div id="collapse15" class="accordion-collapse collapse " aria-labelledby="heading15" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Social issues affect everyone indirectly, whether through economic costs, safety, or societal well-being.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading16">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16"  aria-expanded="false" aria-controls="collapse16">
                                                    I don’t want to be reminded about such problem issues.
                                                </button>
                                            </h6>
                                            <div id="collapse16" class="accordion-collapse collapse " aria-labelledby="heading16" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Ignoring problems doesn’t make them disappear. Supporting solutions can transform discomfort into meaningful change.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading17">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17"  aria-expanded="false" aria-controls="collapse17">
                                                    I don’t want to encourage this activity.
                                                </button>
                                            </h6>
                                            <div id="collapse17" class="accordion-collapse collapse " aria-labelledby="heading17" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>A conversation with the NGO can clarify misconceptions and  how their programs are designed to empower, not create dependency.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading18">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18"  aria-expanded="false" aria-controls="collapse18">
                                                    By spending, I cause a better trickle-down effect.
                                                </button>
                                            </h6>
                                            <div id="collapse18" class="accordion-collapse collapse " aria-labelledby="heading18" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Consumption rarely ensures equitable distribution. Donations can directly benefit underserved populations, maximizing impact.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading19">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19"  aria-expanded="false" aria-controls="collapse19">
                                                    By spending, I cause a better trickle-down effect.
                                                </button>
                                            </h6>
                                            <div id="collapse19" class="accordion-collapse collapse " aria-labelledby="heading19" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Consumption rarely ensures equitable distribution. Donations can directly benefit underserved populations, maximizing impact.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading20">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20"  aria-expanded="false" aria-controls="collapse20">
                                                    I pay enough taxes.
                                                </button>
                                            </h6>
                                            <div id="collapse20" class="accordion-collapse collapse " aria-labelledby="heading20" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Taxes fund general programs, but NGOs fill critical gaps where government initiatives fall short.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading21">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21"  aria-expanded="false" aria-controls="collapse21">
                                                    What’s in it for me?
                                                </button>
                                            </h6>
                                            <div id="collapse21" class="accordion-collapse collapse " aria-labelledby="heading21" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Beyond tax benefits, giving fosters purpose, personal satisfaction, and a legacy of positive impact.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="section__content">
                                            {{-- Bridging hearts building relations --}}
                                             <h5><b>B.Pertaining to Government</b></h5>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading22">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22"  aria-expanded="false" aria-controls="collapse22">
                                                    It’s the government’s job.
                                                </button>
                                            </h6>
                                            <div id="collapse22" class="accordion-collapse collapse " aria-labelledby="heading22" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Governments alone cannot tackle every issue. NGOs complement government efforts by addressing gaps and scaling innovative solutions.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading23">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23"  aria-expanded="false" aria-controls="collapse23">
                                                    Why are they doing the government’s work instead of pushing the government?
                                                </button>
                                            </h6>
                                            <div id="collapse23" class="accordion-collapse collapse " aria-labelledby="heading23" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Many NGOs advocate for systemic changes while addressing immediate needs. These dual roles are essential for lasting impact.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading24">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24"  aria-expanded="false" aria-controls="collapse24">
                                                    The poor are getting too many freebies from the government anyway
                                                </button>
                                            </h6>
                                            <div id="collapse24" class="accordion-collapse collapse " aria-labelledby="heading24" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Most government schemes reach only a fraction of those in need. NGOs target marginalized groups often left behind.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading25">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25"  aria-expanded="false" aria-controls="collapse25">
                                                    It’s the middle class that needs help.
                                                </button>
                                            </h6>
                                            <div id="collapse25" class="accordion-collapse collapse " aria-labelledby="heading25" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Supporting NGOs indirectly benefits the middle class by fostering a more equitable society and reducing systemic burdens.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="section__content">
                                            {{-- Bridging hearts building relations --}}
                                             <h5><b>C.Pertaining to the NGO</b></h5>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading26">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26"  aria-expanded="false" aria-controls="collapse26">
                                                    I think their approach is unrealistic.
                                                </button>
                                            </h6>
                                            <div id="collapse26" class="accordion-collapse collapse " aria-labelledby="heading26" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Discussing your concerns with the NGO can clarify their strategies, allowing you to assess their realism and potential impact.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading27">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27"  aria-expanded="false" aria-controls="collapse27">
                                                    I don’t think their work will make much difference.
                                                </button>
                                            </h6>
                                            <div id="collapse27" class="accordion-collapse collapse " aria-labelledby="heading27" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Many NGOs track measurable outcomes and provide detailed reports on their impact, showing tangible change.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading28">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28"  aria-expanded="false" aria-controls="collapse28">
                                                    Their admin costs are too high.
                                                </button>
                                            </h6>
                                            <div id="collapse28" class="accordion-collapse collapse " aria-labelledby="heading28" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Operational costs are essential for program effectiveness. Transparent NGOs can provide breakdowns of how funds are utilized.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading29">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29"  aria-expanded="false" aria-controls="collapse29">
                                                    They don’t have 80G.
                                                </button>
                                            </h6>
                                            <div id="collapse29" class="accordion-collapse collapse " aria-labelledby="heading29" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Many smaller NGOs may lack certifications but still do impactful work. Exploring alternatives or mentoring them towards compliance can help.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading30">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30"  aria-expanded="false" aria-controls="collapse30">
                                                    They don’t give Form 10BE in time.
                                                </button>
                                            </h6>
                                            <div id="collapse30" class="accordion-collapse collapse " aria-labelledby="heading30" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Communicating this issue with the NGO may lead to improved processes. NGOs often appreciate constructive feedback.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading31">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31"  aria-expanded="false" aria-controls="collapse31">
                                                    They don’t give thanks or feedback.
                                                </button>
                                            </h6>
                                            <div id="collapse31" class="accordion-collapse collapse " aria-labelledby="heading31" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Sharing this concern can encourage NGOs to improve donor engagement. Many are eager to express gratitude but may lack resources.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading32">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32"  aria-expanded="false" aria-controls="collapse32">
                                                    Their appeal documents are insufficient.
                                                </button>
                                            </h6>
                                            <div id="collapse32" class="accordion-collapse collapse " aria-labelledby="heading32" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>NGOs often welcome suggestions on how to improve communication to better resonate with potential donors.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading33">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33"  aria-expanded="false" aria-controls="collapse33">
                                                    They don’t seem professional enough as compared to ….
                                                </button>
                                            </h6>
                                            <div id="collapse33" class="accordion-collapse collapse " aria-labelledby="heading33" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Smaller or grassroots NGOs may lack resources but excel in community-level impact. Offering support can strengthen their professionalism.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading34">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34"  aria-expanded="false" aria-controls="collapse34">
                                                    How can I be sure that my money will go to deserving beneficiaries?
                                                </button>
                                            </h6>
                                            <div id="collapse34" class="accordion-collapse collapse " aria-labelledby="heading34" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Transparent NGOs share audits, reports, and testimonials to assure donors of proper fund utilization.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading35">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse35"  aria-expanded="false" aria-controls="collapse35">
                                                    Why can’t their trustees raise money through their contacts?
                                                </button>
                                            </h6>
                                            <div id="collapse35" class="accordion-collapse collapse " aria-labelledby="heading35" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Trustees often contribute, but diverse funding ensures sustainability and avoids over-reliance on a few sources.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading36">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse36"  aria-expanded="false" aria-controls="collapse36">
                                                    Why don’t NGOs work together?
                                                </button>
                                            </h6>
                                            <div id="collapse36" class="accordion-collapse collapse " aria-labelledby="heading36" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Many NGOs collaborate on specific projects. However, differing missions and approaches can make complete alignment challenging.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading37">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37"  aria-expanded="false" aria-controls="collapse37">
                                                    Why don’t they sell products or charge for their services?
                                                </button>
                                            </h6>
                                            <div id="collapse37" class="accordion-collapse collapse " aria-labelledby="heading37" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Selling products or charging may exclude the most vulnerable beneficiaries. Donations ensure inclusivity and fairness.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading38">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse38"  aria-expanded="false" aria-controls="collapse38">
                                                    There are more logical donors to approach first.
                                                </button>
                                            </h6>
                                            <div id="collapse38" class="accordion-collapse collapse " aria-labelledby="heading38" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Donations from all sources, regardless of size or type, play a critical role in achieving collective impact.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading39">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse39"  aria-expanded="false" aria-controls="collapse39">
                                                    I don’t know if the NGO is genuine.
                                                </button>
                                            </h6>
                                            <div id="collapse39" class="accordion-collapse collapse " aria-labelledby="heading39" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>Verified platforms, certifications, and reviews can help assess the credibility of NGOs.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item" id="">
                                            <h6 class="accordion-header" id="heading40">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse40"  aria-expanded="false" aria-controls="collapse40">
                                                    I have had a very bad experience.
                                                </button>
                                            </h6>
                                            <div id="collapse40" class="accordion-collapse collapse " aria-labelledby="heading40" data-bs-parent="#accordion">
                                                <div class="accordion-body">
                                                    <p>One negative experience doesn’t define the sector. Research and interaction can help identify more reliable NGOs.</p>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <h5><b>A social organization can function under various heads, depending on its purpose, mission, and scope. These heads may include:</b></h5>

                                        <div class="card-container">
                                            <div class="card">
                                              <h5><b>Administration and Governance</b></h5>
                                              <ul>
                                                <li> 1. Leadership and Board of Directors</li>
                                                <li> 2. Strategic Planning</li>
                                                <li> 3. Legal and Regulatory Compliance</li>
                                                <li> 4. Policy Development</li>
                                              </ul>
                                            </div>

                                            <div class="card">
                                              <h5><b>Program Implementation</b></h5>
                                              <ul>
                                                <li> 1. Social Welfare Programs (e.g., education, healthcare, housing)</li>
                                                <li> 2. Community Development</li>
                                                <li> 3. Advocacy and Awareness Campaigns</li>
                                                <li> 4. Emergency Relief and Humanitarian Aid</li>
                                              </ul>
                                            </div>

                                            <div class="card">
                                              <h5><b>Finance and Fundraising</b></h5>
                                              <ul>
                                                <li> 1. Budgeting and Financial Planning</li>
                                                <li> 2. Fundraising Activities</li>
                                                <li> 3. Grant Management</li>
                                                <li> 4. Financial Reporting and Audits</li>
                                              </ul>
                                            </div>

                                            <div class="card">
                                                <h5><b>Human Resources</b></h5>
                                                <ul>
                                                  <li> 1. Recruitment and Training</li>
                                                  <li> 2. Staff and Volunteer Management</li>
                                                  <li> 3. Diversity and Inclusion Initiatives</li>
                                                  <li> 4. Performance Evaluation</li>
                                                </ul>
                                              </div>

                                              <div class="card">
                                                <h5><b> Human Resources</b></h5>
                                                <ul>
                                                  <li> 1. Recruitment and Training</li>
                                                  <li> 2. Staff and Volunteer Management</li>
                                                  <li> 3. Diversity and Inclusion Initiatives</li>
                                                  <li> 4. Performance Evaluation</li>
                                                </ul>
                                              </div>
                                                <div class="card">
                                                    <h5> <b>Research and Development</b></h5>
                                                    <ul>
                                                    <li> 1. Needs Assessment Studies</li>
                                                    <li> 2. Program Evaluation</li>
                                                    <li> 3. Data Collection and Analysis</li>
                                                    <li> 4. Innovation and Pilot Projects</li>
                                                    </ul>
                                                </div>

                                                <div class="card">
                                                    <h5><b> Public Relations and Communication</b></h5>
                                                    <ul>
                                                    <li> 1. Branding and Identity Management</li>
                                                    <li> 2. Media Relations</li>
                                                    <li> 3. Community Outreach</li>
                                                    <li> 4. Social Media and Digital Marketing</li>
                                                </ul>
                                                </div>

                                                <div class="card">
                                                    <h5><b>Capacity Building</b></h5>
                                                    <ul>
                                                        <li> 1. Skill Development for Stakeholders</li>
                                                        <li> 2. Training Programs for Beneficiaries</li>
                                                        <li> 3. Organizational Strengthening Initiatives</li>
                                                        <li> 4. Leadership Development</li>
                                                    </ul>
                                                </div>

                                                <div class="card">
                                                    <h5><b>Monitoring and Evaluation</b></h5>
                                                    <ul>
                                                        <li>1.Program Monitoring Systems</li>
                                                        <li>2.Impact Assessment</li>
                                                        <li>3.Reporting and Accountability Mechanisms</li>
                                                        <li>4.Feedback and Learning</li>
                                                    </ul>
                                                </div>

                                                <!-- Technology and Innovation Card -->
                                                <div class="card">
                                                    <h5><b>Technology and Innovation</b></h5>
                                                    <ul>
                                                        <li>1.IT Infrastructure Management</li>
                                                        <li>2.Digital Transformation Projects</li>
                                                        <li>3.Use of Emerging Technologies for Social Impact</li>
                                                        <li>4.Data Security and Privacy</li>
                                                    </ul>
                                                </div>

                                                <!-- Environmental Sustainability Card -->
                                                <div class="card">
                                                    <h5><b>Environmental Sustainability</b></h5>
                                                    <ul>
                                                        <li>1.Green Practices in Operations</li>
                                                        <li>2.Climate Change Mitigation Projects</li>
                                                        <li>3.Awareness Campaigns for Environmental Protection</li>
                                                        <li>4.Sustainable Development Goals (SDGs) Alignment</li>
                                                    </ul>
                                                </div>

                                                <!-- Membership and Stakeholder Engagement Card -->
                                                <div class="card">
                                                    <h5><b>Membership and Stakeholder Engagement</b></h5>
                                                    <ul>
                                                        <li>1.Member Recruitment and Retention</li>
                                                        <li>2.Stakeholder Collaboration</li>
                                                        <li>3.Community Participation</li>
                                                        <li>4.Networking and Partnerships</li>
                                                    </ul>
                                                </div>

                                                <!-- Legal Aid and Social Justice Card -->
                                                <div class="card">
                                                    <h5><b>Legal Aid and Social Justice</b></h5>
                                                    <ul>
                                                        <li>1.Providing Legal Support</li>
                                                        <li>2.Addressing Social Inequalities</li>
                                                        <li>3.Human Rights Advocacy</li>
                                                        <li>4.Conflict Resolution and Mediations</li>
                                                    </ul>
                                                </div> --}}

                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-12 col-lg-4 col-xl-5 offset-xl-1">
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
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="shape d-none d-lg-block">
                    <img src="assets/images/faq/shape.png" alt="Image">
                </div> --}}
            </section>

             <!-- ==== / banner section end ==== -->
             <!-- ==== cause slider section start ==== -->
             {{-- <section class="cause cause-three-alt">
                <div class="container">
                   <div class="row justify-content-center">
                      <div class="col-12 col-md-8 col-xl-7">
                         <div class="section__header mb-60 text-center" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                            people</span>
                            <h2 class="title-animation">Be the reason of someone
                               <span>smiles</span> Causes
                            </h2>
                         </div>
                      </div>
                   </div>
                   <div class="row gutter-30">
                      <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                         <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000">
                            <div class="cause__slider-single van-tilt">
                               <div class="thumb">
                                  <a href="cause-details.html">
                                  <img src="assets/images/cause/one.png" alt="Image">
                                  </a>
                                  <div class="tag">
                                     <a href="our-causes.html">Health</a>
                                  </div>
                               </div>
                               <div class="content">
                                  <h6><a href="cause-details.html">Children we work with</a></h6>
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
                                     <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                         <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="cause__slider-single van-tilt">
                               <div class="thumb">
                                  <a href="cause-details.html">
                                  <img src="assets/images/cause/two.png" alt="Image">
                                  </a>
                                  <div class="tag">
                                     <a href="our-causes.html">Food</a>
                                  </div>
                               </div>
                               <div class="content">
                                  <h6><a href="cause-details.html">Help For Education</a></h6>
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
                                     <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                         <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="cause__slider-single van-tilt">
                               <div class="thumb">
                                  <a href="cause-details.html">
                                  <img src="assets/images/cause/three.png" alt="Image">
                                  </a>
                                  <div class="tag">
                                     <a href="our-causes.html">Health</a>
                                  </div>
                               </div>
                               <div class="content">
                                  <h6><a href="cause-details.html">Help For Food</a></h6>
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
                                     <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                         <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                            <div class="cause__slider-single van-tilt">
                               <div class="thumb">
                                  <a href="cause-details.html">
                                  <img src="assets/images/cause/four.png" alt="Image">
                                  </a>
                                  <div class="tag">
                                     <a href="our-causes.html">Food</a>
                                  </div>
                               </div>
                               <div class="content">
                                  <h6><a href="cause-details.html">Give health support</a></h6>
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
                                     <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                         <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000">
                            <div class="cause__slider-single van-tilt">
                               <div class="thumb">
                                  <a href="cause-details.html">
                                  <img src="assets/images/cause/one.png" alt="Image">
                                  </a>
                                  <div class="tag">
                                     <a href="our-causes.html">Health</a>
                                  </div>
                               </div>
                               <div class="content">
                                  <h6><a href="cause-details.html">Children we work with</a></h6>
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
                                     <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                         <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <div class="cause__slider-single van-tilt">
                               <div class="thumb">
                                  <a href="cause-details.html">
                                  <img src="assets/images/cause/two.png" alt="Image">
                                  </a>
                                  <div class="tag">
                                     <a href="our-causes.html">Food</a>
                                  </div>
                               </div>
                               <div class="content">
                                  <h6><a href="cause-details.html">Help For Education</a></h6>
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
                                     <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                         <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <div class="cause__slider-single van-tilt">
                               <div class="thumb">
                                  <a href="cause-details.html">
                                  <img src="assets/images/cause/three.png" alt="Image">
                                  </a>
                                  <div class="tag">
                                     <a href="our-causes.html">Health</a>
                                  </div>
                               </div>
                               <div class="content">
                                  <h6><a href="cause-details.html">Help For Food</a></h6>
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
                                     <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                         <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
                            <div class="cause__slider-single van-tilt">
                               <div class="thumb">
                                  <a href="cause-details.html">
                                  <img src="assets/images/cause/four.png" alt="Image">
                                  </a>
                                  <div class="tag">
                                     <a href="our-causes.html">Food</a>
                                  </div>
                               </div>
                               <div class="content">
                                  <h6><a href="cause-details.html">Give health support</a></h6>
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
                                     <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="row">
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
                   </div>
                </div>
                <div class="spade">
                   <img src="assets/images/help/spade.png" alt="Image">
                </div>
             </section> --}}
             <!-- ==== / cause slider section end ==== -->
             <!-- ==== cta section start ==== -->
             {{-- <section class="cta-section-two">
                <div class="container">
                   <div class="row justify-content-center">
                      <div class="col-12 col-lg-7">
                         <div class="cta__section__content">
                            <div class="section__content text-center" data-aos="fade-up" data-aos-duration="1000">
                               <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                               people</span>
                               <h2 class="title-animation">children need your help
                                  by donating today

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
             <!-- ==== cause slider section start ==== -->
             {{-- <section class="cause cause-three">
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
                            <button type="button" aria-label="prev slide" title="prev slide" class="prev-cause slider-btn">
                            <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <button type="button" aria-label="next slide" title="next slide" class="next-cause slider-btn slider-btn-next">
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
                                              <a href="cause-details.html">
                                              <img src="assets/images/cause/one.png" alt="Image">
                                              </a>
                                              <div class="tag">
                                                 <a href="our-causes.html">Health</a>
                                              </div>
                                           </div>
                                           <div class="content">
                                              <h6><a href="cause-details.html">Children we work with</a></h6>
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
                                                 <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="swiper-slide">
                                     <div class="cause__slider-inner">
                                        <div class="cause__slider-single">
                                           <div class="thumb">
                                              <a href="cause-details.html">
                                              <img src="assets/images/cause/two.png" alt="Image">
                                              </a>
                                              <div class="tag">
                                                 <a href="our-causes.html">Food</a>
                                              </div>
                                           </div>
                                           <div class="content">
                                              <h6><a href="cause-details.html">Help For Education</a></h6>
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
                                                 <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="swiper-slide">
                                     <div class="cause__slider-inner">
                                        <div class="cause__slider-single">
                                           <div class="thumb">
                                              <a href="cause-details.html">
                                              <img src="assets/images/cause/three.png" alt="Image">
                                              </a>
                                              <div class="tag">
                                                 <a href="our-causes.html">Health</a>
                                              </div>
                                           </div>
                                           <div class="content">
                                              <h6><a href="cause-details.html">Help For Food</a></h6>
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
                                                 <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="swiper-slide">
                                     <div class="cause__slider-inner">
                                        <div class="cause__slider-single">
                                           <div class="thumb">
                                              <a href="cause-details.html">
                                              <img src="assets/images/cause/four.png" alt="Image">
                                              </a>
                                              <div class="tag">
                                                 <a href="our-causes.html">Food</a>
                                              </div>
                                           </div>
                                           <div class="content">
                                              <h6><a href="cause-details.html">Give health support</a></h6>
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
                                                 <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="swiper-slide">
                                     <div class="cause__slider-inner">
                                        <div class="cause__slider-single">
                                           <div class="thumb">
                                              <a href="cause-details.html">
                                              <img src="assets/images/cause/one.png" alt="Image">
                                              </a>
                                              <div class="tag">
                                                 <a href="our-causes.html">Health</a>
                                              </div>
                                           </div>
                                           <div class="content">
                                              <h6><a href="cause-details.html">Children we work with</a></h6>
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
                                                 <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="swiper-slide">
                                     <div class="cause__slider-inner">
                                        <div class="cause__slider-single">
                                           <div class="thumb">
                                              <a href="cause-details.html">
                                              <img src="assets/images/cause/two.png" alt="Image">
                                              </a>
                                              <div class="tag">
                                                 <a href="our-causes.html">Food</a>
                                              </div>
                                           </div>
                                           <div class="content">
                                              <h6><a href="cause-details.html">Help For Education</a></h6>
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
                                                 <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="swiper-slide">
                                     <div class="cause__slider-inner">
                                        <div class="cause__slider-single">
                                           <div class="thumb">
                                              <a href="cause-details.html">
                                              <img src="assets/images/cause/three.png" alt="Image">
                                              </a>
                                              <div class="tag">
                                                 <a href="our-causes.html">Health</a>
                                              </div>
                                           </div>
                                           <div class="content">
                                              <h6><a href="cause-details.html">Help For Food</a></h6>
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
                                                 <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class="swiper-slide">
                                     <div class="cause__slider-inner">
                                        <div class="cause__slider-single">
                                           <div class="thumb">
                                              <a href="cause-details.html">
                                              <img src="assets/images/cause/four.png" alt="Image">
                                              </a>
                                              <div class="tag">
                                                 <a href="our-causes.html">Food</a>
                                              </div>
                                           </div>
                                           <div class="content">
                                              <h6><a href="cause-details.html">Give health support</a></h6>
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
                                                 <a href="donate-us.html" aria-label="donate now" title="donate now" class="btn--secondary">Donate Now</a>
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
             </section> --}}
             <!-- ==== / cause slider section end ==== -->
             <!-- ==== contact section start ==== -->
             {{-- <section class="contact">
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
                            <div class="contact__form cta" data-aos="fade-up" data-aos-duration="1000">
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
                                    <a href="{{ route('contact-us') }}" class="btn--primary" aria-label="Contact Us" title="Contact Us">
                                       Contact Us <i class="fa-solid fa-arrow-right"></i>
                                   </a>
                                    <button type="submit" aria-label="submit message" title="submit message" class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></button>
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

             <!-- ==== custom cursor start ==== -->
             <div class="mouseCursor cursor-outer"></div>
             <div class="mouseCursor cursor-inner"></div>
             <!-- ==== / custom cursor end ==== -->
             <!-- ==== scroll to top start ==== -->
             {{-- <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
                <span></span>
                <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
                   <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
                </svg>
             </button> --}}
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

          {{-- </div> --}}

    </x-frontend.frontend-layout>
