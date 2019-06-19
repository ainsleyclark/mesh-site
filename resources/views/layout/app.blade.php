<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{($activePage == 'home') ? ("meshCSS | " . $pageDescription) : ($pageTitle . ' | meshCSS')}}</title>
    <meta name="description" content="{{$pageDescription}}">
    <link rel="canonical" href="{{$siteURL}}" />
    <meta name="csrf" content="{{csrf_token()}}" >
    <!-- Open Graph -->
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$pageTitle}}">
    <meta property="og:description" content="{{$pageDescription}}">
    <meta property="og:url" content="{{$siteURL}}">
    <meta property="og:site_name" content="{{$siteName}}>">
    <meta property="og:image" content="{{$ogImage}}">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="{{$pageDescription}}">
    <meta name="twitter:title" content="{{$pageTitle}}">
    <meta name="twitter:image" content="{{$ogImage}}">
    <!-- CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet"> --}}
    <!-- //! Consider using one style sheet here for font awesome -->
    <link rel="stylesheet" href="{{asset('css/vendor/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet"  type="text/css" href="{{asset('css/mesh.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    @stack('styles')
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ff2451">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140877948-1"></script>
    <script>
    //! UNCOMMENT FOR GTAG
    // window.dataLayer = window.dataLayer || [];
    // function gtag(){dataLayer.push(arguments);}
    // gtag('js', new Date());
    // gtag('config', 'UA-140877948-1');
    </script>
</head>
    <body>
        <!--[if lte IE 9]>
            <div class="outdated-browser">
                <h2>You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</h2>
            </div>
        <![endif]-->
        @include('partials.header')
        @if ($activePage !='home') <div class="header-spacer"></div> @endif
        <main>
            @yield('content')
        </main>
        <!-- Roboto Font (Render blocking) -->
        <script type="text/javascript">
            WebFontConfig = {
                google: { families: [ 'Roboto:300,400,700' ] }
            };
            (function() {
                var wf = document.createElement('script');
                wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
        })(); </script>
        <script src="{{ asset('js/vendor/highlight/highlight.pack.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')

    </body>
</html>