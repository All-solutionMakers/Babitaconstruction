<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Babita Construction</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">

    <!-- Modern UI (navbar + hero slider) -->
    <link href="{{ url('css/modern-ui.css') }}" rel="stylesheet">

     {{-- SWEET ALERT CDN LINK  --}}
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid topbar-modern px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-2 topbar-social">
                    <span class="fw-semi-bold">Follow Us:</span>
                    <a class="btn btn-link" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fw-bold me-3"><i class="fa fa-phone-alt me-2"></i>+91 9040339519</span>
                    <span class="fw-bold"><i class="fa fa-envelope me-2"></i>babitaconstruction@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-modern navbar-expand-lg navbar-light sticky-top py-0 px-lg-5 px-3">
        <a href="{{ route('index.view') }}" class="navbar-brand p-0">
            <img src="{{ url('img/logo.png') }}" class="img-fluid" alt="Babita Construction">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0 align-items-lg-center">
                <a href="{{ route('index.view') }}"
                    class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('about.view') }}"
                    class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>

                <div class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('construction.view') }}" class="dropdown-item">Construction</a>
                        <a href="{{ route('transporatation.view') }}" class="dropdown-item">Transportation</a>
                        <a href="{{ route('minning.view') }}" class="dropdown-item">Mining</a>
                    </div>
                </div>

                <a href="{{ route('project.view') }}"
                    class="nav-item nav-link {{ request()->is('project') ? 'active' : '' }}">Projects</a>
                <a href="{{ route('contact.view') }}"
                    class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>

                <div class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Register
                        Vehicle</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('purchase.vehicleregistration.form') }}" class="dropdown-item">Apply for Vehicle
                            Purchase</a>
                        <a href="{{ route('defaulter.vehicleregistration..sale.form') }}" class="dropdown-item">Sale
                            Defaulter Vehicle</a>
                        <a href="{{ route('vehicleregistration.form') }}" class="dropdown-item">Register for Vehicle
                            Lease</a>
                    </div>
                </div>

                <div class="nav-item dropdown ms-lg-3">
                    <a href="javascript:void(0)" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="{{ route('login.view') }}" class="dropdown-item">Admin Login</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
