<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') | Roposo-App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Roposo" name="description" />
    <meta content="App" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url ('theme/assets/images/favicon.ico')}}">

    <!-- jquery.vectormap css -->
    <link href="{{url ('theme/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- DataTables -->
    <link href="{{url ('theme/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{url ('theme/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{url ('theme/assets/css/bootstrap.min.css')}}" id="bootstrap-style1" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{url ('theme/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url ('theme/assets/css/app.min.css')}}" id="app-style1" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    @include('layouts.header')

    <!-- ========== Left Sidebar Start ========== -->
    @include('layouts.sidebar')
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @yield('content')
        <!-- End Page-content -->

     @include('layouts.footer')

    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->

<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{url ('theme/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{url ('theme/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url ('theme/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{url ('theme/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{url ('theme/assets/libs/node-waves/waves.min.js')}}"></script>


<!-- apexcharts -->
<script src="{{url ('theme/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- jquery.vectormap map -->
<script src="{{url ('theme/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url ('theme/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

<!-- Required datatable js -->
<script src="{{url ('theme/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url ('theme/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{url ('theme/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url ('theme/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{url ('theme/assets/js/pages/dashboard.init.js')}}"></script>

<!-- App js -->
<script src="{{url ('theme/assets/js/app.js')}}"></script>
<!-- Ensure page-specific scripts are loaded -->
@stack('scripts')
</body>

</html>
