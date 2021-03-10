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
   <div class="page-banner-area">
      <div class="container">
         <div class="page-banner-content">
            <h2>Services</h2>
            <ul class="pages-list">
               <li><a href="index.html">Home</a></li>
               <li>Services</li>
            </ul>
         </div>
      </div>
   </div>
   <section class="services-area pt-100 pb-70">
      <div class="container">
         <div class="section-title">
            <span class="sub-title">
            <i class="flaticon-hashtag-symbol"></i>
            Our Best Dental Services
            </span>
            <h2>Enjoy Specialized Care Through Precision, Artistry, and Experience</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
         </div>
         <div class="row">
             @foreach ($services as $service)
             <div class="col-lg-4 col-md-6">
                <div class="single-services">
                   <div class="services-image">
                      <a href="services-details.html"><img src="assets/images/services/{{$service->photo}}" alt="image"></a>
                      <div class="icon">
                         <a href="services-details.html"><i class="flaticon-chair"></i></a>
                      </div>
                   </div>
                   <div class="services-content">
                      <h3>
                         <a href="services-details.html">{{$service->name}}</a>
                      </h3>
                      <p>{{$service->desc}}</p>
                   </div>
                </div>
             </div>
             @endforeach
         </div>
      </div>
   </section>
</body>
@endsection
