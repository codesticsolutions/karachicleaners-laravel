@extends('layouts.app')

@section('title', 'Services')

@section('meta_description', 'KarachiCleaners offers trusted home, office and deep cleaning services in Karachi. Book professional cleaners today.')

@section('content')
    <!--Page Header Start-->

    <!--Page Header End-->

    <!--Services Two Start -->
    <section class="services-two services-page" style="margin-top: 185px;">
        <div class="services-two__shape-bg-1"
            style="background-image: url(assets/images/shapes/services-two-shape-bg-1.png);"></div>
        <div class="services-two__shape-bg-2"
            style="background-image: url(assets/images/shapes/services-two-shape-bg-2.png);"></div>
        <div class="services-two__shape-bg-3"
            style="background-image: url(assets/images/shapes/services-two-shape-bg-3.png);"></div>
        <div class="services-two__shape-1 float-bob-x">
            <img src="assets/images/shapes/services-two-shape-1.png" alt="">
        </div>
        <div class="services-two__shape-2 float-bob-y">
            <img src="assets/images/shapes/services-two-shape-2.png" alt="">
        </div>
        <div class="services-two__shape-3"></div>
        <div class="services-two__shape-4"></div>
        <div class="services-two__shape-5"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-box">
                        <div class="section-title__tagline-shape"></div>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <span class="section-title__tagline">Services</span>
                </div>
                <h2 class="section-title__title title-animation">
                    House Cleaning Services in Karachi <span>Home, Deep & Commercial Experts</span>
                </h2>
            </div>
            <div class="services-two__inner">
                <ul class="services-two__services-list list-unstyled">

                    @foreach($services as $slug => $service)

                        <li class="hover-item">
                            <div class="services-two__icon-and-title-box">
                                <div class="services-two__icon">
                                    <span class="{{ $service['icon'] }}"></span>
                                </div>

                                <div class="services-two__title-box">
                                    <div class="services-two__count"></div>
                                    <h3 class="services-two__title">
                                        <a href="{{ url('/services/' . $slug) }}">
                                            {{ $service['title'] }}
                                        </a>
                                    </h3>
                                </div>
                            </div>

                            <div class="services-two__text-and-btn-box">
                                <p class="services-two__text">
                                    {{ $service['description'] }}
                                </p>

                                <div class="services-two__btn-box">
                                    <a href="{{ url('/services/' . $slug) }}">
                                        View Details
                                        <span class="icon-diagonal-arrow"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="hover-item__box">
                                <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}"
                                    class="hover-item__box-img">
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    <!--Services Two End -->

    <!-- Sliding Text Three Start -->
    <section class="sliding-text-three">
        <div class="sliding-text-three__wrap">
            <ul class="sliding-text-three__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Deep Cleaning" class="sliding-text-three__title">Deep Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Carpet Cleaning" class="sliding-text-three__title">Carpet Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Sofa Cleaning" class="sliding-text-three__title">Sofa Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Curtain Cleaning" class="sliding-text-three__title">Curtain Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Upholstery Cleaning" class="sliding-text-three__title">Upholstery Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Window Cleaning" class="sliding-text-three__title">Window Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Tile Cleaning" class="sliding-text-three__title">Tile Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Grout Cleaning" class="sliding-text-three__title">Grout Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Steam Cleaning" class="sliding-text-three__title">Steam Cleaning <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Floor Polishing" class="sliding-text-three__title">Floor Polishing <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Stain Removal" class="sliding-text-three__title">Stain Removal <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Odor Removal" class="sliding-text-three__title">Odor Removal <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Disinfecting" class="sliding-text-three__title">Disinfecting <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Pressure Washing" class="sliding-text-three__title">Pressure Washing <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Organizing" class="sliding-text-three__title">Organizing <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Sanitizing" class="sliding-text-three__title">Sanitizing <span
                            class="icon-star-2"></span></h2>
                </li>
                <li>
                    <h2 data-hover="Mopping" class="sliding-text-three__title">Mopping <span class="icon-star-2"></span>
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Dusting" class="sliding-text-three__title">Dusting <span class="icon-star-2"></span>
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Vacuuming" class="sliding-text-three__title">Vacuuming <span class="icon-star-2"></span>
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Polishing" class="sliding-text-three__title">Polishing <span class="icon-star-2"></span>
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Three End -->

@endsection