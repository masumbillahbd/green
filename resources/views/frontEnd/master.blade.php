<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/bootstrap.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('public/frontEnd/css/responsive.css')}}">
  



</head>
<body>

  @include('frontEnd.includes.header')
  
  @yield('mainContent')

  @include('frontEnd.includes.footer')
  
  <script src="{{ asset('public/frontEnd/js/jquery.min.js')}}"></script>
  <script src="{{ asset('public/frontEnd/js/popper.js')}}"></script>
  <script src="{{ asset('public/frontEnd/js/bootstrap.js')}}"></script>
</body>
</html>
