<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Pharmacy Management</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('public/img/favicon.png') }}" rel="icon">
  <link href="{{ url('public/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('public/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url('public/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ url('public/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ url('public/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('public/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('public/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('admin.layouts._header')
    @include('admin.layouts._sidebar')
    <main id="main" class="main" style="min-heigbt: 100vh;">
        @yield('content')
    </main><!-- End #main -->
    @include('admin.layouts._footer')






    <!-- Vendor JS Files -->
    <script src="{{ url('public/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('public/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ url('public/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ url('public/vendor/quill/quill.js') }}"></script>
    <script src="{{ url('public/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ url('public/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('public/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('public/js/main.js') }}"></script>

</body>

</html>