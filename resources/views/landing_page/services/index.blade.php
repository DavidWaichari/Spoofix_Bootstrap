@extends('landing_page/layout')
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area">
    <div class="breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.png"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="breadcrumb-content text-center">
                    <h3 class="title">Our Services</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- services-area -->
<div class="services-area inner-services-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="services-items-wrapper">
                    <ul class="list-wrap">
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-spyware"></i>
                                    <span>Spyware Protection</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-cloud-computing"></i>
                                    <span>Fast Cloud Backup</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-hosting"></i>
                                    <span>Database Security</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-credit-card"></i>
                                    <span>Transaction Security</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-concept"></i>
                                    <span>Spambot Shield</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-brain"></i>
                                    <span>A.I. Threat Learning</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-hacker"></i>
                                    <span>Client Protection</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-backup"></i>
                                    <span>Scheduled Backups</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-connection"></i>
                                    <span>Network Scanning</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-data-protection"></i>
                                    <span>CPU Threats Safety</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-seo-and-web"></i>
                                    <span>Disaster Recovery</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-face-recognition"></i>
                                    <span>Face Recognition</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-map"></i>
                                    <span>Location Tracking</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-coding"></i>
                                    <span>Terminal Protection</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/services/details">
                                <div class="top-content">
                                    <i class="flaticon-approved"></i>
                                    <span>Logistic Security</span>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services-area-end -->
@endsection