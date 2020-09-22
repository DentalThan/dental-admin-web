<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"> <!-- Favicon-->
        <title>@yield('title') - {{ config('app.name') }}</title>
        <meta name="description" content="@yield('meta_description', config('app.name'))">
        <meta name="author" content="@yield('meta_author', config('app.name'))">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/authentication.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/color_skins.css') }}">

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

    ?>
    <body class="<?= $theme ?> authentication sidebar-collapse">

        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
            <div class="container">        
                <div class="navbar-translate n_logo">
                    <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">Oreo</a>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dashboard.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);">Search Result</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                                <i class="zmdi zmdi-twitter"></i>
                                <p class="d-lg-none d-xl-none">Twitter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                                <i class="zmdi zmdi-facebook"></i>
                                <p class="d-lg-none d-xl-none">Facebook</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">                        
                                <i class="zmdi zmdi-instagram"></i>
                                <p class="d-lg-none d-xl-none">Instagram</p>
                            </a>
                        </li>                
                        <li class="nav-item">
                            <a class="nav-link btn btn-white btn-round" href="{{route('authentication.register')}}">SIGN UP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-header">
            <div class="page-header-image" style="background-image:url('{{ asset('assets/images/login.jpg') }}')"></div>

            @yield('content')

            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                            <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                            <li><a href="javascript:void(0);">FAQ</a></li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        <span>Designed by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></span>
                    </div>
                </div>
            </footer>
            
        </div>

        <!-- Scripts -->
        @stack('before-scripts')
        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>    
        <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
        @stack('after-scripts')
        
    </body>
</html>
