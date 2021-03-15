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
            <h2>Testimonials</h2>
            <ul class="pages-list">
               <li><a href="index.html">Home</a></li>
               <li>Testimonials</li>
            </ul>
         </div>
      </div>
   </div>
   <section class="review-area ptb-100">
      <div class="container">
         <div class="section-title">
            <span class="sub-title">
            <i class="flaticon-hashtag-symbol"></i>
            Our Clients Review
            </span>
            <h2>Real Review From Our Real Customer</h2>
         </div>
         <div class="row">
             @foreach ($reviews as $review)
             <div class="col-lg-4 col-md-6" >
                <div class="single-review-item mb-30" style="height: 80%;">
                    <div class="review-info">
                        <img src="{{asset('assets/images/doctor/'.$review->Dentist->img)}}" alt="image">
                        <h3>{{$review->Dentist->name}}</h3>
                        <span>{{$review->Dentist->job}}</span>
                     </div>
                   <div class="icon">
                      <i class="flaticon-left-quote"></i>
                   </div>
                   <p>{{$review->rev_text}}</p>

                </div>
             </div>

             @endforeach


         </div>
      </div>
   </section>
</body>
@endsection
