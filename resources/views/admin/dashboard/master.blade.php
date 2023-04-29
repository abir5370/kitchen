<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <!-- v4.0.0-alpha.6 -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/bootstrap/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/themify-icons/themify-icons.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @stack('css')
    <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
    @include('admin.dashboard.include.navber')
    <!-- Left side column. contains the logo and sidebar -->
    @include('admin.dashboard.include.sideber')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Dashboard</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><i class="fa fa-angle-right"></i> Dashboard 2</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <!-- Small boxes (Stat box) -->
            @yield('content')
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('admin.dashboard.include.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="{{asset('backend')}}/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- template -->
<script src="{{asset('backend')}}/assets/js/niche.js"></script>

<!-- Morris JavaScript -->
<script src="{{asset('backend')}}/assets/plugins/raphael/raphael-min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/morris/morris.js"></script>
<script src="{{asset('backend')}}/assets/plugins/functions/dashboard1.js"></script>
@stack('js')
</body>
</html>
