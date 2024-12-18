<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap Min CSS --> 
<!-- Stylesheet -->
<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{asset('frontend/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{asset('frontend/css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('frontend/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('frontend/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="{{asset('frontend/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('frontend/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
<link  href="{{asset('frontend/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="{{asset('frontend/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('frontend/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('frontend/js/jquery-plugin-collection.js')}}"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
        <!-- Title -->
<title>Home ||Emon EnterPrise</title>
</head>
<body>


<div id="wrapper" class="clearfix">

    @include('layouts.header')
      <div class="main-content">
          @yield('content')
      </div>
   
    @include('layouts.frontfooter')
</div> 
 <script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>

@yield('scripts')

</body>
</html>
