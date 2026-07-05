@extends('user.layouts.main')
@section('main_content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Construction</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Construction</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Construction Start -->
    <div class="container-fluid">
        <div class="container" id="services">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Construction Services</p>
                <h1 class="display-5 mb-5">See What We Have Completed Recently</h1>
            </div>

            <div class="row g-3 mb-5 align-items-center">
                <div class="col-lg-6">
                    <div class="services-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/carousel-1.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.6s">
                    <h3 class=" mb-4">Road Construction</h3>
                    <p class="mb-4">IFDO Hyderabad undertakes training assignments at may locations across India. The
                        strong team of experienced trainers who are former SSB assessors has been reaching out to large
                        number of Sainink schools and Army units/ Regimental centres and conducting result-oriented
                        Pre-SSB Personality Development Courses of 10 to 12 days in their respective campuses.</p>
                </div>
            </div>
            <div class="row g-3 align-items-center reverse">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.6s">
                    <h3 class=" mb-4">Bridge Construction</h3>
                    <p class="mb-4">Separate decent hostel facility (IFDO-NEST) both for boys and girls is
                        available at
                        IFDO Hyderabad at reasonable cost for outstation candidates.</p>

                </div>
                <div class="col-lg-6">
                    <div class="services-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/carousel-2.jpg">
                    </div>
                </div>
            </div>
            <div class="row g-3 mb-5 align-items-center">
                <div class="col-lg-6">
                    <div class="services-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/carousel-1.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.6s">
                    <h3 class=" mb-4">Factory Building</h3>
                    <p class="mb-4">IFDO Hyderabad undertakes training assignments at may locations across India. The
                        strong team of experienced trainers who are former SSB assessors has been reaching out to large
                        number of Sainink schools and Army units/ Regimental centres and conducting result-oriented
                        Pre-SSB Personality Development Courses of 10 to 12 days in their respective campuses.</p>
                </div>
            </div>
            <div class="row g-3 align-items-center reverse">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.6s">
                    <h3 class=" mb-4">Pipe Line</h3>
                    <p class="mb-4">Separate decent hostel facility (IFDO-NEST) both for boys and girls is
                        available at
                        IFDO Hyderabad at reasonable cost for outstation candidates.</p>

                </div>
                <div class="col-lg-6">
                    <div class="services-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/carousel-2.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Construction End -->
@endsection
