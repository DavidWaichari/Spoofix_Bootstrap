@extends('landing_page/layout')
@section('content')

<!-- 404-area -->
<section class="error-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-10">
                <div class="error-content text-center">
                    <h2 class="error-text">404</h2>
                    <h5 class="content">Sorry, the page you are looking for could not be found</h5>
                    <a href="/" class="btn back-btn">
                        <span class="text">Back to home</span>
                        <span class="shape"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404-area-end -->

@endsection