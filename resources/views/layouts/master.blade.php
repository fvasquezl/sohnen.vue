<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper" id="app">

@include('layouts.partials.sidebar')

@include('layouts.partials.navbar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('layouts.partials.breadcrumb')

    <!-- Main content -->
        <section class="content">

            <router-view></router-view>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@include('layouts.partials.footer')

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
