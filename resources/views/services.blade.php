@extends('layouts.app', ['activePage' => 'services', 'title' => 'What We Do'])

@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{ asset('frontend/img/slider/42.jpeg') }}" style="background-image: url({{ asset('frontend/img/slider/42.jpeg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Our Services</h6>
                        <h1 class="section-title white-color">What We Do</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    

<div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="{{ asset('img/service-img-1.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h1 class="section-title">Personalized detailing <span>.</span></h1>
                    </div>
                    <div class="about-us-info-wrap-inner about-us-info-devide">
                        <p>Making sure that your car’s interior is always clean will make the driving experience for the members of your family or your business associates more pleasant. we're passionate about cars and even more passionate about making them look their best. Using a blend of traditional techniques and innovative solutions, we offer a suite of services designed to bring out the best in your vehicle. Whether you're looking to rejuvenate your car's appearance or protect it for the long haul, we've got you covered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">More Services</h6>
                    <h1 class="section-title">What We Do<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <i class="icon-maintenance-1"></i>
                    </div>
                    <div class="service-item-brief">
                        <h3 class="animated fadeIn"><a href="javascript:void(0)">Hand Wash & Blow Dry</a></h3>
                        <p>Every service begins with our meticulous hand wash and blow dry process, ensuring every inch of your vehicle is spotless and ready for detailed attention.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <i class="icon-maintenance-1"></i>
                    </div>
                    <div class="service-item-brief">
                        <h3 class="animated fadeIn"><a href="javascript:void(0)">Power Wash</a></h3>
                        <p>A powerful wash to remove surface-level dirt and prepare your car for deeper cleaning.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <i class="icon-maintenance-1"></i>
                    </div>
                    <div class="service-item-brief">
                        <h3 class="animated fadeIn"><a href="javascript:void(0)">Clay Protection & Wax Application</a></h3>
                        <p>Protect your paint with our clay bar treatment and finish with a wax that leaves a lasting shine.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <i class="icon-maintenance-1"></i>
                    </div>
                    <div class="service-item-brief">
                        <h3 class="animated fadeIn"><a href="javascript:void(0)">Interior Excellence</a></h3>
                        <p>Vacuum Interior Carpets & Mats: Deep cleaning to remove dirt and grime from every corner.</p>
                        <p>Clean & Vacuum Trunk: A thorough cleanse for often overlooked spaces.</p>
                        <p>Clean Door Jambs & Windows Inside and Out: For doors that welcome and windows that sparkle.</p>
                        <p>Clean & Dress Dash, Vents, & Trim: Detailing that makes your interior look and feel as good as new.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__service-item-2 white-bg">
                    <div class="service-item-icon">
                        <i class="icon-maintenance-1"></i>
                    </div>
                    <div class="service-item-brief">
                        <h3 class="animated fadeIn"><a href="javascript:void(0)">Hand Polish & Protect Rims</a></h3>
                        <p>Not just clean, but protected and polished to perfection.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- SPECIAL PACKAGE AREA START (Service 2) -->
<div class="ltn__service-area section-bg-5 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">See Also</h6>
                    <h1 class="section-title">Our Specialty Services<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="ltn__service-item-2" style="background:#F2F6F7;">
                    <div class="service-item-icon">
                        <i class="icon-maintenance-1"></i>
                    </div>
                    <div class="service-item-brief">
                        <h3 class="animated fadeIn"><a href="javascript:void(0)">Interior Spot & Stain Removal</a></h3>
                        <p>Targeted cleaning to tackle tough spots and stains, restoring your interior's beauty.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="ltn__service-item-2" style="background:#F2F6F7;">
                    <div class="service-item-icon">
                        <i class="icon-maintenance-1"></i>
                    </div>
                    <div class="service-item-brief">
                        <h3 class="animated fadeIn"><a href="javascript:void(0)">OZONE TREATMENT</a></h3>
                        <p>Dive into the ultimate cleanliness with FreshZone, where ozone technology transforms your vehicle. Beyond a simple clean, FreshZone protects against bacteria, viruses, and stubborn odours, making your car a beacon of freshness. Forget short-term fixes. FreshZone uses the revolutionary Fresh Air Ozone Machine.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection