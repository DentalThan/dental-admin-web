<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta name="description" content="@yield('meta_description', config('app.name'))">
        <meta name="author" content="@yield('meta_author', config('app.name'))">
        @yield('meta')
        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')        
        @if (Request::segment(2) != 'rtl' )
            <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
        @else
            <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.rtl.css')}}">
        @endif
        @if (trim($__env->yieldContent('page-style')))
            @yield('page-style')
        @endif
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        @if (Request::segment(2) === 'rtl' )
            <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">
        @endif
        <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
        @stack('after-styles')
    </head>
    <?php 
        $setting = !empty($_GET['theme']) ? $_GET['theme'] : '';
        $theme = "theme-cyan";
        $menu = "";
        if ($setting == 'p') {
            $theme = "theme-purple";
        } else if ($setting == 'b') {
            $theme = "theme-blue";
        } else if ($setting == 'g') {
            $theme = "theme-green";
        } else if ($setting == 'o') {
            $theme = "theme-orange";
        } else if ($setting == 'bl') {
            $theme = "theme-blush";
        } else {
            $theme = "theme-cyan";
        }

        if (Request::segment(2) === 'rtl' ){
            $theme .= " rtl";
        }
    ?>
    <body class="<?= $theme ?>">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="../assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
                <p>Please wait...</p>        
            </div>
        </div>
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        @include('layout.navbar')
        @include('layout.sidebar')
        @include('layout.rightsidebar')
        @include('layout.chatlauncher')
        <section class="content home">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>@yield('title') <small class="text-muted">Welcome to Oreo</small></h2>
                    </div>            
                    <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                        @if (Request::segment(1) === 'dashboard' )
                            <div class="inlineblock text-center m-r-15 m-l-15 d-none d-lg-inline-block">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                                <small class="col-white">Visitors</small>
                            </div>
                            <div class="inlineblock text-center m-r-15 m-l-15 d-none d-lg-inline-block">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                                <small class="col-white">Operations</small>
                            </div>
                        @endif

                        @if (Request::segment(2) === 'doctors' or Request::segment(2) === 'add-doctor' or Request::segment(2) === 'all-patients' or Request::segment(2) === 'add-patients' or Request::segment(2) === 'add-payment' or Request::segment(2) === 'all-departments' or Request::segment(2) === 'add-department')
                            <button class="btn btn-white btn-icon btn-round d-none d-md-inline-block float-right m-l-10" type="button">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
                        @endif

                        @if (Request::segment(2) === 'profile' or Request::segment(2) === 'patients-profile')
                            <button class="btn btn-white btn-icon btn-round d-none d-md-inline-block float-right m-l-10" type="button">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                        @endif

                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                            @if (trim($__env->yieldContent('parentPageTitle')))
                                <li class="breadcrumb-item">@yield('parentPageTitle')</li>
                            @endif
                            @if (trim($__env->yieldContent('title')))
                                <li class="breadcrumb-item active">@yield('title')</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">                
                @yield('content')
            </div>
        </section>
        @yield('modal')
        <!-- Scripts -->
        @stack('before-scripts')
        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>    
        <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>

        <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
        @stack('after-scripts')
        @if (trim($__env->yieldContent('page-script')))
            @yield('page-script')
		@endif
    </body>
</html>