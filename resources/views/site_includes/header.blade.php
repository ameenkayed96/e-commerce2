<head>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link  href="node_modules/pickerjs/src/css/picker.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="node_modules/pickerjs/src/js/picker.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css"')}}>

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
<title>Dental Clinic</title>
<link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">



    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/boxicons.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Dental Clinic</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>




        <div class="top-header-area">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
        <ul class="top-header-information">
        @if(Auth::user()!=null)
        <li>
        <i class='bx bx-user'></i>
        {{Auth::User()->name}}
        </li>
        <li>
        <i class='bx bx-envelope-open'></i>
        <a><span class="__cf_email__" data-cfemail="bdcec8cdcdd2cfc9fddacfd4d393ded2d0">{{Auth::User()->email}}</span></a>
        </li>
        @endif
        </ul>
        </div>
        <div class="col-lg-6 col-md-12">
        <ul class="top-header-optional">
        <li>
        <a href="https://www.facebook.com/" target="_blank">
        <i class='bx bxl-facebook'></i>
        </a>
        <a href="https://twitter.com/?lang=en" target="_blank">
        <i class='bx bxl-twitter'></i>
        </a>
        <a href="https://www.linkedin.com/" target="_blank">
        <i class='bx bxl-linkedin'></i>
        </a>
        <a href="https://www.instagram.com/" target="_blank">
        <i class='bx bxl-instagram'></i>
        </a>
        </li>
        <li class="languages-list">
        <select>
        <option value="1">English</option>
        <option value="2">العربيّة</option>
        <option value="3">Deutsch</option>
        <option value="3">Português</option>
        <option value="3">简体中文</option>
        </select>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>


        <div class="middle-header-area">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-4 col-md-12">
        <div class="middle-header">
        <h1>
        <a href="{{url('/')}}">Dental Clinic</a>
        </h1>
        </div>
        </div>
        <div class="col-lg-8 col-md-12">
        <ul class="middle-header-content">
        <li>
        <i class="flaticon-emergency-call"></i>
        Call Today
        <span><a href="tel:088123654987">+963 962 298 812</a></span>
        </li>
        <li>
        <i class="flaticon-wall-clock"></i>
        Open Hour
        <span>09:00 AM to 18:00 PM</span>
        </li>
        </ul>
        </div>
        </div>
        </div>
        </div>


        <div class="navbar-area">
        <div class="main-responsive-nav">
        <div class="container">
        <div class="main-responsive-menu">
        <div class="logo">
        <a href="index.html">
        <img src="assets/images/logo.png" alt="logo">
        </a>
        </div>
        </div>
        </div>
        </div>
        <div class="main-navbar">
        <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a href="{{url('/')}}" class="nav-link active">
        Home

        </a>

        </li>
        <li class="nav-item">
        <a href="{{url('/about')}}" class="nav-link">About Us</a>
        </li>
        <li class="nav-item">
        <a href="{{url('/doctors')}}" class="nav-link">
        Dentist
        </a>

        </li>
        <li class="nav-item">
        <a href="{{url('/services')}}" class="nav-link">
        Services
        </a>

        </li>

        <li class="nav-item">
        <a href="#" class="nav-link">
        Blog
        <i class='bx bx-caret-down'></i>
        </a>
        <ul class="dropdown-menu">
        <li class="nav-item">
        <a href="blog.html" class="nav-link">Blog</a>
        </li>
        <li class="nav-item">
        <a href="blog-details.html" class="nav-link">Blog Details</a>
        </li>
        </ul>
        </li>
        <li class="nav-item">
        <a href="{{url('/contact_us')}}" class="nav-link">Contact Us</a>
        </li>
        </ul>
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
        <a href="{{url('/appointment')}}" class="default-btn">Book Appointment</a>
        </div>
        </div>
        </div>
        </div>
        </nav>
        </div>
        </div>
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
        <a href="{{url('/apointment')}}" class="default-btn">Book Appointment</a>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
