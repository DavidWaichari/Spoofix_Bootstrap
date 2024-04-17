@extends('landing_page/layout')
@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area">
    <div class="breadcrumb-bg" data-background="assets/img/bg/breadcrumb_bg.png"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="breadcrumb-content text-center">
                    <h3 class="title">Spyware Protection</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="services.html">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Spyware Protection</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- services-details-area -->
<section class="services-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services-details-wrap">
                    <div class="services-details-thumb">
                        <img src="assets/img/others/services_details.jpg" alt="img">
                    </div>
                    <div class="services-details-content">
                        <h2 class="title">All Services Related to Spyware Protection Are Provided</h2>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat possimus omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam aut officiis debitis aut necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur</p>
                        <p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi laborum dolorum fuga harum quidem expedita distinctio</p>
                        <h4 class="services-content-title">Why Spyware Protection?</h4>
                        <p>Temporibus autem quibusdam aut officiis debitis aut necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur optio cumque nihil impedit quo minus id quod maxime placeat possimus omnis voluptas</p>
                        <ul class="about-list">
                            <li>Managed Web Application</li>
                            <li>SIEM Threat Detection</li>
                            <li>Website Security Services</li>
                            <li>24/7 Hours services</li>
                            <li>Instant Malware Removal</li>
                            <li>Security Management</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="services-sidebar">
                    <div class="widget services-widget">
                        <ul class="sidebar-services-lists list-wrap">
                            <li class="active"><a href="services-details.html">Fast Cloud Backup</a></li>
                            <li><a href="services-details.html">Database Security</a></li>
                            <li><a href="services-details.html">Transaction Security</a></li>
                            <li><a href="services-details.html">Spambot Shield</a></li>
                            <li><a href="services-details.html">A.I. Threat Learning</a></li>
                            <li><a href="services-details.html">Client Protection</a></li>
                            <li><a href="services-details.html">Scheduled Backups</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- services-details-area-end -->
@endsection