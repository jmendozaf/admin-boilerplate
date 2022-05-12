<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta name="theme-color" content="#2b7c96">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="16x16" href="@include('logos.favicon16')">
    <link rel="icon" type="image/png" sizes="32x32" href="@include('logos.favicon32')">

    <!-- FB OG -->
    <meta property="og:title" content="{{config('app.name')}}" />
    <meta property="og:image" content="{{asset('images/frontend/sharefb.png')}}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="Conmebol Media" />

    <!-- WA OG -->
    <meta property="og:title" content="{{config('app.name')}}" />
    <meta property="og:image" content="{{asset('images/frontend/sharewa.png')}}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta property="og:description" content="Conmebol Media" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@KatanaLabs">
    <meta name="twitter:title" content="{{config('app.name')}}">
    <meta name="twitter:description" content="Conmebol Media">
    <meta name="twitter:image" content="{{asset('images/frontend/sharetw.png')}}">

    {{-- TODO translatable suffix --}}
    <title>@yield('title', config('app.name') ) - {{ config('app.name') }}</title>

    @include('layouts.frontend.partials.main-styles')

    @stack('level-style')

</head>
<body class="app">

    @yield('content')

    @yield('footer')

    @include('layouts.frontend.partials.main-bottom-scripts')

    @stack('level-script')

</body>

</html>
