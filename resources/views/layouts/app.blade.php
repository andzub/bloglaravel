<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>{{ config('app.name') }}</title>
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
        <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    </head>
    <body id="body" data-spy="scroll" data-target=".header">
        <header class="header navbar-fixed-top"><!-- Header -->
            <nav class="navbar" role="navigation"><!-- Navbar -->
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>
                        <div class="logo"><!-- Logo -->
                            <a class="logo-wrap" href="#body">
                                {{--<img class="logo-img logo-img-main" src="{{ asset('img/logo.png') }}" alt="Asentus Logo">--}}
                                {{--<img class="logo-img logo-img-active" src="{{ asset('img/logo-dark.png') }}" alt="Asentus Logo">--}}
                                <h5 class="logo-img logo-img-main">and<span>zub</span></h5>
                                <h5 class="logo-img logo-img-active">and<span>zub</span></h5>
                            </a>
                        </div><!--/ logo -->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Главная</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">Обо мне</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Опыт</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Работы</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav><!--/ Navbar -->
        </header><!--/ Header -->

        <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/1920x1080/2.jpg') }}"><!-- Slider -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="promo-block-divider">
                            <h1 class="promo-block-title">Андрей <br/> Зуб</h1>
                            <p class="promo-block-text">Back-end разработчик</p>
                        </div>                        
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/andrey.zub.9" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/andrey-zub-522503136/" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--/ Slider -->

        <!--========== PAGE LAYOUT ==========-->

        @include('inc.about')
        
        @include('inc.experience')
       
        @include('inc.work')
        
        @include('inc.contacts')
        
        <!--========== END PAGE LAYOUT ==========-->

        <footer class="footer"><!-- Footer -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="logo"><!-- Logo -->
                            <a class="logo-wrap" href="#body">
                                <h5 class="logo-img logo-img-main">and<span>zub</span></h5>
                            </a>
                        </div><!--/ logo -->
                    </div>
                    <div class="col-xs-6 text-right sm-text-left">
                        <p class="margin-b-0"><a class="fweight-700" href="#">andzub</a> Powered by: <a class="fweight-700" href="https://laravel.com/">Laravel</a></p>
                    </div>
                </div>
            </div>
        </footer><!--/ Footer -->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.appear.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/progress-bar.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>

    </body>
</html>