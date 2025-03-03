@extends('layout.layout')

@section('title', 'Serviço - Le Flower')

@section('conteudo')


<div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    <title>Energen - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('teste/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('teste/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('teste/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('teste/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('teste/css/ionicons.min.css') }}">


    <link rel="stylesheet" href="{{ asset('teste/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('teste/css/style.css') }}">


    <style>
        .preco {
            font-size: 35px;
            font-weight: 300
        }

        /* ESTILIZAÇÃO BOTÃO AGENDAR */
        .shadow__btn {
            padding: 10px 20px;
            border: none;
            font-size: 17px;
            color: #fff;
            border-radius: 7px;
            letter-spacing: 4px;
            font-weight: 700;
            text-transform: uppercase;
            transition: 0.5s;
            transition-property: box-shadow;
            display: inline-block;
            /* Faz o botão comportar-se como um elemento de bloco, mas ajusta-se ao conteúdo */
            margin: 7% auto 0;
        }

        .shadow__btn {
            background: #59848e;
            box-shadow: 0 0 25px rgba(89, 132, 142, 0.5);
        }

        .shadow__btn:hover {
            box-shadow: 0 0 5px rgba(89, 132, 142, 0.5),
                0 0 25px rgba(89, 132, 142, 0.5),
                0 0 50px rgba(89, 132, 142, 0.5),
                0 0 100px rgba(89, 132, 142, 0.5);
        }

        @media (max-width: 700px) {

            .shadow__btn {
                margin: 8% auto;

            }
        }
    </style>


@section('logo')
    <a href="/"><img style="width:50%;" class="banner" src="{{ asset('assets/logo4.png') }}" alt="logo"></a>
@endsection

<div style="" class="hero-wrapper hero-2" id="hero">
    <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
        data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true"
        data-ml-arrows="true">
        <div class="hero-slider" style="margin-bottom: -8px" style="position: relative;">

            <img class="videoLeFlower" src="{{ asset('assets/banner/banner-contato.png') }}" alt="Your Image">

            <!-- Adicione outros elementos acima do vídeo -->
            <div class="container"
                style="position: absolute; top: 40%; left: 48%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">

                <div style="" class="hero-style2">
                    {{-- <img style="width:70%;" class="logoVideo" src="{{ asset('assets/logo4.png') }}" alt="Logo"> --}}
                    <div>
                        <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s"
                            style="font-size: 120px;">Maquiagem</h1>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container-fluid px-md-5">
        <div class="linha justify-content-center mb-5 pb-3">
            <div class="otaria heading-section ftco-animate text-center">
                <h3 class="subheading">Serviços</h3>
                <h2 class="mb-1">Maquiagem</h2>
            </div>
        </div>
        <div class="linha align-items-center">
            <div class="col-lg-4">
                <div class="linha no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                <i class="fas fa-palette" style="font-size: 2rem;"></i> <!-- Ícone de tendências em maquiagem -->
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/make1.png" alt="">
                                <h3>Tendências em Maquiagem</h3>
                                <p>Explore as últimas tendências em maquiagem para diversas ocasiões. Descubra looks que estão em alta neste ano, desde maquiagens naturais até looks glamourosos para festas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                <i class="fas fa-spa" style="font-size: 2rem;"></i> <!-- Ícone de cuidados com a pele -->
                            </div>
                            <div class="text mt-2">
                                <img style="width: 29%" src="../assets/img-gaby/make2.png" alt="">
                                <h3>Cuidados com a Pele para Maquiagem</h3>
                                <p>Aprenda dicas e truques para preparar a pele antes da maquiagem. Desde a limpeza adequada até a hidratação, descubra como garantir que sua maquiagem dure mais e tenha um acabamento impecável.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                <i class="fas fa-star" style="font-size: 2rem;"></i> <!-- Ícone de maquiagem para eventos -->
                            </div>
                            <div class="text mt-2">
                                <img style="width: 29%" src="../assets/img-gaby/make3.png" alt="">
                                <h3>Maquiagem para Eventos Especiais</h3>
                                <p>Descubra técnicas de maquiagem para eventos especiais como casamentos, formaturas e festas. Aprenda a criar looks que se destacam e duram a noite toda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                <i class="fas fa-sun" style="font-size: 2rem;"></i> <!-- Ícone de maquiagem para o dia a dia -->
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/make4.png" alt="">
                                <h3>Maquiagem para o Dia a Dia</h3>
                                <p>Aprenda como fazer uma maquiagem rápida e prática para o dia a dia. Descubra produtos essenciais e técnicas para um look natural e duradouro.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex align-items-stretch" style="  flex-direction: column;">
                <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
                    <div>
                        <h3 class="preco">Preços</h3>
                        <p style="color: #59848e; font-weight: bold; letter-spacing: 1px;   text-align: center; ">Serviços de Maquiagem com nossas especialistas</p>
                    </div>
                    <div class="carde">
                        <div class="carde-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between botao botao-link"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Serviços de Maquiagem
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="carde-body text-left">
                                <ul>
                                    <li class="d-flex">
                                        <span>Maquiagem Completa</span>
                                        <span>60 min.</span>
                                        <span>$120,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Maquiagem para Festas</span>
                                        <span>45 min.</span>
                                        <span>$100,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Maquiagem para Noivas</span>
                                        <span>90 min.</span>
                                        <span>$200,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Maquiagem para o Dia a Dia</span>
                                        <span>30 min.</span>
                                        <span>$70,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Consultoria de Maquiagem</span>
                                        <span>60 min.</span>
                                        <span>$80,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Aplicação de Cílios Postiços</span>
                                        <span>15 min.</span>
                                        <span>$30,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Maquiagem Artística</span>
                                        <span>60 min.</span>
                                        <span>$150,00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="linha no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div
                            class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">

                            </div>
                            <div class="text mt-2">

                                {{-- quinto card --}}
                                <img style="width: 25%" src="../assets/img-gaby/make5.png" alt="">
                                <h3>Maquiagem para Diferentes Formatos de Rosto</h3>
                                <p>Saiba como adaptar sua maquiagem para diferentes formatos de rosto. Descubra técnicas que realçam suas características únicas e destacam sua beleza natural.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">

                            </div>
                            <div class="text mt-2">

                                {{-- sexto card --}}


                                <img style="width: 25%" src="../assets/img-gaby/make6.png" alt="">
                                <h3>Maquiagem para Pele Oleosa</h3>
                                <p>Descubra produtos e técnicas ideais para maquiar peles oleosas. Aprenda a controlar o brilho e garantir que sua maquiagem dure o dia todo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">

                                {{-- setimo card --}}
                                <img style="width: 25%" src="../assets/img-gaby/make7.png" alt="">
                                <h3>Maquiagem para Olhos: Dicas e Truques</h3>
                                <p>Aprenda técnicas para destacar seus olhos com a maquiagem certa. Desde sombras esfumadas até delineados precisos, descubra como realçar a beleza dos seus olhos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">

                                {{-- oitavo card --}}
                                <img style="width: 25%" src="../assets/img-gaby/make8.png" alt="">
                                <h3>Maquiagem para Lábios: Cuidados e Estilo</h3>
                                <p>Descubra como cuidar dos seus lábios e escolher os melhores produtos para destacá-los. Desde batons matte até glosses brilhantes, encontre o estilo perfeito para você.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin: 1% auto">

                {{-- BOTÃO AGENDAR  --}}
                <button class="shadow__btn">
                    Agendar
                </button>
            </div>
        </div>
    </div>
</section>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


<script src="{{ asset('teste/js/jquery.min.js') }}"></script>
<script src="{{ asset('teste/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('teste/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('teste/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('teste/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('teste/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('teste/js/aos.js') }}"></script>
<script src="{{ asset('teste/js/scrollax.min.js') }}"></script>
<script src="{{ asset('teste/js/main.js') }}"></script>


{{-- acs --}}
</div>

@component('components.loupe') @endcomponent


@endsection
