@extends('layout.layout')

@section('title', 'Home - Le Flower')

@section('logo')
    <a href="/"><img style="width:50%;" class="banner" src="{{ asset('assets/logo4.png') }}" alt="logo"></a>
@endsection

@section('conteudo')

    <div class="content">
        {{-- DIV PARA A ACESSIBILIDADE --}}
        <div style="" class="hero-wrapper hero-2" id="hero">
            <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
                data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true"
                data-xl-arrows="true" data-ml-arrows="true">
                <div class="hero-slider" style="margin-bottom: -8px" style="position: relative;">

                    <!-- Adicione o vídeo -->
                    <video class="videoLeFlower" autoplay muted loop playsinline style="">
                        <source src="{{ asset('assets/videos/a1e9727e-c0c9-46ab-a382-e0fd61b5ff73.mov') }}"
                            type="video/mp4">
                    </video>

                    <!-- Adicione outros elementos acima do vídeo -->
                    <div class="container"
                        style="position: absolute; top: 40%; left: 48%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">

                        <div style="" class="hero-style2">
                            <img class="logoVideo" src="{{ asset('assets/logo4.png') }}" alt="Logo">
                            <div>
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">É aqui onde
                                    sua</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">BELEZA</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup"
                                    data-ani-delay="0.2s">FLORESCE</span>
                            </div>

                        </div>

                        <div style="justify-content: center; align-items: center; align-content: center; margin-left:4.5%;"
                            class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                            <a href="{{ route('cadastroCliente') }}">
                                <button class="btn-flower">
                                    <div class="wrapper">

                                        <div class="flower flower1">
                                            <div class="petal one"></div>
                                            <div class="petal two"></div>
                                            <div class="petal three"></div>
                                            <div class="petal four"></div>
                                        </div>

                                        <div class="flower flower2">
                                            <div class="petal one"></div>
                                            <div class="petal two"></div>
                                            <div class="petal three"></div>
                                            <div class="petal four"></div>
                                        </div>
                                        <div class="flower flower3">
                                            <div class="petal one"></div>
                                            <div class="petal two"></div>
                                            <div class="petal three"></div>
                                            <div class="petal four"></div>
                                        </div>
                                        <p
                                            style='background: transparent; color:rgb(255, 255, 255); z-index: 6; font-size: 25pt; display: flex; letter-spacing:2pt; font-weight: 600; margin-top: 8%;'class="">
                                            Agendar</p>
                                        <div class="flower flower4">
                                            <div class="petal one"></div>
                                            <div class="petal two"></div>
                                            <div class="petal three"></div>
                                            <div class="petal four"></div>
                                        </div>
                                        <div class="flower flower5">
                                            <div class="petal one"></div>
                                            <div class="petal two"></div>
                                            <div class="petal three"></div>
                                            <div class="petal four"></div>
                                        </div>
                                        <div class="flower flower6">
                                            <div class="petal one"></div>
                                            <div class="petal two"></div>
                                            <div class="petal three"></div>
                                            <div class="petal four"></div>
                                        </div>
                                    </div>
                                </button>
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- ESTILIZAÇÃO MOBILE BANNER HOME --}}
        <style>
            @media (max-width: 700px) {
                .hero-slider {
                    height: 550px;
                    background: url('{{ asset('assets/banner/bannerRespons.jpeg') }}');
                    background-size: cover;
                }

                .banner {
                    width: 85% !important;
                }

                .col-auto {
                    width: 50%;
                    justify-content: end;
                    display: flex;
                }
            }
        </style>
        {{-- ABOUT GABY --}}
        <div class="responsive-container-block bigContainer" data-aos="fade-down" style="background: #59848e ">
            <div class="responsive-container-block Container bottomContainer">
                <div class="ultimateImg">
                    <img class="mainImg" src="{{ asset('assets/img-gaby/helena-flores.png') }}"
                        alt="Na imagem, temos uma mulher de cabelos cacheados e castanhos, com um sorriso radiante. Ela está usando uma camisa listrada e está falando ao telefone em um ambiente urbano, com prédios e carros ao fundo. Essa mulher é a dona de salão.">

                    <div class="purpleBox" data-aos="fade-right">
                        <p class="purpleText">
                            O nome "Leflower" não é apenas uma escolha casual; é um reflexo do compromisso de Helena com a
                            beleza e o crescimento pessoal.
                        </p>
                        <img class="stars" style="width: 45%" src="{{ asset('assets/img-gaby/estrela2.svg') }}">
                    </div>
                </div>
                <div class="allText bottomText">
                    <p class="text-blk headingText">
                        Sobre nós
                    </p>
                    <p class="text-blk subHeadingText">
                        Florescendo em Beleza: A História do Leflower
                    </p>
                    <p class="text-blk description">
                        No coração do Leflower está a visão e dedicação de nossa fundadora, Helena Flores. Ela começou sua
                        jornada no mundo da beleza com a convicção de que, assim como as flores desabrocham em sua própria
                        época, a beleza de cada pessoa floresce em momentos específicos. Com essa filosofia, ela estabeleceu
                        o
                        Leflower como mais do que um salão de beleza comum, mas como um espaço que abraça a singularidade de
                        cada indivíduo.
                    </p>
                    <a href="{{ route('sobre') }}">
                        <button class="cta">
                            <svg width="15px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                            <span>Leia mais</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        {{-- Perguntas frequentes --}}
        {{-- <section class="margin" data-aos="fade-up">  Com animação (Quebra) --}}

        <section class="margin">
            <div class="separadora">
                <div class='masthead-image' id='master-container' style="border-radius: 2px">
                    <div class='content center'>
                        <h1 id='master'>
                            <div>Respondendo</div>
                            <div id='master-container-scroller'>
                                <div class='master-container-scroller_item'>
                                    <a class='cta-link' href='#'>Perguntas</a>.
                                </div>
                                <div class='master-container-scroller_item'>
                                    <a class='cta-link' href='#'>Curiosidades</a>.
                                </div>
                                <div class='master-container-scroller_item'>
                                    <a class='cta-link' href='#'>Segredos</a>.
                                </div>
                            </div>
                            <div>Sobre o nosso salão.</div>
                        </h1>
                    </div>
                </div>

                <style>
                    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');

                    * {
                        margin: 0;
                        padding: 0;
                    }

                    body {
                        font-family: 'Lato', sans-serif;
                    }

                    .containerr {
                        width: 45%;
                        margin: 0 auto;
                        padding: 0 0 50px 10px
                    }

                    .containerr h1 {
                        font-size: 25px;
                        color: var(--salmao-salao);
                        text-align: center;
                        margin-bottom: 40px;
                        margin-top: 10px
                    }

                    /* Estilos para dispositivos não responsivos */

                    .accordion {
                        width: 100%;
                        padding: 0 5px;
                        border: 2px solid #59848e;
                        cursor: pointer;
                        display: flex;
                        margin: 10px 0;
                        justify-content: space-between;
                        align-items: center;
                        padding: 10px;
                        border-radius: 30px;
                    }

                    .accordion i {
                        color: #59848e;
                        transition: all .5s ease-in;
                    }

                    .accordion .fa-minus {
                        display: none;
                    }

                    .active,
                    .accordion:hover {
                        background-color: #59848e;
                        color: white;
                        transition: all .5s ease-in;
                        border: 2px solid #dddddd;
                    }

                    .active .fa-minus {
                        display: block;
                    }

                    .active .fa-plus {
                        display: none;
                    }

                    .accordion h5 {
                        font-size: 20px;
                        margin: 0;
                        color: #001733;
                        padding-left: 5px;
                    }

                    .active i,
                    .active h5,
                    .accordion:hover i,
                    .accordion:hover h5 {
                        color: white;
                    }

                    .panal p {
                        color: #000;
                        font-size: 15px
                    }

                    .panal {
                        padding: 0 15px;
                        border-left: 1px solid #59848e;
                        margin-left: 25px;
                        font-size: 14px;
                        text-align: justify;
                        overflow: hidden;
                        transition: all .5s ease-in;
                        max-height: 0;
                    }

                    @media (max-width: 570px) {
                        .containerr {
                            width: 100%;
                            margin: 0 auto;
                            padding: 5px 20px
                        }
                    }
                </style>
                <div class="containerr">
                    <h1>Perguntas Frequentes</h1>
                    {{-- <div class="accordion" data-aos="fade-left"> COM ANIMAÇÃO (QUEBRA) --}}
                    {{-- <div class="accordion" > --}}
                    <script>
                        window.addEventListener('DOMContentLoaded', (event) => {
                            // Verifica a largura da tela quando a página é carregada
                            checkWidth();

                            // Verifica a largura da tela quando a janela é redimensionada
                            window.addEventListener('resize', checkWidth);
                        });

                        function checkWidth() {
                            var screenWidth = window.innerWidth;

                            // Define a largura limite na qual você deseja remover a animação
                            var maxWidth = 700;

                            if (screenWidth < maxWidth) {
                                // Remove o atributo data-aos da div com a classe accordion
                                var accordion = document.querySelector('.accordion');
                                accordion.removeAttribute('data-aos');
                            }
                        }
                    </script>
                    <div class="accordion" data-aos="fade-left">
                        <h5> Qual é o segredo para alcançar um cabelo saudável e vibrante?</h5>
                        <i class="fas fa-minus"></i>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="panal">
                        <p>Além dos tratamentos de alta qualidade, incentivamos nossos clientes a manterem uma rotina de
                            cuidados em casa. A hidratação regular e o uso de produtos recomendados pelos nossos
                            especialistas
                            contribuem para um cabelo deslumbrante.</p>
                    </div>

                    <div class="accordion" data-aos="fade-left">
                        <h5>O que inspira as últimas tendências de cortes e cores no LeFlower?</h5>
                        <i class="fas fa-minus"></i>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="panal">
                        <p>A inspiração para nossas tendências provém de uma combinação de influências globais, moda
                            contemporânea e, mais importante, da individualidade de cada cliente. Estamos sempre atualizados
                            para oferecer o que há de mais moderno e personalizado.</p>
                    </div>

                    <div class="accordion" data-aos="fade-left">
                        <h5>Quais serviços exclusivos o LeFlower oferece para seus clientes?</h5>
                        <i class="fas fa-minus"></i>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="panal">
                        <p>Além LeFlower, oferecemos uma variedade de serviços para atender às suas necessidades de beleza,
                            incluindo cortes e colorações excepcionais, tratamentos de spa capilar exclusivos, além de
                            serviços
                            especializados em unhas, barba masculina e design de sobrancelhas. Estamos comprometidos em
                            proporcionar uma experiência completa de cuidados pessoais.</p>
                    </div>

                    <div class="accordion" data-aos="fade-left">
                        <h5>Existe algum segredo para manter a durabilidade e o brilho das colorações?</h5>
                        <i class="fas fa-minus"></i>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="panal">
                        <p>Sim, um dos nossos segredos é a utilização de produtos de coloração de alta qualidade e técnicas
                            especializadas. Além disso, oferecemos dicas personalizadas aos nossos clientes para a
                            manutenção em
                            casa, garantindo que a cor permaneça vibrante por mais tempo. </p>
                    </div>

                    <div class="accordion" data-aos="fade-left">
                        <h5>Qual é a história por trás do nome "LeFlower"?</h5>
                        <i class="fas fa-minus"></i>
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="panal">
                        <p>O nome "LeFlower" foi escolhido para refletir nossa abordagem única para a beleza, combinando a
                            elegância de "Le" com a beleza e delicadeza simbolizada pelas flores. Queríamos criar um espaço
                            que
                            não apenas transformasse a aparência, mas também celebrasse a singularidade e a feminilidade,
                            inspirando-se na beleza efêmera das flores.</p>
                    </div>
                </div>

                {{-- SCRIPT  ACORDION --}}
        </section>

        <style>
            .carousel-item {
                padding: 2%;
                margin-top: 40px;
            }

            .my-depoimento-container {
                max-width: 800px;
                /* Ajuste a largura máxima conforme necessário */
                margin: 20px auto;
            }

            .my-depoimento {
                position: relative;
                display: flex;
                flex-direction: column;
                /* Alterado para column para empilhar elementos */
                align-items: flex-start;
                /* Alinhamento à esquerda */
                padding: 20px;
                background-color: #ffedde;
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                overflow: visible;
                width: 84%;
                /* Define a largura para 100% */
                height: 260px;
                box-shadow: 21px 17px 8px #59848e;
                animation: fadeIn 2s;
                /* Adicione a animação */
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            .my-depoimento img {
                position: absolute;
                width: 25%;
                height: 58%;
                border-radius: 11%;
                margin-right: 20px;
                left: -105px;
                top: 42px;
                box-shadow: 12px 11px 8px #59848e;
            }

            .my-depoimento .conteudo {
                flex: 1;
                width: 84%;
                /* Define a largura para 100% */
                margin-left: 12%;
                margin-top: 5%;
            }

            .my-depoimento .data {
                font-size: 14px;
                color: #666;
                font-style: italic;
                margin-bottom: 5px;
            }

            .my-depoimento .texto {
                font-size: 16px;
                color: #333;
                line-height: 1.6;
                margin-bottom: 10px;
            }

            .my-depoimento .autor {
                font-size: 14px;
                font-style: italic;
                color: #666;
            }

            /* Adicione regras de estilo CSS para tornar os depoimentos responsivos */
            @media only screen and (max-width: 768px) {
                .my-depoimento-container {
                    max-width: 100%;
                    margin: 20px auto;
                    padding: 0 15px;
                    /* Adicione um pouco de padding para melhorar a visualização */
                }

                .my-depoimento {
                    width: 100%;
                    height: auto;
                    box-shadow: none;
                    /* Remova a sombra para dispositivos móveis */
                    padding: 20px 0;
                    /* Adicione espaço entre os depoimentos */
                }

                .my-depoimento img {
                    position: static;
                    /* Remova a posição absoluta da imagem */
                    width: 100%;
                    height: auto;
                    margin: 0 auto 20px;
                    /* Centralize a imagem e adicione espaço na parte inferior */
                    box-shadow: none;
                    /* Remova a sombra para dispositivos móveis */
                }

                .my-depoimento .conteudo {
                    width: 86%;
                    margin: 20;
                    /* Remova as margens para ocupar toda a largura disponível */
                }
            }
        </style>

        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="my-depoimento-container">
                        <div class="my-depoimento">
                            <img src="{{ asset('assets/img/depo6.jpeg') }}" alt="Imagem do Autor">
                            <div class="conteudo">
                                <p class="data">18 de maio de 2024</p>
                                <p class="texto">Estou muito feliz com o serviço deste salão. Profissionalismo desde a
                                    primeira visita, meu corte e coloração superaram minhas expectativas. O ambiente é
                                    relaxante, tornando cada visita uma experiência positiva. Recomendo para quem busca
                                    qualidade e excelência."</p>
                                <p class="autor">- Rebeca dos Santos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="my-depoimento-container">
                        <div class="my-depoimento">
                            <img src="{{ asset('assets/img/depo7.jpeg') }}" alt="Imagem do Autor">
                            <div class="conteudo">
                                <p class="data">22 de abril de 2024</p>
                                <p class="texto">Este salão é incrível! Descobri através de uma amiga e estou encantada.
                                    Cada visita é cuidadosa e personalizada. Meu corte e tratamento facial recentes foram
                                    excelentes, me deixando renovada e confiante. A equipe é amigável e profissional,
                                    criando um ambiente acolhedor e relaxante. Definitivamente meu novo favorito</p>
                                <p class="autor">- Caroline Alencar</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="my-depoimento-container">
                        <div class="my-depoimento">
                            <img src="{{ asset('assets/img/depo8.jpeg') }}" alt="Imagem do Autor">
                            <div class="conteudo">
                                <p class="data">22 de janeiro de 2024</p>
                                <p class="texto">Serviço de alta qualidade! O estilista captou perfeitamente o que eu
                                    queria, resultando em uma transformação incrível. Experimentei uma nova cor e amei o
                                    resultado. O ambiente é luxuoso e relaxante. Recomendo para uma experiência de beleza
                                    excepcional.</p>
                                <p class="autor">- Paloma Teixeira</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        {{-- Galeria --}}
        <style>
            .cta {
                position: relative;
                padding: 12px 18px;
                transition: all 0.2s ease;
                border: none;
                background: none;
                cursor: pointer;
            }

            .cta:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                border-radius: 50px;
                background: #e4b48d;
                width: 45px;
                height: 45px;
                transition: all 0.3s ease;
            }

            .cta span {
                position: relative;
                font-family: "Ubuntu", sans-serif;
                font-size: 18px;
                font-weight: 700;
                letter-spacing: 1px;
                color: #fff;
                margin-left: 12px
            }

            .cta svg {
                position: relative;
                top: 0;
                margin-left: 10px;
                fill: none;
                stroke-linecap: round;
                stroke-linejoin: round;
                stroke: #fff;
                stroke-width: 2;
                transform: translateX(-5px);
                transition: all 0.3s ease;
                margin-bottom: 10px;
                margin-left: 3px
            }

            .cta:hover:before {
                width: 100%;
                background: #e4b48d;

            }

            .cta:hover svg {
                stroke: #59848e;


            }

            .cta:hover span {
                color: #59848e
            }

            .cta:hover svg {
                transform: translateX(0);
            }

            .cta:active {
                transform: scale(0.95);
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
                color: gainsboro;
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
                    display: none;
                }

                .about-thumb-num {
                    display: none;
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

                .selecao {
                    height: 200px;
                    display: block;
                    margin-bottom: 250px;
                }
            }

            @media (min-width: 701px) and (max-width:1354px) {
                .about-thumb-2 img {
                    display: none;
                }

                .about-thumb-num {
                    display: none;
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
                    display: none;
                }

                .container2 {
                    display: none;
                }

                .container3 {
                    display: none;
                }

                .col-md-6 {
                    width: 100%;
                }

                .card-header h3 {
                    text-align: center;
                }

                .servico .row {
                    margin: 0 auto;
                }

                .col-md-6 {
                    -webkit-box-flex: 0;
                    -ms-flex: 0 0 50%;
                    flex: 0 0 50%;
                    max-width: 100%;
                }
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
        </style>

        <section class="insta-photos" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <div class="container">
                <h1 class="heading">Nosso Instagram <span href="https://instagram.com/leflower_salon"></span>
                </h1>
                <a href="https://instagram.com/leflower_salon">
                    <button class="buttonGaleria">
                        <span class="icon"><svg height="33" viewBox="0 0 128 128" width="33"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <linearGradient id="a" gradientTransform="matrix(1 0 0 -1 594 633)"
                                    gradientUnits="userSpaceOnUse" x1="-566.711" x2="-493.288" y1="516.569"
                                    y2="621.43">
                                    <stop offset="0" stop-color="#ffb900"></stop>
                                    <stop offset="1" stop-color="#9100eb"></stop>
                                </linearGradient>
                                <circle cx="64" cy="64" fill="url(#a)" r="64"></circle>
                                <g fill="#fff">
                                    <path
                                        d="m82.333 104h-36.666c-11.947 0-21.667-9.719-21.667-21.667v-36.666c0-11.948 9.72-21.667 21.667-21.667h36.666c11.948 0 21.667 9.719 21.667 21.667v36.667c0 11.947-9.719 21.666-21.667 21.666zm-36.666-73.333c-8.271 0-15 6.729-15 15v36.667c0 8.271 6.729 15 15 15h36.666c8.271 0 15-6.729 15-15v-36.667c0-8.271-6.729-15-15-15z">
                                    </path>
                                    <path
                                        d="m64 84c-11.028 0-20-8.973-20-20 0-11.029 8.972-20 20-20s20 8.971 20 20c0 11.027-8.972 20-20 20zm0-33.333c-7.352 0-13.333 5.981-13.333 13.333 0 7.353 5.981 13.333 13.333 13.333s13.333-5.98 13.333-13.333c0-7.352-5.98-13.333-13.333-13.333z">
                                    </path>
                                    <circle cx="85.25" cy="42.75" r="4.583"></circle>
                                </g>
                            </svg></span>
                        <span class="text1">Follow me</span>
                        <span class="text2">@leflower</span>

                    </button>
                </a>

                <div class="gallery">
                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/nail.png') }}"
                            alt="Close-up de mãos femininas com unhas pintadas em estilo ombré rosa e branco, segurando uma folha verde.">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/men-corte.png') }}"
                            alt="Um barbeiro com cabelo curto e barba aparada está cortando o cabelo de um cliente que está sentado em uma cadeira de barbeiro. Ambos estão em um ambiente de barbearia moderna.">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/hair-clear.png') }}"
                            alt="Uma mulher com cabelo molhado está recebendo uma lavagem de cabelo em uma pia de salão. Ela está reclinada com os olhos fechados, e a água está correndo sobre seu cabelo.">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/makeup.png') }}"
                            alt="Uma maquiadora está aplicando maquiagem nos olhos de uma mulher jovem que está de olhos fechados. Ambas estão em um ambiente bem iluminado, típico de um salão de beleza.">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/skin-men.png') }}"
                            alt="Um homem está recebendo um tratamento facial. Ele está deitado, com uma máscara facial cinza sendo aplicada em seu rosto por uma esteticista.">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/men.png') }}"
                            alt="Um barbeiro está aparando o cabelo de um homem com barba cheia. O homem está sentado em uma cadeira de barbeiro, olhando para frente.">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/hair-2.png') }}"
                            alt="Close-up da parte de trás da cabeça de uma mulher com cabelo longo e ondulado, enquanto ela está tendo seu cabelo estilizado por um cabeleireiro.">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/nail-make.png') }}"
                            alt="Close-up de uma esteticista utilizando luvas roxas e um equipamento de manicure para tratar as unhas de um cliente.">
                    </div>

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/pintura-hair.png') }}"
                            alt="Uma mulher com cabelo loiro está em um salão de beleza, com uma capa protetora, enquanto seu cabelo está sendo tingido.">
                    </div>
                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/sombra.png') }}"
                            alt="Close-up do rosto de uma mulher enquanto ela está tendo suas sobrancelhas cuidadosamente depiladas com uma pinça por uma esteticista usando luvas brancas.">
                    </div>
                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/hair2.png') }}"
                            alt="Um cabeleireiro está secando o cabelo de uma cliente com um secador de cabelo. A cliente está sentada e o cabeleireiro está focado no trabalho.">
                    </div>
                    <div class="gallery-item">
                        <img class="gallery-image" src="{{ asset('assets/img/depi.png') }}"
                            alt="Close-up de uma esteticista usando luvas pretas aplicando cera quente dourada em um cliente para depilação.">
                    </div>
                </div>

            </div>
        </section>

        {{-- SCRIPT PARA A ANIMAÇÃO DO FAC SAIR QUANDO A TELA FOR MENOR QUE 700PX, REMOVENDO O ATRIBUTO data-aos DAS SEÇÃO/DIV, ASSIM EVITA QUEBRAR NO MOBILE --}}
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                // Verifica a largura da tela quando a página é carregada
                checkWidth();

                // Verifica a largura da tela quando a janela é redimensionada
                window.addEventListener('resize', checkWidth);
            });

            function checkWidth() {
                var screenWidth = window.innerWidth;

                // Define a largura limite na qual você deseja remover a animação
                var maxWidth = 700;

                if (screenWidth < maxWidth) {
                    // Remove o atributo data-aos de todas as divs com a classe accordion
                    var accordions = document.querySelectorAll('.accordion');
                    accordions.forEach(function (accordion) {
                        accordion.removeAttribute('data-aos');
                    });

                    var instaPhotos = document.querySelector('.insta-photos');
                    instaPhotos.removeAttribute('data-aos');

                    var instaPhotos = document.querySelector('.purpleBox');
                    instaPhotos.removeAttribute('data-aos');
                }
            }
        </script>

        {{-- SCRIPT ACCORDION FUNCIONAR --}}
        <script>
            var acordion = document.getElementsByClassName('accordion');

            var i;
            var len = acordion.length;
            for (i = 0; i < len; i++) {
                acordion[i].addEventListener('click', function () {
                    this.classList.toggle('active');
                    var panal = this.nextElementSibling;
                    if (panal.style.maxHeight) {
                        panal.style.maxHeight = null;
                    } else {
                        panal.style.maxHeight = panal.scrollHeight + 'px';
                    }
                })
            }
        </script>
    </div>

    @component('components.loupe')
    @endcomponent

@endsection
