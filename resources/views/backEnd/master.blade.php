<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title> @yield('title')</title>


   
    

    <!-- Bootstrap -->
    <link href="{{ asset('public/backEnd/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('public/backEnd/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- NProgress -->
    <link href="{{ asset('public/backEnd/css/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('public/backEnd/css/animate.min.css') }}" rel="stylesheet">

    <!-- iCheck -->
    <link href="{{ asset('public/backEnd/css/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('public/backEnd/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('public/backEnd/css/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('public/backEnd/css/daterangepicker.css') }}" rel="stylesheet">

    <!-- select2 for multi category selection -->
    <link href="{{ asset('public/backEnd/css/select2.min.css') }}" rel="stylesheet">

     <!-- Custom Theme Style -->
    <link href="{{ asset('public/backEnd/css/custom.css') }}" rel="stylesheet">

    

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- tinymce -->
    <script type="text/javascript" src="{{asset('public/backEnd/js/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backEnd/js/tinymce/init-tinymce.js')}}"></script>
    <link href="{{ asset('public/backEnd/js/tinymce/skin.min.css')}}" rel="stylesheet">
    <link href="http://cdn.tinymce.com/4/skins/lightgray/skin.min.css" rel="stylesheet">

   

   

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('backEnd.includes.sideBarMenu')
        

        <!-- top navigation -->
        <div class="top_nav">
          @include('backEnd.includes.header')
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('mainContent')
        <!-- /page content -->

        <!-- footer content -->
        @include('backEnd.includes.footer')
        <!-- /footer content -->
      </div>
    </div>

   <!-- jQuery -->
    <script src="{{ asset('public/backEnd/js/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('public/backEnd/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('public/backEnd/js/fastclick.js') }} "></script>
    <!-- NProgress -->
    <script src="{{ asset('public/backEnd/js/nprogress.js') }} "></script>
    <!-- Chart.js -->
    <script src="{{ asset('public/backEnd/js/dist/Chart.min.js') }} "></script>
    <!-- gauge.js -->
    <script src="{{ asset('public/backEnd/js/gauge.min.js') }} "></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('public/backEnd/js/bootstrap-progressbar.min.js') }} "></script>
    <!-- iCheck -->
    <script src="{{ asset('public/backEnd/js/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('public/backEnd/js/skycons.js') }} "></script>
    <!-- Flot -->
    <script src="{{ asset('public/backEnd/js/jquery.flot.js') }} "></script>
    <script src="{{ asset('public/backEnd/js/jquery.flot.pie.js') }} "></script>
    <script src="{{ asset('public/backEnd/js/jquery.flot.time.js') }} "></script>
    <script src="{{ asset('public/backEnd/js/jquery.flot.stack.js') }} "></script>
    <script src="{{ asset('public/backEnd/js/jquery.flot.resize.js') }} "></script>
    <!-- Flot plugins -->
    <script src="{{ asset('public/backEnd/js/jquery.flot.orderBars.js') }} "></script>
    <script src="{{ asset('public/backEnd/js/jquery.flot.spline.min.js') }} "></script>
    <script src="{{ asset('public/backEnd/js/curvedLines.js') }} "></script>
    <!-- DateJS -->
    <script src="{{ asset('public/backEnd/js/date.js') }} "></script>
    <!-- JQVMap -->
    <script src="{{ asset('public/backEnd/js/jquery.vmap.js') }} "></script>
    <script src="{{ asset('public/backEnd/js/jquery.vmap.world.js') }} "></script>
    <script src="{{ asset('public/backEnd/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('public/backEnd/js/moment.min.js') }}"></script>
    <script src="{{ asset('public/backEnd/js/daterangepicker.js') }} "></script>
    <!-- select2 for multi category selection -->
    <script src="{{ asset('public/backEnd/js/select2.min.js') }} "></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('public/backEnd/js/custom.js') }}"></script>
	
    @yield('script')

  </body>
</html>
