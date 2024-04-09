@extends('layouts.app', ['activePage' => 'giftcard', 'title' => 'What We Do'])

@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{ asset('frontend/img/slider/42.jpeg') }}" style="background-image: url({{ asset('frontend/img/slider/42.jpeg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Gift Card</h6>
                        <h1 class="section-title white-color">Buy A Gift Card</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Gift Card</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__our-history-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__our-history-inner">
                    <div class="ltn__product-tab-content-inner">
                        <div class="row">
                            <div class="col-lg-6 align-self-center">
                                <div class="about-us-img-wrap about-img-left">
                                    <img src="{{ asset('img/gift-card.png') }}" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                                <div class="about-us-info-wrap">
                                    <div class="section-title-area ltn__section-title-2">
                                        <h6 class="section-subtitle ltn__secondary-color">Gift Cards</h6>
                                        <h1 class="section-title">Gift Your Loved Ones<span>.</span></h1>
                                    </div>
                                    <p>Unlock the sparkle and shine your vehicle deserves with our exclusive detailing eGift Cards – the perfect surprise for any car enthusiast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__pricing-plan-area pt-115 pb-120" id="liton_pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">Our Gift Cards</h6>
                    <h1 class="section-title">What kind of gift is it<span>?</span></h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-50">
            <div class="col-lg-5 col-sm-6">
                <div class="ltn__pricing-plan-item text-center">
                    <h2 class="pricing-title">The Essentials Package</h2>
                    <div class="pricing-price">
                        <h2><sup>$</sup>49<sub></sub></h2>
                    </div>
                    <ul>
                        <li>A perfect introduction to car care.</li>
                        <li>Quick clean-ups and routine maintenance.</li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="#" class="theme-btn-2 btn">PURCHASE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="ltn__pricing-plan-item text-center ---active-price active">
                    <span class="pricing-badge">Most Popular</span>
                    <h2 class="pricing-title">The Deluxe Detail</h2>
                    <div class="pricing-price">
                        <h2><sup>$</sup>79<sub></sub></h2>
                    </div>
                    <ul>
                        <li>Comprehensive care for your car</li>
                        <li>Features everything in the Essentials</li>
                        <li>Plus wax application</li>
                        <li>Interior detailing</li>
                    </ul>
                    <div class="btn-wrapper">
                        <a href="#" class="theme-btn-2 btn">PURCHASE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection