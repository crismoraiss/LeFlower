<!doctype html>
<html class="no-js" lang="zxx" style="border: none">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Título Padrão')</title>
    <meta name="description" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="keywords" content="Fitmas - Gym & Fitness HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/logo.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/logo.png') }}">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700;800&family=Kumbh+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.min.css') }}">
    <!-- Flip Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.flipster.min.css') }}">
    <!-- Theme Custom CSS -->

    <link rel="stylesheet" href="{{ asset('css/estilo-gaby.css') }}">

    <link href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"
        rel="stylesheet">

    <!-- Meu css -->
    <!-- LINK AOS CSS -->
    <!--about.css PÁGINA SOBRE-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <!--responsive.css PÁGINA SOBRE-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssCarrosel/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssCarrosel/templatemo-digimedia-v1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssCarrosel/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cssCarrosel/owl.css') }}">
    <!-- Custom -->
    <link href="{{ asset('assets/vendor/animate.css-master/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/custom/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/custom/css/custom-responsive.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('icon/css/quest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Link Icon FAQ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />

    <!-- CSS da Lupa -->
    <link rel="stylesheet" href="{{ asset('css/loupe.css') }}">


    @yield('extra-css')
</head>

<style>
    body {
        background-color: #ffff;
    }

    .hero-slider {
        position: relative;
    }

    .hero-slider::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 1);
        /* Altere o valor de '0.5' para ajustar a intensidade do escurecimento */
        pointer-events: none;
        /* Permite que você clique através da camada de sobreposição */
    }

    .social-btn a {
        height: 35px;
        width: 35px;
        line-height: 35px;
        border-radius: 7px;
        display: inline-block;
        background-color: var(--smoke-color4);
        color: var(--title-color);
        text-align: center;
        font-size: 12px;
        padding-top: 3%;
    }

    a i {
        font-size: 12pt;
    }

    .theme {
        --bg-color: #59848e;
        --main-color: #ffffff;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        background-color: var(--bg-color);
        border-radius: 100%;
        border: 2px solid #ffffff;
        box-shadow: 4px 4px #000000;
    }

    .input {
        cursor: pointer;
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 10;
        opacity: 0;
    }

    .icon {
        position: absolute;
        top: calc(50% -13px);
        left: calc(50% -13px);
        width: 26px;
        height: 26px;
    }

    .icon.icon-moon {
        fill: var(--main-color);
    }

    .icon.icon-sun {
        stroke: #FFD950;
        display: none;
    }

    .input:checked~.icon.icon-sun {
        display: block;
    }

    .input:checked~.icon.icon-moon {
        display: none;
    }

    .theme:active {
        box-shadow: 0px 0px var(--main-color);
        transform: translate(3px, 3px);
    }

    .hero-slider::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2));
        z-index: 1;
        /* Certifique-se de que a sobreposição esteja acima do vídeo */
    }

    .hero-slider video {
        position: relative;
        z-index: 0;
        /* Garanta que o vídeo esteja abaixo da sobreposição */
    }

    .button {
        position: relative;
        padding: 15px 45px;
        background: #fec195;
        font-size: 17px;
        font-weight: 500;
        color: #181818;
        cursor: pointer;
        border: 1px solid #fec195;
        border-radius: 8px;
        filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.2));
    }

    .button:hover {
        border: 1px solid #f3b182;
        background: linear-gradient(85deg,
                #fec195,
                #fcc196,
                #fabd92,
                #fac097,
                #fac39c);
        animation: wind 2s ease-in-out infinite;
    }

    @keyframes wind {
        0% {
            background-position: 0% 50%;
        }

        0% {
            background-position: 50% 100%;
        }

        0% {
            background-position: 0% 50%;
        }
    }

    .icon-1 {
        position: absolute;
        top: 0;
        right: 0;
        width: 25px;
        transform-origin: 0 0;
        transform: rotate(10deg);
        transition: all 0.5s ease-in-out;
        filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.3));
    }

    .button:hover .icon-1 {
        animation: slay-1 3s cubic-bezier(0.52, 0, 0.58, 1) infinite;
        transform: rotate(10deg);
    }

    @keyframes slay-1 {
        0% {
            transform: rotate(10deg);
        }

        50% {
            transform: rotate(-5deg);
        }

        100% {
            transform: rotate(10deg);
        }
    }

    .icon-2 {
        position: absolute;
        top: 0;
        left: 25px;
        width: 12px;
        transform-origin: 50% 0;
        transform: rotate(10deg);
        transition: all 1s ease-in-out;
        filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.5));
    }

    .button:hover .icon-2 {
        animation: slay-2 3s cubic-bezier(0.52, 0, 0.58, 1) 1s infinite;
        transform: rotate(0);
    }

    @keyframes slay-2 {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(15deg);
        }

        100% {
            transform: rotate(0);
        }
    }

    .icon-3 {
        position: absolute;
        top: 0;
        left: 0;
        width: 18px;
        transform-origin: 50% 0;
        transform: rotate(-5deg);
        transition: all 1s ease-in-out;
        filter: drop-shadow(2px 2px 3px rgba(0, 0, 0, 0.5));
    }

    .button:hover .icon-3 {
        animation: slay-3 2s cubic-bezier(0.52, 0, 0.58, 1) 1s infinite;
        transform: rotate(0);
    }

    @keyframes slay-3 {
        0% {
            transform: rotate(0deg);
        }

        50% {
            transform: rotate(-5deg);
        }

        100% {
            transform: rotate(0);
        }
    }

    .btn-flower {
        height: 4em;
        width: 20em;
        display: flex;
        align-items: center;
        justify-content: center;
        background: transparent;
        border: 0px solid black;
        cursor: pointer;
    }

    .wrapper {
        height: 2em;
        width: 6.2em;
        position: relative;
        background: transparent;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .text {
        font-size: 17px;
        z-index: 1;
        color: #000;
        padding: 4px 12px;
        border-radius: 4px;
        background: rgba(255, 255, 255, 0.7);
        transition: all 0.5s ease;
    }

    .flower {
        display: grid;
        grid-template-columns: 1em 1em;
        position: absolute;
        transition: grid-template-columns 0.8s ease;
    }

    .flower1 {
        top: -12px;
        left: -13px;
        transform: rotate(5deg);
    }

    .flower2 {
        bottom: -5px;
        left: 8px;
        transform: rotate(35deg);
    }

    .flower3 {
        bottom: -15px;
        transform: rotate(0deg);
    }

    .flower4 {
        top: -14px;
        transform: rotate(15deg);
    }

    .flower5 {
        right: 11px;
        top: -3px;
        transform: rotate(25deg);
    }

    .flower6 {
        right: -15px;
        bottom: -15px;
        transform: rotate(30deg);
    }

    .petal {
        height: 1em;
        width: 1em;
        border-radius: 40% 70% / 7% 90%;
        background: linear-gradient(#59848e, #456168);
        border: 0.5px solid #96d1ec;
        z-index: 0;
        transition: width 0.8s ease, height 0.8s ease;
    }

    .two {
        transform: rotate(90deg);
    }

    .three {
        transform: rotate(270deg);
    }

    .four {
        transform: rotate(180deg);
    }

    .btn-flower:hover .petal {
        background: linear-gradient(#59848e, #456168);
        border: 0.5px solid #96b4ec;
    }

    .btn-flower:hover .flower {
        grid-template-columns: 1.5em 1.5em;
    }

    .btn-flower:hover .flower .petal {
        width: 1.5em;
        height: 1.5em;
    }

    .btn-flower:hover .text {
        background: rgba(255, 255, 255, 0.4);
    }

    .btn-flower:hover div.flower1 {
        animation: 15s linear 0s normal none infinite running flower1;
    }

    @keyframes flower1 {
        0% {
            transform: rotate(5deg);
        }

        100% {
            transform: rotate(365deg);
        }
    }

    .btn-flower:hover div.flower2 {
        animation: 13s linear 1s normal none infinite running flower2;
    }

    @keyframes flower2 {
        0% {
            transform: rotate(35deg);
        }

        100% {
            transform: rotate(-325deg);
        }
    }

    .btn-flower:hover div.flower3 {
        animation: 16s linear 1s normal none infinite running flower3;
    }

    @keyframes flower3 {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .btn-flower:hover div.flower4 {
        animation: 17s linear 1s normal none infinite running flower4;
    }

    @keyframes flower4 {
        0% {
            transform: rotate(15deg);
        }

        100% {
            transform: rotate(375deg);
        }
    }

    .btn-flower:hover div.flower5 {
        animation: 20s linear 1s normal none infinite running flower5;
    }

    @keyframes flower5 {
        0% {
            transform: rotate(25deg);
        }

        100% {
            transform: rotate(-335deg);
        }
    }

    .btn-flower:hover div.flower6 {
        animation: 15s linear 1s normal none infinite running flower6;
    }

    @keyframes flower6 {
        0% {
            transform: rotate(30deg);
        }

        100% {
            transform: rotate(390deg);
        }
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .videoLeFLower {
        width: 100%;
        height: auto;
    }

    .logoVideo {
        display: none;
        margin-right: 3%;
    }

    .hero-style2 {
        display: flex;
        justify-content: center;
        align-items: center;
        align-content: center;
        padding: 398px 0 60px;
    }

    @media (max-width: 700px) {
        .hero2 {
            height: 650px;
        }

        /* .hero-slider{
        height: 550px;
        background: url('assets/banner/bannerRespons.jpeg');
        background-size: cover;
        background: url(none)
    } */

        .videoLeFLower {
            display: none;
        }

        .hero-slider video {
            display: none;
        }

        .logoVideo {
            display: contents;
        }

        .hero-style2 {
            display: none;
        }

        .btn-flower {
            margin-top: 130%;
        }
    }

    .widget-area {
        padding: 1% 12%;
    }

    .about-text {
        font-size: 11pt;
        color: gainsboro;
    }

    .social-btn {
        gap: 20%;
    }

    .footer-widget .wp-block-search__label,
    .footer-widget .widget_title {
        max-width: 100%;
        color: var(--white-color);
        border-bottom: none;
        margin: -0.04em 0 50px 0;
        font-size: 22px;
        font-weight: 500;
        position: relative;
    }

    .footer-widget .widget_title:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 3px;
        width: 100%;
        background: #D9D9D9;
    }

    .widget_title {
        text-align: center;
    }

    @media (min-width: 701px) and (max-width:1024px) {
        .widget-area {
            padding: 1% 28%;
            text-align: center;

        }

        .about-text {
            width: 200px;
        }
    }

    .selecao {
        height: 600px;
        display: flex;
        justify-content: space-around;
        padding: 0% 7%;
        margin: 2% 0%;
        margin-bottom: 7%;
    }

    .buttonCat {
        height: 50px;
        width: 100%;
        position: relative;
        background-color: transparent;
        cursor: pointer;
        border: 2px solid #ffffff;
        overflow: hidden;
        border-radius: 30px;
        color: #202020;
        transition: all 0.5s ease-in-out;
    }

    .btnCat-txt {
        z-index: 1;
        font-weight: 800;
        letter-spacing: 4px;
    }

    .type1::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        transition: all 0.5s ease-in-out;
        background-color: #333;
        border-radius: 30px;
        visibility: hidden;
        height: 10px;
        width: 10px;
        z-index: -1;
    }

    .buttonCat:hover {
        box-shadow: 1px 1px 200px #252525;
        color: #fff;
        border: none;
    }

    .type1:hover::after {
        visibility: visible;
        transform: scale(100) translateX(2px);
    }

    .service-description {
        color: #202020;
        text-align: start;
    }

    .service h4 {
        color: #202020;
    }
</style>

<body>




    <!--********************************
   Code Start From Here
 ******************************** -->




    <!--==============================
     Preloader
    ==============================-->
    {{-- <div class="preloader">
        <div class="preloader-inner">
            <span class="loader"></span>
        </div>
    </div> --}}


    </style>

    <div class="popup-search-box">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="Search Here..">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidemenu-wrapper">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><img src="assets/fechar.png" alt=""><i
                    class="far fa-times"></i></button>

            <div class="widget footer-widget">
                <div class="widget-about"
                    style="
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                ">
                    <div class="footer-logo"
                        style="
                        display: flex;
                        justify-content: center;
                    ">
                        <a href="/"><img src="{{ asset('assets/logo.png') }}" alt="Viva Bem"></a>
                    </div>
                    <p class="about-text">Um centro de bem-estar, conhecido como ponto focal para o aprimoramento
                        físico e mental, é uma instituição dedicada ao cultivo holístico do corpo e da mente. Mais do
                        que uma academia de ginástica, é um refúgio para nutrir sua saúde e vitalidade. Em nossas
                        instalações, proporcionamos uma variedade de experiências que transcendem o tradicional.</p>

                    <h3 class="widget_title">Siga-nos nas Redes Sociais</h3>
                    <div class="social-btn" style="display: flex; gap: 10px; justify-content: flex-start; ">
                        <a id="fdp" href="https://www.facebook.com/" class="social-icon"><i
                                class="fab fa-facebook"></i></a>
                        <a id="fdp" href="https://twitter.com/" class="social-icon"><i
                                class="fab fa-twitter"></i></a>
                        <a id="fdp" href="https://pinterest.com/" class="social-icon"><i
                                class="fab fa-pinterest-p"></i></a>
                        <a id="fdp" href="https://instagram.com/" class="social-icon"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Removido Links Rápidos -->
            <!-- <div class="widget widget_nav_menu footer-widget">
            <h3 class="widget_title">Link Rápidos</h3>
            <ul class="menu">
                <li><a href="/sobre">Sobre nós</a></li>
                <li><a href="project-details.html">Nossa Missão</a></li>
                <li><a href="team.html">Conheça Nossa Equipe</a></li>
                <li><a href="project.html">Nossos Projetos</a></li>
                <li><a href="/contato">Contate-nos</a></li>
            </ul>
        </div> -->
        </div>
    </div>
    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-area text-center">
            <button class="menu-toggle">
                <img src="assets/fechar.png" alt=""><i class="far fa-times"></i>
            </button>
            <div class="mobile-logo">
                <a href="/"><img style="width: 80%;" src="{{ asset('assets/logo.png') }}" alt="Le Flower"
                        class="mobile-logo-img"></a>
            </div>
            <div class="mobile-menu">
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fas fa-home menu-icon"></i>Home</a></li>
                    <li><a href="{{ route('sobre') }}"><i class="fas fa-spa menu-icon"></i>Sobre</a></li>
                    <li><a href="{{ route('servico') }}"><i class="fas fa-cut menu-icon"></i>Serviço</a></li>
                    <li><a href="{{ route('contato') }}"><i class="fas fa-envelope menu-icon"></i>Contato</a></li>
                    <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt menu-icon"></i>Login</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
        Header Area
    ==============================-->
    <header class="nav-header header-layout2">
        <div class="header-top d-lg-block d-none">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li>leflower@gmail.com</a></li>
                                <li>Seg - Sab: 8h00 am - 23h00 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container-fluid">
                    <div class="row infeliz align-items-center justify-content-lg-start justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                @yield('logo')
                            </div>
                        </div>

                        <div class="col-auto m-lg-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('sobre') }}">Sobre</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('servico') }}">Serviço</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contato') }}">Contato</a>
                                    </li>


                                </ul>
                            </nav>
                            <div class="navbar-right d-inline-flex d-lg-none">
                                <button type="button" class="menu-toggle icon-btn"> <i
                                        class="fa fa-home nav-icon"></i></button>
                            </div>
                        </div>
                        {{-- <div class="col-auto d-xxl-block d-none">
                            <div class="navbar-right-desc">
                                <i class="fas fa-phone-volume"></i><a href="tel:+2590256215">+259 (0) 256 215</a>
                            </div>
                        </div> --}}
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                {{-- Botão de login --}}
                                <a href="{{ route('login') }}">
                                    <button style="font-weight: bold" class="button">
                                        Login
                                        <div class="icon-1">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26.3 65.33"
                                                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                version="1.1" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs></defs>
                                                <g id="Layer_x0020_1">
                                                    <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                    <path
                                                        d="M13.98 52.87c0.37,-0.8 0.6,-1.74 0.67,-2.74 1.01,1.1 2.23,2.68 1.24,3.87 -0.22,0.26 -0.41,0.61 -0.59,0.97 -2.95,5.89 3.44,10.87 2.98,0.78 0.29,0.23 0.73,0.82 1.03,1.18 0.33,0.4 0.7,0.77 1,1.15 0.29,0.64 -0.09,2.68 1.77,4.91 5.42,6.5 5.67,-2.38 0.47,-4.62 -0.41,-0.18 -0.95,-0.26 -1.28,-0.54 -0.5,-0.41 -1.23,-1.37 -1.66,-1.9 0.03,-0.43 -0.17,-0.13 0.11,-0.33 4.98,1.72 8.4,-1.04 2.38,-3.16 -1.98,-0.7 -2.9,-0.36 -4.72,0.16 -0.63,-0.58 -2.38,-3.82 -2.82,-4.76 1.21,0.56 1.72,1.17 3.47,1.3 6.5,0.5 2.31,-4.21 -2.07,-4.04 -1.12,0.04 -1.62,0.37 -2.49,0.62l-1.25 -3.11c0.03,-0.26 0.01,-0.18 0.1,-0.28 1.35,0.86 1.43,1 3.25,1.45 2.35,0.15 3.91,-0.15 1.75,-2.4 -1.22,-1.27 -2.43,-2.04 -4.22,-2.23l-2.08 0.13c-0.35,-0.58 -0.99,-2.59 -1.12,-3.3l-0.01 -0.01 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0c-0.24,-0.36 1.88,1.31 2.58,1.57 1.32,0.49 2.6,0.33 3.82,0 -0.37,-1.08 -1.17,-2.31 -2.13,-3.11 -1.79,-1.51 -3.07,-1.41 -5.22,-1.38l-0.93 -4.07c0.41,-0.57 1.41,0.9 2.82,1.36 0.96,0.31 1.94,0.41 3,0.14 2,-0.52 -2.25,-4.4 -4.53,-4.71 -0.7,-0.1 -1.23,-0.04 -1.92,-0.03 -0.46,-0.82 -0.68,-3.61 -0.92,-4.74 0.8,0.88 1.15,1.54 2.25,2.23 0.8,0.5 1.58,0.78 2.57,0.85 2.54,0.18 -0.1,-3.47 -0.87,-4.24 -1.05,-1.05 -2.34,-1.59 -4.32,-1.78l-0.33 -3.49c0.83,0.67 1.15,1.48 2.3,2.16 1.07,0.63 2.02,0.89 3.58,0.79 0.15,-1.34 -1.07,-3.39 -2.03,-4.3 -1.05,-0.99 -2.08,-1.47 -3.91,-1.68l-0.07 -3.27 0.32 -0.65c0.44,0.88 1.4,1.74 2.24,2.22 0.69,0.39 2.4,1.1 3.44,0.67 0.31,-1.92 -1.84,-4.49 -3.5,-5.29 -0.81,-0.39 -1.61,-0.41 -2.18,-0.68 -0.12,-1.28 0.27,-3.23 0.37,-4.55l-0.89 0c-0.06,1.28 -0.35,3.12 -0.34,4.31 -0.44,0.45 -0.37,0.42 -0.96,0.64 -3.88,1.49 -4.86,6.38 -3.65,7.34 1.42,-0.31 3.69,-2.14 4.16,-3.66 0.23,0.5 0.1,2.36 0.05,3.05 -1.23,0.4 -2.19,1.05 -2.92,1.82 -1.17,1.24 -2.36,4.04 -1.42,5.69 1.52,0.09 4.07,-2.49 4.49,-4.07l0.29 3.18c-2.81,0.96 -5.01,3.68 -4.18,7.43 2.06,-0.09 3.78,-2.56 4.66,-4.15 0.23,1.45 0.67,3.06 0.74,4.52 -1.26,0.93 -2.37,1.8 -2.97,3.55 -0.48,1.4 -0.49,3.72 0.19,4.55 0.59,0.71 2.06,-1.17 2.42,-1.67 1,-1.35 0.81,-1.92 1.29,-2.46l0.7 3.44c-0.49,0.45 -0.94,0.55 -1.5,1.19 -1.93,2.23 -2.14,4.33 -1.01,6.92 0.72,0.09 2.04,-1.4 2.49,-2.06 0.65,-0.95 0.79,-1.68 1.14,-2.88l0.97 2.92c-0.2,0.55 -1.84,1.32 -2.6,3.62 -0.54,1.62 -0.37,3.86 0.67,4.93 0.58,-0.09 1.85,-1.61 2.2,-2.19 0.66,-1.09 0.66,-1.64 1,-2.93l1.32 3.18c-0.23,0.72 -1.63,1.72 -1.82,4.18 -0.17,2.16 1.11,6.88 3.13,2.46zm-4.09 -16.89l-0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 -0 0.01 0.01z"
                                                        class="fil0"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-2">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 11.67 37.63"
                                                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                version="1.1" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs></defs>
                                                <g id="Layer_x0020_1">
                                                    <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                    <path
                                                        d="M7.63 35.26c-0.02,0.13 0.01,0.05 -0.06,0.14 -0,0 -0.08,0.07 -0.11,0.1 -0.42,0.25 -0.55,0.94 -0.23,1.4 0.68,0.95 2.66,0.91 3.75,0.21 0.2,-0.13 0.47,-0.3 0.57,-0.49 0.09,-0.02 0.04,0.03 0.11,-0.07l-1.35 -1.24c-0.78,-0.78 -1.25,-1.9 -2.07,-0.62 -0.11,0.18 -0.06,0.16 -0.22,0.26 -0.4,-0.72 -0.95,-1.79 -1.26,-2.59 0.82,0.02 1.57,-0.12 2.16,-0.45 0.49,-0.27 1.15,-0.89 1.33,-1.4 0.1,-0.06 0.02,0.01 0.06,-0.1 -0.24,-0.16 -0.87,-0.37 -1.19,-0.52 -0.4,-0.19 -0.73,-0.39 -1.09,-0.62 -0.25,-0.16 -0.85,-0.6 -1.18,-0.3 -0.35,0.32 -0.32,0.83 -0.53,1.17 -0.71,-0.3 -0.55,-0.26 -0.84,-1.22 -0.15,-0.5 -0.31,-1.12 -0.41,-1.66l0.03 -0.13c0.56,0.23 1.28,0.37 1.99,0.28 0.56,-0.07 1.33,-0.42 1.62,-0.71l0.1 -0.1c-0.74,-0.68 -1.09,-1.2 -1.65,-1.99 -1.09,-1.52 -1.2,-0.28 -1.92,0.17 -0.26,-0.79 -0.73,0.2 -0.12,-2.76 0.06,-0.3 0.19,-0.7 0.2,-0.98 0.18,0.08 0.01,-0.01 0.11,0.08 0.05,0.05 0.07,0.07 0.1,0.12 0.94,1.17 3.63,0.82 4.21,0.01 0.13,-0.02 0.06,0.03 0.1,-0.1 -1.14,-0.81 -1.91,-2.89 -2.58,-2.67 -0.29,0.09 -0.78,0.63 -0.93,0.87 -0.54,-0.48 -0.36,-0.63 -0.38,-0.81 0.01,-0.01 0.03,-0.04 0.03,-0.03 0.01,0.02 0.36,-0.35 0.45,-0.6 0.13,-0.35 0.04,-0.65 -0.05,-0.95 0.06,-0.41 0.33,-1.33 0.28,-1.71 0.22,-0.05 0.19,0.05 0.45,0.17 0.47,0.23 1.17,0.33 1.7,0.32 0.62,-0 1.74,-0.39 1.94,-0.75 0.14,-0.02 0.05,0.06 0.13,-0.09 -1.05,-1.1 -0.7,-0.64 -1.62,-1.92 -0.58,-0.81 -0.9,-1.27 -1.9,0.12 -0.44,-0.5 -0.64,-0.69 -0.66,-1.24 0.02,-0.31 0.15,-0.36 0.08,-0.73 -0.04,-0.24 -0.14,-0.41 -0.29,-0.59l-0.47 -2.54c0.09,-0.14 -0.09,-0.1 0.2,-0.05 0.06,0.01 0.19,0.05 0.3,0.07 0.54,0.09 1.47,0.01 1.95,-0.15 0.57,-0.19 1.53,-0.8 1.68,-1.18 0.16,-0.07 0.05,0.02 0.15,-0.13 -0.12,-0.15 -0.95,-0.65 -1.15,-0.8 -1.43,-1.08 -2.21,-2.77 -3.16,-0.38 -0.2,-0.1 -0.75,-0.55 -0.83,-0.74 -0.15,-0.35 -0.21,-0.81 -0.37,-1.15l-0.1 -0.25c-0.03,-0.3 -0.44,-1.33 -0.57,-1.64 -0.2,-0.51 -0.47,-1.09 -0.64,-1.6l-0.55 0c0.14,0.42 0.36,0.84 0.53,1.28 0.12,0.3 0.19,0.35 0.06,0.66l-0.21 0.52c-0.01,0.01 -0.01,0.02 -0.02,0.03 -0.06,0.1 -0.03,0.05 -0.06,0.09 -1.44,-1.03 -1.66,-0.73 -2.07,0.46 -0.16,0.46 -0.3,0.93 -0.5,1.36l-0.64 1.28c0.06,0.07 -0,0.03 0.1,0.03 0.05,0.05 0.02,0.03 0.1,0.08l0.49 0.14c0.23,0.05 0.44,0.09 0.66,0.1 0.55,0.04 0.94,-0.06 1.35,-0.19 0.54,-0.18 1.09,-0.44 1.5,-0.82 0.15,-0.14 0.24,-0.3 0.4,-0.41l0.46 1.66c0.03,0.74 -0.09,0.6 0.27,1.21 0.01,0.01 0.01,0.02 0.02,0.03 0.01,0.01 0.01,0.02 0.02,0.04l0.07 0.11c-0.02,0.22 0.19,1.01 0.24,1.29 0.09,0.46 -0.21,0.79 -0.3,1.2 -0.55,-0.23 -1.25,-1.06 -1.66,-0.23 -0.12,0.25 -0.17,0.36 -0.26,0.62 -0.33,1.01 -0.63,1.61 -1.06,2.43l0.12 0.04 0.23 0.11c0.06,0.02 0.17,0.04 0.25,0.06 0.17,0.04 0.34,0.08 0.52,0.09 0.29,0.02 0.93,0.07 1.12,-0.13 0.42,0.01 1.24,-0.49 1.51,-0.71 0.01,0.01 0.03,0 0.04,0.02l0.09 0.06c-0.04,0.29 0.02,0.41 0.03,0.7l-0.05 1.41c-0.06,1.12 -0.29,1.06 -0.76,1.69 -0.08,-0.07 -0.03,-0.01 -0.11,-0.11 -0.03,-0.03 -0.06,-0.08 -0.09,-0.11 -0.2,-0.25 -0.38,-0.54 -0.7,-0.69 -0.7,-0.32 -1.52,1.73 -2.82,2.61 0.04,0.2 -0.01,0.06 0.1,0.11 0.25,0.3 1,0.67 1.5,0.78 0.35,0.08 0.71,0.08 1.09,0.05 0.25,-0.02 0.82,-0.16 0.92,-0.13 -0.16,0.69 -0.35,1.35 -0.52,2.03 -0.25,1 -0.03,0.77 -0.98,1.53 -0.3,-0.31 -0.33,-0.77 -0.77,-1.02 -0.42,-0.25 -0.91,0.35 -1.12,0.55 -0.33,0.32 -0.58,0.6 -0.97,0.89 -0.19,0.14 -0.34,0.26 -0.53,0.4 -0.14,0.11 -0.43,0.29 -0.53,0.4 0.1,0.15 -0.02,0.06 0.15,0.13 0.09,0.22 0.35,0.38 0.54,0.52 0.22,0.16 0.43,0.29 0.69,0.39 0.43,0.17 1.32,0.31 1.87,0.23l0.23 -0.05c0.01,-0 0.03,-0.02 0.04,-0.02 0.01,-0 0.02,-0.01 0.03,-0.02 0.32,0.05 0.52,-0.18 0.79,-0.24l-0.02 0.66c0,0.77 -0.24,0.75 0.16,1.51l0.04 0.07c0,0.01 0.01,0.03 0.02,0.04 -0.05,0.35 0.18,1.03 0.24,1.4 -0.23,0.18 -0.34,0.33 -0.51,0.41 -0.75,-1.17 -0.82,-1.52 -1.92,-0.43 -0.32,0.31 -0.59,0.57 -0.95,0.86 -0.23,0.19 -0.95,0.65 -1.05,0.81l0.13 0.1c0.88,1.15 3.14,1.5 4.1,0.82 0.47,-0.34 0.54,-0.56 0.52,-1.34l0.67 1.84c0.03,0.16 0.06,0.28 0.12,0.42 0.03,0.06 0.05,0.12 0.09,0.17 0.1,0.15 0.03,0.06 0.13,0.14 -0,0.29 0.14,0.22 0.06,0.56 -0.03,0.13 -0.14,0.43 -0.19,0.53 -1.94,-1.27 -1.57,-0.02 -2.28,1.76 -0.16,0.41 -0.37,0.77 -0.53,1.2 0.09,0.08 0.01,0.03 0.15,0.03 0.29,0.33 1.66,0.28 2.36,-0.01 0.48,-0.2 0.96,-0.46 1.3,-0.82 0.15,-0.16 0.16,-0.3 0.38,-0.33 0.14,0.08 0.17,0.19 0.27,0.36zm-3.62 -12.85c0.13,-0.01 0.31,-0.15 0.55,-0.19 -0.01,0.45 0.02,0.74 -0.34,0.45 -0.06,-0.05 -0.09,-0.06 -0.12,-0.09 -0.09,-0.1 -0.04,-0.01 -0.09,-0.17zm1.92 -12.29l-0.04 0.13c-0.07,-0.02 -0.17,-0.02 -0.21,-0.03 -0.27,-0.08 -0.09,0.04 -0.16,-0.16 0.12,-0.08 0.18,-0.23 0.34,-0.35l0.08 0.4zm1.33 3.05l-0.4 0.17c-0,-0.08 -0,-0.15 -0.02,-0.23 -0.02,-0.09 -0.03,-0.07 -0.05,-0.11l0.07 -0.16c0.21,0.11 0.28,0.16 0.4,0.32zm-1.54 6.48l0.16 -0.51c0.17,0.07 0.25,0.14 0.36,0.29l-0.52 0.22zm0.28 10.88l-0.09 -0.38 0.37 0.07c-0.02,0.1 -0.03,0.13 -0.09,0.19 -0.13,0.15 0.01,0.06 -0.19,0.12zm-1.05 -5.97c0.06,0.12 0.16,0.16 0.26,0.23 -0.09,0.14 -0.22,0.18 -0.37,0.21 -0,-0.02 -0.02,-0.27 -0.02,-0.27 0.04,-0.19 -0.06,-0.09 0.13,-0.16zm1.03 -8.01c-0.09,-0.02 -0.15,-0.02 -0.22,-0.07 -0.21,-0.13 -0.08,-0.02 -0.14,-0.18 0.15,-0.05 0.21,-0.15 0.45,-0.24l-0.08 0.48zm0.57 16.58l-0.45 -0c0.02,-0.18 0.12,-0.3 0.26,-0.42l0.18 0.42zm-1.45 -3.7l-0.19 -0.23c-0.06,-0.07 -0.1,-0.13 -0.17,-0.19 -0.24,-0.23 -0.29,-0.14 -0.36,-0.36l0.46 -0.19c0.07,0.14 0.25,0.78 0.26,0.97zm0.37 -23.67l-0.12 -0.57 0.54 0.21c-0.07,0.16 -0.27,0.31 -0.41,0.36zm-1.46 -3.02c-0.07,0.01 -0.19,-0.04 -0.3,-0.06 -0.04,-0.01 -0.14,-0.02 -0.18,-0.03 -0.15,-0.07 -0.06,0.04 -0.14,-0.13 0.11,-0.07 0.2,-0.27 0.37,-0.4 0.13,0.13 0.2,0.43 0.24,0.62z"
                                                        class="fil0"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="icon-3">
                                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 25.29 76.92"
                                                style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                                version="1.1" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs></defs>
                                                <g id="Layer_x0020_1">
                                                    <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                    <path
                                                        d="M19.14 6.58c0.09,0.1 -0.02,0.03 0.17,0.15 0.04,0.03 0.19,0.09 0.27,0.13l0.16 0.02c0.12,0.14 0.02,0.06 0.22,0.18 0.63,0.37 1.81,0.52 2.51,0.53 0.42,-0.26 0.61,-1.58 0.55,-2.27 -0.11,-1.17 -1.02,-3.42 -2.17,-3.76 -0.84,-0.25 -1.19,0.02 -1.4,0.7 -0.03,0.1 -0.05,0.19 -0.09,0.28l-0.18 0.25c-0.18,-0.36 -0.77,-0.97 -1.2,-1.18 -0.64,-0.31 -0.36,-0.26 -0.84,-1.59l-0.75 0c0.2,0.63 0.44,1.27 0.61,1.92 0.17,0.64 0.47,1.46 0.58,2.05 -0.21,0.36 -0.43,0.5 -0.31,1.1 0.11,0.51 0.35,0.71 0.76,0.9 0.13,0.31 0.36,1.33 0.39,1.78 -0.68,0.24 -1.38,0.85 -1.62,1.43 -0.45,-0.47 -0.29,-1.59 -1.59,-1.22 -0.8,0.22 -1.09,0.8 -1.45,1.52 -0.58,1.18 -0.96,2.15 -0.6,3.58 0.04,0.17 0.13,0.4 0.19,0.55 0.11,0.29 0.09,0.34 0.35,0.44 1.74,-0.01 2.96,-0.82 4.13,-1.55 0.22,-0.13 0.65,-0.39 0.79,-0.62 0.74,-1.2 -0.74,-2.14 -1.7,-2.43 -0.01,-0.51 1.07,-0.87 1.7,-0.82 0.21,1.74 0.56,3.5 0.61,5.33 0.05,2.05 0.01,3.68 -0.08,5.71 -1.2,0.52 -0.99,0.65 -1.77,1.46 -0.39,-0.45 -0.22,-1.6 -1.59,-1.18 -0.79,0.24 -0.91,0.63 -1.42,1.55 -0.78,1.41 -0.95,2.66 -0.36,4.15 0.14,0.35 0.06,0.36 0.36,0.37 0.78,-0 1.47,-0.18 2.09,-0.43 0.51,-0.2 1.26,-0.76 1.69,-0.86 -0.18,0.3 -0.34,0.91 -0.48,1.25l-1.54 3.5c-1.75,0.08 -1.26,0.29 -2.27,0.59 0.1,-1.15 0.1,-1.69 -1.1,-1.78 -0.7,-0.05 -1.5,0.65 -1.91,0.96 -1.04,0.82 -1.93,1.81 -1.94,3.77 0.09,0.22 -0.03,0.09 0.18,0.11 0.24,0.36 1.4,0.49 1.94,0.58l0.19 -0.01 0.71 -0.01 0.08 -0.02 1.74 -0.17c0.25,0.04 0.03,-0.07 0.19,0.09l-2.62 4.74c-0.28,0.51 -0.56,1.2 -0.86,1.61 -0.44,-0.02 -0.69,-0.14 -1.18,-0.08 -0.38,0.04 -0.72,0.17 -1.08,0.22 0.1,-0.53 0.78,-1.5 -0.62,-1.96 -0.79,-0.26 -1.74,0.32 -2.33,0.6 -2.12,1.02 -2.81,3.28 -2.36,3.38 0.01,0.01 0.03,0.02 0.03,0.04l0.11 0.1c0.42,0.34 1.16,0.64 1.66,0.79 0.65,0.19 1.73,0.31 2.43,0.38 3,0.28 1.16,-2.8 1.09,-3.14 0.86,0.12 1.3,-0.05 1.81,0.56 -0.08,0.35 -0.53,1.2 -0.71,1.6 -0.74,1.61 -1.24,3.24 -1.73,4.96 -0.92,0.11 -1.11,0.44 -1.77,0.69 0.01,-1.08 0.1,-1.68 -1.14,-1.71 -0.55,-0.01 -0.8,0.17 -1.11,0.41 -1.43,1.08 -2.52,2.24 -2.53,4.15 -0,0.62 0.11,0.48 0.22,0.54 0.63,0.38 1.79,0.44 2.67,0.35 0.47,-0.05 0.97,-0.11 1.43,-0.2l0.98 -0.22c0.38,-0.08 0.14,-0.15 0.26,0.06 -0.08,0.78 -0.66,2.6 -0.56,3.29 -0.13,0.14 -0.07,0.08 -0.17,0.29 -0.06,0.13 -0.08,0.18 -0.12,0.33 -0.07,0.3 -0.02,0.6 -0.03,0.92 -0.09,0.94 -0.17,0.52 -0.78,0.94 -0.32,0.22 -0.57,0.55 -0.86,0.82 -0.29,-0.69 -0.22,-1.44 -1.39,-1.13 -0.93,0.25 -1.93,2.19 -2.03,3.16 -0.06,0.56 0.02,1.84 0.39,2.08 2,0.02 2.64,-0.6 4.08,-1.25l-0.01 0.28c-0.06,0.58 -0.22,2.09 -0.14,2.62 -0.44,0.37 -0.46,1.03 -0.12,1.49 -0.08,3.97 0.16,2.73 -0.77,3.57 -0.24,0.21 -0.37,0.4 -0.62,0.62 -0.36,-0.53 -0.09,-1.43 -1.37,-1.13 -0.98,0.23 -1.92,2.22 -2.06,3.14 -0.07,0.47 -0.07,1.79 0.41,2.09 0.86,0.04 1.94,-0.12 2.51,-0.52l0.16 -0.08c0.6,-0.17 1.39,-0.67 1.84,-0.94 0.12,0.18 0.04,0.07 0.14,0.1 -0.18,0.38 -0.31,0.07 -0.71,0.58 -0.67,0.86 0.33,1.72 0.89,2.31 0.6,0.64 1.71,1.63 2.94,1.88 0.38,-0.11 0.92,-1.2 1.04,-1.69 0.21,-0.86 0.15,-1.53 -0.05,-2.41 -0.22,-0.94 -0.24,-1.38 -1.01,-1.81 -0.93,-0.52 -1.19,0.28 -1.59,0.76 -0.21,-0.33 -0.33,-0.79 -0.58,-1.12 -0.48,-0.62 -0.48,-0.13 -0.5,-1.22 -0.02,-1.09 0.05,-2.25 0.01,-3.32 0.37,0.22 0.89,0.86 1.37,1.21 0.51,0.37 1.05,0.65 1.76,0.82 0.32,-0.02 0.92,-1.21 1.04,-1.68 0.22,-0.87 0.15,-1.53 -0.04,-2.41 -0.19,-0.86 -0.3,-1.41 -0.96,-1.79 -1.06,-0.6 -1.26,0.38 -1.71,0.74 -0.22,-0.8 -0.65,-1.34 -1.19,-1.71l0.5 -4.35 0.38 0.28c0.23,0.25 0.6,0.67 0.87,0.82 0.07,0.1 0.05,0.1 0.19,0.21 0.18,0.23 0.66,0.57 0.92,0.6 0.1,0.13 -0.01,0.03 0.16,0.16 0.08,0.06 0.1,0.07 0.18,0.11 0.14,0.07 0.26,0.1 0.44,0.15l0.45 0.17c0.35,0.08 0.75,-0.74 0.91,-1.05 0.21,-0.4 0.41,-1.07 0.43,-1.57 -0,-0.28 0.04,-0.67 -0.1,-0.85l0.03 -0.17c-0,-0.04 -0.01,-0.13 -0.01,-0.15 -0.05,-0.13 -0.03,-0.1 -0.09,-0.17 0.06,-0.51 -0.25,-1.75 -0.94,-2.22 -1.11,-0.74 -1.37,0.09 -1.86,0.69l-0.12 -0.2c-0.28,-0.56 -0.41,-1.06 -1,-1.45 0.04,-1.21 1.29,-5.03 1.31,-5.65 0.07,0.06 0.05,0.04 0.12,0.13 0.63,0.83 0.41,0.6 1.22,1.38 0.76,0.74 1.67,1.73 2.95,1.92 0.28,0.13 0.55,-0.41 0.69,-0.64 0.21,-0.34 0.36,-0.64 0.47,-1.02 0.36,-1.24 0.14,-3.92 -1.03,-4.6 -1.23,-0.72 -1.67,0.89 -1.75,0.72 -0.01,-0.01 -0.03,0.02 -0.04,0.03 -0.19,-0.33 -0.3,-0.68 -0.49,-1 -0.22,-0.38 -0.47,-0.51 -0.68,-0.79 0.39,-1.04 1.05,-2.29 1.59,-3.3 0.57,-1.06 1.2,-2.15 1.7,-3.17 1.43,-0.02 1.51,0.55 1.8,0.6 -0.1,0.19 -0.02,0.07 -0.16,0.2 -0.01,0.01 -0.21,0.13 -0.23,0.15 -0.8,0.47 -1.8,0.96 -1.37,2.09 0.14,0.37 0.42,0.53 0.75,0.73 1.23,0.73 2.46,1.53 4.32,1.53 0.28,-0.08 0.25,-0.15 0.35,-0.44 0.22,-0.63 0.33,-1.22 0.26,-1.93 -0.11,-1.05 -1.06,-3.33 -2.21,-3.65 -1.31,-0.37 -1.17,0.6 -1.56,1.21l-0.2 -0.19c-0.84,-0.96 -0.61,-0.56 -1.27,-1.09 0.16,-0.47 0.7,-1.32 0.98,-1.82 1.05,-1.91 1.94,-3.59 2.84,-5.61 0.73,0.01 1.23,0.31 1.57,0.68 -0.26,0.25 -1.37,0.7 -1.67,1.19 -0.51,0.8 -0.07,1.45 0.63,1.87 1.15,0.7 2.56,1.58 4.34,1.55 0.33,-0.09 0.46,-0.67 0.52,-0.98 0.28,-1.4 -0.01,-2.34 -0.66,-3.5 -0.49,-0.87 -0.67,-1.3 -1.44,-1.54 -1.15,-0.36 -1.27,0.44 -1.56,1.23 -0.65,-0.55 0.03,-0.23 -1.38,-1.25 0.22,-0.6 1.08,-2.59 1.06,-3.14 0.38,-0.35 0.52,-0.78 0.43,-1.4 0.22,-0.75 0.67,-4.16 0.53,-5 0.32,0.09 0.75,0.4 1.06,0.57 0.35,0.2 0.71,0.39 1.06,0.57 0.73,0.38 1.61,0.62 2.65,0.61 0.58,-0.21 0.64,-1.82 0.61,-2.32 -0.04,-0.79 -0.45,-1.64 -0.77,-2.19 -0.39,-0.68 -0.64,-1.3 -1.45,-1.52 -1.33,-0.36 -1.16,0.63 -1.55,1.24 -0.67,-0.66 -0.61,-0.87 -1.64,-1.37 -0.06,-2.55 -0.87,-5.97 -0.9,-6.74l0.15 -0.03 0.01 -0.03zm-14.34 62.71l-0.02 1.23c-0.17,-0.13 -0.38,-0.3 -0.62,-0.45 -0.2,-0.13 -0.4,-0.21 -0.59,-0.39 0.26,-0.28 0.65,-0.51 1.16,-0.55l0.07 0.15zm14.26 -66.46c-0.03,0.28 0.03,0.13 -0.15,0.29 -0.01,0.01 -0.24,0.12 -0.24,0.13 -0.22,0.12 -0.24,0.17 -0.54,0.21 0.01,-0.4 -0.17,-0.77 -0.25,-1.14 0.63,0.03 0.9,0.46 1.18,0.51zm-14.86 55.33c0.15,-0.05 0.34,-0.22 0.51,-0.31 0.29,-0.15 0.4,-0.14 0.78,-0.16 -0.03,0.41 -0.14,0.81 -0.08,1.19 -0.26,0.14 -0.08,0.13 -0.34,-0.03 -0.26,-0.16 -0.76,-0.47 -0.88,-0.69zm2.5 -3.73c0.16,-0.41 0.11,-0.97 0.32,-1.32 0.3,0.08 0.44,0.22 0.64,0.41 0.2,0.19 0.27,0.36 0.41,0.49 -0.16,0.21 0.06,0.08 -0.33,0.21 -0.1,0.03 -0.26,0.05 -0.36,0.08 -0.23,0.05 -0.43,0.12 -0.68,0.14zm0.14 8.74l-1.08 0.27c-0.09,-0.08 -0.07,0.14 -0.08,-0.17l0.07 -1.1c0.51,0.12 0.97,0.57 1.09,1.01zm-0.43 8.78c-0.17,0.02 -0.31,0.07 -0.44,0.1 -0.01,0 -0.23,0.03 -0.24,0.03 -0.22,-0.04 0,0.16 -0.14,-0.1l-0.01 -0.9c0.37,0.15 0.68,0.48 0.83,0.88zm7.48 -41.68c0.31,-0.02 0.51,-0.13 0.93,-0.12 0.35,0 0.54,0.09 0.82,0.17 -0.11,0.53 -0.59,0.91 -0.64,1.43 -0.25,-0.04 -0.12,0.01 -0.27,-0.15l-0.84 -1.31zm4.93 -8.23c-0.27,-0 -0.43,-0.17 -0.68,-0.32 -0.41,-0.23 -0.51,-0.16 -0.64,-0.47 0.15,-0.04 0.4,-0.31 0.62,-0.42 0.29,-0.15 0.49,-0.18 0.85,-0.23 0.05,0.51 -0.12,0.95 -0.14,1.43zm-12.94 26.21c0.63,-0.04 0.61,-0.21 1.47,-0.11l-0.33 1.55c-0.33,-0.14 -0.22,-0.21 -0.62,-0.71 -0.32,-0.39 -0.42,-0.39 -0.52,-0.74zm15.47 -33.38c-0.15,0.29 -0.36,0.33 -0.67,0.51 -0.26,0.15 -0.4,0.29 -0.69,0.42 -0.01,-0.23 0.02,-0.53 -0.08,-0.67l0.03 -0.86c0.33,0.01 0.6,0.1 0.83,0.21 0.22,0.11 0.42,0.34 0.58,0.38zm-12.41 30.37c0.14,-0.37 0.45,-1.36 0.68,-1.6 0.66,0.19 1.09,0.56 1.31,1.14 -0.34,0.04 -0.75,0.16 -1.08,0.25 -0.9,0.24 -0.77,0.49 -0.91,0.21z"
                                                        class="fil0"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </button>
                                </a>

                                <button type="button" class="btn style-r0 btn-border3 sideMenuToggler"
                                    style="height: 60px;">
                                    {{-- <i style="color: transparent; background: transparent;" ></i> --}}
                                    <img src="{{ asset('/assets/cardapio.png') }}" alt=" "
                                        class="far fa-bars" />
                                </button>


                                <label style="display: none;" class="theme">
                                    <input id="darkModeToggle" class="input" type="checkbox">
                                    <svg width="24" viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round"
                                        stroke-linecap="round" stroke="currentColor" height="24" fill="none"
                                        class="icon icon-sun">
                                        <circle r="5" cy="12" cx="12"></circle>
                                        <line y2="3" y1="1" x2="12" x1="12"></line>
                                        <line y2="23" y1="21" x2="12" x1="12"></line>
                                        <line y2="5.64" y1="4.22" x2="5.64" x1="4.22"></line>
                                        <line y2="19.78" y1="18.36" x2="19.78" x1="18.36"></line>
                                        <line y2="12" y1="12" x2="3" x1="1"></line>
                                        <line y2="12" y1="12" x2="23" x1="21"></line>
                                        <line y2="18.36" y1="19.78" x2="5.64" x1="4.22"></line>
                                        <line y2="4.22" y1="5.64" x2="19.78" x1="18.36"></line>
                                    </svg>
                                    <svg viewBox="0 0 24 24" class="icon icon-moon">
                                        <path
                                            d="m12.3 4.9c.4-.2.6-.7.5-1.1s-.6-.8-1.1-.8c-4.9.1-8.7 4.1-8.7 9 0 5 4 9 9 9 3.8 0 7.1-2.4 8.4-5.9.2-.4 0-.9-.4-1.2s-.9-.2-1.2.1c-1 .9-2.3 1.4-3.7 1.4-3.1 0-5.7-2.5-5.7-5.7 0-1.9 1.1-3.8 2.9-4.8zm2.8 12.5c.5 0 1 0 1.4-.1-1.2 1.1-2.8 1.7-4.5 1.7-3.9 0-7-3.1-7-7 0-2.5 1.4-4.8 3.5-6-.7 1.1-1 2.4-1 3.8-.1 4.2 3.4 7.6 7.6 7.6z">
                                        </path>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    </div>

    <main style="margin-bottom: 100px">
        @yield('conteudo')
        @yield('galeria')
    </main>

    <html>

    <body>
        <footer class="footer">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icon">
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>
            </ul>
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="{{ route('home') }}">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('sobre') }}">Sobre</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('servico') }}">Serviços</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('contato') }}">Contato</a></li>
                <li class="menu__item"><a class="menu__link" href="{{ route('login') }}">Login</a></li>

            </ul>
            <p>&copy; 2024 Cloud Wise Dev | All Rights Reserved</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        @yield('extra-js')

    </body>


    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");


        .footer {
            position: relative;
            width: 100%;
            background: #59848e;
            /* background: #3586ff; */
            min-height: 100px;
            padding: 20px 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .social-icon,
        .menu {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
            flex-wrap: wrap;
        }

        .social-icon__item,
        .menu__item {
            list-style: none;
        }

        .social-icon__link {
            font-size: 30px;
            color: #fff;
            margin: 0 10px;
            display: inline-block;
            transition: 0.5s;
        }

        .social-icon__link:hover {
            transform: translateY(-10px);
            color: #e4b48d;
        }

        .menu__link {
            font-size: 2.2rem;
            color: #fff;
            margin: 0 10px;
            display: inline-block;
            transition: 0.5s;
            text-decoration: none;
            opacity: 0.75;
            font-weight: 400;
            letter-spacing: 1px;
        }

        .menu__link:hover {
            opacity: 1;
            color: #e4b48d;
        }

        .footer p {
            color: #fff;
            margin: 15px 0 10px 0;
            font-size: 1.5rem;
            font-weight: 300;
        }

        .wave {
            position: absolute;
            top: -100px;
            left: 0;
            width: 100%;
            height: 100px;
            /* background: url("https://i.ibb.co/wQZVxxk/wave.png"); */
            background: url("assets/img/footer1.png");

            background-size: 1000px 100px;
        }

        .wave#wave1 {
            z-index: 1000;
            opacity: 1;
            bottom: 0;
            animation: animateWaves 4s linear infinite;
        }

        .wave#wave2 {
            z-index: 999;
            opacity: 0.5;
            bottom: 10px;
            animation: animate 4s linear infinite !important;
        }

        .wave#wave3 {
            z-index: 1000;
            opacity: 0.2;
            bottom: 15px;
            animation: animateWaves 3s linear infinite;
        }

        .wave#wave4 {
            z-index: 999;
            opacity: 0.7;
            bottom: 20px;
            animation: animate 3s linear infinite;
        }

        @keyframes animateWaves {
            0% {
                background-position-x: 1000px;
            }

            100% {
                background-positon-x: 0px;
            }
        }

        @keyframes animate {
            0% {
                background-position-x: -1000px;
            }

            100% {
                background-positon-x: 0px;
            }
        }
    </style>

    </html>


    <!--********************************
   Code End  Here
 ******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Flip Slider -->
    <script src="{{ asset('js/jquery.flipster.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/bmi.calculator.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>

    {{-- SCRIPT AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const body = document.body;

            // Evento de mudança no botão de alternância do modo escuro
            darkModeToggle.addEventListener('change', function() {
                body.classList.toggle('dark-mode', darkModeToggle.checked);
                localStorage.setItem('darkMode', darkModeToggle.checked);
            });

            // Verificar e aplicar o estado do modo escuro ao carregar a página
            const savedDarkMode = localStorage.getItem('darkMode') === 'true';
            darkModeToggle.checked = savedDarkMode;
            body.classList.toggle('dark-mode', savedDarkMode);
        });
    </script>

    <script src="{{ asset('js/scriptcarrosel.js') }}"></script>

    <script src="{{ asset('assets/jsCarrosel/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/jsCarrosel/animation.js') }}"></script>
    <script src="{{ asset('assets/jsCarrosel/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/jsCarrosel/custom.js') }}"></script>

    {{-- Começo scripts gaby --}}
    {{-- SCRIPT ICON - IONICONS --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <!--owl.carousel.js-->
    <script src="{{ asset('icon/js/owl.carousel.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="{{ asset('icon/js/custom.js') }}"></script>

    {{-- Script custom --}}

    {{-- SCRIPT AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/WOW-master/dist/wow.min.js') }}"></script>
    <script src="{{ asset('assets/custom/js/custom.js') }}"></script>
    <script>
        $(".player").mb_YTPlayer();
    </script>

    {{-- acs --}}
    <!-- JS da Lupa -->
    <script src="{{ asset('js/loupe.js') }}"></script>

</body>
</html>
