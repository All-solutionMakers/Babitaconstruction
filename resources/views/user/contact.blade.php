@extends('user.layouts.main')
@section('main_content')
    <!-- Page Header Start -->
    @include('user.layouts.partials.service-page-styles')

    <div class="pg-hero wow fadeIn" data-wow-delay="0.1s"
        style="background-image:url('{{ url('img/carousel-2.jpg') }}');">
        <div class="container pg-hero__inner">
            <span class="pg-hero__kicker">Reach Out</span>
            <h1>Contact</h1>
            <div class="pg-hero__crumb">
                <a href="{{ route('index.view') }}">Home</a>
                <i class="fa fa-chevron-right sep"></i>
                <span class="current">Contact</span>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <style>
        .ct {
            position: relative;
            overflow: hidden;
            background: #fff;
            padding: 40px 0 64px;
        }

        .ct::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: radial-gradient(circle, rgba(2, 36, 91, .05) 1.5px, transparent 1.5px);
            background-size: 24px 24px;
            pointer-events: none;
        }

        .ct .container {
            position: relative;
            z-index: 1;
        }

        .ct-card {
            position: relative;
            height: 100%;
            text-align: center;
            background: #fff;
            border: 1px solid #edf0f6;
            border-radius: 18px;
            padding: 34px 26px;
            overflow: hidden;
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .ct-card::before {
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

        .ct-card:hover {
            transform: translateY(-8px);
            border-color: transparent;
            box-shadow: 0 30px 50px -26px rgba(2, 36, 91, .4);
        }

        .ct-card:hover::before {
            transform: scaleX(1);
        }

        .ct-card__icon {
            width: 66px;
            height: 66px;
            margin: 0 auto 18px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
            box-shadow: 0 16px 30px -10px rgba(255, 94, 20, .7);
        }

        .ct-card h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 12px;
        }

        .ct-card p {
            color: #5b6472;
            margin-bottom: 6px;
        }

        .ct-card .btn {
            border-radius: 50px;
            margin-top: 14px;
        }

        .ct-map {
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid #e7ebf3;
            box-shadow: 0 22px 44px -28px rgba(2, 36, 91, .4);
        }

        .ct-map iframe {
            display: block;
            width: 100%;
            min-height: 380px;
            border: 0;
            filter: grayscale(.25) contrast(1.03);
        }

        .ct-lead .kicker {
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

        .ct-lead .kicker::before {
            content: "";
            width: 30px;
            height: 3px;
            background: var(--primary);
        }

        .ct-lead h2 {
            font-size: clamp(1.4rem, 2.6vw, 2rem);
            font-weight: 800;
            color: var(--dark);
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .ct-lead p {
            color: #5b6472;
            line-height: 1.8;
            margin-bottom: 24px;
        }

        .ct-mini {
            display: flex;
            align-items: center;
            gap: 14px;
            background: #f6f8fc;
            border: 1px solid #edf0f6;
            border-radius: 14px;
            padding: 14px 16px;
        }

        .ct-mini i {
            flex-shrink: 0;
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            background: linear-gradient(135deg, var(--primary), #ff8a4c);
        }

        .ct-mini h6 {
            margin: 0;
            font-weight: 700;
            color: var(--dark);
        }

        .ct-mini span {
            font-size: .88rem;
            color: #5b6472;
        }

        .ct-form {
            background: #fff;
            border: 1px solid #edf0f6;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 24px 46px -30px rgba(2, 36, 91, .4);
        }

        .ct-form .form-control {
            border-radius: 12px;
        }

        .ct-form .btn {
            border-radius: 50px;
        }
    </style>

    <div class="ct">
        <div class="container">
            <div class="row g-4 justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="ct-card">
                        <div class="ct-card__icon"><i class="fa fa-phone-alt"></i></div>
                        <h4>Phone Number</h4>
                        <p>9040339519</p>
                        <p>9348879126</p>
                        <a class="btn btn-primary px-4" href="tel:9348879126">Call Now <i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="ct-card">
                        <div class="ct-card__icon"><i class="fa fa-envelope-open"></i></div>
                        <h4>Email Address</h4>
                        <p>info@babitaconstruction.com</p>
                        {{-- <p>support@example.com</p> --}}
                        <a class="btn btn-primary px-4" href="mailto:info@babitaconstruction.com">Email Now <i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="ct-card">
                        <div class="ct-card__icon"><i class="fa fa-map-marker-alt"></i></div>
                        <h4>Office Address</h4>
                        <p>Naba Laxmi Niwas (ନବ ଲକ୍ଷ୍ମୀ ନିବାସ), 6V45+34V, Saradeipur Rd, Samantarapurpatna, Uttara,
                            Odisha 751002 (ODISHA)</p>
                        {{-- <p>+012 345 67890</p> --}}
                        <a class="btn btn-primary px-4" href="https://maps.app.goo.gl/8FkweNbsBqijmkLQ6"
                            target="blank">Direction <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="ct-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3744.281986280687!2d85.85522337523442!3d20.205599981245665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDEyJzIwLjIiTiA4NcKwNTEnMjguMSJF!5e0!3m2!1sen!2sin!4v1775279175873!5m2!1sen!2sin"
                            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="row g-5 align-items-start">
                <div class="col-lg-6 wow fadeInUp ct-lead" data-wow-delay="0.1s">
                    <span class="kicker">Contact Us</span>
                    <h2>"Get in Touch: We're Here to Help You!"</h2>
                    <p>"Have a question or need assistance? We're here to help! Reach out to us anytime, and we'll get back
                        to you as soon as possible. Fill out the form below or email us at
                        [your-info@babitaconstruction.com]. We look forward to connecting with you!"</p>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="ct-mini">
                                <i class="fa fa-phone-alt"></i>
                                <div>
                                    <h6>Call Us</h6>
                                    <span>9040339519, 9348879126</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ct-mini">
                                <i class="fa fa-envelope"></i>
                                <div>
                                    <h6>Mail Us</h6>
                                    <span>info@babitaconstruction.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="ct-form">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
