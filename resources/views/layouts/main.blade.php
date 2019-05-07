<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <link rel="stylesheet" href="/css/theme.minaead.css"> 

    @yield('css')
    
</head>

<body class="fixed-navbar">
    <div class="site">
        <header class="site-header">
           @include('layouts.nav')
        </header>
        
        <!-- end .site-header -->
        <div class="site-content" role="main">
            @yield('content')
        </div>
        <!-- end .site-content -->

        @include('layouts.footer')
        <!-- end .site-footer -->
    </div>
    <!-- end .site -->

    <!-- js: vendor -->
    <script src="/js/vendor.js"></script>
    <script src="/js/theme.minaead.js"></script>
    <script src="/plugins/parallax/parallax.min.js"></script>
    <script src="/plugins/easypiechart/jquery.easypiechart.min.js"></script>
    @yield('js')

</body>

</html>