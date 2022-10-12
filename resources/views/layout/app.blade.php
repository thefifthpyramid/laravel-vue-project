{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--        <title>Laravel</title>--}}
{{--        <link rel="stylesheet" href="/css/app.css">--}}
{{--        @vite(['resources/js/app.js','resources/css/app.css'])--}}
{{--    </head>--}}
{{--    <body>--}}
{{--    <div id="app"></div>--}}
{{--    </body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>AdminLTE 3 | Fixed Sidebar</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>
<body class="hold-transition sidebar-mini layout-fixed">


    <!-- Site wrapper -->
    <div class="wrapper" id="app"></div>
    <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
    </body>
</html>

