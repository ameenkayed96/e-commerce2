@extends('home')
@section('content')
<body>
   <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-bs-dismiss="modal">
               <i class='bx bx-x'></i>
               </button>
            </div>
            <div class="modal-body">
               <form class="modal-search-form">
                  <input type="search" class="search-field" placeholder="Search...">
                  <button type="submit"><i class='bx bx-search-alt'></i></button>
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="home-slides owl-carousel owl-theme">
      <div class="main-slides-item item-bg4">
         <div class="container">
            <div class="main-slides-content">
               <span class="sub-title">
               <i class="flaticon-hashtag-symbol"></i>
               Keeping Teeth Clean
               </span>
               <h1>The World Best<span>Dental Specialist</span> Treatment</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               <div class="slides-btn">
                  <a href="{{url('/appointment')}}" class="default-btn">Book Appointment</a>
                  <a href="dentist.html" class="optional-btn">Consult A Dentist</a>
               </div>
            </div>
         </div>
      </div>
      <div class="main-slides-item item-bg5">
         <div class="container">
            <div class="main-slides-content">
               <span class="sub-title">
               <i class="flaticon-hashtag-symbol"></i>
               Keeping Teeth Clean
               </span>
               <h1>The World Best <span>Dental Specialist</span> Treatment</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               <div class="slides-btn">
                  <a href="appointment.html" class="default-btn">Book Appointment</a>
                  <a href="dentist.html" class="optional-btn">Consult A Dentist</a>
               </div>
            </div>
         </div>
      </div>
      <div class="main-slides-item item-bg6">
         <div class="container">
            <div class="main-slides-content">
               <span class="sub-title">
               <i class="flaticon-hashtag-symbol"></i>
               Keeping Teeth Clean
               </span>
               <h1>The World Best <span>Dental Specialist</span> Treatment</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
               <div class="slides-btn">
                  <a href="appointment.html" class="default-btn">Book Appointment</a>
                  <a href="dentist.html" class="optional-btn">Consult A Dentist</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <section class="about-area ptb-100">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="about-content">
                  <span class="sub-title">
                  <i class="flaticon-hashtag-symbol"></i>
                  About Our Hospital
                  </span>
                  <h3>Enjoy Specialized Care Through <span>Precision Experience</span></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
            <div class="col-lg-6">
               <div class="about-image">
                  <img src="assets/images/about/about-2.jpg" alt="image">
                  <div class="about-inner-box">
                     <div class="content">
                        <div class="icon">
                           <i class="flaticon-doctor"></i>
                        </div>
                        <h3>
                           <a href="dentist-details.html">Certified Dentist</a>
                        </h3>
                        <p>Proin gravida nibh velit auctor aliquet aenean.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="services-area bg-eef9ff pt-100 pb-70">
      <div class="container">
         <div class="section-title">
            <span class="sub-title">
            <i class="flaticon-hashtag-symbol"></i>
            Our Services
            </span>
            <h2>Enjoy Specialized Care Through Precision, Artistry, and Experience</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="single-services-box">
                  <div class="icon">
                     <i class="flaticon-chair"></i>
                  </div>
                  <h3>
                     <a href="services-details.html">General Dentistry</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="{{url('/services_details')}}" class="services-btn">Read More</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-services-box">
                  <div class="icon">
                     <i class="flaticon-dental-care"></i>
                  </div>
                  <h3>
                     <a href="services-details.html">Cosmetic Dentistry</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="services-details.html" class="services-btn">Read More</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-services-box">
                  <div class="icon">
                     <i class="flaticon-dental-implant"></i>
                  </div>
                  <h3>
                     <a href="services-details.html">Dental Implants</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="services-details.html" class="services-btn">Read More</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-services-box">
                  <div class="icon">
                     <i class="flaticon-tooth"></i>
                  </div>
                  <h3>
                     <a href="services-details.html">Orthodontics</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="services-details.html" class="services-btn">Read More</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-services-box">
                  <div class="icon">
                     <i class="flaticon-tooth-1"></i>
                  </div>
                  <h3>
                     <a href="services-details.html">Teeth Whitening</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="services-details.html" class="services-btn">Read More</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-services-box">
                  <div class="icon">
                     <i class="flaticon-tooth-2"></i>
                  </div>
                  <h3>
                     <a href="services-details.html">Teeth Cleaning</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="services-details.html" class="services-btn">Read More</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="features-area-two pt-100 pb-70">
      <div class="container">
         <div class="section-title">
            <span class="sub-title">
            <i class="flaticon-hashtag-symbol"></i>
            Our Features
            </span>
            <h2>Our Clients are Our Priority, We Offer Quality Dental Services of Specialists</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
         </div>
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="single-features-box">
                  <div class="content">
                     <div class="icon">
                        <i class="flaticon-caduceus"></i>
                     </div>
                     <h3>
                        <a href="services-details.html">Quality Brackets</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="single-features-box">
                  <div class="content">
                     <div class="icon">
                        <i class="flaticon-policy"></i>
                     </div>
                     <h3>
                        <a href="services-details.html">Certified Dentist</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="single-features-box">
                  <div class="content">
                     <div class="icon">
                        <i class="flaticon-diamond"></i>
                     </div>
                     <h3>
                        <a href="services-details.html">Experience</a>
                     </h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="single-features-box">
                  <div class="content">
                     <div class="icon">
                        <i class="flaticon-hospitalisation"></i>
                     </div>
                     <h3>
                        <a href="services-details.html">Patient Care</a>
                     </h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="gallery-area bg-091e3e pt-100">
      <div class="container">
         <div class="section-title">
            <span class="sub-title">
            <i class="flaticon-hashtag-symbol"></i>
            Our Recent Work
            </span>
            <h2>Our Cases & Patient Stories We Create Beautiful Smiles</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="single-gallery">
                  <img src="assets/images/gallery/gallery-1.jpg" alt="image">
                  <div class="content">
                     <h3>
                        <a href="services-details.html">Aesthetic Dentistry</a>
                     </h3>
                     <span>Prosthodontics Dentist</span>
                     <div class="icon">
                        <a href="services-details.html"><i class="flaticon-right-arrow"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-gallery">
                  <img src="assets/images/gallery/gallery-2.jpg" alt="image">
                  <div class="content">
                     <h3>
                        <a href="services-details.html">Periodontists Dentistry</a>
                     </h3>
                     <span>Prosthodontics Dentist</span>
                     <div class="icon">
                        <a href="services-details.html"><i class="flaticon-right-arrow"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-gallery">
                  <img src="assets/images/gallery/gallery-3.jpg" alt="image">
                  <div class="content">
                     <h3>
                        <a href="services-details.html">Endodontists Dentistry</a>
                     </h3>
                     <span>Prosthodontics Dentist</span>
                     <div class="icon">
                        <a href="services-details.html"><i class="flaticon-right-arrow"></i></a>
                     </div>
                  </div>
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
               <a href="{{url('/doctors')}}" class="default-btn">View All</a>
            </div>
         </div>
      </div>
      <div class="row">
      @foreach ($dentists as $dentist)
      <div class="col-lg-4 col-md-6">
         <div class="single-doctor">
            <a href="dentist-details.html"><img style="width: 402.66px;height:402.66px;" src="assets/images/doctor/{{$dentist->img}}" alt="image"></a>
            <div class="doctor-content">
               <h3>
                  <a href="dentist-details.html">{{$dentist->name}}</a>
               </h3>
               <span>{{$dentist->job}}</span>
               <div class="share-link">
                  <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
                  <a href="https://twitter.com/?lang=en" target="_blank"><i class='bx bxl-twitter'></i></a>
                  <a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                  <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a>
               </div>
            </div>
         </div>
      </div>
      @endforeach
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
                  <img src="assets/images/review/review-1.jpg" alt="image">
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
                  <img src="assets/images/review/review-2.jpg" alt="image">
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
                  <img src="assets/images/review/review-3.jpg" alt="image">
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
                  <img src="assets/images/review/review-1.jpg" alt="image">
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
                  <img src="assets/images/review/review-2.jpg" alt="image">
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
                  <img src="assets/images/review/review-3.jpg" alt="image">
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
                  <img src="assets/images/review/review-1.jpg" alt="image">
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
                  <img src="assets/images/review/review-2.jpg" alt="image">
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
                  <img src="assets/images/review/review-3.jpg" alt="image">
                  <h3>Dr. Eachann Jhon</h3>
                  <span>Cardiologists</span>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="blog-area pt-100 pb-70">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-5">
               <div class="section-title-warp">
                  <span class="sub-title">
                  <i class="flaticon-hashtag-symbol"></i>
                  Update News and Blogs
                  </span>
                  <h2>Stay Updated with Our Latest News and Blog</h2>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="section-warp-btn">
                  <a href="blog.html" class="default-btn">View All</a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="single-blog">
                  <div class="blog-image">
                     <a href="blog-details.html"><img src="assets/images/blog/blog-1.jpg" alt="image"></a>
                     <div class="tag">10 Jun</div>
                     <div class="tag-two"><a href="blog.html">Technology</a></div>
                  </div>
                  <div class="blog-content">
                     <h3>
                        <a href="blog-details.html">New Technology Make for Dental Operation</a>
                     </h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
                     <a href="blog-details.html" class="blog-btn">Read More</a>
                     <ul class="entry-meta">
                        <li>
                           <i class='bx bxs-user'></i>
                           <span>By <a href="blog-right-sidebar.html">Daisy Gabriela</a></span>
                        </li>
                        <li>
                           <i class='bx bxs-comment'></i>
                           2 Comments
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="single-blog">
                  <div class="blog-image">
                     <a href="blog-details.html"><img src="assets/images/blog/blog-2.jpg" alt="image"></a>
                     <div class="tag">11 Jun</div>
                     <div class="tag-two"><a href="blog.html">Dental</a></div>
                  </div>
                  <div class="blog-content">
                     <h3>
                        <a href="blog-details.html">Regular Dental care make Your Smile Brighter</a>
                     </h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
                     <a href="blog-details.html" class="blog-btn">Read More</a>
                     <ul class="entry-meta">
                        <li>
                           <i class='bx bxs-user'></i>
                           <span>By <a href="blog-right-sidebar.html">Ronnie Aaron</a></span>
                        </li>
                        <li>
                           <i class='bx bxs-comment'></i>
                           2 Comments
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
               <div class="single-blog">
                  <div class="blog-image">
                     <a href="blog-details.html"><img src="assets/images/blog/blog-3.jpg" alt="image"></a>
                     <div class="tag">12 Jun</div>
                     <div class="tag-two"><a href="blog.html">Hygiene</a></div>
                  </div>
                  <div class="blog-content">
                     <h3>
                        <a href="blog-details.html">Dental Hygiene for All Age to Make Smile</a>
                     </h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod.</p>
                     <a href="blog-details.html" class="blog-btn">Read More</a>
                     <ul class="entry-meta">
                        <li>
                           <i class='bx bxs-user'></i>
                           <span>By <a href="blog-right-sidebar.html">Babatunde Jon</a></span>
                        </li>
                        <li>
                           <i class='bx bxs-comment'></i>
                           2 Comments
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class="go-top">
      <i class='bx bx-up-arrow-alt'></i>
   </div>
   <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/jquery.meanmenu.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/jquery.appear.js"></script>
   <script src="assets/js/odometer.min.js"></script>
   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <script src="assets/js/jquery.ajaxchimp.min.js"></script>
   <script src="assets/js/form-validator.min.js"></script>
   <script src="assets/js/contact-form-script.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>
@endsection
