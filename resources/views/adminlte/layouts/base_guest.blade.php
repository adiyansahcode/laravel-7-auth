<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="description" content="{{ config('app.name', 'Laravel 7 Auth') }} | @yield('title')">
    <title>{{ config('app.name', 'Laravel 7 Auth') }} | @yield('title')</title>

    <!-- favicon -->
    <!-- https://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}" />
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#007f00" />
    <meta name="theme-color" content="#ffffff" />

    @stack('before-style')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('after-style')
  </head>
  <body class="hold-transition login-page">
    @yield('content')

    @stack('before-scripts')

    <script src="{{ mix('js/app.js') }}"></script>

    @stack('after-scripts')
  </body>
</html>
