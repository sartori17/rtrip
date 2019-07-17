@include('layouts.navbar')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="Felipe Sartori">
    <meta name="generator" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    @yield('style')
    {{-- Styles --}}
    @if(config('laravelusers.enableBootstrapCssCdn'))
        <link rel="stylesheet" type="text/css" href="{{ config('laravelusers.bootstrapCssCdn') }}">
    @endif
    @if(config('laravelusers.enableAppCss'))
        <link rel="stylesheet" type="text/css" href="{{ asset(config('laravelusers.appCssPublicFile')) }}">
    @endif

    @yield('template_linked_css')

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ url('css/sticky-footer-navbar.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100" style="background-color: #add8e62e;">
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img/logo-black.png" style="width: 120px; margin-top: -12px; ">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @yield('navbar')
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        @yield('content')
    </div>
</main>

<footer class="footer mt-auto py-3">
    <div class="container">
        <p style="text-align: center; color: grey;">Telemóvel: +351 936 059 647 </p><p style="text-align: center; color: grey;">E-mail: contacto@roadtrip-eu.pt</p>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous" ></script>
<script src="{{ url('/js/bootstrap.bundle.min.js') }}" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
@yield('script')
{{-- Scripts --}}
@if(config('laravelusers.enablejQueryCdn'))
    <script src="{{ asset(config('laravelusers.jQueryCdn')) }}"></script>
@endif
@if(config('laravelusers.enableBootstrapPopperJsCdn'))
    <script src="{{ asset(config('laravelusers.bootstrapPopperJsCdn')) }}"></script>
@endif
@if(config('laravelusers.enableBootstrapJsCdn'))
    <script src="{{ asset(config('laravelusers.bootstrapJsCdn')) }}"></script>
@endif
@if(config('laravelusers.enableAppJs'))
    <script src="{{ asset(config('laravelusers.appJsPublicFile')) }}"></script>
@endif
@include('laravelusers::scripts.toggleText')

@yield('template_scripts')
</html>
