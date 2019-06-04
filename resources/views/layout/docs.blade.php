@extends('layout.app')
@section('content')

@include('partials.sidenav')

<section class="content button-page">
    <div class="container-fullwidth">
        <div class="row justify-content-center mt-4 mt-desk-5">
            <div class="col-12 col-tab-9 col-desk-8 mr-desk-2 px-desk-4">
                <h1 class="mb-2 mt-0">{{$pageTitle}}</h1>
                <div class="lead">{{$pageDescription}}</div>
                @yield('docscontent')
            </div><!-- /Col -->
            @include('partials.contentsnav')
            @include('partials.footer')
        </div><!-- /Row -->
    </div><!-- /Container -->
</section>

@endsection