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
            <h2>Blog</h2>
            <ul class="pages-list">
               <li><a href="{{url('/')}}">Home</a></li>
               <li>Blog</li>
            </ul>
         </div>
      </div>
   </div>
   <section class="blog-area pt-100 pb-100">
      <div class="container">
         <div class="section-title">
            <span class="sub-title">
            <i class="flaticon-hashtag-symbol"></i>
            Update News and Blogs
            </span>
            <h2>Stay Updated with Our Latest News and Blog</h2>
         </div>
         <div class="row">
             @foreach ($blogs as $blog)
             @php
             $createdAt = Carbon\Carbon::parse($blog['updated_at']);
             $suborder = $createdAt->format('M d');
             @endphp
             <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                   <div class="blog-image">
                      <a href="blog-details.html"><img src="assets/images/blog/{{$blog->img}}" alt="image"></a>
                      <div class="tag">{{$suborder}}</div>
                      <div class="tag-two"><a href="blog.html">{{$blog->category}}</a></div>
                   </div>
                   <div class="blog-content">
                      <h3>
                         <a href="blog-details.html">{{$blog->title}}</a>
                      </h3>
                      <p>{{$blog->short_desc}}</p>
                      <a href="blog-details.html" class="blog-btn">Read More</a>
                      <ul class="entry-meta">
                         <li>
                            <i class='bx bxs-user'></i>
                            <span>By <a href="blog-right-sidebar.html">{{$blog->created_by}}</a></span>
                         </li>
                         <li>
                            <i class='bx bxs-comment'></i>
                            2 Likes
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
             @endforeach


            {{-- <div class="col-lg-12 col-md-12">
               <div class="pagination-area">
                  <a href="#" class="prev page-numbers">
                  <i class='flaticon-left-arrow'></i>
                  </a>
                  <span class="page-numbers current" aria-current="page">1</span>
                  <a href="#" class="page-numbers">2</a>
                  <a href="#" class="page-numbers">3</a>
                  <a href="#" class="page-numbers">4</a>
                  <a href="#" class="page-numbers">5</a>
                  <a href="#" class="next page-numbers">
                  <i class='flaticon-right-arrow'></i>
                  </a>
               </div>
            </div>  --}}
         </div>
      </div>
   </section>
</body>
@endsection
