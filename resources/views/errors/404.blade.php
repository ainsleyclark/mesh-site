<?php 

    $pageData = [
        "siteURL" => "https://www.meshcss.com",
        "siteName" => "mesh",
        "ogImage" => "https://www.meshcss.com",
        "pageTitle" => "Javascript",
        "pageDescription" => "Ooops, that's a wrong page.",
        "activePage" => "error",
    ]

?>

@extends('layout.app', $pageData)

@push('styles')
<!-- =====================
    Page CSS (Place in <style></style> tags)
    ===================== -->
<style>
    section.hero {
        height: 100vh;
        min-height: 500px;
    }
    
    .home-row {
        margin-top: -50px;
    }
    
    h1 {
        line-height: 1.2;
    }
    
    .lead {
        font-size: 16px;
    }
    
    .home-logo {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 70%;
        height: auto;
    }
    
    .home-background {
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        z-index: -1;
    }
    
    .footer-col {
        position: absolute;
        bottom: 5px;
    }
    
    @media (min-width: 768px) {
        .home-row {
            margin-top: 0;
        }
    }
    
    </style>
@endpush

@section('content')
<!-- =====================
    Home
    ===================== -->
<!-- Gradient Overlay -->
<svg class="p-absolute home-background" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 336.7" preserveAspectRatio="none">
    <defs>
        <style>
        .cls-1 {
            fill: url(#radial-gradient);
        }
        </style>
        <radialGradient id="radial-gradient" cx="250" cy="168.36" r="331.78" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#fff"/>
        <stop offset="0.45" stop-color="#fdfdfd"/>
        <stop offset="0.66" stop-color="#f6f6f6"/>
        <stop offset="0.82" stop-color="#e9e9e9"/>
        <stop offset="0.95" stop-color="#d7d7d7"/>
        <stop offset="1" stop-color="#cdcdcd"/>
        </radialGradient>
    </defs>
    <rect class="cls-1" width="500" height="336.72"/>
</svg>

<!-- =====================
    Hero
    ===================== -->
<section class="hero d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center home-row">
            <div class="col-12 col-desk-4 col-hd-3 order-last order-desk-first">
                <div class="d-flex justify-content-center align-items-start w-100 flex-column">
                    <div class="text-cont t-center t-desk-left w-100">
                        <h1 class="my-0 d-inline">404 </h1><span class="lead mt-2 mt-tab-3">| Page not found</span>
                    </div>
                    <a href="/" class="d-block btn btn-rounded btn-primary mt-4 c-white px-4 mx-auto mx-desk-0">Return home</a>
                </div>
            </div>
            <div class="col-10 col-desk-8 col-hd-9">
                <div class="img-cont mb-3 mb-desk-0">
                    <img class="home-illustration img-responsive" src="/assets/img/mesh-wire-grid.png">
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

</section>

@endsection
        
