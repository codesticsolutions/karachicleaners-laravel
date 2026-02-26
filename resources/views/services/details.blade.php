@extends('layouts.app')

@section('title', $service['title'])
@section('meta_description', $service['meta_description'])
@section('meta_keywords', $service['keywords'])

@section('content')
    <!-- Service details Start -->
    <section class="services-details" style="margin-top: 100px; margin-bottom: 100px;">
        <div class="container">
            <div class="row">

                <!-- LEFT SIDE: Service description -->
                <div class="col-xl-8 col-lg-7">
                    <div class="services-details__left">
                        <h3 class="services-details__title-1">
                            Professional {{ $service['name'] }} in Karachi
                        </h3>

                        <p class="services-details__text-1">
                            {{ $service['description'] ?? 'We provide high‑quality ' . strtolower($service['name']) . ' across DHA, Clifton, Gulshan‑e‑Iqbal, North Nazimabad, PECHS, Bahria Town, Malir and Korangi. Our expert team uses advanced equipment and eco‑friendly cleaning products to ensure 100% customer satisfaction.' }}
                        </p>

                        <h3 class="services-details__title-2">Service Core Features</h3>
                        <p class="services-details__text-2">
                            Our {{ strtolower($service['name']) }} include thorough dusting, vacuuming, sanitizing,
                            mopping, and deep disinfection to ensure a hygienic environment for your home or office.
                        </p>

                        <div class="services-details__points-box">
                            <ul class="services-details__points list-unstyled">
                                <li>
                                    <div class="icon"><span class="icon-star-1"></span></div>
                                    <p>Dusting and vacuuming</p>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-star-1"></span></div>
                                    <p>Mopping and sweeping floors</p>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-star-1"></span></div>
                                    <p>Sanitizing kitchens and bathrooms</p>
                                </li>
                            </ul>
                            <ul class="services-details__points list-unstyled">
                                <li>
                                    <div class="icon"><span class="icon-star-1"></span></div>
                                    <p>Organizing living spaces</p>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-star-1"></span></div>
                                    <p>Window cleaning</p>
                                </li>
                                <li>
                                    <div class="icon"><span class="icon-star-1"></span></div>
                                    <p>Deep disinfection</p>
                                </li>
                            </ul>
                        </div>

                        <h3 class="services-details__title-4">Why Choose Karachi Cleaners?</h3>
                        <p class="services-details__text-4">
                            As the most trusted cleaning company in Karachi, we offer professional home cleaning services,
                            expert sofa cleaning, carpet cleaning, deep cleaning, office cleaning, and commercial cleaning
                            across all major areas including DHA, Clifton, Gulshan-e-Iqbal, Bahria Town, PECHS, North
                            Nazimabad, Malir, and Korangi. Our experienced team uses eco-friendly products and advanced
                            equipment to deliver affordable, reliable, and high-quality cleaning solutions. Whether you need
                            house deep cleaning, upholstery cleaning, curtain washing, or car interior cleaning, we ensure
                            100% customer satisfaction with flexible scheduling and competitive prices. Choose us for the
                            best cleaning services near you in Karachi — spotless results guaranteed.
                        </p>
                    </div>
                </div>

                <!-- RIGHT SIDE: Sidebar -->
                <div class="col-xl-4 col-lg-5">
                    <div class="services-details__right">

                        <!-- More Services list -->
                        <div class="services-details__service-list-box">
                            <h3 class="services-details__service-list-title">More Services</h3>
                            <ul class="services-details__service-list list-unstyled">
                                @foreach($allServices as $otherSlug => $otherService)
                                    <li class="{{ $otherSlug === $slug ? 'active' : '' }}">
                                        <a href="{{ route('service.details', $otherSlug) }}">
                                            <span class="icon-diagonal-arrow"></span>
                                            {{ $otherService['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Service image -->
                        <div class="services-details__img-box" style="display: flex; justify-content: flex-start;">
                            <div class="services-details__img">
                                <img src="{{ asset($service['image']) }}" alt="{{ $service['name'] }}"
                                    style="width: 350px; max-width: 550px; height: 280px;">
                            </div>
                        </div>

                        <br><br>

                        <!-- Contact box (same as before, but you can replace phone/email from brand info) -->
                        <div class="project-details__get-touch"
                            style="position: relative; padding: 25px 25px; border-radius: 18px; background: #0064AB; box-shadow: 0 10px 35px rgba(0,0,0,0.08); text-align: center; overflow: hidden;">
                            <h3 class="project-details__get-touch-title"
                                style="font-size: 22px; font-weight: 600; color: #ffffff; margin: 0 0 12px 0; line-height: 1.4;">
                                Feel free to reach out to us anytime.
                            </h3>
                            <div class="project-details__get-touch-btn-box" style="margin: 0 0 12px 0;">
                                <a href="{{ url('/contact') }}" class="thm-btn"
                                    style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 22px; border-radius: 30px; font-size: 14px; font-weight: 500; text-decoration: none;">
                                    Contact Us <span><i class="icon-diagonal-arrow"></i></span>
                                </a>
                            </div>
                            <div class="project-details__call-box"
                                style="display: flex; align-items: center; justify-content: center; gap: 10px; padding: 12px; border-radius: 12px; background: #f9f9f9; margin: 0;">
                                <div class="project-details__call-icon" style="font-size: 20px; color: #000;">
                                    <span class="icon-support" style="color: #000;"></span>
                                </div>
                                <div class="project-details__call-content">
                                    <p style="font-size: 13px; margin: 0; color: #000;">
                                        Call Us To Take this service
                                    </p>
                                    <a href="https://wa.me/923001234567"
                                        style="font-size: 15px; font-weight: 600; color: #222; text-decoration: none;">
                                        0321 5955791
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services Details End -->
@endsection