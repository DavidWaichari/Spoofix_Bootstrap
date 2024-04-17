@extends('landing_page/layout')
@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area">
<div class="breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.png"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="breadcrumb-content text-center">
                <h3 class="title">Contact Us</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
<section class="contact-area">
<div class="contact-info-wrapper">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="contact-info-item text-center">
                    <div class="contact-info-icon">
                        <i class="flaticon-chat"></i>
                    </div>
                    <div class="contact-info-content">
                        <h5 class="title">Chat With Us</h5>
                        <p>We've got live Social Experts waiting to help you monday to friday from 9am to 5pm EST.</p>
                        <a href="#" class="contact-info-link">Chat with us</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="contact-info-item text-center">
                    <div class="contact-info-icon">
                        <i class="flaticon-open-mail"></i>
                    </div>
                    <div class="contact-info-content">
                        <h5 class="title">Send Us Email</h5>
                        <p>Simple drop us an email at cycure.agency@mail.com and you'll receive a reply within 24 hours</p>
                        <a href="mailto:cycure.agency@mail.com" class="contact-info-link">Email Us</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="contact-info-item text-center">
                    <div class="contact-info-icon">
                        <i class="flaticon-open-mail"></i>
                    </div>
                    <div class="contact-info-content">
                        <h5 class="title">Make a Call</h5>
                        <p>Give us a ring.Our Experts are standing by monday to friday from 9am to 5pm EST.</p>
                        <a href="tel:123456789" class="contact-info-link">+1 488 246 5357</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="map" data-background="assets/img/bg/map.jpg"></div>
<div class="contact-form-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-7 col-md-9 col-sm-10">
                <div class="section-title text-center mb-50">
                    <h2 class="title">Questions or Comments? Get in Touch</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-9 col-lg-10">
                <form action="#" class="contact-form text-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="text" required placeholder="Your full name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-grp">
                                <input type="email" required placeholder="Your email address">
                            </div>
                        </div>
                        <div class="form-grp">
                            <textarea name="message" id="message" required placeholder="Write your message..."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn">Send message</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<!-- contact-area-end -->

@endsection