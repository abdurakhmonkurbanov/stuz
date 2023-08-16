<!doctype html>
<html lang="en" dir="ltr">

<head>

    @yield('head')

</head>

<body class="app ltr landing-page horizontal">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->
@yield('menu')
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">
                    @yield('content')
                </div>
            </div>
            <!--app-content closed-->
        </div>

       @yield('footer')
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

@yield('js')

</body>

</html>
