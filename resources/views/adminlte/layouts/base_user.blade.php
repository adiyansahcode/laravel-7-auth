<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    @include($layout . '.layouts.navbar')
    @include($layout . '.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-capitalize">@yield('title')</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              @yield('breadcrumb')
            </div>
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            @yield('content')
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include($layout . '.layouts.footer')
  </div>

  @stack('before-scripts')

  <script src="{{ mix('js/app.js') }}"></script>

  @stack('after-scripts')
</body>

</html>
