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
            <h2>Dentist</h2>
            <ul class="pages-list">
               <li><a href="{{url('/')}}">Home</a></li>
               <li>Dentist</li>
            </ul>
         </div>
      </div>
   </div>
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
            </div>
         </div>
      </div>
      <div class="row">
      @foreach ($dentists as $dentist)
      <div class="col-lg-4 col-md-6">
         <div class="single-doctor">
            <a href=""><img style="width: 402.66px;height:402.66px;" src="assets/images/doctor/{{$dentist->img}}" alt="image"></a>
            <div class="doctor-content">
               <h3>
                  <a href="{{url('/doc_det/'.$dentist->id)}}">{{$dentist->name}}</a>
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
</body>
@endsection
