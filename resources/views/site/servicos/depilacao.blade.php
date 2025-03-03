@extends('layout.layout')

@section('title', 'Serviço - Le Flower')

@section('conteudo')


<div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}

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
                            style="font-size: 120px;">Depilação</h1>
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
                <h2 class="mb-1">Depilação</h2>
            </div>
        </div>
        <div class="linha align-items-center">
            <div class="col-lg-4">
                <div class="linha no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div
                            class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-candle"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/dep1.png" alt="">

                                {{-- primeiro card --}}

                                <h3>Técnicas de Depilação</h3>
                                <p>Conheça as diferentes técnicas de depilação disponíveis, desde a depilação com cera até a depilação a laser. Descubra qual método é o mais adequado para você e seus objetivos de cuidado com a pele.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-spa-1"></span> --}}
                            </div>
                            <div class="text mt-2">

                                {{-- segundo card --}}

                                <img style="width: 29%" src="../assets/img-gaby/dep2.png" alt="">
                                <h3>Cuidados Pré-Depilação</h3>
                                <p>Aprenda a preparar a pele para a depilação de forma eficaz. Descubra os cuidados necessários antes do procedimento para garantir resultados melhores e minimizar o desconforto.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-massage"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 29%" src="../assets/img-gaby/dep3.png" alt="">

                                {{-- terceiro card --}}

                                <h3>Depilação a Laser</h3>
                                <p>Saiba mais sobre a depilação a laser, uma técnica duradoura para remoção de pelos. Entenda o processo, os benefícios e os cuidados necessários para manter a pele saudável após o tratamento.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-lotus"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/dep4.png" alt="">

                                {{-- quarto card --}}


                                <h3>Depilação com Cera</h3>
                                <p>Descubra os benefícios da depilação com cera, uma técnica tradicional e eficaz. Aprenda sobre os diferentes tipos de cera e como escolher o melhor para sua pele.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch" style="  flex-direction: column;">
                <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
                    <div>
                        <h3 class="preco">Preços</h3>
                        <p style="color: #59848e; font-weight: bold; letter-spacing: 1px;   text-align: center; ">Serviços de Depilação com nossas especialistas</p>
                    </div>
                    <div class="carde">
                        <div class="carde-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between botao botao-link"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Serviços de Depilação
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="carde-body text-left">
                                <ul>
                                    <li class="d-flex">
                                        <span>Depilação de Pernas Inteiras</span>
                                        <span>60 min.</span>
                                        <span>$90,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Depilação de Meia Perna</span>
                                        <span>30 min.</span>
                                        <span>$50,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Depilação de Axilas</span>
                                        <span>20 min.</span>
                                        <span>$30,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Depilação de Buço</span>
                                        <span>10 min.</span>
                                        <span>$20,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Depilação de Sobrancelhas</span>
                                        <span>15 min.</span>
                                        <span>$25,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Depilação de Corpo Inteiro</span>
                                        <span>90 min.</span>
                                        <span>$200,00</span>
                                    </li>

                                    <li class="d-flex">
                                        <span>Depilação de Virilha Completa</span>
                                        <span>30 min.</span>
                                        <span>$40,00</span>
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
                                <img style="width: 25%" src="../assets/img-gaby/dep5.png" alt="">
                                <h3>Depilação para Diferentes Tipos de Pele</h3>
                                <p>Saiba como adaptar a depilação para diferentes tipos de pele. Descubra técnicas e cuidados específicos para garantir uma depilação eficaz e confortável.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">

                                {{-- sexto card --}}


                                <img style="width: 25%" src="../assets/img-gaby/dep6.png" alt="">
                                <h3>Cuidados Pós-Depilação</h3>
                                <p>Descubra os cuidados essenciais para manter a pele saudável após a depilação. Aprenda sobre hidratação, prevenção de irritações e dicas para prolongar os resultados.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">

                                {{-- setimo card --}}
                                <img style="width: 25%" src="../assets/img-gaby/dep7.png" alt="">
                                <h3>Depilação de Áreas Sensíveis</h3>
                                <p>Aprenda técnicas e cuidados para depilar áreas sensíveis do corpo. Descubra como evitar desconforto e obter os melhores resultados.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">

                                {{-- oitavo card --}}
                                <img style="width: 25%" src="../assets/img-gaby/dep8.png" alt="">
                                <h3>Depilação Masculina</h3>
                                <p>Saiba mais sobre os serviços de depilação masculina. Descubra técnicas específicas para homens e cuidados essenciais para a pele masculina.</p>
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
