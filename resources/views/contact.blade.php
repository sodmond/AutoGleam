@extends('layouts.app', ['activePage' => 'contact', 'title' => 'Get In Touch'])

@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{ asset('frontend/img/slider/42.jpeg') }}" style="background-image: url({{ asset('frontend/img/slider/42.jpeg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Contact</h6>
                        <h1 class="section-title white-color">Get In Touch</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__contact-address-area mb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('frontend/img/icons/10.png/') }}" alt="Icon Image">
                    </div>
                    <h3 class="animated fadeIn">Email Address</h3>
                    <p>info@autogleam.com <br>&nbsp;</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('frontend/img/icons/11.png') }}" alt="Icon Image">
                    </div>
                    <h3 class="animated fadeIn">Phone Number</h3>
                    <p>+1 (240) 758-2807 <br>&nbsp;</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                    <div class="ltn__contact-address-icon">
                        <img src="{{ asset('frontend/img/icons/12.png') }}" alt="Icon Image">
                    </div>
                    <h3 class="animated fadeIn">Office Address</h3>
                    <p>14000 Jericho Park Rd, Bowie, <br>
                        MD 20715, United States</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ltn__contact-message-area mb-120 mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Drop A Message For Us</h4>
                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="firstname" placeholder="Enter your firstname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="lastname" placeholder="Enter your lastname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="message" placeholder="Enter message"></textarea>
                        </div>
                        <div class="btn-wrapper mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Send Message</button>
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection