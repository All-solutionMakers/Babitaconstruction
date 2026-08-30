<!-- Footer Start -->
<style>
    .ft-v2 {
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, #02245B 0%, #04152f 100%);
        color: rgba(255, 255, 255, .72);
    }

    .ft-v2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, var(--primary), #ff8a4c);
    }

    .ft-v2::after {
        content: "";
        position: absolute;
        width: 460px;
        height: 460px;
        right: -180px;
        top: -220px;
        border-radius: 50%;
        background: rgba(255, 94, 20, .1);
        filter: blur(120px);
        pointer-events: none;
    }

    .ft-v2 .container {
        position: relative;
        z-index: 1;
    }

    .ft-v2-cta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        flex-wrap: wrap;
        padding: 18px 0;
        border-bottom: 1px solid rgba(255, 255, 255, .1);
    }

    .ft-v2-cta h4 {
        color: #fff;
        font-weight: 800;
        margin: 0;
        font-size: 1.35rem;
    }

    .ft-v2-cta p {
        margin: 3px 0 0;
        font-size: .9rem;
    }

    .ft-v2-cta .btn {
        border-radius: 50px;
        padding: 12px 30px;
        font-weight: 600;
        white-space: nowrap;
    }

    .ft-v2-body {
        padding: 30px 0 18px;
    }

    .ft-v2 h5 {
        color: #fff;
        font-weight: 700;
        font-size: 1rem;
        margin-bottom: 14px;
        padding-bottom: 10px;
        position: relative;
    }

    .ft-v2 h5::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 32px;
        height: 2px;
        background: var(--primary);
    }

    .ft-v2-logo {
        height: 46px;
        width: auto;
        filter: brightness(0) invert(1);
        margin-bottom: 12px;
    }

    .ft-v2-about {
        font-size: .88rem;
        line-height: 1.6;
        margin-bottom: 14px;
    }

    .ft-v2-contact {
        list-style: none;
        padding: 0;
        margin: 0 0 14px;
    }

    .ft-v2-contact li {
        display: flex;
        gap: 10px;
        align-items: flex-start;
        margin-bottom: 9px;
        font-size: .88rem;
        line-height: 1.45;
    }

    .ft-v2-contact i {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, .06);
        color: var(--primary);
        font-size: .8rem;
    }

    .ft-v2-social {
        display: flex;
        gap: 10px;
    }

    .ft-v2-social a {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, .06);
        color: #fff;
        transition: background .25s ease, transform .25s ease;
    }

    .ft-v2-social a:hover {
        background: var(--primary);
        transform: translateY(-3px);
    }

    .ft-v2-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .ft-v2-links li {
        margin-bottom: 11px;
    }

    .ft-v2-links a {
        color: rgba(255, 255, 255, .72);
        text-decoration: none;
        font-size: .9rem;
        display: inline-flex;
        align-items: center;
        gap: 9px;
        transition: color .25s ease;
    }

    .ft-v2-links a::before {
        content: "\f105";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        color: var(--primary);
        font-size: .8rem;
        transition: transform .25s ease;
    }

    .ft-v2-links a:hover {
        color: #fff;
    }

    .ft-v2-links a:hover::before {
        transform: translateX(4px);
    }

    .ft-v2-hours {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .ft-v2-hours li {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        padding: 9px 0;
        border-bottom: 1px dashed rgba(255, 255, 255, .12);
        font-size: .88rem;
    }

    .ft-v2-hours li:last-child {
        border-bottom: 0;
    }

    .ft-v2-hours li span:last-child {
        color: #fff;
        font-weight: 600;
    }

    .ft-v2-hours li .closed {
        color: var(--primary);
    }

    .ft-v2-map {
        margin-top: 16px;
        border-radius: 14px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, .12);
    }

    .ft-v2-map iframe {
        display: block;
        width: 100%;
        height: 150px;
        border: 0;
        filter: grayscale(.35) contrast(1.05);
    }

    .ft-v2-bottom {
        border-top: 1px solid rgba(255, 255, 255, .1);
        padding: 14px 0;
    }

    .ft-v2-bottom .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
    }

    .ft-v2-bottom p {
        margin: 0;
        font-size: .85rem;
    }

    .ft-v2-bottom p a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .ft-v2-bottom nav {
        display: flex;
        gap: 18px;
    }

    .ft-v2-bottom nav a {
        color: rgba(255, 255, 255, .72);
        text-decoration: none;
        font-size: .85rem;
        transition: color .25s ease;
    }

    .ft-v2-bottom nav a:hover {
        color: var(--primary);
    }

    @media (max-width: 767px) {
        .ft-v2-bottom .container {
            justify-content: center;
            text-align: center;
        }
    }
</style>

<div class="ft-v2 footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="ft-v2-cta">
            <div>
                <h4>Ready to start your next project?</h4>
                <p>Talk to our team about construction, mining &amp; transportation solutions.</p>
            </div>
            <a href="{{ route('contact.view') }}" class="btn btn-primary">Get in Touch <i
                    class="fa fa-arrow-right ms-2"></i></a>
        </div>

        <div class="ft-v2-body">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('index.view') }}"><img src="{{ url('img/logo.png') }}" class="ft-v2-logo"
                            alt="Babita Construction"></a>
                    <p class="ft-v2-about">Babita Construction is a premier name in construction, mining and
                        transportation &mdash; delivering quality, safety and innovation for over a decade.</p>
                    <ul class="ft-v2-contact">
                        <li><i class="fa fa-map-marker-alt"></i>
                            <span>Naba Laxmi Niwas, 6V45+34V, Saradeipur Rd, Samantarapurpatna, Uttara, Odisha
                                751002</span>
                        </li>
                        <li><i class="fa fa-phone-alt"></i><span>9040339519, 9348879126</span></li>
                        <li><i class="fa fa-envelope"></i><span>babitaconstruction@gmail.com</span></li>
                    </ul>
                    <div class="ft-v2-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-6">
                    <h5>Quick Links</h5>
                    <ul class="ft-v2-links">
                        <li><a href="{{ route('about.view') }}">About Us</a></li>
                        <li><a href="{{ route('contact.view') }}">Contact Us</a></li>
                        <li><a href="{{ route('project.view') }}">Projects</a></li>
                        <li><a href="{{ route('login.view') }}">Admin Login</a></li>
                        <li><a href="{{ route('data.deletion.request.view') }}">Delete My Data</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <h5>Business Hours</h5>
                    <ul class="ft-v2-hours">
                        <li><span>Mon &ndash; Fri</span><span>09:00 am &ndash; 07:00 pm</span></li>
                        <li><span>Saturday</span><span>09:00 am &ndash; 12:00 pm</span></li>
                        <li><span>Sunday</span><span class="closed">Closed</span></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5>Find Us</h5>
                    <div class="ft-v2-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3744.281986280687!2d85.85522337523442!3d20.205599981245665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDEyJzIwLjIiTiA4NcKwNTEnMjguMSJF!5e0!3m2!1sen!2sin!4v1775279175873!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ft-v2-bottom">
        <div class="container">
            <p>&copy; {{ date('Y') }} <a href="#">Babita Construction</a>. All Rights Reserved.</p>
            <nav>
                <a href="{{ route('about.view') }}">About</a>
                <a href="{{ route('contact.view') }}">Contact</a>
                <a href="{{ route('data.deletion.request.view') }}">Privacy</a>
            </nav>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
        class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


<script src="{{ url('lib/wow/wow.min.js') }}"></script>
<script src="{{ url('lib/easing/easing.min.js') }}"></script>
<script src="{{ url('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ url('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ url('lib/counterup/counterup.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ url('js/main.js') }}"></script>
</body>

</html>
