<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="16x16" href="@include('logos.favicon16')">
    <link rel="icon" type="image/png" sizes="32x32" href="@include('logos.favicon32')">
    <link rel="icon" type="image/png" sizes="32x32" href="@include('logos.favicon96')">

    {{-- TODO translatable suffix --}}
    <title>@yield('title', 'Admin') - {{ config('app.name') }}</title>

    @include('layouts.backend.partials.main-styles')

    @stack('level-style')

</head>

<body class="app header-fixed sidebar-fixed sidebar-lg-show" style="padding: 0; margin: 0">

@yield('content')

@include('layouts.backend.partials.wysiwyg-svgs')
@include('layouts.backend.partials.main-bottom-scripts')

@stack('level-script')

</body>

</html>
