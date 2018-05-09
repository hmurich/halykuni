
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="/new/css/reset.css">
        <link type="text/css" rel="stylesheet" href="/new/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="/new/css/style.css">
        <link type="text/css" rel="stylesheet" href="/new/css/color.css">
        @section('css_block')

        @show
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            @include('new.__include.header')

            <!-- wrapper -->
            <div id="wrapper">
                <!-- Content-->
                <div class="content">
                    @yield('content')

                    @include('new.__include.content_footer')
                </div>
                <!-- Content end -->
            </div>
            <!-- wrapper end -->

            @include('new.__include.footer')
            @include('new.__include.register_form')

            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="/new/js/jquery.min.js"></script>
        <script type="text/javascript" src="/new/js/plugins.js"></script>
        <script type="text/javascript" src="/new/js/scripts.js"></script>
        @section('js_block')
        @show
    </body>
</html>
