<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Open Sans font from Google CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    @section('css')
            <!-- Pixel Admin's stylesheets -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pixel-admin.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/widgets.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pages.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/rtl.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/themes.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css">
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
    @show

    <script src="{{ asset('js/ie.min.js') }}"></script>

</head>


<body class="theme-default page-signin-alt">


<div class="signin-header">
    <a href="index.html" class="logo">
        <div class="demo-logo bg-primary"><img src="assets/demo/logo-big.png" alt="" style="margin-top: -4px;"></div>&nbsp;
        <strong>Cinema</strong> 3WA
    </a> <!-- / .logo -->
    <a href="pages-signup-alt.html" class="btn btn-primary">Sign Up</a>
</div> <!-- / .header -->

<h1 class="form-header">Sign in to your Account</h1>


@yield('content')



        <!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->




@section('js')
        <!-- Pixel Admin's javascripts -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/pixel-admin.min.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>


<script type="text/javascript">
    init.push(function () {
        // Javascript code here
    })
    window.PixelAdmin.start(init);
</script>



@show

</body>
</html>
