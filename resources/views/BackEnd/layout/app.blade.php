<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Job Pules Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/backEnd/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/backEnd/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('assets/backEnd/css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/backEnd/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/backEnd/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/appStyle.css') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
@include('BackEnd.component.header')
@include('BackEnd.component.sideber')


@yield('content')



@include('BackEnd.component.footer')

    <!-- JavaScript files-->
    <script src="{{ asset('assets/backEnd/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('assets/backEnd/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('assets/backEnd/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/backEnd/js/charts-home.js') }}"></script>
    <script src="{{ asset('assets/backEnd/js/front.js') }}"></script>
  </body>
</html>
