@extends('layout.layout')

@section('title', 'Serviço - Le Flower')

@section('conteudo')


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('cards/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- CSS DOS PARCEIROS --}}
    {{-- TESTE PARA OS ICONES --}}
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/favicon.png') }}">

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/font-awesome.min.css') }}">

    <!--flat icon css-->
    <link rel="stylesheet" href="{{ asset('icon/css/flaticon.css') }}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/animate.css') }}">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/owl.theme.default.min.css') }}">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/bootstrap.min.css') }}">

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('icon/css/bootsnav.css') }}">

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/style.css') }}">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('icon/css/responsive.css') }}">

    {{-- CSS do titulo da sessão de perguntas --}}
    <link rel="stylesheet" href="{{ asset('icon/css/quest.css') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />

    {{-- ESTILO CARDS --}}
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('cards/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{ asset('cards/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('cards/css/owl.css') }}">



    <style>
        @media (min-width: 1200px) {
            .container {
                width: 1300px !important;
            }

        }
    </style>
    <style>
        .h3-gaby {
            /* font-family: var(--minha-font2); */
            font-weight: bold;
            font-size: 30px;
            letter-spacing: 1px;
        }

        .p-gaby {
            font-size: 20px;
            font-family: var(--minha-font2);
            text-align: justify
        }
    </style>

    <style>
        /* FLOR PULSAR */
        .pulse {
            margin: 10px;
            width: 60px;
            height: 22px;
            border-radius: 50%;
            box-shadow: 0 0 0 rgba(204, 169, 44, 0.4);
            animation: pulse 2s infinite;
        }

        .pulse:hover {
            animation: none;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
            }

            70% {
                -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            }

            100% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            }
        }

        @keyframes pulse {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
                box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
            }

            70% {
                -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
                box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            }

            100% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
                box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            }
        }
    </style>

    <style>
        .service-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .service {
            background-color: transparent;
            margin: 10px;
            padding: 0% 5% 1% 5%;
            width: calc(25% - 40px);
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }


        .service img {
            width: 100%;
            height: auto;
        }

        .service h2 {
            font-size: 20px;
            margin: 10px 0;
        }

        .service p {
            margin: 10px 0;
            color: #202020;
        }

        .price {
            font-weight: bold;
        }

        .descricoes {
            display: block;
        }

        .service {
            width: 500px;
            display: block;
        }

        .service h4 {
            color: #202020;
        }

        .service-description {
            color: #202020;
            text-align: start;
        }

        .test-bg {
            background-position: center;
            background: linear-gradient(180deg, rgba(89, 132, 142, 0.23), rgba(89, 132, 142, 0.23)), url({{ asset('assets/AdobeStock_587067399.jpeg') }});

        }

        .servico {
            padding: 0% 13% 0% 13%;
        }

        .card-header {
            padding-left: 6.5%;
        }

        .card-header h3 {
            font-size: 28pt;
        }

        .about-thumb-2 {
            top: 12%;
        }

        .justify-content-between h4 {
            font-weight: 400;
        }

        .card-menu2 {
            margin-left: 15%;
        }

        .buttonAgendar1 {
            margin-right: 70%;
        }

        .buttonAgendar2 {
            margin-left: 63.5%;
        }

        .buttonAgendar3 {
            margin-right: 70%;
        }

        @media (max-width: 700px) {
            .about-thumb-2 img {
                /* display: none; */
            }

            .about-thumb-num {
                /* display: none; */
            }

            .servico {
                padding: 0% 0% 0% 0%;
            }

            .service p {
                font-size: 8pt
            }

            .service {
                width: 100%;
            }

            .card-menu2 {
                margin-left: 0%;
            }

            .buttonAgendar1 {
                margin-right: 0%;
            }

            .buttonAgendar2 {
                margin-left: 0%;
            }

            .buttonAgendar3 {
                margin-right: 0%;
            }

            .card-header h3 {
                font-size: 20pt;
                text-align: center;
            }

        }

        @media (min-width: 701px) and (max-width:1024px) {

            .about-thumb-2 img {
                /* display: none; */
            }

            .about-thumb-num {
                /* display: none; */
            }

            .servico {
                padding: 0% 0% 0% 0%;
            }

            .service p {
                font-size: 17pt
            }

            .service {
                width: 700px;
            }

            .card-menu2 {
                margin-left: 0%;
            }

            .buttonAgendar1 {
                margin-right: 0%;
                margin-left: 3.5%;
            }

            .buttonAgendar2 {
                margin-left: 0%;
                margin-left: 3%;

            }

            .buttonAgendar3 {
                margin-right: 0%;
                margin-left: 3.5%;

            }

            .container1 {
                /* display: none; */
            }

            .container2 {
                /* display: none; */
            }

            .container3 {
                /* display: none; */
            }

            .col-md-6 {
                width: 100%;
            }

            .card-header h3 {
                text-align: center;
            }
        }

        .selecao {
            height: 600px;
            display: flex;
            justify-content: space-around;
            padding: 0% 15%;
        }

        .list-group {
            justify-content: space-between;
            height: 100%;
            text-align: center;
            font-weight: bold;
        }

        .list-group-item {
            width: 400px;
            border-radius: 20px;
        }

        .about-thumb-num {
            position: absolute;
            left: 40px;
            bottom: 0;
            font-size: 17pt;
            font-weight: 700;
            font-family: var(--title-font);
            color: transparent;
            -webkit-text-stroke: 1px var(--white-color);
            line-height: initial;
        }

        /*******************************/
        /*********** Team CSS **********/
        /*******************************/
        .team {
            position: relative;
            width: 100%;
            padding: 45px 0 15px 0;
        }

        .team .team-item {
            position: relative;
            margin-bottom: 30px;
            padding: 15px;
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, .07);
        }

        .team .team-img {
            position: relative;
            overflow: hidden;
        }

        .team .team-img img {
            position: relative;
            width: 100%;
        }

        .team .team-social {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .5s;
        }

        .team .team-social a {
            position: relative;
            margin: 0 3px;
            margin-top: 100px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 40px;
            font-size: 16px;
            color: #F7CAC9;
            background: #343148;
            opacity: 0;
        }

        .team .team-social a:hover {
            color: #343148;
            background: #e4b48d;
        }


        .team .team-item:hover .team-social {
            background: rgba(256, 256, 256, .5);
            background: rgba(89, 132, 142, 0.562)
        }

        .team .team-item:hover .team-social a:first-child {
            opacity: 1;
            margin-top: 0;
            transition: .3s 0s;
        }

        .team .team-item:hover .team-social a:nth-child(2) {
            opacity: 1;
            margin-top: 0;
            transition: .3s .1s;
        }

        .team .team-item:hover .team-social a:nth-child(3) {
            opacity: 1;
            margin-top: 0;
            transition: .3s .2s;
        }

        .team .team-item:hover .team-social a:nth-child(4) {
            opacity: 1;
            margin-top: 0;
            transition: .3s .3s;
        }

        .team .team-text {
            position: relative;
            padding: 25px 15px 10px 15px;
            text-align: center;
            background: #ffffff;
        }

        .team .team-text h2 {
            font-size: 18px;
            font-weight: 600;
            color: #e4b48d;
        }

        .team h2 {
            margin: 0;
            color: #fff;
            font-size: 40px;
            margin-bottom: 5%;
            line-height: 45px%
        }

        /* ESTILOS USADOS HEADER RESPONSIVEL */

        .logoVideo {
            display: none !important;
            margin-right: 3%;
        }

        @media (max-width: 700px) {

            .col-auto {
                width: 40%;
                justify-content: end;
                display: flex;
            }

        }

        @media screen and (max-width: 700px) {
            .banner {
                /* Insira aqui o link da nova imagem */
                content: url('../assets/logo-servico.png');
                width: 85% !important
            }

            .infeliz {
                flex-wrap: unset;
                flex-direction: row
            }

            #services {
                margin-bottom: 0 !important
            }

            .team {
                padding: 0 0 15px 0
            }
        }
    </style>

    <div class="content">
        {{-- DIV PARA A ACESSIBILIDADE --}}

    @section('logo')
        <a href="/"><img style="width:50%;" class="banner" src="{{ asset('assets/logo4.png') }}" alt="logo"></a>
    @endsection

    <div style="" class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true"
            data-xl-arrows="true" data-ml-arrows="true">
            <div class="hero-slider" style="margin-bottom: -8px" style="position: relative;">

                <img class="videoLeFlower" src="{{ asset('assets/banner/banner-contato.png') }}" alt="Your Image">

                <!-- Adicione outros elementos acima do vídeo -->
                <div class="container"
                    style="position: absolute; top: 40%; left: 48%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">

                    <div style="" class="hero-style2">
                        <img style="width:70%;" class="logoVideo" src="{{ asset('assets/logo4.png') }}" alt="Logo">
                        <div>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s"
                                style="font-size: 120px;">SERVIÇOS</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Cards --}}
    <div id="services" class="services section" data-aos="fade-down" style="margin-bottom: 50px"
        data-aos-easing="linear" data-aos-duration="500">
        <div class="container">
            <div class="row" style=" gap: 20px 0;">
                <div class="col-lg-3">
                    <div class="service-item first-service">
                        <div class="iconn"></div>
                        <h4>Cabelo</h4>
                        <p>Nossos cortes, cores e tratamentos expressam sua singularidade. Conte a história da sua
                            beleza
                            através dos fios.</p>
                        <div class="text-button">
                            <a href="{{ route('servicoCabelo') }}" style="color: #59848e">Saiba mais <i
                                    class="fa fa-arrow-right" style="color: #59848e"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item second-service">
                        <div class="iconn"></div>
                        <h4>Depilação</h4>
                        <p>Experimente a suavidade sem pelos indesejados. Nossos tratamentos oferecem conforto, deixando
                            sua
                            pele radiante.</p>
                        <div class="text-button">
                            <a href="{{ route('servicoDepilacoes') }}" style="color: #59848e">Saiba mais <i
                                    class="fa fa-arrow-right" style="color: #59848e"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item third-service">
                        <div class="iconn icon-gaby"></div>
                        <h4>Maquiagem</h4>
                        <p>Transformamos sua aparência com maquiagem personalizada. Descubra a magia dos pincéis e
                            realce
                            sua beleza única.</p>
                        <div class="text-button">
                            <a href="{{ route('servicoMaquiagem') }}" style="color: #59848e">Saiba mais <i
                                    class="fa fa-arrow-right" style="color: #59848e"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="service-item fourth-service">
                        <div class="iconn"></div>
                        <h4>Unhas</h4>
                        <p>Transformamos unhas em verdadeiras obras de arte. Dos tons clássicos aos designs ousados,
                            eleve
                            sua autoestima..</p>
                        <div class="text-button">
                            <a href="{{ route('servicoUnhas') }}" style="color: #59848e">Saiba mais <i
                                    class="fa fa-arrow-right" style="color: #59848e"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="service-item five-service">
                        <div class="iconn"></div>
                        <h4>Rosto</h4>
                        <p>Desfrute de tratamentos faciais que renovam e realçam sua beleza única. No nosso espaço, cada
                            sessão é uma experiência personalizada para revitalizar a vitalidade da sua pele.</p>
                        <div class="text-button"> {{ route('servicoRosto') }}
                            <a href="{{ route('servicoRosto') }}" style="color: #59848e">Saiba mais <i
                                    class="fa fa-arrow-right" style="color: #59848e"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="service-item six-service">
                        <div class="iconn"></div>
                        <h4>Massagem</h4>
                        <p>Embarque numa jornada de relaxamento profundo com nossas massagens terapêuticas. Nossa equipe
                            dedicada oferece momentos de tranquilidade para revitalizar corpo e mente.</p>
                        <div class="text-button">
                            <a href="{{ route('servicoMassagens') }}" style="color: #59848e">Saiba mais <i
                                    class="fa fa-arrow-right" style="color: #59848e"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="service-item seven-service">
                        <div class="iconn"></div>
                        <h4>Cilios</h4>
                        <p>Descubra o luxo de cílios impecáveis. Nossos especialistas oferecem aplicações precisas e
                            relaxantes, garantindo cílios que realçam sua beleza. Proporcionamos um olhar marcante e
                            sofisticado.</p>
                        <div class="text-button">
                            <a href="{{ route('servicoCilios') }}" style="color: #59848e">Saiba mais <i
                                    class="fa fa-arrow-right" style="color: #59848e"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="service-item eigth-service">
                        <div class="iconn"></div>
                        <h4>Sobrancelhas</h4>
                        <p>Destaque seus olhos com sobrancelhas perfeitamente esculpidas. Nossos especialistas criam um
                            arco
                            que complementa sua expressão, proporcionando definição e poder ao seu olhar.</p>
                        <div class="text-button">
                            <a href="{{ route('servicoSobrancelhas') }}" style="color: #59848e">Saiba mais <i
                                    class="fa fa-arrow-right" style="color: #59848e"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <h2>Alguns integrantes que fazem parte do time <br>
                    <span style="color: #e4b48d; font-weight: 600;">Le Flower</span>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-1.png" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Ana Silva</h2>
                            <p>Esteticista</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-2.png" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Mariana Santos</h2>
                            <p>Cabelereira</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-3.jpeg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Camila Oliveira</h2>
                            <p>Manicure e Pedicure</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="assets/img/team-4.jpeg" alt="Image">
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h2>Kate Glover</h2>
                            <p>Cabelereira</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--profiles start -->
    <section id="profiles" class="profiles" style="background-color: #fff;">
        {{-- data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" --}}
        <div class="profiles-details">
            <div class="section-heading text-center">
                <h2>PARCEIROS</h2>
            </div>
            <div class="container">
                <div class="profiles-content" style="width: 100%">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="{{ asset('assets/img-gaby/loreal.svg') }}" alt="">

                                    <div class="profile-icon-name">Paris</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="{{ asset('assets/img-gaby/loreal.svg') }}" alt="">
                                        <div class="profile-icon-name">Paris</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="{{ asset('assets/img-gaby/layer1.svg') }}" alt="">
                                    {{-- <a href=""><i class="flaticon-dribbble"></i></a> --}}
                                    <div class="profile-icon-name">Creme</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="{{ asset('assets/img-gaby/layer1.svg') }}" alt="">
                                        {{-- <a href=""><i class="flaticon-dribbble"></i></a> --}}
                                        <div class="profile-icon-name">Creme</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="{{ asset('assets/img-gaby/sep.svg') }}" alt="">
                                    {{-- <a href=""><i class="flaticon-behance-logo"></i></a> --}}
                                    <div class="profile-icon-name">Beauty</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="{{ asset('assets/img-gaby/sep.svg') }}" alt="">
                                        {{-- <a href=""><i class="flaticon-behance-logo"></i></a> --}}
                                        <div class="profile-icon-name">Beauty</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile profile-no-border">
                                <div class="profile-txt">
                                    <img src="{{ asset('assets/img-gaby/labriza.svg') }}" alt="">
                                    {{-- <a href=""><i class="flaticon-github-logo"></i></a> --}}
                                    <div class="profile-icon-name">Comestics</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="{{ asset('assets/img-gaby/labriza.svg') }}" alt="">
                                        {{-- <a href=""><i class="flaticon-github-logo"></i></a> --}}
                                        <div class="profile-icon-name">Comestics</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-border"></div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="{{ asset('assets/img-gaby/group.svg') }}" alt="">
                                    {{-- <a href=""><i class="flaticon-flickr-website-logo-silhouette"></i></a> --}}
                                    <div class="profile-icon-name">Group</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="{{ asset('assets/img-gaby/group.svg') }}" alt="">
                                        {{-- <a href=""><i class="flaticon-flickr-website-logo-silhouette"></i></a> --}}
                                        <div class="profile-icon-name">Group</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="{{ asset('assets/img-gaby/risque.svg') }}" alt="">
                                    {{-- <a href=""><i class="flaticon-smug"></i></a> --}}
                                    <div class="profile-icon-name">Tá nas suas mãos</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="{{ asset('assets/img-gaby/risque.svg') }}" alt="">
                                        {{-- <a href=""><i class="flaticon-smug"></i></a> --}}
                                        <div class="profile-icon-name">Tá nas suas mãos</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile">
                                <div class="profile-txt">
                                    <img src="{{ asset('assets/img-gaby/barba.svg') }}" alt="">
                                    {{-- <a href=""><i class="flaticon-squarespace-logo"></i></a> --}}
                                    <div class="profile-icon-name">Men's beard care products</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="{{ asset('assets/img-gaby/barba.svg') }}" alt="">
                                        {{-- <a href=""><i class="flaticon-squarespace-logo"></i></a> --}}
                                        <div class="profile-icon-name">Men's beard care products</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="single-profile profile-no-border">
                                <div class="profile-txt">
                                    <img src="{{ asset('assets/img-gaby/tangle.svg') }}" alt="">
                                    {{-- <a href=""><i class="flaticon-bitbucket-logotype-camera-lens-in-perspective"></i></a> --}}
                                    <div class="profile-icon-name">Você só precisa da escova certa</div>
                                </div>
                                <div class="single-profile-overlay">
                                    <div class="profile-txt">
                                        <img src="{{ asset('assets/img-gaby/tangle.svg') }}" alt="">
                                        {{-- <a href=""><i class="flaticon-bitbucket-logotype-camera-lens-in-perspective"></i></a> --}}
                                        <div class="profile-icon-name">Você só precisa da escova certa…</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Teste fonts --}}
    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="{{ asset('icon/js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('icon/js/bootsnav.js') }}"></script>

    <!-- jquery.sticky.js -->
    <script src="{{ asset('icon/js/jquery.sticky.js') }}"></script>

    <!-- for progress bar start-->

    <!-- progressbar js -->
    <script src="{{ asset('icon/js/progressbar.js') }}"></script>
    <!-- appear js -->


    {{-- Começo scripts gaby --}}
    <!-- DEPENDENCIA jQuery 3.6.0 COontador JORNADA -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // Verifica se o dispositivo é responsivo (por exemplo, largura da tela menor que 768 pixels)
        if (window.innerWidth <= 768) {
            // Remove a classe "aos-animate" que é usada pelo AOS para animações
            document.querySelectorAll('.accordion').forEach(function(element) {
                element.classList.remove('aos-animate');
            });
        }
    </script>

    <script>
        $(function() {
            $('.title').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 8000,
                    easing: 'linear',
                    step: function() {
                        $this.text('+' + Math.floor(this.countNum) + ' unidades');
                    },
                    complete: function() {
                        $this.text('+' + this.countNum + ' unidades');
                        //alert('finished');
                    }
                });
            });
        });
    </script>

</div>


@component('components.loupe')
@endcomponent

@endsection
