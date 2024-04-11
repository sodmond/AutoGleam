@extends('layouts.app', ['activePage' => 'home', 'title' => 'Home'])

@section('content')
<!-- SLIDER AREA START (slider-4) -->
<div class="ltn__slider-area ltn__slider-4 position-relative fix">
    <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">
        
        <!-- HTML5 VIDEO -->
        <!--<video autoplay muted loop id="myVideo">
            <source src="{{ asset('frontend/media/1.mp4') }}" type="video/mp4">
        </video>-->

        <!-- YouTube VIDEO 
        <div class="ltn__youtube-video-background">
            <iframe frameborder="0" height="100%" width="100%"
              src="https://www.youtube.com/embed/sfpXASLCNwA?&loop=1&controls=0&start=142&showinfo=0&autoplay=1&mute=1" allow="autoplay" allowFullScreen>
            </iframe>
        </div>-->

        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-7 bg-image--- bg-overlay-theme-black-30" data-bs-bg="{{ asset('img/gear-box.jpg') }}" style="background-image: url({{ asset('img/gear-box.jpg') }}); background-size:cover; background-repeat:no-repeat;">
            <div class="ltn__slide-item-inner text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h1 class="slide-title text-uppercase white-color animated ">Personalized detailing <br>  with every drop reclaimed</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-80 pb-85">
    <div class="container">
        <div class="row">
            {{--<div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <ul class="ltn__parallax-effect-wrap ltn__parallax-effect-active"
                        data-friction-x="0.1"
                        data-friction-y="0.1"
                        data-scalar-x="15"
                        data-scalar-y="25">
                        <li class="layer" data-depth="0.00"></li>
                        <li class="layer" data-depth="0.10">
                            <div class="ltn__effect-img ltn__effect-img-top-left">
                                <img src="{{ asset('frontend/img/effect/1.png') }}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.30">
                            <div class="ltn__effect-img ltn__effect-img-top-right">
                                <img src="{{ asset('frontend/img/effect/2.png') }}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.50">
                            <div class="ltn__effect-img ltn__effect-img-center-left">
                                <img src="{{ asset('frontend/img/effect/3.png') }}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-center-right">
                                <img src="{{ asset('frontend/img/effect/4.png') }}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-bottom-left">
                                <img src="{{ asset('frontend/img/effect/5.png') }}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.20">
                            <div class="ltn__effect-img ltn__effect-img-bottom-right">
                                <img src="{{ asset('frontend/img/effect/6.png') }}" alt="#">
                            </div>
                        </li>
                        <li class="layer" data-depth="0.50">
                            <div class="wave ltn__animation-wave-5s ltn__effect-img-top-center ">
                                <div class="about-us-img-info">
                                    <div class="about-us-img-info-inner">
                                        <img src="{{ asset('img/logo.png') }}" alt="" style="max-width:90%;">
                                        <h1><span class="counter">100</span><span>%</span></h1>
                                        <h6><span>Reliable</span> Service</h6>
                                        <span class="dots-bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>--}}
            <div class="col-lg-12 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">Get Amazing Service From Us<span>.</span></h1>
                    </div>
                    <p>As a Black-owned enterprise, our foundation is built on trust and a reflection of our collective identities; we're deeply committed to environmental consciousness. Our mission is to deliver unparalleled expertise and time back to our clients, grounded in empathy. We recognize that your vehicle is more than a means of transport—it reflects your identity.</p>
                    <p>Our commitment is to enhance your car's aesthetic and preserve its value using the latest in eco-friendly techniques. In today's busy world, where your time is consumed by tasks like cooking, cleaning, and caring for your family, vehicle maintenance often takes a backseat. We're here to change that.</p>
                    <hr>
                    {{--<div class="about-call-us">
                        <div class="call-us-icon">
                            <img src="{{ asset('frontend/img/icons/7.png') }}" alt="Icon Image">
                        </div>
                        <div class="call-us-info">
                            <p>Call us 24/7. We can answer for <a href="#" class="ltn__secondary-color text-decoration"><strong>all your questions</strong></a>.</p>
                            <h2><a href="tel:+123456789">507-452-1254</a> <small> or </small> <a href="tel:+123456789">508-452-1253</a></h2>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- WHY CHOOSE US AREA START -->
<div class="ltn__why-choose-us-area section-bg-1 pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="why-choose-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Our Services</h6>
                        <h1 class="section-title">Services We Offer<span>.</span></h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="why-choose-us-feature-item">
                                <div class="why-choose-us-feature-icon">
                                    <i class="icon-car-parts-1"></i>
                                </div>
                                <div class="why-choose-us-feature-brief">
                                    <h3><a href="javascript:void(0)">Personalized Detailing</a></h3>
                                    <p>Making sure that your car’s interior is always clean will make the driving experience for the members of your family or your business associates more pleasant. we're passionate about cars and even more passionate about making them look their best. Using a blend of traditional techniques and innovative solutions, we offer a suite of services designed to bring out the best in your vehicle. Whether you're looking to rejuvenate your car's appearance or protect it for the long haul, we've got you covered</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="why-choose-us-feature-item">
                                <div class="why-choose-us-feature-icon">
                                    <i class="icon-automobile"></i>
                                </div>
                                <div class="why-choose-us-feature-brief">
                                    <h3><a href="service-details.html">Hand Wash & Blow Dry</a></h3>
                                    <p>Every service begins with our meticulous hand wash and blow dry process, ensuring every inch of your vehicle is spotless and ready for detailed attention.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapper mb-4">
                        <a href="{{ route('services') }}" class="btn theme-btn-1 btn-effect-1 text-uppercase">View All</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-choose-us-img-wrap">
                    <div class="why-choose-us-img-1 text-start">
                        <img src="{{ asset('img/car-steering.jpeg') }}" alt="Image">
                    </div>
                    <div class="why-choose-us-img-2 text-end">
                        <img src="{{ asset('img/car-wash.jpeg') }}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WHY CHOOSE US AREA END -->

<!-- COUNTER STARTS HERE -->
<div class="ltn__why-choose-us-area bg-dark pt-40 pb-40">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-auto text-end">
                        <span class="fs-3" style="color:#1081C7;"><i class="fa fa-users"></i></span>
                    </div>
                    <div class="col-auto text-white">
                        <h1 class="text-white" style="font-size:45px !important;">
                            <span class="counter">20</span><span>+</span>
                        </h1>
                        <span class="fs-5 fw-bold">Clients</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center">
                    <div class="col-auto text-end">
                        <span class="fs-3" style="color:#1081C7 !important;"><i class="fa fa-car"></i></span>
                    </div>
                    <div class="col-auto text-white">
                        <h1 class="text-white" style="font-size:45px !important;">
                            <span class="counter">25</span><span>+</span>
                        </h1>
                        <span class="fs-5 fw-bold">Cars</span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row justify-content-center">
                    <div class="col-auto text-end">
                        <span class="fs-3" style="color:#1081C7 !important;"><i class="fa fa-shield-alt"></i></span>
                    </div>
                    <div class="col-auto text-white">
                        <h1 class="text-white" style="font-size:45px !important;">
                            <span class="counter">100</span><span>%</span>
                        </h1>
                        <span class="fs-5 fw-bold">Reliable</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER ENDS HERE -->

<!-- PRICING PLAN AREA START -->
<div class="ltn__pricing-plan-area pt-115 pb-120" id="liton_pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">Our Price</h6>
                    <h1 class="section-title">Subscription Plan<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-50">
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__pricing-plan-item text-center">
                    <span class="pricing-badge">Most Popular</span>
                    <h2 class="pricing-title">Bronze</h2>
                    <div class="pricing-price">
                        <h2><sup>$</sup>297<sub>/M</sub></h2>
                    </div>
                    <ul>
                        <li>Hand Wash & Blow dry</li>
                        <li>Vacuum Interior Carpets & Mats</li>
                        <li>Wheel Washing</li>
                        <li>Exterior Detailing</li>
                        <li>Seat Shampooing</li>
                        <li>Decontamination Wash</li>
                        <li>Clay Bar</li>
                        <li>Clean & Vacuum Trunk</li>
                        <li>Bi-Weekly Wash</li>
                        <li>Interior Spot & Stain Removal</li>
                        <li>Save 10%</li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="#" class="theme-btn-2 btn">PURCHASE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__pricing-plan-item text-center active ---active-price">
                    <h2 class="pricing-title">Silver</h2>
                    <div class="pricing-price">
                        <h2><sup>$</sup>360<sub>/M</sub></h2>
                    </div>
                    <ul>
                        <li>Hand Wash & Blow dry</li>
                        <li>Vacuum Interior Carpets & Mats</li>
                        <li>Wheel Washing</li>
                        <li>Exterior Detailing</li>
                        <li>Seat Shampooing</li>
                        <li>Decontamination Wash</li>
                        <li>Clay Bar</li>
                        <li>Clean & Vacuum Trunk</li>
                        <li>Bi-weekly Wash</li>
                        <li>Interior Spot & Stain Removal</li>
                        <li>Steam Cleaning</li>
                        <li>Car Waxing</li>
                        <li>Carpet Deep Clean</li>
                        <li>Save 10%</li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="#" class="theme-btn-2 btn">PURCHASE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__pricing-plan-item text-center">
                    <span class="pricing-badge">Most Popular</span>
                    <h2 class="pricing-title">Gold</h2>
                    <div class="pricing-price">
                        <h2><sup>$</sup>380<sub>/M</sub></h2>
                    </div>
                    <ul>
                        <li>Hand Wash & Blow dry</li>
                        <li>Vacuum Interior Carpets & Mats</li>
                        <li>Wheel Washing</li>
                        <li>Exterior Detailing</li>
                        <li>Seat Shampooing</li>
                        <li>Decontamination Wash</li>
                        <li>Clay Bar</li>
                        <li>Clean & Vacuum Trunk</li>
                        <li>Bi-weekly wash</li>
                        <li>Interior spot & stain removal</li>
                        <li>Steam Cleaning</li>
                        <li>Car Waxing</li>
                        <li>Carpet Deep Clean</li>
                        <li>Ceramic coating & more</li>
                        <li>Save 10%</li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="#" class="theme-btn-2 btn">PURCHASE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRICING PLAN AREA END -->

<!-- IMAGE SLIDER AREA START (img-slider-2) -->
<div class="ltn__img-slider-area ltn__img-slider-2 section-bg-1 pt-115 pb-250">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">Portfolio</h6>
                    <h1 class="section-title">What We Have Done<span>.</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ltn__image-slider-2-active slick-arrow-1 slick-arrow-1-inner">
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="{{ asset('frontend/img/img-slide/1.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('frontend/img/img-slide/1.jpg') }}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="{{ asset('frontend/img/img-slide/2.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('frontend/img/img-slide/2.jpg') }}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="{{ asset('frontend/img/img-slide/3.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('frontend/img/img-slide/3.jpg') }}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="{{ asset('frontend/img/img-slide/4.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('frontend/img/img-slide/4.jpg') }}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="{{ asset('frontend/img/img-slide/5.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('frontend/img/img-slide/5.jpg') }}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-2">
                    <a href="{{ asset('frontend/img/img-slide/6.jpg') }}" data-rel="lightcase:myCollection">
                        <img src="{{ asset('frontend/img/img-slide/6.jpg') }}" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- IMAGE SLIDER AREA END -->

<!-- CALL TO ACTION START ( Service Form ) -->
<div class="ltn__service-form-wrap-area">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-12">
                <div class="ltn__service-form-area ltn__service-form-1 ltn__service-form-margin bg-image bg-overlay-theme-black-60 pt-115 pb-95" data-bs-bg="{{ asset('frontend/img/bg/2.jpg') }}">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 align-self-center">
                            <div class="ltn__service-form-brief">
                                <div class="section-title-area ltn__section-title-2 mb-0">
                                    <h6 class="section-subtitle white-color">Booking</h6>
                                    <h1 class="section-title white-color">Schedule an Appointment
                                        With Us.</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12 align-self-center">
                            <div class="ltn__service-form-wrap ltn__service-form-color-white">
                                <form action="#" class="ltn__service-form-box">
                                    <div class="row">
                                        <div class="col-auto py-2">
                                            <select class="nice-select" required>
                                                <option value="">Subscription Plan</option>
                                                <option value="1">Basic</option>
                                                <option value="2">Silver</option>
                                                <option value="3">Gold</option>
                                            </select>
                                        </div>
                                        <div class="col-auto py-2">
                                            <div class="input-item input-item-date mb-0">
                                                <input type="date" name="date" placeholder="DATE" style="border-color:#576466 !important;">
                                            </div>
                                        </div>
                                        <div class="col-auto py-2">
                                            <select class="nice-select" required>
                                                <option value="">Select Hours</option>
                                                @for ($i = 8; $i <= 17; $i++)
                                                    @if($i == 12)
                                                        <option value="{{ $i }}">{{ $i }} PM</option>
                                                    @elseif($i > 12)
                                                        <option value="{{ $i-12 }}">{{ $i-12 }} PM</option>
                                                    @else
                                                        <option value="{{ $i }}">{{ $i }} AM</option>
                                                    @endif
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-auto py-2">
                                            <div class="btn-wrapper">
                                                <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Check Availability</button>
                                            </div>
                                        </div>
                                    </ul>                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CALL TO ACTION END -->

<!-- GIFT CARD START -->
<div class="ltn__call-to-action-area call-to-action-2 pt-60 pb-60" data-bs-bg="img/1.jpg--">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="call-to-action-inner call-to-action-inner-2 text-start">
                    <div class="row">
                        <h2>Gift Card</h2>
                        <p>Unlock the sparkle and shine your vehicle deserves with our exclusive detailing eGift Cards - the perfect surprise for any car enthusiast</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-end">
                <div class="btn-wrapper">
                    <a class="btn btn-effect-4 btn-white" href="#">PURCHASE NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- GIFT CARD END -->

<!-- TESTIMONIAL AREA START -->
<div class="ltn__testimonial-area ltn__testimonial-4 pt-115 pb-100 plr--9">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">Testimonials</h6>
                    <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow rounded py-4">
                    <div class="card-body text-center">
                        <p>"The only time Ive seen my car this clean and shinning was from the car dealership…thanks to AutoGleam."</p>
                        <h4>Taiwo.G</h4>
                        <span style="color:#FFD700;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                        <span style="color:#FFD700;">
                            
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow rounded py-4">
                    <div class="card-body text-center">
                        <p>"The only time Ive seen my car this clean and shinning was from the car dealership…thanks to AutoGleam."</p>
                        <h4>Keila.B</h4>
                        <span style="color:#FFD700;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                        <span style="color:#FFD700;">
                            <i class="far fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                {{--<div class="ltn__testimonial-slider-4 ltn__testimonial-slider-4-active slick-arrow-1">
                    <div class="ltn__testimonial-item-5">
                        <div class="ltn__quote-icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="ltn__testimonial-image">
                            <img src="{{ asset('frontend/img/testimonial/3.jpg') }}" alt="quote">
                        </div>
                        <div class="ltn__testimonial-info">
                            <p>The only time Ive seen my car this clean and shinning was from the car dealership…thanks to AutoGleam.</p>
                            <h4>Jacob William</h4>
                            <h6>Manager</h6>
                        </div>
                    </div>
                    <div class="ltn__testimonial-item-5">
                        <div class="ltn__quote-icon">
                            <i class="far fa-comments"></i>
                        </div>
                        <div class="ltn__testimonial-image">
                            <img src="{{ asset('frontend/img/testimonial/4.jpg') }}" alt="quote">
                        </div>
                        <div class="ltn__testimonial-info">
                            <p>The only time Ive seen my car this clean and shinning was from the car dealership…thanks to AutoGleam</p>
                            <h4>Ethan James</h4>
                            <h6>Admin</h6>
                        </div>
                    </div>
                </div>
                <ul class="ltn__testimonial-quote-menu d-none d-lg-block">
                    <li><img src="{{ asset('frontend/img/testimonial/3.jpg') }}" alt="Quote image"></li>
                    <li><img src="{{ asset('frontend/img/testimonial/4.jpg') }}" alt="Quote image"></li>
                    <li><img src="{{ asset('frontend/img/testimonial/6.jpg') }}" alt="Quote image"></li>
                    <li><img src="{{ asset('frontend/img/testimonial/1.jpg') }}" alt="Quote image"></li>
                </ul>--}}
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->
@endsection
