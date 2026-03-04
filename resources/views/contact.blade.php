@extends('layouts.app')

@section('title', 'Contact')
@section('meta_description', 'Learn more about Karachi Cleaners and our professional cleaning services in Karachi.')

@section('content')
    <!--Contact Four Start-->
    <section class="contact-four" style="margin-top: 100px;">
        <div class="contact-four__shape-1 img-bounce">
            <img src="assets/images/shapes/contact-four-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-four__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <span class="section-title__tagline">Get In touch</span>
                            </div>
                            <h2 class="section-title__title title-animation">Reach Out to <span>Us for </span> <br>
                                <span>Assistance or Inquiries</span>
                            </h2>
                        </div>
                        <p class="contact-four__left-text">We're Here to Help—Contact Us Today!</p>
                        <ul class="contact-four__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-map-marker-alt"></span>
                                </div>
                                <div class="content">
                                    <h5>Our Address</h5>
                                    <p>
                                        Moulvi Tamizuddin Khan Rd,<br>
                                        Civil Area, Karachi
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-four__contact-list-shape-1">
                                    <img src="assets/images/shapes/contact-four-contact-list-shape-1.png" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="far fa-clock"></span>
                                </div>
                                <div class="content">
                                    <h5>Contact Info</h5>
                                    <p><span>Phone:</span> <a href="tel:923215955791">0321 5955791</a></p>
                                    <p><span>Email:</span>
                                        <a href="mailto:karachicleaners@gmail.com">karachicleaners@gmail.com</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="contact-four__contact-list-shape-1">
                                    <img src="assets/images/shapes/contact-four-contact-list-shape-1.png" alt="">
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-map-marker-alt"></span>
                                </div>
                                <div class="content">
                                    <h5>Working Time</h5>
                                    <p><span>Time:</span> 09:00 AM - 5:00 PM</p>
                                    <p><span>Days:</span> Monday - Sunday</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-four__right">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <span class="section-title__tagline">Contact US</span>
                            </div>
                            <h2 class="section-title__title title-animation">Send Message</h2>
                        </div>
                        <form class="contact-form-validated contact-four__form"
                            action="https://codearchives.mnsithub.com/html/freshflow/main-html/assets/inc/sendemail.php"
                            method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-four__input-title">Full Name *</h4>
                                    <div class="contact-four__input-box">
                                        <input type="text" name="name" placeholder="Jordan Walk" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-four__input-title">Your Email *</h4>
                                    <div class="contact-four__input-box">
                                        <input type="email" name="email" placeholder="jordan@domain.com" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-four__input-title">Phone *</h4>
                                    <div class="contact-four__input-box">
                                        <input type="text" name="Phone" placeholder="write your Phone" required="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <h4 class="contact-four__input-title">Subjects *</h4>
                                    <div class="contact-four__input-box">
                                        <input type="text" name="Phone" placeholder="write your subject" required="">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <h4 class="contact-four__input-title">Write message *</h4>
                                    <div class="contact-four__input-box text-message-box">
                                        <textarea name="message" placeholder="Write a Message to Inquire"></textarea>
                                    </div>
                                    <div class="contact-four__btn-box">
                                        <button type="submit" class="thm-btn">Send
                                            Message<span><i class="icon-diagonal-arrow"></i></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Four End-->

    <!--Office Location Two Start-->
    <!-- <section class="office-location-two">
                    <div class="office-location-two__shape-1">
                        <img src="assets/images/shapes/office-location-two-shape-1.png" alt="">
                    </div>
                    <div class="office-location-two__shape-2 float-bob-x">
                        <img src="assets/images/shapes/office-location-two-shape-2.png" alt="">
                    </div>
                    <div class="office-location-two__shape-3 float-bob-x">
                        <img src="assets/images/shapes/office-location-two-shape-3.png" alt="">
                    </div>
                    <div class="office-location-two__shape-4"></div>
                    <div class="office-location-two__shape-5"></div>
                    <div class="container">
                        <div class="section-title text-center sec-title-animation animation-style1">
                            <div class="section-title__tagline-box">
                                <div class="section-title__tagline-shape-box">
                                    <div class="section-title__tagline-shape"></div>
                                    <div class="section-title__tagline-shape-2"></div>
                                </div>
                                <span class="section-title__tagline">Office Location</span>
                            </div>
                            <h2 class="section-title__title title-animation">Find Your Suitable Area <span>to Connect </span>
                                <br>
                                <span>With Us Easily</span>
                            </h2>
                        </div>
                        <div class="office-location-two__inner">
                            <ul class="office-location-two__list list-unstyled">
                                <li>
                                    <div class="office-location-two__location-box">
                                        <div class="office-location-two__location-icon">
                                            <span class="icon-placeholder"></span>
                                        </div>
                                        <div class="office-location-two__location-content">
                                            <h5>New York, NY</h5>
                                            <p>1254 Maple Avenue, Suite 201 New York, NY 10001</p>
                                        </div>
                                    </div>
                                    <div class="office-location-two__contact-box">
                                        <div class="office-location-two__contact">
                                            <div class="office-location-two__contact-icon">
                                                <span class="icon-customer-support"></span>
                                            </div>
                                            <div class="office-location-two__contact-content">
                                                <h3>Contact Info</h3>
                                                <a href="tel:120034558900">0321 5955791 </a>
                                                <a href="#"><span class="icon-arrow-right"></span></a>
                                                <a href="mailto:karachicleaners@gmail.com">karachicleaners@gmail.com</a>
                                            </div>
                                        </div>
                                        <div class="office-location-two__view">
                                            <a href="#">View Map<span class="icon-arrow-right"></span></a>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </section> -->
    <!--Office Location Two End-->

    <!--Google Map One Start-->
    <section class="google-map-one">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>
        </div>
    </section>
    <!--Google Map One End-->
@endsection