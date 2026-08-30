@extends('user.layouts.main')
@section('main_content')
    <!-- Page Header Start -->
    @include('user.layouts.partials.service-page-styles')

    <div class="pg-hero wow fadeIn" data-wow-delay="0.1s"
        style="background-image:url('{{ url('img/carousel-1.jpg') }}');">
        <div class="container pg-hero__inner">
            <span class="pg-hero__kicker">What We Do</span>
            <h1>Construction</h1>
            <div class="pg-hero__crumb">
                <a href="{{ route('index.view') }}">Home</a>
                <i class="fa fa-chevron-right sep"></i>
                <span class="current">Construction</span>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Construction Start -->
    <div class="cn" id="services">
        <div class="container">
            <div class="cn-head text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 620px;">
                <span class="kicker">Construction Services</span>
                <h2>See What We Have Completed Recently</h2>
            </div>

            @php
                $rows = [
                    [
                        'no' => '01',
                        'img' => 'carousel-1.jpg',
                        'title' => 'Road Construction',
                        'text' => 'IFDO Hyderabad undertakes training assignments at may locations across India. The strong team of experienced trainers who are former SSB assessors has been reaching out to large number of Sainink schools and Army units/ Regimental centres and conducting result-oriented Pre-SSB Personality Development Courses of 10 to 12 days in their respective campuses.',
                        'rev' => false,
                    ],
                    [
                        'no' => '02',
                        'img' => 'carousel-2.jpg',
                        'title' => 'Bridge Construction',
                        'text' => 'Separate decent hostel facility (IFDO-NEST) both for boys and girls is available at IFDO Hyderabad at reasonable cost for outstation candidates.',
                        'rev' => true,
                    ],
                    [
                        'no' => '03',
                        'img' => 'carousel-1.jpg',
                        'title' => 'Factory Building',
                        'text' => 'IFDO Hyderabad undertakes training assignments at may locations across India. The strong team of experienced trainers who are former SSB assessors has been reaching out to large number of Sainink schools and Army units/ Regimental centres and conducting result-oriented Pre-SSB Personality Development Courses of 10 to 12 days in their respective campuses.',
                        'rev' => false,
                    ],
                    [
                        'no' => '04',
                        'img' => 'carousel-2.jpg',
                        'title' => 'Pipe Line',
                        'text' => 'Separate decent hostel facility (IFDO-NEST) both for boys and girls is available at IFDO Hyderabad at reasonable cost for outstation candidates.',
                        'rev' => true,
                    ],
                ];
            @endphp

            @foreach ($rows as $r)
                <div class="cn-row wow fadeInUp {{ $r['rev'] ? 'is-rev' : '' }}" data-wow-delay="0.1s">
                    <div class="cn-media">
                        <div class="cn-media__glow"></div>
                        <div class="cn-media__frame">
                            <img src="img/{{ $r['img'] }}" alt="{{ $r['title'] }}">
                        </div>
                        <span class="cn-media__no">{{ $r['no'] }}</span>
                    </div>
                    <div class="cn-body">
                        <span class="kicker">Construction Service</span>
                        <h3>{{ $r['title'] }}</h3>
                        <p>{{ $r['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Construction End -->
@endsection
