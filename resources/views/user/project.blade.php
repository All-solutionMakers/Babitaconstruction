@extends('user.layouts.main')
@section('main_content')
    <!-- Page Header Start -->
    @include('user.layouts.partials.service-page-styles')

    <div class="pg-hero wow fadeIn" data-wow-delay="0.1s"
        style="background-image:url('{{ url('img/project-2.jpg') }}');">
        <div class="container pg-hero__inner">
            <span class="pg-hero__kicker">Our Work</span>
            <h1>Projects</h1>
            <div class="pg-hero__crumb">
                <a href="{{ route('index.view') }}">Home</a>
                <i class="fa fa-chevron-right sep"></i>
                <span class="current">Projects</span>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Projects Start -->
    <style>
        .pj {
            position: relative;
            overflow: hidden;
            background: #fff;
            padding: 32px 0 60px;
        }

        .pj::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(2, 36, 91, .05) 1.5px, transparent 1.5px);
            background-size: 24px 24px;
            pointer-events: none;
        }

        .pj .container {
            position: relative;
            z-index: 1;
        }

        .pj-head .kicker {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 13px;
            color: var(--primary);
            margin-bottom: 12px;
        }

        .pj-head .kicker::before,
        .pj-head .kicker::after {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .pj-head h2 {
            font-size: clamp(1.4rem, 2.4vw, 1.9rem);
            font-weight: 800;
            color: var(--dark);
            margin: 0;
        }

        .pj-tabs {
            display: inline-flex;
            gap: 8px;
            padding: 6px;
            border-radius: 50px;
            background: #f1f4fa;
            border: 1px solid #e7ebf3;
            margin: 22px 0 40px;
        }

        .pj-tabs .nav-item {
            list-style: none;
        }

        .pj-tabs a {
            display: block;
            padding: 9px 22px;
            border-radius: 50px;
            font-size: .9rem;
            font-weight: 700;
            color: #5b6472;
            text-decoration: none;
            transition: background .25s ease, color .25s ease, box-shadow .25s ease;
        }

        .pj-tabs a h6 {
            margin: 0;
            font: inherit;
        }

        .pj-tabs a.active {
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            box-shadow: 0 12px 22px -10px rgba(255, 94, 20, .7);
        }

        .pj-card {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 18px 40px -26px rgba(2, 36, 91, .4);
        }

        .pj-card__media {
            position: relative;
            aspect-ratio: 4 / 3;
            overflow: hidden;
        }

        .pj-card__media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .6s ease;
        }

        .pj-card:hover .pj-card__media img {
            transform: scale(1.08);
        }

        .pj-card__media::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(2, 12, 30, .92) 0%, rgba(2, 12, 30, .3) 45%, rgba(2, 12, 30, .05) 100%);
            opacity: .7;
            transition: opacity .35s ease, background .35s ease;
        }

        .pj-card:hover .pj-card__media::after {
            opacity: 1;
            background: linear-gradient(to top, rgba(255, 94, 20, .82) 0%, rgba(2, 12, 30, .4) 55%, rgba(2, 12, 30, .05) 100%);
        }

        .pj-card__info {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            padding: 22px;
            color: #fff;
        }

        .pj-card__info .name {
            font-size: 1.05rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .5px;
            margin: 0 0 6px;
        }

        .pj-card__info .loc {
            display: block;
            font-size: .84rem;
            color: rgba(255, 255, 255, .82);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .pj-card__info .more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 12px;
            font-size: .78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height .35s ease, opacity .35s ease, margin .35s ease;
        }

        .pj-card:hover .pj-card__info .more {
            max-height: 40px;
            opacity: 1;
        }

        .pj-empty {
            width: 100%;
            text-align: center;
            padding: 46px 20px;
            border: 1px dashed #d7deea;
            border-radius: 16px;
            color: #7a828f;
            font-weight: 600;
        }

        .pj-tabs-wrap {
            overflow-x: auto;
        }
    </style>

    <div class="pj">
        <div class="container">
            <div class="pj-head text-center wow fadeInUp" data-wow-delay="0.1s">
                <span class="kicker">Our Projects</span>
                <h2>Our Projects</h2>
            </div>

            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="pj-tabs-wrap">
                    <ul class="pj-tabs nav nav-pills d-inline-flex justify-content-center">
                        <li class="nav-item">
                            <a class="active" data-bs-toggle="pill" href="#tab-1">
                                <h6>All</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="pill" href="#tab-2">
                                <h6>Ongoing</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="pill" href="#tab-3">
                                <h6>Complited</h6>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4 portfolio-container text-start">
                            @php
                                $projects = ['project-1.jpg', 'project-2.jpg', 'project-3.jpg', 'project-4.jpg', 'project-5.jpg', 'project-6.jpg'];
                            @endphp
                            @foreach ($projects as $img)
                                <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item">
                                    <div class="pj-card" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <div class="pj-card__media">
                                            <img src="img/{{ $img }}" alt="Project Name">
                                        </div>
                                        <div class="pj-card__info">
                                            <p class="name">Project Name</p>
                                            <span class="loc"><i class="fa fa-map-marker-alt text-primary me-2"></i>123
                                                Street, New York, USA Lorem ipsum dolor sit amet.</span>
                                            <span class="more">View More <i class="fa fa-arrow-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4 portfolio-container">
                            <p class="pj-empty">Not Available</p>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4 portfolio-container">
                            <p class="pj-empty">Not Available</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project details modal -->
            <div class="modal fade project-details" id="staticBackdrop" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Project Name</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
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
                                <span class=""><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                    USA Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa reiciendis neque
                                    aut quibusdam sunt dolores! Dolorum, fugiat? Ipsam, animi reiciendis.</span>
                                <p class="h4 mt-3">Aminities</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam,
                                        reprehenderit.</li>
                                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam,
                                        reprehenderit.</li>
                                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam,
                                        reprehenderit.</li>
                                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam,
                                        reprehenderit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection
