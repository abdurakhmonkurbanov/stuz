<!-- app-Header -->
<div class="hor-header header">
    <div class="container main-container">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                href="javascript:void(0)"></a>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="{{route('index')}}">
                <img src="/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo" >
                <img src="/assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse bg-white px-0" id="navbarSupportedContent-4">
                        <!-- SEARCH -->
                        <div class="header-nav-right p-5">
                            <a href="{{route('login_form')}}" class="btn ripple btn-min w-sm btn-info"
                                >Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /app-Header -->

<div class="landing-top-header overflow-hidden">
    <div class="top sticky overflow-hidden">
        <!--APP-SIDEBAR-->
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar bg-transparent horizontal-main">
            <div class="container">
                <div class="row">
                    <div class="main-sidemenu navbar px-0">
                        <a class="navbar-brand ps-0 d-none d-lg-block" href="{{route('index')}}">
                            <img alt="" class="logo-2" src="/assets/images/brand/logo-3.png">
                            <img src="/assets/images/brand/logo.png" class="logo-3" alt="logo">
                        </a>

                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item active" data-bs-toggle="slide" href="#home"><span
                                        class="side-menu__label">On-line maktab</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#Features"><span
                                        class="side-menu__label">E-Kutibxona</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#About"><span
                                        class="side-menu__label">Online olimpiada</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#Faqs"><span
                                        class="side-menu__label">OTMga tayyorlash</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="#Blog"><span
                                        class="side-menu__label">Nazorat savollari</span></a>
                            </li>

                        </ul>
                        <div class="header-nav-right d-none d-lg-flex">

                            <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                                data-bs-toggle="modal">
                                                <i class="flag flag-uz"></i><span
                                                    class="fs-16 ms-2 d-none d-xl-block">UZB</span>
                            </a>
                            @if(Session::has('user_type') and Session::get('user_type') != 1 and Session::get('user_type') != 6)

                                <a href="{{route('login_form')}}" class="avatar avatar-md brround bg-info d-lg-none d-xl-block d-block"  data-bs-target="#login-selector"
                                data-bs-toggle="modal">{{Session::get('logo')}}
                                </a>

                            @else
                                <a href="{{route('login_form')}}" class="avatar avatar-md brround bg-info d-lg-none d-xl-block d-block ">Login
                                </a>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->
    </div>
</div>
