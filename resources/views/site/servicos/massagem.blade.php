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
                            style="font-size: 120px;">Massagem</h1>
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
                <h2 class="mb-1">Massagem</h2>
            </div>
        </div>z
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
                                <img style="width: 24%" src="../assets/img-gaby/massagem1.png" alt="">
                                <h3>Reflexologia </h3>
                                <p>Uma terapia que envolve a aplicação de pressão em pontos específicos nos pés para promover o equilíbrio e a cura em todo o corpo. Esta técnica antiga pode ajudar a aliviar o estresse, melhorar a qualidade do sono e estimular a função dos órgãos internos.</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-spa-1"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/massagem2.png" alt="">
                                <h3>Massagem Shiatsu</h3>
                                <p>Antiga arte japonesa da massagem Shiatsu para restaurar o equilíbrio e a harmonia do seu corpo. Com pressão aplicada em pontos específicos ao longo dos meridianos de energia, esta massagem promove o alívio do estresse, melhora a circulação e restaura a vitalidade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-massage"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/massagem3.png" alt="">
                                <h3>Massagem com Pedras Quentes</h3>
                                <p>Revitalize seu corpo e mente com a massagem com pedras quentes. As pedras aquecidas são colocadas estrategicamente ao longo do corpo para aliviar a tensão muscular.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-lotus"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 30%" src="../assets/img-gaby/massagem4.png" alt="">
                                <h3>Massagem Ayurvédica</h3>
                                <p>Esta antiga prática indiana utiliza movimentos de massagem, óleos medicinais e pressão em pontos específicos para equilibrar os doshas e restaurar a harmonia do corpo e da mente. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch" style="  flex-direction: column;">
                <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
                    <div>
                        <h3 class="preco">Preços</h3>
      <p style="color: #59848e; font-weight: bold; letter-spacing: 1px;    text-align: center;   ">Faça suas unhas com
                            nossas especialistas</p>
                    </div>
                    <div class="carde">
                        <div class="carde-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between botao botao-link"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Sessões de Massagem
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="carde-body text-left">
                                <ul>
                                    <li class="d-flex">
                                        <span>Reflexologia</span>
                                        <span>45 min</span>
                                        <span>$100,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Massagem Craniossacral</span>
                                        <span>45 min</span>
                                        <span>$110,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Massagem Tui Na</span>
                                        <span>60 min</span>
                                        <span>$110,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Massagem Relaxante</span>
                                        <span>60 min</span>
                                        <span>$120,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Massagem Ayurvédica</span>
                                        <span>60 min</span>
                                        <span>$145,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Massagem com Pedras Quentes</span>
                                        <span>60 min</span>
                                        <span>$150,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Massagem Shiatsu</span>
                                        <span>60 min</span>
                                        <span>$160,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Massagem Terapêutica</span>
                                        <span>60 min</span>
                                        <span>$180,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Drenagem Linfática</span>
                                        <span>60 min</span>
                                        <span>$190,00</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="carde">
                        <div class="carde-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button
                                    class="d-flex align-items-center justify-content-between botao botao-link collapsed"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Terapias de Massagem
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="carde-body text-left">
                                <ul>
                                    <li class="d-flex">
                                        <span>Tratamentos Faciais</span>
                                        <span>40 min.</span>
                                        <span>$10</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Tratamentos de Unhas</span>
                                        <span>30 min.</span>
                                        <span>$20</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Tratamentos Médicos</span>
                                        <span>60 min.</span>
                                        <span>$10</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Tratamentos Capilares</span>
                                        <span>30 min.</span>
                                        <span>$30</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>


            </div>


            <div class="col-lg-4">
                <div class="linha no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div
                            class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-beauty-treatment"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/massagem5.png" alt="">
                                <h3>Massagem Terapêutica</h3>
                                <p>Massagem terapêutica é projetada para aliviar dores musculares, reduzir o estresse e melhorar a flexibilidade. Combinando uma variedade de técnicas para atender às suas necessidades específicas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-relax"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/massagem6.png" alt="">
                                <h3>Drenagem Linfática</h3>
                                <p>Drenagem linfática é uma técnica suave que ajuda a estimular o sistema linfático, eliminando toxinas e reduzindo o inchaço. Ideal para melhorar a circulação, desintoxicar o corpo e fortalecer o sistema imunológico.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-massage"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/massagem7.png" alt="">
                                <h3>Massagem Relaxante</h3>
                                <p>Desfrute de uma experiência de relaxamento profundo com nossa massagem relaxante. Nossos terapeutas especializados usarão técnicas suaves para aliviar a tensão muscular e promover o equilíbrio do corpo e da mente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                {{-- <span class="flaticon-rose"></span> --}}
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/massagem8.png" alt="">
                                <h3>Massagem Desportiva</h3>
                                <p>É a escolha ideal. Projetada para aliviar a tensão muscular, prevenir lesões e melhorar o desempenho atlético, ajudando na recuperação após o exercício intenso, mantendo seu corpo em prontidão para o próximo desafio.</p>
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
