<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="PARKERDEV">
    <title>Rainford Protect Panel | @yield('title')</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/tour/tour.css">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{Auth::user()->name}}</span><span class="user-status">{{Auth::user()->adminTag}}</span></div><span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="{{route('logout')}}"><i class="feather icon-power"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" style="box-shadow: 0 4px 25px 0 rgb(0 0 0 / 10%);">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('home')}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Rainford Protect Panel</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{route('home')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Основаня информация</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('home')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Главная</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Логирование</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Администрация</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('bans')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Bans">Баны</span></a>
                    </li>
                    <li><a href="{{route('kicks')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Kicks">Кики</span></a>
                    </li>
                    <li><a href="{{route('mutes')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Mutes">Муты</span></a>
                    </li>
                    <li><a href="{{route('jails')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Jails">Джайлы</span></a>
                    </li>
                    <li><a href="{{route('warns')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Warns">Варны</span></a>
                    </li>
                    <li><a href="{{route('reports')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Reports">Репорт</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Недвижимость</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('house')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Дома</span></a>
                    </li>
                    <li><a href="{{route('businesses')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Бизнесы</span></a>
                    </li>
                    <li><a href="{{route('cars')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Транспорт</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Ecommerce">Игроки</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('nickname')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Смена ника</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Панель управления</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-droplet"></i><span class="menu-title" data-i18n="Colors">Пользователи</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
@yield('content')
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">Powered by &copy; 2022<a class="text-bold-800 grey darken-2" href="https://vk.com/rainford.project" target="_blank">Rainford Project,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Made by hand & with ParkerDev<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/shepherd.min.js"></script>

<script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<script src="../../../app-assets/js/scripts/components.js"></script>
<script src="../../../app-assets/js/scripts/datatables/datatable.js"></script>
<!-- END: Theme JS-->

</body>
<!-- END: Body-->

</html>
