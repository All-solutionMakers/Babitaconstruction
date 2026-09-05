@extends('user.layouts.main')
@section('main_content')
    <!-- Page Header Start -->
    <style>
        .abt-hero {
            position: relative;
            display: flex;
            align-items: center;
            min-height: 320px;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .abt-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(2, 15, 40, .93) 0%, rgba(2, 15, 40, .6) 55%, rgba(2, 15, 40, .3) 100%);
        }

        .abt-hero::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), #ff8a4c);
        }

        .abt-hero__inner {
            position: relative;
            z-index: 1;
            padding: 64px 0;
        }

        .abt-hero__kicker {
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

        .abt-hero__kicker::before {
            content: "";
            width: 32px;
            height: 3px;
            background: var(--primary);
        }

        .abt-hero h1 {
            color: #fff;
            font-weight: 800;
            font-size: clamp(2rem, 4vw, 3rem);
            line-height: 1.15;
            margin-bottom: 16px;
            text-shadow: 0 6px 26px rgba(0, 0, 0, .35);
        }

        .abt-hero__crumb {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 9px 18px;
            border-radius: 50px;
            background: rgba(255, 255, 255, .1);
            -webkit-backdrop-filter: blur(6px);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, .2);
            font-size: .88rem;
        }

        .abt-hero__crumb a {
            color: rgba(255, 255, 255, .8);
            text-decoration: none;
            transition: color .25s ease;
        }

        .abt-hero__crumb a:hover {
            color: var(--primary);
        }

        .abt-hero__crumb .sep {
            color: rgba(255, 255, 255, .4);
            font-size: .7rem;
        }

        .abt-hero__crumb .current {
            color: var(--primary);
            font-weight: 600;
        }
    </style>

    <div class="abt-hero wow fadeIn" data-wow-delay="0.1s"
        style="background-image:url('{{ url('img/Construction.jpg') }}');">
        <div class="container abt-hero__inner">
            <span class="abt-hero__kicker">Who We Are</span>
            <h1>About Babita Construction</h1>
            <div class="abt-hero__crumb">
                <a href="{{ route('index.view') }}">Home</a>
                <i class="fa fa-chevron-right sep"></i>
                <span class="current">About Us</span>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <style>
        .abt2 {
            position: relative;
            overflow: hidden;
            background: #fff;
            padding: 66px 0;
        }

        .abt2::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(2, 36, 91, .05) 1.5px, transparent 1.5px);
            background-size: 24px 24px;
            pointer-events: none;
        }

        .abt2 .container {
            position: relative;
            z-index: 1;
        }

        /* media */
        .abt2-media {
            position: relative;
            padding: 20px 40px 46px 20px;
        }

        .abt2-media__glow {
            position: absolute;
            inset: 0 10px 20px 0;
            background: radial-gradient(58% 58% at 78% 22%, rgba(255, 94, 20, .28), transparent 70%),
                        radial-gradient(58% 58% at 18% 92%, rgba(2, 36, 91, .3), transparent 70%);
            filter: blur(38px);
        }

        .abt2-media__main {
            position: relative;
            z-index: 1;
            border-radius: 24px;
            overflow: hidden;
            aspect-ratio: 4 / 4.2;
            box-shadow: 0 34px 60px -24px rgba(2, 36, 91, .45);
        }

        .abt2-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform .7s ease;
        }

        .abt2-media__main:hover img {
            transform: scale(1.06);
        }

        .abt2-media__mini {
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

        .abt2-badge {
            position: absolute;
            left: 0;
            top: 42px;
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

        .abt2-badge::before {
            content: "";
            width: 4px;
            align-self: stretch;
            border-radius: 4px;
            background: var(--primary);
        }

        .abt2-badge .num {
            font-size: 2.4rem;
            font-weight: 800;
            line-height: 1;
            color: var(--primary);
        }

        .abt2-badge .txt {
            font-size: .74rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            line-height: 1.35;
        }

        /* content */
        .abt2-kicker {
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

        .abt2-kicker::before {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .abt2-title {
            font-size: clamp(1.5rem, 2.6vw, 2.1rem);
            font-weight: 800;
            line-height: 1.25;
            color: var(--dark);
            margin-bottom: 16px;
        }

        .abt2-lead {
            color: #5b6472;
            line-height: 1.8;
            margin-bottom: 26px;
        }

        .abt2-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px 24px;
            margin-bottom: 28px;
        }

        .abt2-feature {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
            font-weight: 600;
            font-size: .92rem;
            color: var(--dark);
            transition: transform .25s ease, color .25s ease;
        }

        .abt2-feature:hover {
            transform: translateX(5px);
            color: var(--primary);
        }

        .abt2-feature .ic {
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

        .abt2-cta {
            display: flex;
            align-items: center;
            gap: 22px;
            flex-wrap: wrap;
        }

        .abt2-cta .btn {
            border-radius: 50px;
        }

        .abt2-cta__meta {
            font-size: .9rem;
            color: #5b6472;
            line-height: 1.35;
        }

        .abt2-cta__meta strong {
            display: block;
            font-size: 1.2rem;
            color: var(--dark);
        }

        @media (max-width: 991px) {
            .abt2-media {
                margin-bottom: 2.5rem;
                max-width: 520px;
                padding-right: 30px;
            }
        }

        @media (max-width: 575px) {
            .abt2-features {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <div class="abt2">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="abt2-media">
                        <div class="abt2-media__glow"></div>
                        <div class="abt2-media__main">
                            <img src="img/400x600 slider 1.jpg" alt="Babita Construction site engineer">
                        </div>
                        <div class="abt2-media__mini">
                            <img src="img/400x600 slider 2.jpg" alt="Babita Construction site supervisor">
                        </div>
                        <div class="abt2-badge">
                            <span class="num" data-toggle="counter-up">10</span>
                            <span class="txt">Years of<br>Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <span class="abt2-kicker">About Us</span>
                    <h2 class="abt2-title">About Babita Construction</h2>
                    <p class="abt2-lead">Babita Construction is a premier name in the mining and construction industry,
                        renowned for its commitment to excellence, innovation and sustainability. With decades of
                        experience, we have built a robust portfolio of successful projects &mdash; from massive
                        infrastructure developments to intricate mining operations.</p>
                    <div class="abt2-features">
                        <div class="abt2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Commercial &amp; Residential</span>
                        </div>
                        <div class="abt2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Mining Operations</span>
                        </div>
                        <div class="abt2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Exploration &amp; Drilling</span>
                        </div>
                        <div class="abt2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Fleet Management</span>
                        </div>
                        <div class="abt2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Vehicle &amp; Logistics</span>
                        </div>
                        <div class="abt2-feature">
                            <span class="ic"><i class="fa fa-check"></i></span>
                            <span>Infrastructure Development</span>
                        </div>
                    </div>
                    <div class="abt2-cta">
                        <a href="{{ route('contact.view') }}" class="btn btn-primary py-3 px-5">Get in Touch <i
                                class="fa fa-arrow-right ms-2"></i></a>
                        <div class="abt2-cta__meta">
                            <strong>135+</strong> Experts on ground
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <style>
        .abt-facts {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #02245B 0%, #041d4a 55%, #063a86 100%);
            padding: 48px 0;
        }

        .abt-facts::before,
        .abt-facts::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            pointer-events: none;
        }

        .abt-facts::before {
            width: 400px;
            height: 400px;
            top: -160px;
            right: -120px;
            background: rgba(255, 94, 20, .22);
        }

        .abt-facts::after {
            width: 360px;
            height: 360px;
            bottom: -180px;
            left: -100px;
            background: rgba(58, 122, 255, .18);
        }

        .abt-facts .container {
            position: relative;
            z-index: 1;
        }

        .abt-facts-card {
            position: relative;
            height: 100%;
            padding: 32px 24px;
            border-radius: 20px;
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .12);
            -webkit-backdrop-filter: blur(6px);
            backdrop-filter: blur(6px);
            text-align: center;
            overflow: hidden;
            transition: transform .35s ease, border-color .35s ease, background .35s ease, box-shadow .35s ease;
        }

        .abt-facts-card::before {
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

        .abt-facts-card:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, .08);
            border-color: rgba(255, 94, 20, .5);
            box-shadow: 0 30px 50px -22px rgba(0, 0, 0, .55);
        }

        .abt-facts-card:hover::before {
            transform: scaleX(1);
        }

        .abt-facts-icon {
            width: 58px;
            height: 58px;
            margin: 0 auto 18px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.35rem;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            box-shadow: 0 14px 26px -10px rgba(255, 94, 20, .7);
        }

        .abt-facts-num {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 2px;
            font-size: clamp(2.2rem, 4vw, 3rem);
            font-weight: 800;
            line-height: 1;
            color: #fff;
            margin-bottom: 6px;
        }

        .abt-facts-num::after {
            content: "+";
            color: var(--primary);
        }

        .abt-facts-label {
            font-size: .78rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: rgba(255, 255, 255, .65);
        }

        /* Mission / Vision */
        .abt-mv {
            background: #f6f8fc;
            padding: 60px 0;
        }

        .abt-mv-card {
            position: relative;
            height: 100%;
            background: #fff;
            border: 1px solid #edf0f6;
            border-radius: 20px;
            padding: 36px 32px;
            overflow: hidden;
            transition: transform .35s ease, box-shadow .35s ease;
        }

        .abt-mv-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 30px 50px -26px rgba(2, 36, 91, .4);
        }

        .abt-mv-card__watermark {
            position: absolute;
            right: 18px;
            top: 6px;
            font-size: 6rem;
            font-weight: 800;
            line-height: 1;
            color: rgba(2, 36, 91, .05);
            pointer-events: none;
        }

        .abt-mv-card__icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 18px;
            background: linear-gradient(135deg, #02245B, #063a86);
            box-shadow: 0 14px 26px -10px rgba(2, 36, 91, .5);
        }

        .abt-mv-card.is-orange .abt-mv-card__icon {
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            box-shadow: 0 14px 26px -10px rgba(255, 94, 20, .6);
        }

        .abt-mv-card__kicker {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            color: var(--primary);
        }

        .abt-mv-card h3 {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--dark);
            margin: 4px 0 12px;
        }

        .abt-mv-card p {
            color: #5b6472;
            line-height: 1.8;
            font-size: .95rem;
            margin: 0;
        }

        .abt-mv-card::after {
            content: "";
            position: absolute;
            left: 0;
            top: 32px;
            bottom: 32px;
            width: 4px;
            border-radius: 0 4px 4px 0;
            background: linear-gradient(180deg, #02245B, #063a86);
        }

        .abt-mv-card.is-orange::after {
            background: linear-gradient(180deg, var(--primary), #ff8a4c);
        }
    </style>

    <div class="abt-facts">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="abt-facts-card">
                        <div class="abt-facts-icon"><i class="fa fa-certificate"></i></div>
                        <div class="abt-facts-num" data-toggle="counter-up">25</div>
                        <div class="abt-facts-label">Years Experience</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.25s">
                    <div class="abt-facts-card">
                        <div class="abt-facts-icon"><i class="fa fa-users-cog"></i></div>
                        <div class="abt-facts-num" data-toggle="counter-up">135</div>
                        <div class="abt-facts-label">Team Members</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="abt-facts-card">
                        <div class="abt-facts-icon"><i class="fa fa-users"></i></div>
                        <div class="abt-facts-num" data-toggle="counter-up">957</div>
                        <div class="abt-facts-label">Happy Clients</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.55s">
                    <div class="abt-facts-card">
                        <div class="abt-facts-icon"><i class="fa fa-check-double"></i></div>
                        <div class="abt-facts-num" data-toggle="counter-up">1839</div>
                        <div class="abt-facts-label">Projects Done</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Mission Vission Start -->
    <div class="abt-mv">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="abt-mv-card">
                        <span class="abt-mv-card__watermark">01</span>
                        <div class="abt-mv-card__icon"><i class="fa fa-rocket"></i></div>
                        <span class="abt-mv-card__kicker">Our Mission</span>
                        <h3>Mission</h3>
                        <p>To deliver exceptional mining and construction services that meet the highest standards of
                            safety, quality and sustainability &mdash; fostering innovation, enhancing community
                            development and creating lasting value for our clients and stakeholders.</p>
                    </div>
                </div>
                <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="abt-mv-card is-orange">
                        <span class="abt-mv-card__watermark">02</span>
                        <div class="abt-mv-card__icon"><i class="fa fa-binoculars"></i></div>
                        <span class="abt-mv-card__kicker">Our Vision</span>
                        <h3>Vision</h3>
                        <p>To be a global leader in the mining and construction industry &mdash; recognized for our
                            excellence, integrity and dedication to sustainable development, continuously setting new
                            benchmarks for the industry and the environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission Vission End -->


    <!-- Team Start -->
    <style>
        .abt-team {
            position: relative;
            background: #fff;
            padding: 60px 0;
        }

        .abt-team-head .kicker {
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

        .abt-team-head .kicker::before,
        .abt-team-head .kicker::after {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .abt-team-head h2 {
            font-size: clamp(1.6rem, 2.8vw, 2.2rem);
            font-weight: 800;
            color: var(--dark);
            margin: 0;
        }

        .abt-team-card {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            background: #fff;
            border: 1px solid #edf0f6;
            box-shadow: 0 18px 40px -26px rgba(2, 36, 91, .35);
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .abt-team-card:hover {
            transform: translateY(-8px);
            border-color: transparent;
            box-shadow: 0 34px 54px -28px rgba(2, 36, 91, .45);
        }

        .abt-team-card__media {
            position: relative;
            aspect-ratio: 1 / 1;
            overflow: hidden;
        }

        .abt-team-card__media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .6s ease;
        }

        .abt-team-card:hover .abt-team-card__media img {
            transform: scale(1.07);
        }

        .abt-team-card__media::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(2, 12, 30, .7), transparent 55%);
            opacity: 0;
            transition: opacity .35s ease;
        }

        .abt-team-card:hover .abt-team-card__media::after {
            opacity: 1;
        }

        .abt-team-card__social {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 16px;
            z-index: 2;
            display: flex;
            justify-content: center;
            gap: 10px;
            opacity: 0;
            transform: translateY(14px);
            transition: opacity .35s ease, transform .35s ease;
        }

        .abt-team-card:hover .abt-team-card__social {
            opacity: 1;
            transform: translateY(0);
        }

        .abt-team-card__social a {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: var(--dark);
            font-size: .85rem;
            transition: background .25s ease, color .25s ease;
        }

        .abt-team-card__social a:hover {
            background: var(--primary);
            color: #fff;
        }

        .abt-team-card__body {
            position: relative;
            text-align: center;
            padding: 20px 16px 22px;
        }

        .abt-team-card__body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 46px;
            height: 3px;
            border-radius: 3px;
            background: linear-gradient(90deg, var(--primary), #ff8a4c);
        }

        .abt-team-card__body h5 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--dark);
            margin: 6px 0 2px;
        }

        .abt-team-card__body span {
            font-size: .82rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary);
        }
    </style>

    <div class="abt-team">
        <div class="container">
            <div class="abt-team-head text-center mx-auto mb-4 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px;">
                <span class="kicker">Our Team</span>
                <h2>Dedicated Team Members</h2>
            </div>
            <div class="row g-4">
                @php
                    $team = [
                        ['img' => 'team-1.jpg', 'name' => 'Rob Miller', 'role' => 'CEO & Founder'],
                        ['img' => 'team-2.jpg', 'name' => 'Adam Crew', 'role' => 'Project Manager'],
                        ['img' => 'team-3.jpg', 'name' => 'Peter Farel', 'role' => 'Engineer'],
                    ];
                @endphp
                @foreach ($team as $i => $m)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 + $i * 0.15 }}s">
                        <div class="abt-team-card">
                            <div class="abt-team-card__media">
                                <img src="img/{{ $m['img'] }}" alt="{{ $m['name'] }}">
                                <div class="abt-team-card__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="abt-team-card__body">
                                <h5>{{ $m['name'] }}</h5>
                                <span>{{ $m['role'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->


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
    <!-- Video Modal End -->
@endsection
