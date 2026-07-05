@extends('user.layouts.main')
@section('main_content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/Construction.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">10 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">"Building tomorrow's
                                        infrastructure, today."</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/Fleet Management.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">10 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">"Advanced fleet management
                                        for seamless operations."
                                    </h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/Logistics.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">10 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">"Expertise in construction,
                                        from concept to completion."</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/Mining.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">10 Years
                                        of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">"Advanced Mining Technology
                                        for Better Yields."</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/400x600 slider 1.jpg">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="img/400x600 slider 2.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">About Us</p>
                    <h1 class="display-5 mb-4">About <br>Babita Construction</h1>
                    <p class="mb-4">Babita Construction is a premier name in the mining and construction industry,
                        renowned for its commitment to excellence, innovation, and sustainability. With decades of
                        experience, we have built a robust portfolio of successful projects, from massive infrastructure
                        developments to intricate mining operations. Our expertise spans across various domains, ensuring
                        that we deliver high-quality results that meet the evolving needs of our clients.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">10</h1>
                            <h5 class="text-white">Years of</h5>
                            <h5 class="text-white">Experience</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Commercial & Residential Construction</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Mining Operations</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Exploration and Drilling</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Fleet Management</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Vehicle & Logistics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">25</h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">135</h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1839</h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="img/feature.jpg" alt="">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why Choose Babita Construction?</h1>
                    <p class="mb-4">Partner with Babita Construction for your next mining or construction project, and
                        experience the difference that expertise, innovation, and dedication can make. Together, we build a
                        better future.</p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Expertise and Experience</h4>
                                    <span>
                                        With a legacy of excellence, Babita Construction brings unparalleled expertise and
                                        extensive experience to every project. Our team of professionals is dedicated to
                                        delivering superior results, leveraging the latest technologies and industry best
                                        practices.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Commitment to Safety and Sustainability</h4>
                                    <span>Safety and sustainability are at the core of our operations. We adhere to
                                        stringent safety protocols and environmental standards, ensuring the well-being of
                                        our employees, communities, and the planet.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Quality and Reliability</h4>
                                    <span>At Babita Construction, quality and reliability are non-negotiable. We are
                                        committed to delivering projects that stand the test of time, built to the highest
                                        standards of craftsmanship and engineering.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Client-Centric Approach</h4>
                                    <span>Our clients are our top priority. We work closely with them to understand their
                                        unique needs and challenges, delivering customized solutions that exceed
                                        expectations. Our transparent communication and collaborative approach ensure a
                                        seamless project experience.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Moda l End -->


    <!-- Service Start -->
    <div class="container-fluid bg-dark pt-5 px-0">
        <div class="text-center mx-auto mt-3 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p>
            <h1 class="display-5 mb-4 text-white">We Provide Best Industrial Services</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-1.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Mining Operations</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-2.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Exploration and Drilling</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-3.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Mine Development and Construction</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-4.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Commercial and Residential Construction</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-5.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Infrastructure Development</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="img/project-6.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Industrial Construction</h5>
                </div>
            </a>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-xxl mt-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Projects</p>
                <h1 class="display-5 mb-4">Our Best Industrial Projects</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Civil & Gas Engineering</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Power & Energy Engineering</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                    lorem sed diam stet diam sed stet.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Testimonial Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Testimonials</p>
                <h1 class="display-5 mb-5">What Our Client's Says ?</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel testimonial-slider">
                        <div class="testimonial">
                            <p class="description">
                                "Impressive expertise in integrating complex systems. Our productivity and data accuracy have significantly improved."
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="pic">
                                        <img src="img/logo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="testimonial-prof">
                                        <h4>SK Modasir Hossain</h4>
                                        <small>Project Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <p class="description">
                                "Fleet management has never been easier. The system's real-time tracking and maintenance alerts are invaluable."
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="pic">
                                        <img src="img/logo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="testimonial-prof">
                                        <h4>Jagabandh Mahanta</h4>
                                        <small>Fleet Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <p class="description">"Outstanding service! The construction management system streamlined our
                                projects, saving us time and money. Highly recommended!"
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="pic">
                                        <img src="img/logo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="testimonial-prof">
                                        <h4>Srinibas Nayak</h4>
                                        <small>Construction Manager</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <p class="description">
                                "Their mining solutions boosted our operational efficiency and safety. Excellent support and reliable technology!"
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="pic">
                                        <img src="img/logo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="testimonial-prof">
                                        <h4>S. Narayan Murty</h4>
                                        <small>Mining Operations Director</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <p class="description">
                                "Efficient and user-friendly logistics management system. It has greatly improved our supply chain coordination."
                            </p>
                            <div class="row">
                                <div class="col-4">
                                    <div class="pic">
                                        <img src="img/logo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="testimonial-prof">
                                        <h4>Rahul Maharana</h4>
                                        <small>Logistics Coordinator</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
