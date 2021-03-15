@extends('home')
@section('content')
<body>
    <div class="page-banner-area">
        <div class="container">
        <div class="page-banner-content">
        <h2>Dentist Details</h2>
        <ul class="pages-list">
        <li><a href="">Home</a></li>
        <li>Dentist Details</li>
        </ul>
        </div>
        </div>
    </div>
    <section class="dentist-details-area ptb-100">
        <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-5 col-md-6">
        <div class="dentist-details-image">
        <img src="{{asset('assets/images/doctor/'.$dentist->img)}}" style="height: 518px; width: 518px;" alt="image">
        </div>
        </div>
        <div class="col-lg-7 col-md-6">
        <div class="dentist-details-content">
        <h3>
        <a href="dentist-details.html"></a>
        </h3>
        <span>{{$dentist->job}}</span>
        <div class="share-link">
        <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
        <a href="https://twitter.com/?lang=en" target="_blank"><i class='bx bxl-twitter'></i></a>
        <a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
        <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a>
        </div>
        <div class="content-overview">
        <p><span>Qualification:</span> {{$dentist->Qualification}}</p>
        <p><span>Certification:</span> {{$dentist->Certification}}</p>
        <p><span>Professional Skills:</span> {{$dentist->Professional_Skills}}</p>
        <p><span>Education:</span>{{$dentist->Education}}/p>
        <p><span>Awards:</span> {{$dentist->Awards}}</p>
        </div>
        </div>
        </div>
        </div>
        <div class="dentist-details-overview-content">
        <p> {{$dentist->bio}}</p>
        <div class="row">
        <div class="col-lg-6">
        <div class="details-overview-image">
        <img src="{{asset('assets/images/dentist-details-1.jpg')}}" alt="image">
        </div>
        </div>
        <div class="col-lg-6">
        <div class="details-overview-image">
        <img src="{{asset('assets/images/dentist-details-2.jpg')}}" alt="image">
        </div>
        </div>
        </div>
        <div class="overview-text">
        <p><span>How to Take Care During Dental:</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of psum is that it has a more or-less normal distribution of letters, as opposed to using.</p>
        <p><span>When To Visit your Doctor?</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of psum is that it has a more or-less normal distribution of letters, as opposed to using.</p>
        <p><span>Dental Options:</span> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of psum is that it has a more or-less normal distribution of letters, as opposed to using.</p>
        </div>
        </div>
        </div>
        </section>
</body>
@endsection
