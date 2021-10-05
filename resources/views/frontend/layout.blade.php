<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/png" href="https://www.nachd-it.com/public/favicon.png" sizes="16x16">
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#ee3158"/>
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#ee3158"/>
    <meta name=msapplication-TileColor content=#FFFFFF>
    <meta name=msapplication-TileImage content=favicon.ico>
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-transcluent"/>
    <title>Nachd IT - Web, Mobile and desktop development</title>
    <!-- IE-Support -->
    <script src="js/ie-support.js" defer></script>
    <!-- css-files -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<div class="loader">
        <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
        </div>
</div>
    <div id="main-wrapper" class="wrapper-hidden z-index-100"></div>

<!-- [Optional] Toolbar -->
    <div class="toolbar-wrapper">
        <div class="toolbar-toggle">
            <i class="fa fa-cog"></i>
        </div>
        <div class="toolbar">
            <div class="toolbar-main">
                <h6 class="toolbar-title">Color Scheme</h6>
                <div class="toolbar-option color_scheme d-flex justify-content-between flex-wrap">
                    <div data-color-scheme="#e30c0c"></div>
                    <div data-color-scheme="#ee3158"></div>
                    <div data-color-scheme="#c73ede"></div>
                    <div data-color-scheme="#996ce9"></div>
                    <div data-color-scheme="#5f75ed"></div>
                    <div data-color-scheme="#2196f3"></div>
                    <div data-color-scheme="#03a9f4"></div>
                    <div data-color-scheme="#00bcd4"></div>
                    <div data-color-scheme="#00a999"></div>
                    <div data-color-scheme="#4caf50"></div>
                    <div data-color-scheme="#8bc34a"></div>
                    <div data-color-scheme="#ff9800"></div>
                </div>
                <div class="toolbar-option color-picker">
                    <h6 class="toolbar-title">Color Picker</h6>
                    <div class="d-flex">
                        <button class="jscolor {valueElement:'ColorValueInput', styleElement:'ColorStyleInput'}" id="ColorStyleInput">
                        </button>
                        <input id="ColorValueInput" class="jsvalue" value="7E57C2" type="text" placeholder="">
                    </div>
                </div>
                <div class="toolbar-option header-type d-flex flex-column">
                    <h6 class="toolbar-title">Header Animation</h6>
                    <div class="d-flex justify-content-between">
                        <a class="option_btn option_btn_active" data-header-type='navbar-fill'>Fill</a>
                        <a class="option_btn option_btn_off" data-header-type='navbar-fade'>Fade</a>
                        <a class="option_btn option_btn_off" data-header-type='navbar-small'>Resize</a>
                    </div>
                </div>
                <div class="toolbar-option logo-position d-flex flex-column">
                    <h6 class="toolbar-title">Logo Position</h6>
                    <div class="d-flex justify-content-between">
                        <a class="option_btn option_btn_active" data-logo-position='logo-left'>Left</a>
                        <a class="option_btn option_btn_off" data-logo-position='logo-right'>Right</a>
                    </div>
                </div>
                <div class="toolbar-option hamburger__type d-flex flex-column">
                    <h6 class="toolbar-title">Hamburger Button</h6>
                    <div class="d-flex justify-content-between flex-wrap">
                        <a class="option_btn_small option_btn_small_active" data-hamburger="hamburger--3dx">3dx</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--3dy">3dy</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--3dxy">3dxy</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--3dxy-r">3dxy-r</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--boring">boring</a>
                        <a class="option_btn_small option_btn_small_off"
                           data-hamburger="hamburger--collapse">collapse</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--elastic">elastic</a>
                        <a class="option_btn_small option_btn_small_off"
                           data-hamburger="hamburger--emphatic">emphatic</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--minus">minus</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--slider">slider</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--squeeze">squeeze</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--spin">spin</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--spring">spring</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--stand">stand</a>
                        <a class="option_btn_small option_btn_small_off" data-hamburger="hamburger--vortex">vortex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- [1] Section Accueil -->

                <!--
               <div class="navbar-additional align-items-center">
                    <div class="social-box">
                        <a href="https://www.facebook.com/nachd.it/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="social-box">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div class="social-box">
                        <a href="https://www.linkedin.com/company/nachd-it/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                <div class="navbar-search align-items-center justify-content-center">
                    <div class="search-input d-flex align-items-center justify-content-center">
                        <div class="search-icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="search-times">
                            <i class="fa fa-times"></i>
                        </div>
                    </div>
                    <form class="search-form">
                        <input type="text" placeholder="Input text end hit enter">
                    </form>
                </div>
            </div>
            <button class="hamburger justify-content-center align-items-center hamburger--spin" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
            </button>
        </div> -->

        
<nav class="navbar navbar-default desktop-menu logo-left">
        <div class="container-fluid navbar-inner">
            <div class="navbar-logo">
                <a href="index-2.html" class="logo-link d-flex align-items-center" data-aos="zoom-in"
                   data-aos-delay="1000" data-aos-easing="ease-in-out" data-aos-duration="700">
                    <!--<img src="img/logo/logo-l.png" alt="" class="logo-img logo-l">-->
                    <img src="img/logo/logo-d.png" alt="" class="logo-img logo-d">
                </a>
            </div>
            <div class="navbar-menu">
                <ul class="navbar-menu-list">
                    <li class="menu-primary-item menu-item-has-children">
                        <a class="mobile-menu-toggle primary-mobile-menu-toggle">Accueil</a>
                        <ul class="sub-menu primary_sub-menus">
                            <li class="menu-item-has-children">
                                <a class="mobile-menu-toggle">Raccourcis <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="home-slider-default.html">Présentation</a></li>
                                    <li class="menu-item-has-children"><a href="home-slider-fade.html">Evénement</a>
                                    </li>
                                    <li class="menu-item-has-children"><a href="home-slider-vertical.html">Stagiaires</a></li>
                                    
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="mobile-menu-toggle" href="technologies.html">Technologies</a>
                            </li>
                            <li>
                                <a class="mobile-menu-toggle" href="index-2.html">Recommandation</a>
                            </li>
                            
                            <li class="menu-item-has-children">
                                <a class="mobile-menu-toggle">Partenaires <i class="fa fa-angle-right"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('partner') }}">
                                        <img src="img/assets/4C.png" alt="" class="img-fluid img">
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-primary-item menu-item-has-children">
                        <a href="{{ route('event') }}">Evènements</a>
                        
                    </li>
                    <li class="menu-primary-item menu-item-has-children">
                        <a class="mobile-menu-toggle primary-mobile-menu-toggle">Offres</a>
                        <ul class="sub-menu primary_sub-menus">
                            <li class="menu-item-has-children">
                                <a href="{{ route('jobs') }}">Emplois </a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('internships') }}">Stages </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="menu-primary-item menu-item-has-children">
                        <a class="">Références</a>
                        
                    </li>
                    
                    <li class="menu-primary-item menu-item-has-children">
                        <a href="{{ route('gallery') }}">Albums</a>
                        
                    </li>
                    <li class="menu-primary-item menu-item-has-children">
                        <a href="{{ route('contact') }}">Contact</a>
                        
                    </li>
                    <li class="menu-primary-item menu-item-has-children">
                        <a class="mobile-menu-toggle primary-mobile-menu-toggle">Présentation</a>
                        <ul class="sub-menu primary_sub-menus">
                            <li class="menu-item-has-children">
                                <a href="{{ route('blog') }}">Nachd-it </a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('tech') }}">Technologies</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Recommandation</i></a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('team') }}" class="mobile-menu-toggle">Equipe </a>
                                
                            </li>
                            
                        </ul>
                    </li>
                </ul>
</nav>

<main>
@yield('content')
</main>

<!-- [13] Footer -->
<footer>
        <div class="container-fluid footer-inner">
            <div class="footer-top">
                <div class="container footer-top-inner">
                    <p class="info-text">Développement Web, Mobile et Desktop</p>
                    <a href="{{ route('layout') }}">
                        <div class="footer-logo">
                            <img src="img/logo/logo1.png" alt="" class="img-fluid">
                        </div>
                    </a>
                    <div class="social-networks">
                        <p class="title">Réseaux Sociaux</p>
                        <div class="social-wrapper">
                            <a href="https://www.facebook.com/nachd.it/" class="social-box">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-box">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/nachd-it/" class="social-box">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="social-box">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-body">
                <div class="container">
                    <div class="footer-sidebar">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="sidebar-widget text-widget">
                                    <h6 class="sidebar-title">À Propos Nous</h6>
                                    <p>NACHDT-IT : Société informatique crée en 2017, spécialisée en développement Web, Mobile et Desktop.
                                    </p>
                                    <h6 class="sidebar-title">INSCRIVEZ-VOUS À LA NEWSLETTER</h6>
                                    <form class="newsletter-form-widget">
                                        <input type="email" placeholder="Email*" required>
                                        <button type="submit"><i class="fa fa-envelope"></i></button>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="sidebar-widget latest-posts-widget">
                                    <h6 class="sidebar-title">Google Map</h6> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12941.959097268737!2d10.6376322!3d35.8124573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef9ba1ce6271c19!2sNachd+IT!5e0!3m2!1sen!2stn!4v1535621333825" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe> </div>
                            </div>

                        
                            <div class="col-lg-4">
                                <div class="sidebar-widget contact-info-widget">
                                    <h6 class="sidebar-title">Coordonnées</h6>
                                    <p class="description">Pour plus d'informations, contactez nous:</p>
                                    <ul class="contact-info">
                                        <li><i class="fa fa-map-marker"></i>
                                            <p>ISSATSo Incubator - Taffala City (Ibn Khaldoun) 4003, Sousse, Tunisia
                                            </p></li>
                                        <li><i class="fa fa-envelope"></i><a href="#">contact@nachd-it.com                                        </a></li>
                                        <li><i class="fa fa-phone"></i><a href="#">+216 27 751 305                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-wrapper">
                        <p class="copyright"><i class="fa fa-copyright"></i>Copyright NACHD IT 2021.</p>
                    </div>
                </div>
            </div>
        </div>
</footer>

</body>
</html>