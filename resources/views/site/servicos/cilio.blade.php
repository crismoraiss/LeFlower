@extends('layout.layout')

@section('title', 'Serviço - Le Flower')

@section('conteudo')


<div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}


<title>Le Flower - Serviços de Cílios</title>
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
        font-weight: 300;
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
                    <div>
                        <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s"
                            style="font-size: 120px;">Cílios</h1>
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
                <h2 class="mb-1">Cílios</h2>
            </div>
        </div>
        <div class="linha align-items-center">
            <div class="col-lg-4">
                <div class="linha no-gutters">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div
                            class="treatment w-100 text-center ftco-animate border border-right-0 border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                <span class="flaticon-eyelash"></span> <!-- Ícone para Extensão de Cílios -->
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/si1.png" alt="">
                                <h3>Extensão de Cílios</h3>
                                <p>A técnica de extensão de cílios proporciona um olhar mais intenso e volumoso,
                                    utilizando fios sintéticos aplicados individualmente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                <span class="flaticon-eye-care"></span> <!-- Ícone para Lifting de Cílios -->
                            </div>
                            <div class="text mt-2">
                                <img style="width: 29%" src="../assets/img-gaby/si2.png" alt="">
                                <h3>Lifting de Cílios</h3>
                                <p>O lifting de cílios realça a curvatura natural dos seus cílios, proporcionando um
                                    efeito de alongamento e definição sem a necessidade de extensões.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                                <span class="flaticon-mascara"></span> <!-- Ícone para Tintura de Cílios -->
                            </div>
                            <div class="text mt-2">
                                <img style="width: 29%" src="../assets/img-gaby/si3.png" alt="">
                                <h3>Tintura de Cílios</h3>
                                <p>A tintura de cílios proporciona uma cor mais intensa e duradoura aos seus cílios,
                                    eliminando a necessidade de usar rímel diariamente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/si4.png" alt="">
                                <h3>Cílios 3D</h3>
                                <p>Os cílios 3D oferecem um volume extra e um efeito tridimensional aos seus cílios,
                                    criando um visual dramático e marcante.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch" style="  flex-direction: column;">
                <div id="accordion" class="myaccordion w-100 text-center py-5 px-1 px-md-4">
                    <div>
                        <h3 class="preco">Preços</h3>
                        <p style="color: #59848e; font-weight: bold; letter-spacing: 1px; text-align: center;">Cuide dos seus cílios com nossas especialistas</p>
                    </div>
                    <div class="carde">
                        <div class="carde-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between botao botao-link"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Serviços para Cílios
                                    <i class="fa" aria-hidden="true"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="carde-body text-left">
                                <ul>
                                    <li class="d-flex">
                                        <span>Extensão de Cílios</span>
                                        <span>1 hora</span>
                                        <span>$120,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Lifting de Cílios</span>
                                        <span>45 min.</span>
                                        <span>$80,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Tintura de Cílios</span>
                                        <span>30 min.</span>
                                        <span>$50,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Cílios 3D</span>
                                        <span>1 e 30 min</span>
                                        <span>$150,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Manutenção de Extensão</span>
                                        <span>1 hora</span>
                                        <span>$70,00</span>
                                    </li>
                                    <li class="d-flex">
                                        <span>Remoção de Extensão</span>
                                        <span>30 min.</span>
                                        <span>$30,00</span>
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
                                <img style="width: 25%" src="../assets/img-gaby/si5.png" alt="">
                                <h3>Tratamento de Nutrição</h3>
                                <p>Um tratamento que fortalece e nutre os cílios naturais, promovendo crescimento saudável e reduzindo a queda.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-bottom-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/si6.png" alt="">
                                <h3>Reparação de Cílios</h3>
                                <p>Um serviço dedicado para reparar danos causados por extensões antigas ou maus hábitos, garantindo cílios mais fortes e saudáveis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border border-right-0 p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/si7.png" alt="">
                                <h3>Alongamento de Cílios</h3>
                                <p>O alongamento de cílios é ideal para quem deseja cílios mais longos e volumosos, proporcionando um olhar mais intenso e sedutor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="treatment w-100 text-center ftco-animate border p-3 py-4">
                            <div class="icone d-flex justify-content-center align-items-center">
                            </div>
                            <div class="text mt-2">
                                <img style="width: 25%" src="../assets/img-gaby/si8.png" alt="">
                                <h3>Esmaltação de Cílios</h3>
                                <p>Uma técnica inovadora que colore e define os cílios, proporcionando um acabamento impecável e duradouro.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin: 1% auto">
                {{-- BOTÃO AGENDAR --}}
                <button class="shadow__btn">
                    Agendar
                </button>
            </div>
        </div>
    </div>
</section>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg>
</div>

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
