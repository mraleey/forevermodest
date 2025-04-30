<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- FontAwesome or other external links -->
    @stack('styles')
</head>
<body>

    @include('frontend.layouts.header')

    @yield('main-container')

    @include('frontend.layouts.footer')

    <!-- JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    @stack('scripts')

</body>
</html>
