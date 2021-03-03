@extends('home')

@section('content')

<body>


    </div>
    <section class="about-area ptb-100">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-7">
                <div class="about-content">

                   <h3>Our Clients are Our Priority, We Offer Quality Dental Services <span>of Specialists</span></h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                   <div class="row">
                      <div class="col-lg-6 col-md-6">
                         <ul class="about-list">
                            <li>
                               <i class="flaticon-check"></i>
                               Complete Crown
                            </li>
                            <li>
                               <i class="flaticon-check"></i>
                               Dental Implants
                            </li>
                            <li>
                               <i class="flaticon-check"></i>
                               Dental X-Ray
                            </li>
                         </ul>
                      </div>
                      <div class="col-lg-6 col-md-6">
                         <ul class="about-list">
                            <li>
                               <i class="flaticon-check"></i>
                               Cosmetic Filling
                            </li>
                            <li>
                               <i class="flaticon-check"></i>
                               Cosmetic Filling
                            </li>
                            <li>
                               <i class="flaticon-check"></i>
                               Root Canal
                            </li>
                         </ul>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-lg-6 col-md-6">
                         <div class="about-info">
                            <i class="flaticon-caduceus"></i>
                            <h4>25 Years</h4>
                            <span>Dental Experienced</span>
                         </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                         <div class="about-info">
                            <i class="flaticon-chair"></i>
                            <h4>6405+</h4>
                            <span>Dental Services</span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-5">
                <div class="about-image">
                   <img src="{{asset('assets/images/about/about-1.png')}}" alt="image">
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="fun-facts-area pt-100 pb-70">
       <div class="container">
          <div class="row">
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                   <h3>
                      <span class="odometer" data-count="549">00</span>
                   </h3>
                   <p>Expert Doctors</p>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                   <h3>
                      <span class="odometer" data-count="867">00</span>
                   </h3>
                   <p>Problem Solve</p>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                   <h3>
                      <span class="odometer" data-count="169">00</span>
                   </h3>
                   <p>Award Winning</p>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                   <h3>
                      <span class="odometer" data-count="79">00</span>
                   </h3>
                   <p>Experiences</p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="doctor-area pt-100 pb-70">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-5">
                <div class="section-title-warp">
                   <span class="sub-title">
                   <i class="flaticon-hashtag-symbol"></i>
                   Our Dentist
                   </span>
                   <h2>Our Specialized and Experienced Dentist</h2>
                </div>
             </div>
             <div class="col-lg-7">
                <div class="section-warp-btn">
                   <a href="dentist.html" class="default-btn">View All</a>
                </div>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-4 col-md-6">
                <div class="single-doctor">
                   <a href="dentist-details.html"><img src="{{asset('assets/images/doctor/doctor-1.jpg')}}" alt="image"></a>
                   <div class="doctor-content">
                      <h3>
                         <a href="dentist-details.html">Dr. Johnson Melbourne</a>
                      </h3>
                      <span>Prosthodontics Dentist</span>
                      <div class="share-link">
                         <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
                         <a href="https://twitter.com/?lang=en" target="_blank"><i class='bx bxl-twitter'></i></a>
                         <a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                         <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6">
                <div class="single-doctor">
                   <a href="dentist-details.html"><img src="{{asset('assets/images/doctor/doctor-2.jpg')}}" alt="image"></a>
                   <div class="doctor-content">
                      <h3>
                         <a href="dentist-details.html">Dr. Ena Dicrosa</a>
                      </h3>
                      <span>Aesthetic Dentistry</span>
                      <div class="share-link">
                         <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
                         <a href="https://twitter.com/?lang=en" target="_blank"><i class='bx bxl-twitter'></i></a>
                         <a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                         <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-doctor">
                   <a href="dentist-details.html"><img src="{{asset('assets/images/doctor/doctor-3.jpg')}}" alt="image"></a>
                   <div class="doctor-content">
                      <h3>
                         <a href="dentist-details.html">Dr. Addison Smith</a>
                      </h3>
                      <span>Gastroenterologists</span>
                      <div class="share-link">
                         <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
                         <a href="https://twitter.com/?lang=en" target="_blank"><i class='bx bxl-twitter'></i></a>
                         <a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                         <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="pricing-area pt-100 pb-70">
       <div class="container">
          <div class="tab pricing-list-tab">
             <ul class="tabs">
                <li>
                   <a href="#">Monthly</a>
                </li>
                <li>
                   <a href="#">Yearly</a>
                </li>
             </ul>
             <div class="tab_content">
                <div class="tabs_item">
                   <div class="row">
                      <div class="col-lg-3 col-sm-6">
                         <div class="single-pricing-table">
                            <div class="pricing-header">
                               <h3>Basic</h3>
                            </div>
                            <div class="price">$39</div>
                            <ul class="pricing-features">
                               <li>Cancer Services</li>
                               <li>Cardiovascular Services</li>
                               <li>Weight Management</li>
                               <li>Dental Services</li>
                               <li>Women's Health</li>
                               <li>Emergency Medicine</li>
                               <li>Family Medicine</li>
                               <li class="color-gray"><del>Gynecologic Oncology</del></li>
                               <li class="color-gray"><del>Neurosurgery</del></li>
                               <li class="color-gray"><del>Radiation Oncology</del></li>
                            </ul>
                            <div class="pricing-btn">
                               <a href="pricing.html" class="default-btn">Buy Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                         <div class="single-pricing-table">
                            <div class="pricing-header">
                               <h3>Standard</h3>
                            </div>
                            <div class="price">$59</div>
                            <ul class="pricing-features">
                               <li>Cancer Services</li>
                               <li>Cardiovascular Services</li>
                               <li>Weight Management</li>
                               <li>Dental Services</li>
                               <li>Women's Health</li>
                               <li>Emergency Medicine</li>
                               <li>Family Medicine</li>
                               <li>Gynecologic Oncology</li>
                               <li class="color-gray"><del>Neurosurgery</del></li>
                               <li class="color-gray"><del>Radiation Oncology</del></li>
                            </ul>
                            <div class="pricing-btn">
                               <a href="pricing.html" class="default-btn">Buy Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                         <div class="single-pricing-table">
                            <div class="pricing-header">
                               <h3>Premium</h3>
                            </div>
                            <div class="price">$79</div>
                            <ul class="pricing-features">
                               <li>Cancer Services</li>
                               <li>Cardiovascular Services</li>
                               <li>Weight Management</li>
                               <li>Dental Services</li>
                               <li>Women's Health</li>
                               <li>Emergency Medicine</li>
                               <li>Family Medicine</li>
                               <li>Gynecologic Oncology</li>
                               <li>Neurosurgery</li>
                               <li class="color-gray"><del>Radiation Oncology</del></li>
                            </ul>
                            <div class="pricing-btn">
                               <a href="pricing.html" class="default-btn">Buy Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                         <div class="single-pricing-table">
                            <div class="pricing-header">
                               <h3>Gold</h3>
                            </div>
                            <div class="price">$99</div>
                            <ul class="pricing-features">
                               <li>Cancer Services</li>
                               <li>Cardiovascular Services</li>
                               <li>Weight Management</li>
                               <li>Dental Services</li>
                               <li>Women's Health</li>
                               <li>Emergency Medicine</li>
                               <li>Family Medicine</li>
                               <li>Gynecologic Oncology</li>
                               <li>Neurosurgery</li>
                               <li>Radiation Oncology</li>
                            </ul>
                            <div class="pricing-btn">
                               <a href="pricing.html" class="default-btn">Buy Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="tabs_item">
                   <div class="row">
                      <div class="col-lg-3 col-sm-6">
                         <div class="single-pricing-table">
                            <div class="pricing-header">
                               <h3>Basic</h3>
                            </div>
                            <div class="price">$139</div>
                            <ul class="pricing-features">
                               <li>Cancer Services</li>
                               <li>Cardiovascular Services</li>
                               <li>Weight Management</li>
                               <li>Dental Services</li>
                               <li>Women's Health</li>
                               <li>Emergency Medicine</li>
                               <li>Family Medicine</li>
                               <li class="color-gray"><del>Gynecologic Oncology</del></li>
                               <li class="color-gray"><del>Neurosurgery</del></li>
                               <li class="color-gray"><del>Radiation Oncology</del></li>
                            </ul>
                            <div class="pricing-btn">
                               <a href="pricing.html" class="default-btn">Buy Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                         <div class="single-pricing-table">
                            <div class="pricing-header">
                               <h3>Standard</h3>
                            </div>
                            <div class="price">$259</div>
                            <ul class="pricing-features">
                               <li>Cancer Services</li>
                               <li>Cardiovascular Services</li>
                               <li>Weight Management</li>
                               <li>Dental Services</li>
                               <li>Women's Health</li>
                               <li>Emergency Medicine</li>
                               <li>Family Medicine</li>
                               <li>Gynecologic Oncology</li>
                               <li class="color-gray"><del>Neurosurgery</del></li>
                               <li class="color-gray"><del>Radiation Oncology</del></li>
                            </ul>
                            <div class="pricing-btn">
                               <a href="pricing.html" class="default-btn">Buy Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                         <div class="single-pricing-table">
                            <div class="pricing-header">
                               <h3>Premium</h3>
                            </div>
                            <div class="price">$279</div>
                            <ul class="pricing-features">
                               <li>Cancer Services</li>
                               <li>Cardiovascular Services</li>
                               <li>Weight Management</li>
                               <li>Dental Services</li>
                               <li>Women's Health</li>
                               <li>Emergency Medicine</li>
                               <li>Family Medicine</li>
                               <li>Gynecologic Oncology</li>
                               <li>Neurosurgery</li>
                               <li class="color-gray"><del>Radiation Oncology</del></li>
                            </ul>
                            <div class="pricing-btn">
                               <a href="pricing.html" class="default-btn">Buy Now</a>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-3 col-sm-6">
                         <div class="single-pricing-table">
                            <div class="pricing-header">
                               <h3>Gold</h3>
                            </div>
                            <div class="price">$399</div>
                            <ul class="pricing-features">
                               <li>Cancer Services</li>
                               <li>Cardiovascular Services</li>
                               <li>Weight Management</li>
                               <li>Dental Services</li>
                               <li>Women's Health</li>
                               <li>Emergency Medicine</li>
                               <li>Family Medicine</li>
                               <li>Gynecologic Oncology</li>
                               <li>Neurosurgery</li>
                               <li>Radiation Oncology</li>
                            </ul>
                            <div class="pricing-btn">
                               <a href="pricing.html" class="default-btn">Buy Now</a>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="review-area ptb-100">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-5">
                <div class="section-title-warp">
                   <span class="sub-title">
                   <i class="flaticon-hashtag-symbol"></i>
                   Our Clients Review
                   </span>
                   <h2>Real Review From Our Real Customer</h2>
                </div>
             </div>
             <div class="col-lg-7">
                <div class="section-warp-btn">
                   <a href="testimonials.html" class="default-btn">View All</a>
                </div>
             </div>
          </div>
          <div class="review-slides owl-carousel owl-theme">
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-1.jpg')}}" alt="image">
                   <h3>Dr. Sarah Taylor</h3>
                   <span>Nephrologists</span>
                </div>
             </div>
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-2.jpg')}}" alt="image">
                   <h3>Dr. Aiken Ward</h3>
                   <span>Endocrinologists</span>
                </div>
             </div>
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-3.jpg')}}" alt="image">
                   <h3>Dr. Eachann Jhon</h3>
                   <span>Cardiologists</span>
                </div>
             </div>
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-1.jpg')}}" alt="image">
                   <h3>Dr. Sarah Taylor</h3>
                   <span>Nephrologists</span>
                </div>
             </div>
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-2.jpg')}}" alt="image">
                   <h3>Dr. Aiken Ward</h3>
                   <span>Endocrinologists</span>
                </div>
             </div>
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-3.jpg')}}" alt="image">
                   <h3>Dr. Eachann Jhon</h3>
                   <span>Cardiologists</span>
                </div>
             </div>
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-1.jpg')}}" alt="image">
                   <h3>Dr. Sarah Taylor</h3>
                   <span>Nephrologists</span>
                </div>
             </div>
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-2.jpg')}}" alt="image">
                   <h3>Dr. Aiken Ward</h3>
                   <span>Endocrinologists</span>
                </div>
             </div>
             <div class="single-review-item">
                <div class="icon">
                   <i class="flaticon-left-quote"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="review-info">
                   <img src="{{asset('assets/images/review/review-3.jpg')}}" alt="image">
                   <h3>Dr. Eachann Jhon</h3>
                   <span>Cardiologists</span>
                </div>
             </div>
          </div>
       </div>
    </section>

 </body>
 @endsection

