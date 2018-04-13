<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="/admin/favicon.ico" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="/admin/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="/admin/css/dashboard.css" rel="stylesheet" />
    <script src="/admin/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/admin/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="/admin/plugins/charts-c3/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/admin/plugins/input-mask/plugin.js"></script>
    @section('css_block')
    
    @show
</head>
<body class="">
    <div class="page">
        <div class="page-main">
            <div class="header">
                @include('admin.__include.header')
            </div>
            <div class="header-nav d-none d-lg-flex">
                @include('admin.__include.top_menu')
            </div>
            @section('top_block')
            @show




            <div class="page-content">
                <div class="container">
                    @include('admin.__include.message')
                    @yield('content')

                </div>
            </div>
        </div>
        <!--
        <div class="footer">
            @include('admin.__include.bottom')
        </div>
        -->
        <footer class="footer">
            @include('admin.__include.footer')
        </footer>
    </div>

    @section('js_block')
    @show
</body>
</html>
