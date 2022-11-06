@extends('layout.app')

@push('styles')
<!-- =====================
    Page CSS (Place in <style></style> tags)
    ===================== -->
<style>
section.hero {
	height: 110vh;
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
	height: 110vh;
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
    .lead {
        font-size: 1.25rem;
    }

    section.hero, 
    .home-background {
        height: 100vh;
    }

}

</style>
@endpush

@push('scripts')
<!-- =====================
    Page JS (Place in <script></script> tags)
    ===================== -->

@endpush

@section('content')
<!-- =====================
    Thank you page
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
            <div class="col-12 col-desk-6 col-hd-6 order-last order-desk-first">
                <div class="d-flex justify-content-center align-items-center w-100 flex-column">
                    <div class="text-cont t-center t-desk-left w-100">
                        <h1 class="my-0">Thank You!</h1>
                        <div class="lead pr-tab-5 mt-2 mt-tab-3">
                            MeshCSS is a blazingly fast, versatile, pure CSS open source framework with modular approach to a responsive grid system.
                            We hope you enjoy MeshCSS. For any technical support please use the <strong><a href="https://github.com/ainsleyclark/mesh/issues" class="c-link">issues tab</a></strong> on github. MeshCSS is a friendly community and are welcome to first time contributions or seasoned veterens.
                        </div>
                        <a href="https://www.paypal.com/donate/?token=amFrKetbLAsL4X74H2LjH3VjeYaMe4nkzN7qSwap4LkxVLCRIVKOiUtio0564nSAWy3-fW&country.x=GB&locale.x=GB" class="btn btn-rounded btn-primary mt-2 c-white px-4">Sponsor MeshCSS</a>
                        <a href="https://github.com/ainsleyclark/mesh/stargazers" class="btn btn-rounded btn-outline btn-primary mt-2 mt-tab-4 px-4">Stargazers</span></a>
                        <a href="https://github.com/ainsleyclark/mesh" class="btn btn-rounded btn-outline btn-primary mt-2 mt-tab-4 px-4"><span class="d-none d-tab-inline">View on&nbsp;</span>Github</a>
                    </div>
                </div>
            </div>
            <div class="col-10 col-desk-6 col-hd-6">
                <div class="img-cont">
                    <picture>
                        <source media="(max-width: 768px)" class="home-illustration img-responsive" srcset="../assets/img/mesh-illustration-mob-min.png">
                        <img class="home-illustration img-responsive" src="../assets/img/mesh-illustration-min.png">
                    </picture>
                </div>
            </div>
        
        </div>
    </div>
    
    
    @include('partials.footer')

</section>

@endsection

