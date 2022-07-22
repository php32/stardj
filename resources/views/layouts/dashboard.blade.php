<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <title>@yield('title')</title>
         <!-- Character Set and Responsive Meta Tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('img/logo/favicone.png') }}" type="image/x-icon" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/bootstrap.css') }}" />
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.9.0/main.min.css" />

        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard/style.css') }}" />

        <!-- Notify css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- @yield('pade-head') -->

        
        @yield('page-css')
    </head>

    <body>
        <section class="dashboard-main-section">
            <div class="sidebar-main">
              <a class="closebtnmob" href="javascript:void(0)">✕</a>
                <div class="logo-main-sec">
                    <a href="#"><img src="{{ asset('img/logo/logo.png') }}" /></a>
                </div>
                <!-- leftbat -->
                    @include('layouts.sidebar')
                <!-- end leftbar  -->
            </div>
            <div class="mobile-toogle">
            <div class="menu-icon" id="menu-Toggle">
                 <a href="javascript:void(0)"><img src="{{ asset('img/home/menu.png') }}" /></a>
            </div>
            <div class="mobile-logo">
                 <img src="{{ asset('img/logo/logo.png') }}" />
            </div>
       </div>
            @yield('content')
        </section>

        @include('layouts.dashboard_js') 
        @yield('page-js')
    </body>    
</html>