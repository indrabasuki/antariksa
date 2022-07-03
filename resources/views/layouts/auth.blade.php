<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">

</head>

<body>

    @yield('content')
    <!-- Core -->
    <script src="{{ asset('vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>


    <!-- Volt JS -->
    <script src="{{ asset('assets/js/volt.js') }}"></script>


</body>

</html>
