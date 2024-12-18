<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>


    <!--Chartist Chart CSS -->
    <link href="{{asset('backend/assets/libs/chartist/chartist.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- plugin css -->
    <link href="{{asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"
        type="text/css" />
    <!-- DataTables -->
    <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>
    <body>
            <div id="layout-wrapper">
                 @include('layouts.backend_navbar')
                 @include('layouts.sidebar')
                    <div class="main-content">
                        <div class="page-content">
                            <div class="container-fluid">
                                  @yield('content')
                            </div>
                        </div>
                    </div>        
            </div>    
          


    <!-- JAVASCRIPT -->
    <script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>

    
    <!-- Plugin Js-->
    <script src="{{asset('backend/assets/libs/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/raphael/raphael.min.js')}}"></script>
    <!-- Peity chart-->
    <script src="{{asset('backend/assets/libs/peity/jquery.peity.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('backend/assets/js/pages/dashboard2.init.js')}}"></script>

    <script src="{{asset('backend/assets/js/app.js')}}"></script>
     @stack('scripts')
    </body>
</html>
