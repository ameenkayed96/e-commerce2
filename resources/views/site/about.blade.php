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
                      <span class="odometer" data-count="549">15</span>
                   </h3>
                   <p>Expert Doctors</p>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                   <h3>
                      <span class="odometer" data-count="867">86</span>
                   </h3>
                   <p>Problem Solve</p>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                   <h3>
                      <span class="odometer" data-count="169">70</span>
                   </h3>
                   <p>Award Winning</p>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-fun-fact">
                   <h3>
                      <span class="odometer" data-count="79">74</span>
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
                       @foreach ($parts as $part)
                       <div class="col-lg-3 col-sm-6">
                        <div class="single-pricing-table overflow-auto" style="height: 100%;">
                           <div class="pricing-header">
                              <h3>{{$part->name}}</h3>
                           </div>
                           <div class="price">${{$part->cost}}</div>

                           <ul class="pricing-features">
                               @forelse ($part->participation_services as $participation_service)
                               <li>{{$participation_service->name}}</li>
                               @empty
                                    No service now , Comming SoOn
                               @endforelse


                           </ul>
                           <div class="pricing-btn" style="    bottom: 4%;
                           position: absolute;
                           align-items: center;
                           right: 30%;
                       }">
                            <a href="pricing.html" class="default-btn">Buy Now</a>
                         </div>
                        </div>
                     </div>
                       @endforeach


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
                   <a href="{{url('/reviews')}}" class="default-btn">View All</a>
                </div>
             </div>
          </div>
       </div>
    </section>

 </body>
 @endsection

