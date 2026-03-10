@extends('layouts.app')

@section('title', 'Home')

@section('meta_description', 'KarachiCleaners offers trusted home, office and deep cleaning services in Karachi. Book professional cleaners today.')

@section('content')

    <!-- Banner One Start -->
    <section class="banner-one">
        <div class="banner-one__shape-bg-1" style="background-image: url(assets/images/shapes/banner-one-shape-bg-1.png);">
        </div>

        <div class="banner-one__shape-1"></div>
        <div class="banner-one__shape-2"></div>
        <div class="banner-one__shape-3"></div>
        <div class="banner-one__shape-4 float-bob-x">
            <img src="assets/images/shapes/banner-one-shape-4.png" alt="">
        </div>
        <div class="banner-one__shape-5 float-bob-y">
            <img src="assets/images/shapes/banner-one-shape-5.png" alt="">
        </div>

        <div class="container">
            <div class="row" style="align-items: center;">

                <!-- LEFT SIDE -->
                <div class="col-xl-6">
                    <div class="banner-one__left" style="padding-top: 0; margin-top: -25px;">

                        <div class="banner-one__title-box">
                            <h2 class="banner-one__title" style="margin-top: 0; line-height: 1.3;">
                                Professional Cleaning Services in Karachi <br>

                                <span class="typed-effect banner-one__title-color" id="type-1"
                                    data-strings="Residential Cleaning Solutions, Commercial Office Cleaning, Deep Cleaning Experts">
                                </span>
                            </h2>
                        </div>

                        <p class="banner-one__text" style="margin-top: 15px;">
                            Get spotless, hygienic spaces with Karachi Cleaner's expert cleaning services. <br>
                            Reliable, eco-friendly solutions for homes, offices & commercial spaces.
                        </p>

                        <div class="banner-one__btn-box" style="margin-top: 25px;">
                            <a href="/contact" class="thm-btn">
                                Book Cleaning Service
                                <span><i class="icon-diagonal-arrow"></i></span>
                            </a>
                        </div>

                        <div class="banner-one__satisfied-partner" style="margin-top: 30px;">
                            <ul class="list-unstyled banner-one__satisfied-partner-list" style="display: flex;">

                                <li>
                                    <div class="banner-one__satisfied-partner-img">
                                        <img src="assets/images/resources/banner-one-satisfied-partner-1-1.jpg"
                                            alt="Happy cleaning service customer in Karachi"
                                            style="width: 45px; height: 45px; border-radius: 50%;">
                                    </div>
                                </li>

                                <li style="margin-left: -10px;">
                                    <div class="banner-one__satisfied-partner-img">
                                        <img src="assets/images/resources/banner-one-satisfied-partner-1-2.jpg"
                                            alt="Professional cleaner in Karachi"
                                            style="width: 45px; height: 45px; border-radius: 50%;">
                                    </div>
                                </li>

                                <li style="margin-left: -10px;">
                                    <div class="banner-one__satisfied-partner-img">
                                        <img src="assets/images/resources/banner-one-satisfied-partner-1-3.jpg"
                                            alt="Spotless home cleaning service"
                                            style="width: 45px; height: 45px; border-radius: 50%;">
                                    </div>
                                </li>

                            </ul>

                            <div class="banner-one__satisfied-partner-content" style="margin-left: 15px;">
                                <div class="banner-one__satisfied-partner-count-box">
                                    <p class="odometer" data-count="500">00</p>
                                    <span>+</span>
                                </div>

                                <p class="banner-one__satisfied-partner-text" style="margin: 0;">
                                    Happy Clients in Karachi
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-xl-6">
                    <div class="banner-one__right">

                        <div class="banner-one__img-box" style="margin-top: -40px; text-align: center;">

                            <div class="banner-one__img wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">

                                <img src="assets/images/resources/banner-one-img-1.png"
                                    alt="Professional cleaning team providing best cleaning services in Karachi"
                                    style="max-width: 80%; height: auto;">
                            </div>

                            <div class="banner-one__google-rating" style="margin-top: 20px;">
                                <div class="banner-one__google-rating-img">
                                    <img src="assets/images/resources/banner-one-google-rating-img.png"
                                        alt="Google 5-star rating for Karachi Cleaner" style="width: 120px;">
                                </div>

                                <div class="banner-one__google-rating-box" style="margin-top: 10px;">
                                    <div class="banner-one__google-rating-star">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div>

                                    <div class="banner-one__google-rating-count count-box">
                                        <p class="count-text" data-stop="4.8">00</p>
                                        <span>Star Rating</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>


    </section>
    <!--Banner One End -->

    <!-- Sliding Text One Start -->
    <section class="sliding-text-one">
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Organizing" class="sliding-text__title">Organizing
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Sanitizing" class="sliding-text__title">Sanitizing
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Mopping" class="sliding-text__title">Mopping
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Dusting" class="sliding-text__title">Dusting
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Vacuuming" class="sliding-text__title">Vacuuming
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Polishing" class="sliding-text__title">Polishing
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->

    <!-- About One Start -->
    <section class="about-one">
        <div class="about-one__bg-color"></div>
        <div class="about-one__shape-1"></div>
        <div class="about-one__shape-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="about-one__left-img-box">
                                    <div class="about-one__left-img-1">
                                        <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                    </div>
                                    <div class="about-one__left-img-2">
                                        <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="about-one__left-img-box-2">
                                    <div class="about-one__left-img-3">
                                        <img src="assets/images/resources/about-one-img-3.jpg" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="about-one__left-big-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"
                        style="
            white-space: nowrap;      /* ✅ Ek hi line */
            padding: 0 160px;          /* ✅ Left Right space */
        ">
                        Karachi Cleaner
                    </h2>

                </div>
                <div class="col-xl-6">
                    <div class="about-one__right wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <span class="section-title__tagline">About Us</span>
                            </div>
                            <h2 class="section-title__title title-animation">Professional Cleaning Excellence,
                                Trusted by Karachi, <span>Committed to Your Spotless Spaces</span></h2>
                        </div>
                        <p class="about-one__text">At Karachi Cleaner, we are dedicated to providing exceptional cleaning
                            services that transform homes and offices into spotless, healthy environments. Our commitment to
                            quality and customer satisfaction drives every decision we make.</p>

                        <div class="about-one__points-box" style="padding-top: 10px;">
                            <ul class="about-one__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-star-1"></span>
                                    </div>
                                    <p>Reliable & Professional Service</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-star-1"></span>
                                    </div>
                                    <p>Eco-Friendly Cleaning Solutions</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-star-1"></span>
                                    </div>
                                    <p>100% Customer Satisfaction</p>
                                </li>
                            </ul>
                            <ul class="about-one__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-star-1"></span>
                                    </div>
                                    <p>Certified & Trained Team</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-star-1"></span>
                                    </div>
                                    <p>Affordable Pricing for All</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-star-1"></span>
                                    </div>
                                    <p>Available 24/7 in Karachi</p>
                                </li>
                            </ul>
                        </div>
                        <div class="about-one__mission-box">
                            <div class="icon">
                                <span class="icon-target"></span>
                            </div>
                            <div class="content">
                                <h3>Our Mission & Vision</h3>
                                <p>Providing professional cleaning services to every home and business in Karachi with
                                    excellence and integrity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About One End -->

    <!-- Services One Start -->
<section class="services-one">
    <div class="services-one__shape-bg" style="background-image: url(assets/images/shapes/services-one-shape-bg.png);">
    </div>
    <div class="services-one__shape-1"></div>
    <div class="services-one__shape-2"></div>
    <div class="services-one__shape-3 float-bob-x">
        <img src="assets/images/shapes/services-one-shape-3.png" alt="">
    </div>
    <div class="services-one__shape-4 float-bob-y">
        <img src="assets/images/shapes/services-one-shape-4.png" alt="">
    </div>
    <div class="container">
        <div class="services-one__top">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="services-one__top-left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <span class="section-title__tagline">Professional Cleaning Services Karachi</span>
                            </div>
                            <h2 class="section-title__title title-animation">
                                Expert Sofa, Carpet & Home Cleaning 
                                <span>in Karachi – Spotless Results!</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="services-one__top-right">
                        <p class="services-one__top-text">
                            Karachi Cleaners offers premium home cleaning services including<br>
                            sofa shampooing, carpet deep cleaning, curtain washing, floor polishing,<br>
                            and full house deep cleaning across all major areas of Karachi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-one__bottom">
            <div class="row">
                <div class="col-xl-5">
                    <div class="services-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="services-one__img-box">
                            <div class="services-one__img-shape-1"></div>
                            <div class="services-one__img">
                                <img src="assets/images/services/services-one-img-1.jpg" alt="Professional cleaning team in Karachi">
                            </div>
                            <div class="services-one__img-2">
                                <img src="assets/images/services/services-one-img-2.jpg" alt="Eco-friendly cleaning products">
                            </div>
                            <div class="services-one__experience-box">
                                <div class="services-one__experience-icon">
                                    <span class="icon-trophy"></span>
                                </div>
                                <div class="services-one__experience-content">
                                    <p><span class="odometer" data-count="15">00</span> <span>+ Years</span>
                                        <br> of Professional Cleaning Excellence in Karachi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="services-one__right">
                        <ul class="services-one__services-list list-unstyled">
                            @php
                                // Show first 5 services (you can change the number or order)
                                $displayServices = array_slice($services, 0, 5);
                            @endphp

                            @foreach($displayServices as $slug => $service)
                            <li>
                                <div class="services-one__services-single">
                                    <div class="services-one__count-and-content">
                                        <div class="services-one__count"></div>
                                        <div class="services-one__content">
                                            <h3 class="services-one__title">
                                                <a href="{{ route('service.details', $slug) }}">
                                                    {{ $service['name'] }}
                                                </a>
                                            </h3>
                                            <p class="services-one__text">
                                                {{ Str::limit($service['description'], 80) }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="services-one__arrow">
                                        <a href="{{ route('service.details', $slug) }}">
                                            <span class="icon-diagonal-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="services-one__hover-img">
                                    <img src="{{ asset($service['image']) }}" alt="{{ $service['name'] }} Karachi">
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services One End -->

    <!-- Sliding Text Two Start -->
    <section class="sliding-text-two">
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text-two__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Professional Cleaning" class="sliding-text-two__title">Professional Cleaning
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Deep Sanitizing" class="sliding-text-two__title">Deep Sanitizing
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Floor Mopping" class="sliding-text-two__title">Floor Mopping
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Thorough Dusting" class="sliding-text-two__title">Thorough Dusting
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Carpet Vacuuming" class="sliding-text-two__title">Carpet Vacuuming
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
                <li>
                    <h2 data-hover="Surface Polishing" class="sliding-text-two__title">Surface Polishing
                        <img src="assets/images/shapes/sliding-text-shape-1.png" alt="">
                    </h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text Two End -->

    <!-- Counter One Start -->
    <section class="counter-one">
        <div class="counter-one__bg-shape" style="background-image: url(assets/images/shapes/counter-one-bg-shape.png);">
        </div>
        <div class="counter-one__shape-1 float-bob-y">
            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
        </div>
        <div class="counter-one__shape-2 float-bob-x">
            <img src="assets/images/shapes/counter-one-shape-2.png" alt="">
        </div>
        <div class="container">
            <ul class="row list-unstyled">
                <li class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-completed-task"></span>
                        </div>
                        <div class="counter-one__content">
                            <div class="counter-one__count-box">
                                <p class="odometer" data-count="500">00</p>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Homes & Offices Cleaned</p>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-review"></span>
                        </div>
                        <div class="counter-one__content">
                            <div class="counter-one__count-box">
                                <p class="odometer" data-count="99">00</p>
                                <span>%</span>
                            </div>
                            <p class="counter-one__count-text">Customer Satisfaction Rate</p>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-experience"></span>
                        </div>
                        <div class="counter-one__content">
                            <div class="counter-one__count-box">
                                <p class="odometer" data-count="15">00</p>
                                <span>+</span>
                            </div>
                            <p class="counter-one__count-text">Years of Excellence</p>
                        </div>
                    </div>
                </li>
                <li class="col-xl-3 col-lg-6 col-md-6">
                    <div class="counter-one__single">
                        <div class="counter-one__icon">
                            <span class="icon-costumer"></span>
                        </div>
                        <div class="counter-one__content">
                            <div class="counter-one__count-box">
                                <p class="odometer" data-count="4">00</p>
                                <span>.</span>
                                <p class="odometer" data-count="8">0</p>
                            </div>
                            <p class="counter-one__count-text">Google Rating in Karachi</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Counter One End -->

    <!--Before And After Start-->
    <section class="before-and-after">
        <div class="before-and-after__bg-shape"
            style="background-image: url(assets/images/shapes/before-and-after-bg-shape.png);"></div>
        <div class="before-and-after__shape-1 float-bob-y">
            <img src="assets/images/shapes/before-and-after-shape-1.png" alt="">
        </div>
        <div class="before-and-after__shape-2 float-bob-x">
            <img src="assets/images/shapes/before-and-after-shape-2.png" alt="">
        </div>
        <div class="before-and-after__shape-3 float-bob-y">
            <img src="assets/images/shapes/before-and-after-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="before-and-after__left">
                        <div class="before-and-after__img-box">
                            <div class="before-after">
                                <div class="before-after-twentytwenty" id="wrinkle-before-after">
                                    <img src="assets/images/resources/before-and-after-img.jpg" alt="">
                                    <img src="assets/images/resources/before-and-after-img-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="before-and-after__tag"><span>Before</span></div>
                            <div class="before-and-after__tag before-and-after__tag-2">
                                <span>AFTER</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="before-and-after__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <span class="section-title__tagline">Before After</span>
                            </div>
                            <h2 class="section-title__title title-animation">Transform Your Space<span> with Karachi
                                    Cleaner</span>
                            </h2>
                        </div>
                        <p class="before-and-after__text">See the remarkable difference our professional cleaning services
                            make. From dirty to spotless, witness how Karachi Cleaner transforms your homes and offices into
                            pristine spaces.</p>
                        <ul class="before-and-after__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-star-1"></span>
                                </div>
                                <p>Complete Home & Office Transformation</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-star-1"></span>
                                </div>
                                <p>Professional Cleaning Excellence Guaranteed</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-star-1"></span>
                                </div>
                                <p>Eco-Friendly & Reliable Service in Karachi</p>
                            </li>
                        </ul>
                        <ul class="before-and-after__img-list list-unstyled">
                            <li>
                                <div class="before-and-after__img-list-img">
                                    <img src="assets/images/resources/before-and-after-img-list-img-1.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="before-and-after__img-list-img">
                                    <img src="assets/images/resources/before-and-after-img-list-img-2.jpg" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="before-and-after__img-list-img">
                                    <img src="assets/images/resources/before-and-after-img-list-img-3.jpg" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Before And After End-->

    <!--Why Choose One Start-->
    <section class="why-choose-one">
        <div class="why-choose-one__bg-shape"
            style="background-image: url(assets/images/shapes/why-choose-one-shape-bg-shape.png);"></div>
        <div class="why-choose-one__shape-2 float-bob-x">
            <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
        </div>
        <div class="why-choose-one__big-title">
            <h3>100% SATISFACTION </h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-one__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <span class="section-title__tagline">Why Choose Us</span>
                            </div>
                            <h2 class="section-title__title title-animation">Why Karachi Cleaner is Your Best Choice?
                                <span>Spotless Spaces,</span><br><span> Trusted Service!</span>
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="why-choose-one__img-box-1">
                                    <div class="why-choose-one__img-1">
                                        <img src="assets/images/resources/why-choose-one-img-1.jpg" alt="">
                                    </div>
                                    <div class="why-choose-one__shape-1 rotate-me">
                                        <img src="assets/images/shapes/why-choose-one-shape-1.png" alt="">
                                    </div>
                                    <div class="why-choose-one__round-text-box">
                                        <div class="why-choose-one__round-text-box-inner">
                                            <div class="why-choose-one__curved-circle">
                                                Sanitizing * Mopping * Dusting *
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="why-choose-one__img-box-2">
                                    <div class="why-choose-one__curved-circle-2">
                                        Sanitizing * Mopping * Dusting *
                                    </div>
                                    <div class="why-choose-one__img-2">
                                        <img src="assets/images/resources/why-choose-one-img-2.jpg" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-one__right">
                        <div class="why-choose-one__client-box">
                            <div class="why-choose-one__client-content">
                                <div class="why-choose-one__client-inner">
                                    <h3 class="why-choose-one__client-title">Kara<span>c</span>hi</h3>
                                    <ul class="why-choose-one__client-img-list list-unstyled">
                                        <li>
                                            <div class="why-choose-one__client-img">
                                                <img src="assets/images/resources/why-choose-one-client-img-1.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="why-choose-one__client-img">
                                                <img src="assets/images/resources/why-choose-one-client-img-2.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="why-choose-one__client-img">
                                                <img src="assets/images/resources/why-choose-one-client-img-3.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="why-choose-one__client-img">
                                                <img src="assets/images/resources/why-choose-one-client-img-4.jpg" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="why-choose-one__ratting-and-text">
                                    <div class="why-choose-one__ratting-box">
                                        <div class="why-choose-one__ratting">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                        <p class="why-choose-one__ratting-text">4.8 Rating</p>
                                    </div>
                                    <div class="why-choose-one__count-box-inner">
                                        <div class="why-choose-one__count-box">
                                            <p class="odometer" data-count="500">00</p>
                                            <span>+</span>
                                        </div>
                                        <p class="why-choose-one__count-text">Happy Karachi Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="why-choose-one__client-arrow">
                                <a href="#"><span class="icon-diagonal-arrow"></span></a>
                            </div>
                        </div>
                        <div class="why-choose-one__right-bottom">
                            <ul class="row list-unstyled">
                                <!--Why Choose One Single Start-->
                                <li class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                    <div class="why-choose-one__single">
                                        <div class="why-choose-one__icon">
                                            <span class="icon-employee"></span>
                                            <div class="why-choose-one__count"></div>
                                        </div>
                                        <h3 class="why-choose-one__title"><a href="">Certified Team</a>
                                        </h3>
                                        <p class="why-choose-one__text">Our trained and certified cleaning professionals
                                            deliver consistent, high-quality results in every home and office.</p>
                                    </div>
                                </li>
                                <!--Why Choose One Single End-->
                                <!--Why Choose One Single Start-->
                                <li class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="why-choose-one__single">
                                        <div class="why-choose-one__icon">
                                            <span class="icon-cleaning-2"></span>
                                            <div class="why-choose-one__count"></div>
                                        </div>
                                        <h3 class="why-choose-one__title"><a href="/about">Premium Quality</a>
                                        </h3>
                                        <p class="why-choose-one__text">We use advanced cleaning techniques and premium
                                            products to ensure spotless, hygienic spaces every time.</p>
                                    </div>
                                </li>
                                <!--Why Choose One Single End-->
                                <!--Why Choose One Single Start-->
                                <li class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="why-choose-one__single">
                                        <div class="why-choose-one__icon">
                                            <span class="icon-window-cleaning"></span>
                                            <div class="why-choose-one__count"></div>
                                        </div>
                                        <h3 class="why-choose-one__title"><a href="/about">Eco-Friendly Solutions</a>
                                        </h3>
                                        <p class="why-choose-one__text">We use environmentally safe cleaning products that
                                            are effective and safe for families and businesses.</p>
                                    </div>
                                </li>
                                <!--Why Choose One Single End-->
                                <!--Why Choose One Single Start-->
                                <li class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="why-choose-one__single">
                                        <div class="why-choose-one__icon">
                                            <span class="icon-time"></span>
                                            <div class="why-choose-one__count"></div>
                                        </div>
                                        <h3 class="why-choose-one__title"><a href="/about">24/7 Available</a>
                                        </h3>
                                        <p class="why-choose-one__text">Available round the clock in Karachi with flexible
                                            scheduling to match your lifestyle and work commitments.</p>
                                    </div>
                                </li>
                                <!--Why Choose One Single End-->
                            </ul>
                            <div class="why-choose-one__contact-box">
                                <div class="why-choose-one__contact-icon">
                                    <span class="icon-support"></span>
                                </div>
                                <div class="why-choose-one__content">
                                    <p>Available 24/7 in Karachi</p>
                                    <h4><a href="tel:+92XXXXXXXXXX">+92 (XXX) XXX XXXX</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->

    <!--Project One Start-->
    <section class="project-one">
        <div class="project-one__bg-shape" style="background-image: url(assets/images/shapes/project-one-bg-shape.png);">
        </div>
        <div class="project-one__bg-shape-2"
            style="background-image: url(assets/images/shapes/project-one-bg-shape-2.png);"></div>
        <div class="project-one__shape-1"></div>
        <div class="project-one__shape-2"></div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-box">
                        <div class="section-title__tagline-shape"></div>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <span class="section-title__tagline">Our Projects</span>
                </div>
                <h2 class="section-title__title title-animation">A showcase of projects <span>that</span><br><span>
                        define
                        excellence</span>
                </h2>
            </div>
            <div class="project-one__inner">
                <ul class="project-one__filter style1 post-filter list-unstyled clearfix">
                    <li data-filter=".filter-item" class="active">
                        <p><span class="icon-catagory"></span>All</p>
                    </li>
                    <li data-filter=".corporate">
                        <p><span class="icon-pen-ruler"></span>Corporate Office</p>
                    </li>
                    <li data-filter=".house">
                        <p><span class="icon-computer"></span>House Cleaning</p>
                    </li>
                    <li data-filter=".cargarage">
                        <p><span class="icon-bullhorn"></span>Car Garage</p>
                    </li>
                    <li data-filter=".bakery">
                        <p><span class="icon-bullhorn"></span>Bakery & Factory</p>
                    </li>
                    <li data-filter=".sparklyclean">
                        <p><span class="icon-bullhorn"></span>Sparkly Clean</p>
                    </li>
                </ul>
                <div class="row filter-layout">
                    <!--Project One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item house sparklyclean bakery">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-1-1.jpg" alt="">
                                </div>
                                <div class="project-one__view-box">
                                    <a href="" class="project-one__view">
                                        <i class="icon-diagonal-arrow"></i>
                                        <span>View More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p class="project-one__tag">Residential<span class="icon-right-arrow"></span>November 24</p>
                                <h3 class="project-one__title"><a href="">Sparkle & Shine
                                        Services</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item corporate bakery">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-1-2.jpg" alt="">
                                </div>
                                <div class="project-one__view-box">
                                    <a href="" class="project-one__view">
                                        <i class="icon-diagonal-arrow"></i>
                                        <span>View More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p class="project-one__tag">Commercial<span class="icon-right-arrow"></span>November
                                    24</p>
                                <h3 class="project-one__title"><a href="">Pure Clean
                                        Solutions</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item cargarage house bakery">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-1-3.jpg" alt="">
                                </div>
                                <div class="project-one__view-box">
                                    <a href="" class="project-one__view">
                                        <i class="icon-diagonal-arrow"></i>
                                        <span>View More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p class="project-one__tag">Deep CLEAN<span class="icon-right-arrow"></span>November
                                    24</p>
                                <h3 class="project-one__title"><a href="">Fresh Space
                                        Experts</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item corporate cargarage sparklyclean">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-1-4.jpg" alt="">
                                </div>
                                <div class="project-one__view-box">
                                    <a href="" class="project-one__view">
                                        <i class="icon-diagonal-arrow"></i>
                                        <span>View More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p class="project-one__tag">Moveout<span class="icon-right-arrow"></span>November 24
                                </p>
                                <h3 class="project-one__title"><a href="">Eco Gleam Crew</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item corporate bakery house">
                        <div class="project-one__single">
                            <div class="project-one__img-box">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-1-5.jpg" alt="">
                                </div>
                                <div class="project-one__view-box">
                                    <a href="" class="project-one__view">
                                        <i class="icon-diagonal-arrow"></i>
                                        <span>View More</span>
                                    </a>
                                </div>
                            </div>
                            <div class="project-one__content">
                                <p class="project-one__tag">Specialized<span class="icon-right-arrow"></span>November 24</p>
                                <h3 class="project-one__title"><a href="">Neat Nest Pros</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                    <!--Project One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item sparklyclean house bakery">
                        <div class="project-one__single-2">
                            <div class="project-one__single-2-img">
                                <img src="assets/images/project/project-one-single-two-img-1.png" alt="">
                            </div>
                            <h3 class="project-one__title-2"><a href="">Do you have any project
                                    <br>ideas in mind?</a></h3>
                            <div class="project-one__view-box-2">
                                <a href="" class="project-one__view-2">
                                    <i class="icon-diagonal-arrow"></i>
                                    <span>View More<br> Project</span>
                                </a>
                            </div>
                            <ul class="project-one__sliding-text-list list-unstyled marquee_mode">
                                <li>
                                    <h2 data-hover="Get In Touch" class="project-one__sliding-text-title"> Get In
                                        Touch</h2>
                                </li>
                            </ul>
                            <div class="project-one__need-help">
                                <p>Need Support?</p>
                                <a href="tel:120045678910">12 (00) 456 78910</a>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single End-->
                </div>
            </div>
        </div>
    </section>
    <!--Project One End-->





    <!--Testimonial One Start -->
    <section class="testimonial-one">
        <div class="testimonial-one__shape-1">
            <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
        </div>
        <div class="testimonial-one__shape-2"></div>
        <div class="testimonial-one__shape-3"></div>
        <div class="testimonial-one__wrap">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <div class="section-title__tagline-shape-box">
                        <div class="section-title__tagline-shape"></div>
                        <div class="section-title__tagline-shape-2"></div>
                    </div>
                    <span class="section-title__tagline">OUR TESTIMONIAL</span>
                </div>
                <h2 class="section-title__title title-animation">Clients Have to Say <span>About
                        Their</span><br><span>Experience with Us!</span>
                </h2>
            </div>
            <ul class="list-unstyled testimonial-one__list marquee_mode-2">
                <li>
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote-icon">
                            <img src="assets/images/icon/quote-icon-1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-content">
                                <h4 class="testimonial-one__client-name"><a href="">Emily Carter</a></h4>
                                <p class="testimonial-one__client-sub-title">Business Owner</p>
                            </div>

                        </div>
                        <span class="testimonial-one__sub-title">Worth every penny!</span>
                        <p class="testimonial-one__text">"Amazing service! Sab kuch perfectly manage kiya, highly
                            recommend!"</p>
                        <div class="testimonial-one__rating-and-date">
                            <div class="testimonial-one__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="last-icon icon-star"></span>
                                <span class="last-icon icon-star"></span>
                            </div>
                            <p class="testimonial-one__date">10 Days Ago</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote-icon">
                            <img src="assets/images/icon/quote-icon-1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-content">
                                <h4 class="testimonial-one__client-name"><a href="">Michael Brown</a></h4>
                                <p class="testimonial-one__client-sub-title">Financial Analyst</p>
                            </div>

                        </div>
                        <span class="testimonial-one__sub-title">Efficient and reliable!</span>
                        <p class="testimonial-one__text">"Team bohat professional hai. Timing aur quality dono best hai!"
                        </p>
                        <div class="testimonial-one__rating-and-date">
                            <div class="testimonial-one__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="last-icon icon-star"></span>
                                <span class="last-icon icon-star"></span>
                            </div>
                            <p class="testimonial-one__date">8 Days Ago</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote-icon">
                            <img src="assets/images/icon/quote-icon-1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-content">
                                <h4 class="testimonial-one__client-name"><a href="">Sarah Thompson</a></h4>
                                <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                            </div>

                        </div>
                        <span class="testimonial-one__sub-title">Spotless results every time!</span>
                        <p class="testimonial-one__text">"Mera office kabhi itna clean nahi dekha! Team bohat polite aur
                            punctual hai."</p>
                        <div class="testimonial-one__rating-and-date">
                            <div class="testimonial-one__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="last-icon icon-star"></span>
                                <span class="last-icon icon-star"></span>
                            </div>
                            <p class="testimonial-one__date">7 Days Ago</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote-icon">
                            <img src="assets/images/icon/quote-icon-1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-content">
                                <h4 class="testimonial-one__client-name"><a href="">John Peterson</a></h4>
                                <p class="testimonial-one__client-sub-title">Software Developer</p>
                            </div>

                        </div>
                        <span class="testimonial-one__sub-title">A true lifesaver!</span>
                        <p class="testimonial-one__text">"Busy schedule mein bhi mera home spotless tha. Bohat hi helpful
                            service!"</p>
                        <div class="testimonial-one__rating-and-date">
                            <div class="testimonial-one__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="last-icon icon-star"></span>
                                <span class="last-icon icon-star"></span>
                            </div>
                            <p class="testimonial-one__date">5 Days Ago</p>
                        </div>
                    </div>
                </li>
            </ul>

            <ul class="list-unstyled testimonial-one__list testimonial-one__list--two marquee_mode-3">
                <li>
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote-icon">
                            <img src="assets/images/icon/quote-icon-1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-content">
                                <h4 class="testimonial-one__client-name"><a href="">Sarah Thompson</a></h4>
                                <p class="testimonial-one__client-sub-title">Marketing Manager</p>
                            </div>

                        </div>
                        <span class="testimonial-one__sub-title">Spotless results every time!</span>
                        <p class="testimonial-one__text">"Every time service perfect hoti hai. Highly recommend to
                            everyone!"</p>
                        <div class="testimonial-one__rating-and-date">
                            <div class="testimonial-one__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="last-icon icon-star"></span>
                                <span class="last-icon icon-star"></span>
                            </div>
                            <p class="testimonial-one__date">3 Days Ago</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote-icon">
                            <img src="assets/images/icon/quote-icon-1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-content">
                                <h4 class="testimonial-one__client-name"><a href="">Emily Carter</a></h4>
                                <p class="testimonial-one__client-sub-title">Business Owner</p>
                            </div>

                        </div>
                        <span class="testimonial-one__sub-title">Worth every penny!</span>
                        <p class="testimonial-one__text">"Attention to detail bohat acha hai. Everything done perfectly!"
                        </p>
                        <div class="testimonial-one__rating-and-date">
                            <div class="testimonial-one__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="last-icon icon-star"></span>
                                <span class="last-icon icon-star"></span>
                            </div>
                            <p class="testimonial-one__date">6 Days Ago</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote-icon">
                            <img src="assets/images/icon/quote-icon-1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-content">
                                <h4 class="testimonial-one__client-name"><a href="">Michael Brown</a></h4>
                                <p class="testimonial-one__client-sub-title">Financial Analyst</p>
                            </div>

                        </div>
                        <span class="testimonial-one__sub-title">Efficient and reliable!</span>
                        <p class="testimonial-one__text">"Service consistent hai. Team professional aur friendly hai."</p>
                        <div class="testimonial-one__rating-and-date">
                            <div class="testimonial-one__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="last-icon icon-star"></span>
                                <span class="last-icon icon-star"></span>
                            </div>
                            <p class="testimonial-one__date">4 Days Ago</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__quote-icon">
                            <img src="assets/images/icon/quote-icon-1.png" alt="">
                        </div>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-content">
                                <h4 class="testimonial-one__client-name"><a href="">John Peterson</a></h4>
                                <p class="testimonial-one__client-sub-title">Financial Analyst</p>
                            </div>

                        </div>
                        <span class="testimonial-one__sub-title">Efficient and reliable!</span>
                        <p class="testimonial-one__text">"Highly satisfied! Har cheez perfectly manage hui. Strongly
                            recommend!"</p>
                        <div class="testimonial-one__rating-and-date">
                            <div class="testimonial-one__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="last-icon icon-star"></span>
                                <span class="last-icon icon-star"></span>
                            </div>
                            <p class="testimonial-one__date">2 Days Ago</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!--Testimonial One End -->

@endsection