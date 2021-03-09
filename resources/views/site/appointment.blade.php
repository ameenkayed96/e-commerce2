@extends('home')

@section('content')
<body>
<div class="others-option-for-responsive">
    <div class="container">
    <div class="dot-menu">
    <div class="inner">
    <div class="circle circle-one"></div>
    <div class="circle circle-two"></div>
    <div class="circle circle-three"></div>
    </div>
    </div>
    <div class="container">
    <div class="option-inner">
    <div class="others-options d-flex align-items-center">
    <div class="option-item">
    <div class="search-btn">
    <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
    <i class="flaticon-search"></i>
    </a>
    </div>
    </div>
    <div class="option-item">
    <div class="navbar-btn">
    <a href="appointment.html" class="default-btn">Book Appointment</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


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
    <h2>Appointment</h2>
    <ul class="pages-list">
    <li><a href="index.html">Home</a></li>
    <li>Appointment</li>
    </ul>
    </div>
    </div>
    </div>


    <section class="features-area-two pt-100 pb-70">
    <div class="container">
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


    <section class="appointment-area bg-image ptb-100">
    <div class="container">
    <div class="appointment-form">
    <h4><i class="flaticon-calendar"></i> Make An Appointment</h4>
    <form>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Name">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Phone">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Date">
    </div>
    <button type="submit" class="default-btn">Book Appointment</button>
    </form>
    </div>
    </div>
    </section>

</body>

<script data-cfasync="false" src="{{asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('assets/js/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/popper.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.appear.js')}}"></script>

<script src="{{asset('assets/js/odometer.min.js')}}"></script>

<script src="{{asset('assets/js/nice-select.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('assets/js/wow.min.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>

@endsection
