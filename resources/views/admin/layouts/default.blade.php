<!doctype html>
<!--
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SbayVeXe | @yield("title", "Title page")</title>
    <link href="{{ asset('vendor/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/solid.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome/css/brands.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/datatables.min.css' )}}" rel="stylesheet">
    <link href="{{ asset('vendor/flagiconcss/css/flag-icon.min.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        @include('admin.components.sidebar')
        <div id="body" class="active">
            <!-- navbar navigation component -->
            @include("admin.components.header")
            <!-- end of navbar navigation -->
            @yield("contents", "contents")
            </div>
        </div>

        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/chartsjs/Chart.min.js') }}"></script>
        <script src="{{ asset('js/dashboard-charts.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('vendor/datatables/datatables.min.js')}}"></script>
        <script src="{{ asset('js/initiate-datatables.js')}}"></script>
    </body>

    </html>
