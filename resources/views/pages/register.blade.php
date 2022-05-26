@extends('layouts.app')
@section('content')
{{-- @section('title', 'Home')

@section('keywords', 'ASO, Osinbajo, Professor Yemi Osinbajo, Professor Yemi Osinbajo For The 2023 Presidential Election')
@section('description', 'Anambra State for Osinbajo Organization (ASO)') --}}

<div class="contact-page-form-section contact-form-bg my-contact-form-bg margin-top-0" style="background-image: url(assets/img/shape-05.png);">
  <!-- assets/img/contact-bg-02.png, -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-item-wrapper">
                  <img src="assets/img/Ellipse-02.png" class="contact-shape" alt="">
                  <img src="assets/img/Ellipse-03.png" class="contact-shape-02" alt="">
                  <img src="assets/img/Ellipse-04.png" class="contact-shape-03" alt="">
                  <img src="assets/img/Ellipse-05.png" class="contact-shape-04" alt="">
                    <div class="row align-items-center">
                      <div class="col-lg-5">
                        <div class="contact-single-item">
                          <div class="content">
                            <h4 class="title wow animate__animated animate__fadeInUp">Join Us Now By Registering</h4>
                            <!-- <p class="wow animate__animated animate__fadeInUp">We would love to hear from you..</p> -->
                          </div>
                          <div class="thumb">
                            <img src="assets/img/contact-01.png" alt="">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <div class="contact-page-wrapper style-03">
                          <div class="contact-form contact-bg style-01" style="background-image: url(assets/img/contact-02.png);">
                            <div class="content desktop-center">
                              <!-- <img src="assets/img/circle-02.png" class="title-shape style-02" alt=""> -->
                              <h6 class="title">Register</h6>
                            </div>
                            <form action="{{route('register')}}" class="contact-page-form" method="post">
                              @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="fname" placeholder="First Name*" class="form-control" required="" aria-required="true" value="{{ old('fname') }}" >
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                      <div class="form-group">
                                          <input type="text" name="lname" placeholder="Last Name*" class="form-control" required="" aria-required="true" value="{{ old('lname') }}">
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email*" class="form-control" required="" aria-required="true" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input type="tel" name="phone" placeholder="Phone Number*" class="form-control" required="" aria-required="true" value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                      <div class="btn-wrapper desktop-center">
                                        {{-- <a href="{{ route('register') }}" class="boxed-btn political-btn style-01">Submit<i class="icon-paper-plan"></i></a> --}}

                                        <button type="submit" class="boxed-btn political-btn style-01" style="border:none;">Submit<i class="icon-paper-plan"></i></button>
                                      </div>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Contact Page Form Section End Here -->

<!-- Map Section Start Here -->
<div class="map-section">
    
</div>

@endsection