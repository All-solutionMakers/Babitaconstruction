@extends('user.layouts.main')
@section('main_content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Projects</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Projects Start -->
    <div class="container-xxl">
        <div class="container">

            <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Our Projects</h1>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.2s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                            href="#tab-1">
                            <h6 class="mt-n1 mb-0">All</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <h6 class="mt-n1 mb-0">Ongoing</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <h6 class="mt-n1 mb-0">Complited</h6>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-5 portfolio-container">
                            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item">
                                <div class="position-relative portfolio-box">
                                    <img class="img-fluid w-100" src="img/project-1.jpg" alt="">
                                    <a href="#" class="portfolio-title shadow-sm" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <p class="h4 text-uppercase">Project Name</p>
                                        <span class="text-body clamped-1"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA Lorem ipsum dolor sit amet.</span>
                                        <span class="mt-2">View More</span>
                                    </a>
                                </div>
                                <div class="modal fade project-details" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Project Name</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleControls" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/project-1.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-2.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-3.jpg" class="w-100" alt="...">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="text-left">
                                                    <p class="h4 mt-3">Location</p>
                                                    <span class=""><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>123
                                                        Street, New York,
                                                        USA Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsa reiciendis neque aut quibusdam sunt dolores! Dolorum,
                                                        fugiat? Ipsam, animi reiciendis.</span>
                                                    <p class="h4 mt-3">Aminities</p>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item">
                                <div class="position-relative portfolio-box">
                                    <img class="img-fluid w-100" src="img/project-2.jpg" alt="">
                                    <a href="#" class="portfolio-title shadow-sm" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <p class="h4 text-uppercase">Project Name</p>
                                        <span class="text-body clamped-1"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA Lorem ipsum dolor sit amet.</span>
                                        <span class="mt-2">View More</span>
                                    </a>
                                </div>
                                <div class="modal fade project-details" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Project Name</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleControls" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/about-2.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-2.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-3.jpg" class="w-100" alt="...">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="text-left">
                                                    <p class="h4 mt-3">Location</p>
                                                    <span class=""><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>123
                                                        Street, New York,
                                                        USA Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsa reiciendis neque aut quibusdam sunt dolores! Dolorum,
                                                        fugiat? Ipsam, animi reiciendis.</span>
                                                    <p class="h4 mt-3">Aminities</p>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item">
                                <div class="position-relative portfolio-box">
                                    <img class="img-fluid w-100" src="img/project-3.jpg" alt="">
                                    <a href="#" class="portfolio-title shadow-sm" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <p class="h4 text-uppercase">Project Name</p>
                                        <span class="text-body clamped-1"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA Lorem ipsum dolor sit amet.</span>
                                        <span class="mt-2">View More</span>
                                    </a>
                                </div>
                                <div class="modal fade project-details" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Project Name</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleControls" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/project-1.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-2.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-3.jpg" class="w-100" alt="...">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="text-left">
                                                    <p class="h4 mt-3">Location</p>
                                                    <span class=""><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>123
                                                        Street, New York,
                                                        USA Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsa reiciendis neque aut quibusdam sunt dolores! Dolorum,
                                                        fugiat? Ipsam, animi reiciendis.</span>
                                                    <p class="h4 mt-3">Aminities</p>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item">
                                <div class="position-relative portfolio-box">
                                    <img class="img-fluid w-100" src="img/project-4.jpg" alt="">
                                    <a href="#" class="portfolio-title shadow-sm" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <p class="h4 text-uppercase">Project Name</p>
                                        <span class="text-body clamped-1"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA Lorem ipsum dolor sit amet.</span>
                                        <span class="mt-2">View More</span>
                                    </a>
                                </div>
                                <div class="modal fade project-details" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Project Name</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleControls" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/project-1.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-2.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-3.jpg" class="w-100" alt="...">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="text-left">
                                                    <p class="h4 mt-3">Location</p>
                                                    <span class=""><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>123
                                                        Street, New York,
                                                        USA Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsa reiciendis neque aut quibusdam sunt dolores! Dolorum,
                                                        fugiat? Ipsam, animi reiciendis.</span>
                                                    <p class="h4 mt-3">Aminities</p>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item">
                                <div class="position-relative portfolio-box">
                                    <img class="img-fluid w-100" src="img/project-5.jpg" alt="">
                                    <a href="#" class="portfolio-title shadow-sm" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <p class="h4 text-uppercase">Project Name</p>
                                        <span class="text-body clamped-1"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA Lorem ipsum dolor sit amet.</span>
                                        <span class="mt-2">View More</span>
                                    </a>
                                </div>
                                <div class="modal fade project-details" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Project Name</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleControls" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/project-1.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-2.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-3.jpg" class="w-100" alt="...">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="text-left">
                                                    <p class="h4 mt-3">Location</p>
                                                    <span class=""><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>123
                                                        Street, New York,
                                                        USA Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsa reiciendis neque aut quibusdam sunt dolores! Dolorum,
                                                        fugiat? Ipsam, animi reiciendis.</span>
                                                    <p class="h4 mt-3">Aminities</p>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item">
                                <div class="position-relative portfolio-box">
                                    <img class="img-fluid w-100" src="img/project-6.jpg" alt="">
                                    <a href="#" class="portfolio-title shadow-sm" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        <p class="h4 text-uppercase">Project Name</p>
                                        <span class="text-body clamped-1"><i
                                                class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                            USA Lorem ipsum dolor sit amet.</span>
                                        <span class="mt-2">View More</span>
                                    </a>
                                </div>
                                <div class="modal fade project-details" id="staticBackdrop" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Project Name</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleControls" class="carousel slide"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="img/project-1.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-2.jpg" class="w-100" alt="...">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="img/project-3.jpg" class="w-100" alt="...">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button"
                                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <div class="text-left">
                                                    <p class="h4 mt-3">Location</p>
                                                    <span class=""><i
                                                            class="fa fa-map-marker-alt text-primary me-2"></i>123
                                                        Street, New York,
                                                        USA Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ipsa reiciendis neque aut quibusdam sunt dolores! Dolorum,
                                                        fugiat? Ipsam, animi reiciendis.</span>
                                                    <p class="h4 mt-3">Aminities</p>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Aliquam, reprehenderit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-5 portfolio-container">
                            <p>Not Available</p>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-5 portfolio-container">
                            <p>Not Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
