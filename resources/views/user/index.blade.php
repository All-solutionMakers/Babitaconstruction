@extends('user.layouts.main')
@section('main_content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="header-carousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/Construction.jpg" alt="Construction site">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-content">
                                        <span class="hero-kicker">10 Years of Working Experience</span>
                                        <h1 class="hero-title">Building tomorrow's <span class="accent">infrastructure</span>,
                                            today.</h1>
                                        <p class="hero-text">End-to-end construction, mining and transportation solutions
                                            delivered with precision, safety and a decade of on-ground expertise.</p>
                                        <div class="hero-actions">
                                            <a href="{{ route('about.view') }}" class="btn btn-hero-primary">Explore More
                                                <i class="fa fa-arrow-right ms-2"></i></a>
                                            <a href="{{ route('contact.view') }}" class="btn btn-hero-ghost">Get in Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Fleet Management.jpg" alt="Fleet management">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-content">
                                        <span class="hero-kicker">Transportation &amp; Logistics</span>
                                        <h1 class="hero-title">Advanced fleet management for <span class="accent">seamless
                                                operations</span>.</h1>
                                        <p class="hero-text">Real-time tracking, preventive maintenance and reliable
                                            logistics that keep your projects moving without downtime.</p>
                                        <div class="hero-actions">
                                            <a href="{{ route('transporatation.view') }}" class="btn btn-hero-primary">Explore
                                                More <i class="fa fa-arrow-right ms-2"></i></a>
                                            <a href="{{ route('contact.view') }}" class="btn btn-hero-ghost">Get in Touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Logistics.jpg" alt="Construction expertise">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-content">
                                        <span class="hero-kicker">Design &amp; Build</span>
                                        <h1 class="hero-title">Expertise in construction, from <span class="accent">concept
                                                to completion</span>.</h1>
                                        <p class="hero-text">Commercial, residential and infrastructure builds engineered
                                            to the highest standards of craftsmanship and delivered on schedule.</p>
                                        <div class="hero-actions">
                                            <a href="{{ route('construction.view') }}" class="btn btn-hero-primary">Explore
                                                More <i class="fa fa-arrow-right ms-2"></i></a>
                                            <a href="{{ route('project.view') }}" class="btn btn-hero-ghost">View
                                                Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/Mining.jpg" alt="Mining operations">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="hero-content">
                                        <span class="hero-kicker">Mining &amp; Exploration</span>
                                        <h1 class="hero-title">Advanced mining technology for <span class="accent">better
                                                yields</span>.</h1>
                                        <p class="hero-text">Safe, efficient mining and exploration operations backed by
                                            modern equipment and experienced crews.</p>
                                        <div class="hero-actions">
                                            <a href="{{ route('minning.view') }}" class="btn btn-hero-primary">Explore More
                                                <i class="fa fa-arrow-right ms-2"></i></a>
                                            <a href="{{ route('contact.view') }}" class="btn btn-hero-ghost">Get in Touch</a>
                                        </div>
                                    </div>
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
    <style>
        .about-v2 {
            position: relative;
            overflow: hidden;
            background: #fff;
        }

        .about-v2::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(2, 36, 91, 0.05) 1.5px, transparent 1.5px);
            background-size: 24px 24px;
            pointer-events: none;
        }

        .about-v2 > .container {
            position: relative;
            z-index: 1;
        }

        /* ---------- media ---------- */
        .about-v2-media {
            position: relative;
            padding: 22px 40px 46px 22px;
        }

        .about-v2-media__glow {
            position: absolute;
            inset: 0 10px 20px 0;
            background: radial-gradient(60% 60% at 75% 25%, rgba(255, 94, 20, .28), transparent 70%),
                        radial-gradient(60% 60% at 20% 90%, rgba(2, 36, 91, .30), transparent 70%);
            filter: blur(36px);
            z-index: 0;
        }

        .about-v2-media__main {
            position: relative;
            z-index: 1;
            border-radius: 24px;
            overflow: hidden;
            aspect-ratio: 4 / 4.1;
            box-shadow: 0 34px 60px -24px rgba(2, 36, 91, .45);
        }

        .about-v2-media__main::after {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, .35);
        }

        .about-v2-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform .7s ease;
        }

        .about-v2-media__main:hover img {
            transform: scale(1.06);
        }

        .about-v2-media__mini {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 2;
            width: 46%;
            aspect-ratio: 1 / 1;
            border-radius: 20px;
            overflow: hidden;
            border: 6px solid #fff;
            box-shadow: 0 22px 40px -16px rgba(2, 36, 91, .4);
        }

        .about-v2-media__badge {
            position: absolute;
            left: 0;
            top: 44px;
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 22px 16px 20px;
            background: linear-gradient(135deg, #02245B, #063a86);
            color: #fff;
            border-radius: 16px;
            box-shadow: 0 20px 40px -14px rgba(2, 36, 91, .55);
        }

        .about-v2-media__badge::before {
            content: "";
            width: 4px;
            align-self: stretch;
            border-radius: 4px;
            background: var(--primary);
        }

        .about-v2-media__badge .num {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1;
            color: var(--primary);
        }

        .about-v2-media__badge .txt {
            font-size: .74rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 1.35;
        }

        /* ---------- content ---------- */
        .about-v2-kicker {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 13px;
            color: var(--primary);
            margin-bottom: 16px;
        }

        .about-v2-kicker::before {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .about-v2-heading {
            font-size: clamp(1.5rem, 2.6vw, 2.1rem);
            font-weight: 800;
            line-height: 1.25;
            color: var(--dark);
            margin-bottom: 18px;
        }

        .about-v2-lead {
            color: #5b6472;
            line-height: 1.8;
            margin-bottom: 26px;
        }

        .about-v2-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px 26px;
            margin-bottom: 30px;
        }

        .about-v2-feature {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
            font-weight: 600;
            font-size: .92rem;
            color: var(--dark);
            transition: transform .25s ease, color .25s ease;
        }

        .about-v2-feature:hover {
            transform: translateX(5px);
            color: var(--primary);
        }

        .about-v2-feature .ic {
            flex-shrink: 0;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: .7rem;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            box-shadow: 0 6px 14px -4px rgba(255, 94, 20, .6);
        }

        .about-v2-cta {
            display: flex;
            align-items: center;
            gap: 22px;
            flex-wrap: wrap;
        }

        .about-v2-cta .btn {
            border-radius: 50px;
        }

        .about-v2-cta__meta {
            font-size: .9rem;
            color: #5b6472;
            line-height: 1.35;
        }

        .about-v2-cta__meta strong {
            display: block;
            font-size: 1.25rem;
            color: var(--dark);
        }

        /* ---------- pillars ---------- */
        .about-v2-pillars {
            position: relative;
            z-index: 1;
        }

        .about-v2-pillar {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            height: 270px;
            display: flex;
            align-items: flex-end;
            box-shadow: 0 18px 34px -18px rgba(2, 36, 91, 0.35);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .about-v2-pillar:hover {
            transform: translateY(-8px);
            box-shadow: 0 30px 50px -20px rgba(2, 36, 91, 0.4);
        }

        .about-v2-pillar img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .about-v2-pillar:hover img {
            transform: scale(1.1);
        }

        .about-v2-pillar::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(2, 12, 30, 0.94) 0%, rgba(2, 12, 30, 0.3) 55%, rgba(2, 12, 30, 0.04) 100%);
        }

        .about-v2-pillar__body {
            position: relative;
            z-index: 1;
            padding: 24px;
            color: #fff;
            width: 100%;
        }

        .about-v2-pillar__icon {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
            font-size: 1.1rem;
            box-shadow: 0 10px 20px -6px rgba(255, 94, 20, 0.6);
        }

        .about-v2-pillar__body h5 {
            color: #fff;
            margin-bottom: 4px;
            font-weight: 700;
        }

        .about-v2-pillar__body p {
            font-size: 0.85rem;
            color: #d8dce6;
            margin-bottom: 0;
            opacity: 0.9;
        }

        @media (max-width: 991px) {
            .about-v2-media {
                padding: 18px 30px 44px 12px;
                margin-bottom: 2.5rem;
                max-width: 520px;
            }
        }

        @media (max-width: 575px) {
            .about-v2-features {
                grid-template-columns: 1fr;
            }

            .about-v2-media__badge .num {
                font-size: 2rem;
            }
        }
    </style>

    <div class="container-xxl py-5 about-v2">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-v2-media">
                        <div class="about-v2-media__glow"></div>
                        <div class="about-v2-media__main">
                            <img src="img/400x600 slider 1.jpg" alt="Babita Construction site engineer">
                        </div>
                        <div class="about-v2-media__mini">
                            <img src="img/400x600 slider 2.jpg" alt="Babita Construction site supervisor">
                        </div>
                        <div class="about-v2-media__badge">
                            <span class="num" data-toggle="counter-up">10</span>
                            <span class="txt">Years of<br>Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <span class="about-v2-kicker">About Us</span>
                    <h2 class="about-v2-heading">Building Excellence in Construction &amp; Transportation</h2>
                    <p class="about-v2-lead">Babita Construction is a premier name in the construction, mining, and
                        transportation industry, renowned for its commitment to excellence, innovation, and
                        sustainability. With over a decade of experience, we have built a robust portfolio of
                        successful projects &mdash; from large-scale infrastructure to reliable fleet and logistics
                        operations.</p>
                    <div class="about-v2-features">
                        <div class="about-v2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Commercial &amp; Residential</span>
                        </div>
                        <div class="about-v2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Mining Operations</span>
                        </div>
                        <div class="about-v2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Exploration &amp; Drilling</span>
                        </div>
                        <div class="about-v2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Fleet Management</span>
                        </div>
                        <div class="about-v2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Vehicle &amp; Logistics</span>
                        </div>
                        <div class="about-v2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Infrastructure Development</span>
                        </div>
                    </div>
                    <div class="about-v2-cta">
                        <a href="{{ route('about.view') }}" class="btn btn-primary py-3 px-5">Learn More <i
                                class="fa fa-arrow-right ms-2"></i></a>
                        <div class="about-v2-cta__meta">
                            <strong>135+</strong> Experts on ground
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-3 about-v2-pillars">
                <div class="col-md-4 col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-v2-pillar">
                        <img src="img/carousel-2.jpg" alt="Construction services">
                        <div class="about-v2-pillar__body">
                            <div class="about-v2-pillar__icon">
                                <i class="fa fa-hard-hat text-white"></i>
                            </div>
                            <h5>Construction</h5>
                            <p>End-to-end commercial, residential &amp; infrastructure builds delivered on time.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="about-v2-pillar">
                        <img src="img/Mining.jpg" alt="Mining operations">
                        <div class="about-v2-pillar__body">
                            <div class="about-v2-pillar__icon">
                                <i class="fa fa-mountain text-white"></i>
                            </div>
                            <h5>Mining</h5>
                            <p>Safe, efficient mining &amp; exploration operations backed by modern equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="about-v2-pillar">
                        <img src="img/Fleet Management.jpg" alt="Transportation and fleet management">
                        <div class="about-v2-pillar__body">
                            <div class="about-v2-pillar__icon">
                                <i class="fa fa-truck text-white"></i>
                            </div>
                            <h5>Transportation &amp; Fleet</h5>
                            <p>Reliable vehicle fleet &amp; logistics management for seamless operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <style>
        .facts-v2 {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #02245B 0%, #041d4a 55%, #063a86 100%);
            padding: 44px 0;
        }

        .facts-v2::before,
        .facts-v2::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            pointer-events: none;
        }

        .facts-v2::before {
            width: 420px;
            height: 420px;
            top: -160px;
            right: -120px;
            background: rgba(255, 94, 20, .22);
        }

        .facts-v2::after {
            width: 380px;
            height: 380px;
            bottom: -180px;
            left: -100px;
            background: rgba(58, 122, 255, .18);
        }

        .facts-v2 .container {
            position: relative;
            z-index: 1;
        }

        .facts-v2-card {
            position: relative;
            height: 100%;
            padding: 34px 26px;
            border-radius: 20px;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .12);
            -webkit-backdrop-filter: blur(6px);
            backdrop-filter: blur(6px);
            text-align: center;
            overflow: hidden;
            transition: transform .35s ease, border-color .35s ease, background .35s ease, box-shadow .35s ease;
        }

        .facts-v2-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), #ff8a4c);
            transform: scaleX(0);
            transition: transform .35s ease;
        }

        .facts-v2-card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, .08);
            border-color: rgba(255, 94, 20, .5);
            box-shadow: 0 30px 50px -22px rgba(0, 0, 0, .55);
        }

        .facts-v2-card:hover::before {
            transform: scaleX(1);
        }

        .facts-v2-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            box-shadow: 0 14px 26px -10px rgba(255, 94, 20, .7);
        }

        .facts-v2-num {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 2px;
            font-size: clamp(2.4rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1;
            color: #fff;
            margin-bottom: 8px;
        }

        .facts-v2-num::after {
            content: "+";
            color: var(--primary);
            font-weight: 800;
        }

        .facts-v2-label {
            font-size: .8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: rgba(255, 255, 255, .65);
        }
    </style>

    <div class="container-fluid facts-v2">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="facts-v2-card">
                        <div class="facts-v2-icon"><i class="fa fa-certificate"></i></div>
                        <div class="facts-v2-num" data-toggle="counter-up">25</div>
                        <div class="facts-v2-label">Years Experience</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="facts-v2-card">
                        <div class="facts-v2-icon"><i class="fa fa-users-cog"></i></div>
                        <div class="facts-v2-num" data-toggle="counter-up">135</div>
                        <div class="facts-v2-label">Team Members</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="facts-v2-card">
                        <div class="facts-v2-icon"><i class="fa fa-users"></i></div>
                        <div class="facts-v2-num" data-toggle="counter-up">957</div>
                        <div class="facts-v2-label">Happy Clients</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.55s">
                    <div class="facts-v2-card">
                        <div class="facts-v2-icon"><i class="fa fa-check-double"></i></div>
                        <div class="facts-v2-num" data-toggle="counter-up">1839</div>
                        <div class="facts-v2-label">Projects Done</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <style>
        .why-v2 {
            position: relative;
            overflow: hidden;
            background: #f6f8fc;
            padding: 72px 0;
        }

        .why-v2::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(2, 36, 91, 0.05) 1.5px, transparent 1.5px);
            background-size: 24px 24px;
            pointer-events: none;
        }

        .why-v2 .container {
            position: relative;
            z-index: 1;
        }

        /* media */
        .why-v2-media {
            position: relative;
            padding: 18px 26px 26px 0;
        }

        .why-v2-media__glow {
            position: absolute;
            inset: 0 0 10px 20px;
            background: radial-gradient(55% 55% at 30% 25%, rgba(255, 94, 20, .25), transparent 70%),
                        radial-gradient(55% 55% at 80% 90%, rgba(2, 36, 91, .28), transparent 70%);
            filter: blur(38px);
        }

        .why-v2-media__frame {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            aspect-ratio: 4 / 3.4;
            box-shadow: 0 34px 60px -24px rgba(2, 36, 91, .45);
        }

        .why-v2-media__frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .why-v2-media__frame::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(2, 15, 40, .5), transparent 55%);
        }

        .why-v2-media .btn-play {
            top: 50%;
            left: 50%;
            right: auto;
            transform: translate(-50%, -50%);
            z-index: 3;
        }

        .why-v2-badge {
            position: absolute;
            left: -6px;
            bottom: 6px;
            z-index: 3;
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 22px;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 22px 44px -18px rgba(2, 36, 91, .4);
        }

        .why-v2-badge i {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
        }

        .why-v2-badge b {
            display: block;
            font-size: 1.05rem;
            color: var(--dark);
            line-height: 1.1;
        }

        .why-v2-badge span {
            font-size: .78rem;
            color: #7a828f;
            text-transform: uppercase;
            letter-spacing: .5px;
        }

        /* content */
        .why-v2-kicker {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 13px;
            color: var(--primary);
            margin-bottom: 14px;
        }

        .why-v2-kicker::before {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .why-v2-title {
            font-size: clamp(1.5rem, 2.6vw, 2.1rem);
            font-weight: 800;
            color: var(--dark);
            line-height: 1.25;
            margin-bottom: 14px;
        }

        .why-v2-lead {
            color: #5b6472;
            line-height: 1.8;
            margin-bottom: 26px;
        }

        .why-v2-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .why-v2-card {
            position: relative;
            background: #fff;
            border: 1px solid #eef1f6;
            border-radius: 16px;
            padding: 22px 20px;
            overflow: hidden;
            transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
        }

        .why-v2-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), #ff8a4c);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .3s ease;
        }

        .why-v2-card:hover {
            transform: translateY(-6px);
            border-color: transparent;
            box-shadow: 0 24px 40px -22px rgba(2, 36, 91, .35);
        }

        .why-v2-card:hover::before {
            transform: scaleX(1);
        }

        .why-v2-card__icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--primary);
            background: rgba(255, 94, 20, .12);
            margin-bottom: 14px;
            transition: background .3s ease, color .3s ease;
        }

        .why-v2-card:hover .why-v2-card__icon {
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            color: #fff;
        }

        .why-v2-card h5 {
            font-size: 1rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 6px;
        }

        .why-v2-card p {
            font-size: .86rem;
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 0;
        }

        @media (max-width: 991px) {
            .why-v2-media {
                margin-bottom: 2.5rem;
                max-width: 520px;
                padding-right: 12px;
            }
        }

        @media (max-width: 575px) {
            .why-v2-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="why-v2">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="why-v2-media">
                        <div class="why-v2-media__glow"></div>
                        <div class="why-v2-media__frame">
                            <img src="img/feature.jpg" alt="Babita Construction team at work">
                        </div>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <div class="why-v2-badge">
                            <i class="fa fa-award"></i>
                            <div>
                                <b>ISO Certified</b>
                                <span>Quality Assured</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <span class="why-v2-kicker">Why Choose Us</span>
                    <h2 class="why-v2-title">Few Reasons Why Clients Choose Babita Construction</h2>
                    <p class="why-v2-lead">Partner with us for your next mining, construction or transportation project and
                        experience the difference that expertise, innovation and dedication make.</p>
                    <div class="why-v2-grid">
                        <div class="why-v2-card">
                            <div class="why-v2-card__icon"><i class="fa fa-medal"></i></div>
                            <h5>Expertise &amp; Experience</h5>
                            <p>A decade-long legacy of delivering superior results with the latest technology and industry
                                best practices.</p>
                        </div>
                        <div class="why-v2-card">
                            <div class="why-v2-card__icon"><i class="fa fa-shield-alt"></i></div>
                            <h5>Safety &amp; Sustainability</h5>
                            <p>Stringent safety protocols and environmental standards that protect our people and the
                                planet.</p>
                        </div>
                        <div class="why-v2-card">
                            <div class="why-v2-card__icon"><i class="fa fa-gem"></i></div>
                            <h5>Quality &amp; Reliability</h5>
                            <p>Projects built to the highest standards of craftsmanship and engineering &mdash; made to
                                last.</p>
                        </div>
                        <div class="why-v2-card">
                            <div class="why-v2-card__icon"><i class="fa fa-handshake"></i></div>
                            <h5>Client-Centric Approach</h5>
                            <p>Transparent communication and customized solutions that consistently exceed expectations.</p>
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
    <style>
        .svc-v2 {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #02245B 0%, #041d4a 55%, #063a86 100%);
            padding: 44px 0;
        }

        .svc-v2::before,
        .svc-v2::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            pointer-events: none;
        }

        .svc-v2::before {
            width: 420px;
            height: 420px;
            top: -180px;
            left: -120px;
            background: rgba(255, 94, 20, .18);
        }

        .svc-v2::after {
            width: 420px;
            height: 420px;
            bottom: -200px;
            right: -140px;
            background: rgba(58, 122, 255, .16);
        }

        .svc-v2 .container {
            position: relative;
            z-index: 1;
        }

        .svc-v2-kicker {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 13px;
            color: var(--primary);
            margin-bottom: 14px;
        }

        .svc-v2-kicker::before,
        .svc-v2-kicker::after {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .svc-v2-title {
            font-size: clamp(1.6rem, 2.8vw, 2.2rem);
            font-weight: 800;
            color: #fff;
            margin-bottom: 10px;
        }

        .svc-v2-sub {
            color: rgba(255, 255, 255, .6);
            max-width: 560px;
            margin: 0 auto;
        }

        .svc-v2-card {
            height: 100%;
            border-radius: 20px;
            overflow: hidden;
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .1);
            transition: transform .35s ease, border-color .35s ease, box-shadow .35s ease;
        }

        .svc-v2-card:hover {
            transform: translateY(-8px);
            border-color: rgba(255, 94, 20, .55);
            box-shadow: 0 34px 54px -26px rgba(0, 0, 0, .6);
        }

        .svc-v2-card__media {
            position: relative;
            aspect-ratio: 16 / 10;
            overflow: hidden;
        }

        .svc-v2-card__media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .6s ease;
        }

        .svc-v2-card:hover .svc-v2-card__media img {
            transform: scale(1.08);
        }

        .svc-v2-card__media::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(2, 15, 40, .85) 0%, rgba(2, 15, 40, .1) 60%);
        }

        .svc-v2-card__icon {
            position: absolute;
            left: 20px;
            bottom: -24px;
            z-index: 2;
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            box-shadow: 0 14px 26px -8px rgba(255, 94, 20, .7);
        }

        .svc-v2-card__body {
            padding: 38px 22px 24px;
        }

        .svc-v2-card__body h5 {
            font-size: 1.05rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 8px;
        }

        .svc-v2-card__body p {
            font-size: .86rem;
            color: rgba(255, 255, 255, .6);
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .svc-v2-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: .82rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary);
            text-decoration: none;
        }

        .svc-v2-link i {
            transition: transform .3s ease;
        }

        .svc-v2-card:hover .svc-v2-link i {
            transform: translateX(5px);
        }
    </style>

    <div class="svc-v2">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 620px;">
                <span class="svc-v2-kicker">Our Services</span>
                <h2 class="svc-v2-title">We Provide Best Industrial Services</h2>
                <p class="svc-v2-sub">From mining and exploration to large-scale construction and infrastructure &mdash;
                    delivered with precision, safety and proven expertise.</p>
            </div>

            <div class="row g-4 mt-2">
                @php
                    $services = [
                        ['img' => 'project-1.jpg', 'icon' => 'fa-mountain', 'title' => 'Mining Operations', 'text' => 'Efficient, safe extraction operations backed by modern equipment and skilled crews.'],
                        ['img' => 'project-4.jpg', 'icon' => 'fa-building', 'title' => 'Construction', 'text' => 'Commercial, residential and infrastructure builds delivered on schedule, to standard.'],
                        ['img' => 'project-6.jpg', 'icon' => 'fa-industry', 'title' => 'Industrial Construction', 'text' => 'Heavy industrial facilities and plants constructed to exacting specifications.'],
                    ];
                @endphp
                @foreach ($services as $i => $s)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ 0.1 + $i * 0.1 }}s">
                        <div class="svc-v2-card">
                            <div class="svc-v2-card__media">
                                <img src="img/{{ $s['img'] }}" alt="{{ strip_tags($s['title']) }}">
                                <div class="svc-v2-card__icon"><i class="fa {{ $s['icon'] }}"></i></div>
                            </div>
                            <div class="svc-v2-card__body">
                                <h5>{!! $s['title'] !!}</h5>
                                <p>{{ $s['text'] }}</p>
                                <a href="{{ route('project.view') }}" class="svc-v2-link">Learn More <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <style>
        .proj-v2 {
            position: relative;
            background: #f6f8fc;
            padding: 56px 0;
        }

        .proj-v2-kicker {
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

        .proj-v2-kicker::before,
        .proj-v2-kicker::after {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .proj-v2-title {
            font-size: clamp(1.6rem, 2.8vw, 2.2rem);
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 6px;
        }

        .proj-v2-card {
            position: relative;
            height: 380px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px -22px rgba(2, 36, 91, .4);
        }

        .proj-v2-card img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .6s ease;
        }

        .proj-v2-card:hover img {
            transform: scale(1.08);
        }

        .proj-v2-card::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(2, 12, 30, .92) 0%, rgba(2, 12, 30, .35) 45%, rgba(2, 12, 30, .05) 100%);
            transition: background .35s ease;
        }

        .proj-v2-card:hover::after {
            background: linear-gradient(to top, rgba(255, 94, 20, .82) 0%, rgba(2, 12, 30, .4) 55%, rgba(2, 12, 30, .05) 100%);
        }

        .proj-v2-card__tag {
            position: absolute;
            top: 18px;
            left: 18px;
            z-index: 2;
            font-size: .72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #fff;
            background: rgba(255, 255, 255, .16);
            -webkit-backdrop-filter: blur(6px);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, .3);
            padding: 6px 12px;
            border-radius: 50px;
        }

        .proj-v2-card__body {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            padding: 24px;
            color: #fff;
        }

        .proj-v2-card__body h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 6px;
        }

        .proj-v2-card__body p {
            font-size: .85rem;
            color: rgba(255, 255, 255, .82);
            margin: 0;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height .35s ease, opacity .35s ease, margin .35s ease;
        }

        .proj-v2-card:hover .proj-v2-card__body p {
            max-height: 80px;
            opacity: 1;
            margin-top: 4px;
        }

        .proj-v2-card__arrow {
            position: absolute;
            right: 24px;
            bottom: 24px;
            z-index: 3;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: var(--dark);
            transform: translateY(10px) scale(.8);
            opacity: 0;
            transition: transform .35s ease, opacity .35s ease;
        }

        .proj-v2-card:hover .proj-v2-card__arrow {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        @media (max-width: 575px) {
            .proj-v2-card { height: 320px; }
        }
    </style>

    <div class="proj-v2">
        <div class="container">
            <div class="d-md-flex align-items-end justify-content-between mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div>
                    <span class="proj-v2-kicker">Our Projects</span>
                    <h2 class="proj-v2-title mb-0">Our Best Industrial Projects</h2>
                </div>
                <a href="{{ route('project.view') }}" class="btn btn-primary py-2 px-4 rounded-pill mt-3 mt-md-0">View All
                    Projects <i class="fa fa-arrow-right ms-2"></i></a>
            </div>

            <div class="row g-4">
                @php
                    $projects = [
                        ['img' => 'project-5.jpg', 'tag' => 'Infrastructure', 'title' => 'Highway & Bridge Development', 'text' => 'Multi-phase road and bridge network built to national engineering standards.'],
                        ['img' => 'project-4.jpg', 'tag' => 'Construction', 'title' => 'Commercial Complex Build', 'text' => 'Turn-key commercial complex delivered on schedule with zero safety incidents.'],
                        ['img' => 'project-3.jpg', 'tag' => 'Mining', 'title' => 'Mine Development Project', 'text' => 'Full mine development from site prep through to operational readiness.'],
                    ];
                @endphp
                @foreach ($projects as $i => $p)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ 0.1 + $i * 0.15 }}s">
                        <a href="{{ route('project.view') }}" class="proj-v2-card d-block">
                            <img src="img/{{ $p['img'] }}" alt="{{ $p['title'] }}">
                            <span class="proj-v2-card__tag">{{ $p['tag'] }}</span>
                            <div class="proj-v2-card__body">
                                <h4>{{ $p['title'] }}</h4>
                                <p>{{ $p['text'] }}</p>
                            </div>
                            <span class="proj-v2-card__arrow"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Testimonial Start -->
    <style>
        .tst-v2 {
            position: relative;
            background: #ffffff;
            padding: 64px 0;
        }

        .tst-v2-kicker {
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

        .tst-v2-kicker::before,
        .tst-v2-kicker::after {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .tst-v2-title {
            font-size: clamp(1.6rem, 2.8vw, 2.2rem);
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 6px;
        }

        /* equal-height cards inside owl carousel */
        .testimonial-slider .owl-stage {
            display: flex;
        }

        .testimonial-slider .owl-item {
            display: flex;
            height: auto;
        }

        .tst-v2-item {
            display: flex;
            width: 100%;
            padding: 16px 12px;
        }

        .tst-v2-card {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            background: #fff;
            border: 1px solid #edf0f6;
            border-radius: 16px;
            padding: 32px 26px 24px;
            box-shadow: 0 18px 40px -26px rgba(2, 36, 91, .35);
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .tst-v2-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 26px;
            width: 44px;
            height: 3px;
            border-radius: 3px;
            background: linear-gradient(90deg, var(--primary), #ff8a4c);
        }

        .tst-v2-card:hover {
            transform: translateY(-6px);
            border-color: transparent;
            box-shadow: 0 30px 50px -26px rgba(2, 36, 91, .4);
        }

        .tst-v2-card__quote {
            position: absolute;
            top: 24px;
            right: 26px;
            font-size: 1.6rem;
            line-height: 1;
            color: rgba(255, 94, 20, .22);
        }

        .tst-v2-stars {
            color: #ffb400;
            font-size: .82rem;
            letter-spacing: 2px;
            margin-bottom: 14px;
        }

        .tst-v2-card__text {
            position: relative;
            z-index: 1;
            color: #45505f;
            line-height: 1.75;
            font-size: .95rem;
            margin-bottom: 22px;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .tst-v2-card__foot {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: auto;
            border-top: 1px solid #eef1f6;
            padding-top: 16px;
        }

        .tst-v2-avatar {
            flex-shrink: 0;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: .95rem;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            box-shadow: 0 0 0 4px rgba(255, 94, 20, .12);
        }

        .tst-v2-card__foot h5 {
            font-size: .98rem;
            font-weight: 700;
            color: var(--dark);
            margin: 0;
        }

        .tst-v2-card__foot span {
            font-size: .8rem;
            color: #7a828f;
        }
    </style>

    <div class="tst-v2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-3" style="max-width: 620px;">
                <span class="tst-v2-kicker">Testimonials</span>
                <h2 class="tst-v2-title">What Our Clients Say</h2>
            </div>

            <div class="owl-carousel testimonial-slider">
                @php
                    $reviews = [
                        ['name' => 'SK Modasir Hossain', 'role' => 'Project Manager', 'text' => 'Impressive expertise in integrating complex systems. Our productivity and data accuracy have significantly improved.'],
                        ['name' => 'Jagabandh Mahanta', 'role' => 'Fleet Manager', 'text' => "Fleet management has never been easier. The real-time tracking and maintenance alerts are invaluable."],
                        ['name' => 'Srinibas Nayak', 'role' => 'Construction Manager', 'text' => 'Outstanding service! The construction management streamlined our projects, saving us time and money. Highly recommended!'],
                        ['name' => 'S. Narayan Murty', 'role' => 'Mining Operations Director', 'text' => 'Their mining solutions boosted our operational efficiency and safety. Excellent support and reliable technology!'],
                        ['name' => 'Rahul Maharana', 'role' => 'Logistics Coordinator', 'text' => 'Efficient and user-friendly logistics management. It has greatly improved our supply chain coordination.'],
                    ];
                @endphp
                @foreach ($reviews as $r)
                    @php
                        $parts = preg_split('/\s+/', trim($r['name']));
                        $initials = strtoupper(substr($parts[0], 0, 1) . (isset($parts[count($parts) - 1]) && count($parts) > 1 ? substr($parts[count($parts) - 1], 0, 1) : ''));
                    @endphp
                    <div class="tst-v2-item">
                        <div class="tst-v2-card">
                            <span class="tst-v2-card__quote"><i class="fa fa-quote-right"></i></span>
                            <div class="tst-v2-stars">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <p class="tst-v2-card__text">{{ $r['text'] }}</p>
                            <div class="tst-v2-card__foot">
                                <span class="tst-v2-avatar">{{ $initials }}</span>
                                <div>
                                    <h5>{{ $r['name'] }}</h5>
                                    <span>{{ $r['role'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
