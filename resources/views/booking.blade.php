@extends('layouts.app', ['activePage' => 'services', 'title' => 'What We Do'])

@section('content')
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="{{ asset('frontend/img/slider/42.jpeg') }}" style="background-image: url({{ asset('frontend/img/slider/42.jpeg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Booking</h6>
                        <h1 class="section-title white-color">Schedule An Appointment</h1>
                    </div>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Booking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BOOKING FORM AREA START -->
<div class="ltn__contact-message-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Complete This Booking Form</h4>
                    @if (count($errors))
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Error validating data.<br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-sm alert-success" role="alert"><strong>Success!</strong> {{ session('success') }}</div>
                    @endif
                    <form id="contact-form" action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="firstname" placeholder="Enter your firstname" value="{{ old('firstname') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="lastname" placeholder="Enter your lastname" value="{{ old('lastname') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Enter email address" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}" required >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-item">
                                    <select class="nice-select" name="package" required style="display:none;">
                                        <option value="">Subscription Plan</option>
                                        <option value="1" {{ (isset($_GET['package']) && $_GET['package']==1) ? 'selected' : '' }}>Basic</option>
                                        <option value="2" {{ (isset($_GET['package']) && $_GET['package']==2) ? 'selected' : '' }}>Silver</option>
                                        <option value="3" {{ (isset($_GET['package']) && $_GET['package']==3) ? 'selected' : '' }}>Gold</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-item input-item-date ltn__custom-icon">
                                    <input type="date" name="date" class="cus_date" placeholder="DATE" style="border-color:#E4ECF2 !important;" required value="{{ $_GET['date'] ?? old('date') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-item">
                                    <select class="nice-select" name="hour" required>
                                        <option value="">Select Hours</option>
                                        @for ($i = 8; $i <= 17; $i++)
                                            @if($i == 12)
                                                <option value="{{ $i }} PM" {{ (isset($_GET['hour']) && $_GET['hour']==$i) ? 'selected' : '' }}>{{ $i }} PM</option>
                                            @elseif($i > 12)
                                                <option value="{{ $i-12 }} PM" {{ (isset($_GET['hour']) && $_GET['hour']==$i) ? 'selected' : '' }}>{{ $i-12 }} PM</option>
                                            @else
                                                <option value="{{ $i }} AM" {{ (isset($_GET['hour']) && $_GET['hour']==$i) ? 'selected' : '' }}>{{ $i }} AM</option>
                                            @endif
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <input type="text" name="car_make" placeholder="Enter car make/model" required value="{{ old('car_make') }}">
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="message" placeholder="Add Note (Optional)">{{ old('message') }}</textarea>
                        </div>
                        <p><label class="input-info-save mb-0"><input type="checkbox" name="agree" required> I agree to the terms & conditions</label></p>
                        <div class="btn-wrapper mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BOOKIN FORM AREA END -->
@endsection