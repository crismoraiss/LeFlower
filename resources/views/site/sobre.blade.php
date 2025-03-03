@extends('layout.layout')

@section('title', 'Sobre - Le Flower')

@section('conteudo')

    <div class="content">
        {{-- DIV PARA A ACESSIBILIDADE --}}
        {{-- <div class="content"> --}}
        {{-- DIV PARA A ACESSIBILIDADE --}}

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

        <!-- CSS da Lupa -->
        {{-- <link rel="stylesheet" href="{{ asset('css/loupe.css') }}"> --}}

        <style>
            .h3-gaby {
                /* font-family: var(--minha-font2); */
                font-weight: bold !important;
                font-size: 40px !important;
                letter-spacing: 1px !important;
            }

            .p-gaby {
                font-size: 30px !important;
                font-family: var(--minha-font2) !important;
                text-align: center !important;
            }

            /* FLOR PULSAR */
            .pulse {
                margin: 10px;
                width: 60px;
                height: 30px !important;
                border-radius: 50%;
                box-shadow: 0 0 0 rgba(204, 169, 44, 0.4);
                animation: pulse 2s infinite;
            }

            .pulse:hover {
                animation: none;
            }

            .fables-testimonial {
                height: 330px;
                background-image:
            }

            .position-relative {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                margin-top: 70px;
                margin-left: 190px;
            }

            .fundo {
                background-color: #59848e;
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
            .fundo {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 25px;
            }

            .texto {
                font-size: 20px !important;
                text-align: justify !important;
                width: 60%;
                line-height: 1.6;
            }
            .titlee {
                margin-bottom: 10px;
                color: #e4b48d;
                font-size: 30px !important;
                font-weight: bold;
                text-align: center
            }
            .parallax {
                height: 400px;
                /* Altura da área de visualização */
                overflow: hidden;
                position: relative;
            }
            .parallax-image {
                color: #ffffff;
                background: url(assets/saalaoinicioo.jpeg);
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                min-height: 700px;
            }
            .parallax-image2 {
                color: #ffffff;
                background: url(assets/salao1.jpg);
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                min-height: 700px;
            }
            .parallax-image3 {

                color: #ffffff;
                background: url(assets/salao3.jpeg  );
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                min-height: 700px;
            }
            .parallax-image4 {
                color: #ffffff;
                background: url(assets/salaoatualsobre.jpeg);
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                min-height: 700px;
            }
            .parallax-image5 {
                color: #ffffff;
                background: url(assets/salao-atual.jpeg);
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                min-height: 700px;
            }
            .parallax-image::after {
                content: "";
                /* Criar um pseudo-elemento para a sobreposição */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                /* Cor preta com 50% de opacidade */
            }
            .parallax-image2::after {
                content: "";
                /* Criar um pseudo-elemento para a sobreposição */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                /* Cor preta com 50% de opacidade */
            }
            .parallax-image3::after {
                content: "";
                /* Criar um pseudo-elemento para a sobreposição */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                /* Cor preta com 50% de opacidade */
            }
            .parallax-image4::after {
                content: "";
                /* Criar um pseudo-elemento para a sobreposição */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                /* Cor preta com 50% de opacidade */
            }
            .parallax-image5::after {
                content: "";
                /* Criar um pseudo-elemento para a sobreposição */
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                /* Cor preta com 50% de opacidade */
            }
            .content {
                /* Estilos para o conteúdo abaixo da imagem */
            }
            .logoVideo {
                display: none !important
            }
            @media (max-width: 700px) {

                .col-auto {
                    width: 50%;
                    justify-content: end;
                    display: flex;
                }

                .logo-banner {
                    width: 75% !important;
                }
            }
            /* ESTILIZAÇÕES HEADER RESPONSIVEL */
            @media screen and (max-width: 700px) {
                .banner {
                    /* Insira aqui o link da nova imagem */
                    content: url('../assets/logo-sobre.png');
                    width: 70% !important
                }
            }
            @media screen and (max-width: 600px) {
                .texto {
                    text-align: justify !important;
                    width: 100%;
                }
            }
            .parallax1 {
                height: 50px;
                /* Altura da área de visualização */
                overflow: hidden;
                position: relative;
            }
        </style>
        {{-- Back --}}

    @section('logo')
        <a href="/"><img style="width:50%;" class="banner" src="{{ asset('assets/logo4.png') }}" alt="logo"></a>
    @endsection

    <div style="" class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true"
            data-xl-arrows="true" data-ml-arrows="true">
            <div class="hero-slider" style="margin-bottom: -8px" style="position: relative;">

                <img class="videoLeFlower" src="{{ asset('assets/banner/flooor.jpg') }}" alt="Your Image">

                <!-- Adicione outros elementos acima do vídeo -->
                <div class="container"
                    style="position: absolute; top: 40%; left: 48%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">

                    <div style="" class="hero-style2">
                        <img class="logoVideo" src="{{ asset('assets/logo4.png') }}" alt="Logo">
                        <div>
                            <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s"
                                style="font-size: 120px; letter-spacing: 5px">SOBRE</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="fundo">
            <h4 class="titlee">
                O Início
            </h4>

            <p class="texto" class="zoom-effect">
                O início da jornada não foi isento de desafios e dificuldades. Helena Flores, a
                fundadora do salão, enfrentou uma série de obstáculos ao transformar seu modesto espaço em um refúgio de
                beleza.
                Investir todas as suas economias representou um grande risco financeiro, especialmente em um mercado
                competitivo
                como o da indústria da beleza. Além disso, as incertezas e inseguranças inerentes ao lançamento de um
                novo
                empreendimento também pesaram sobre ela.

                Inicialmente, Helena Flores teve que lidar com a falta de recursos e infraestrutura limitada. O modesto
                espaço
                que ela
                transformou em seu salão pode ter apresentado desafios em termos de tamanho, localização ou condições
                físicas.
                Ela pode ter enfrentado dificuldades para adquirir equipamentos e suprimentos necessários para oferecer
                serviços
                de alta qualidade aos seus clientes.
            </p>

            <div>
                <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}"
                    alt="Esta imagem mostra o interior de um salão de beleza. Há três cadeiras de cabeleireiro pretas dispostas na frente de espelhos altos com molduras brancas decorativas. À esquerda, há uma estante branca cheia de produtos de cabelo, como sprays, shampoos e condicionadores. A parede ao fundo é dividida em duas cores, com uma seção rosa e outra cinza escura. Há um relógio de parede redondo na seção rosa.">
            </div>
        </div><!--/.timeline-content-->
    </div><!--/.timeline-->

    <div class="parallax">
        <div class="parallax-image"></div>
    </div>

    <div class="fundo">
        <h4 class="titlee">
            Atendimento Personalizado
        </h4>

        <p class="texto">
            No Le Flower, cada cliente era tratado com cuidado e atenção individualizada. A equipe estava comprometida
            não
            apenas em cumprir, mas em superar as expectativas, buscando entender profundamente os desejos e necessidades
            de
            cada pessoa que cruzava suas portas. Eles compreendiam que a verdadeira beleza reside na singularidade de
            cada
            indivíduo e, portanto, buscavam criar looks personalizados que não apenas seguissem as tendências da moda,
            mas
            também realçassem a beleza natural de cada cliente.
        </p>

        <div>
            <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
        </div>
    </div><!--/.timeline-content-->
    {{-- </div><!--/.timeline--> --}}

    <div class="parallax">
        <div class="parallax-image2"></div>
    </div>

    <div class="fundo">
        <h4 class="titlee">
            Inovação e Tendências
        </h4>

        <p class="texto">
            O Le Flower abraçou as últimas tendências e inovações do mundo da beleza, tornando-se conhecido por seus
            serviços
            de alta qualidade e técnicas inovadoras. Investiram em treinamento contínuo para a equipe, garantindo que
            estivessem sempre atualizados com as últimas novidades do setor e oferecendo aos clientes experiências de
            beleza
            de ponta. Essa dedicação ao aprimoramento profissional não apenas permitia que o Le Flower se destacasse no
            mercado, mas também garantia que seus clientes recebessem os melhores cuidados possíveis. Desde as últimas
            técnicas de corte e coloração até os tratamentos de pele mais avançados, o Le Flower estava sempre à frente,
            oferecendo o que havia de melhor no mundo da beleza. Essa abordagem voltada para a inovação e o
            aperfeiçoamento
            constante solidificou a reputação do Le Flower como um líder no setor, conquistando a confiança e a
            fidelidade
            de
            uma clientela diversificada e exigente.
        </p>

        <div>
            <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
        </div>
    </div><!--/.timeline-content-->
    <div class="parallax">
        <div class="parallax-image3"></div>
    </div>

    <div class="fundo">
        <h4 class="titlee">
            Comunidade e Reconhecimento
        </h4>

        <p class="texto">
            Além de seu compromisso com a excelência na beleza, o Le Flower também se envolveu ativamente com a
            comunidade
            local. Eles organizaram desfiles de moda, workshops de maquiagem e eventos de caridade, demonstrando seu
            apoio e
            compromisso com as causas locais.
            O salão também destacou artistas locais, exibindo suas obras nas paredes do salão. Essa conexão com a
            comunidade
            não passou despercebida pela indústria da beleza, e o Le Flower foi reconhecido com vários prêmios,
            solidificando
            seu lugar como um ícone na cena da beleza.
        </p>

        <div>
            <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
        </div>
    </div><!--/.timeline-content-->


    <div class="parallax">
        <div class="parallax-image4"></div>
    </div>

    <div class="fundo">
        <h4 class="titlee">
            O Legado Continua
        </h4>
        <p class="texto">
            Ao longo dos anos, o Le Flower se estabeleceu como um destino de beleza icônico. Continuaram a inovar e
            inspirar,
            oferecendo a seus clientes experiências excepcionais e fortalecendo a autoconfiança por meio do poder da
            beleza.
            O legado do Le Fleur continua a prosperar, deixando uma marca indelével na indústria da beleza e na
            comunidade
            que eles tão amorosamente servem. Com cada cliente que sai por suas portas sentindo-se rejuvenescido e mais
            confiante, o Le Fleur reafirma seu compromisso não apenas com a estética, mas também com o bem-estar
            emocional
            de seus clientes. Seja através de um novo corte de cabelo, uma maquiagem impecável ou um tratamento de spa
            relaxante, o Le Fleur não apenas transforma a aparência física, mas também eleva o espírito de quem os
            visita. É
            essa dedicação incansável à excelência e ao serviço ao cliente que mantém o Le Fleur na vanguarda da
            indústria
            da beleza, continuando a ser um farol de inspiração e beleza para todos aqueles que têm o privilégio de
            cruzar
            seu caminho.
        </p>

        <div>
            <img class="pulse" src="{{ asset('assets/img-gaby/flor3.svg') }}" alt="">
        </div>
    </div><!--/.timeline-content-->

    {{-- <div class="parallax1">
    <div class="parallax-image5"></div>
</div> --}}

    <div class="parallax">
        <div class="parallax-image5"></div>
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

    <!-- progressbar js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- appear js -->

    {{-- Começo scripts gaby --}}
    <!-- DEPENDENCIA jQuery 3.6.0 COontador JORNADA -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    {{-- acs --}}
    {{-- @component('components.loupe') @endcomponent --}}
    {{-- acs --}}
</div>

@component('components.loupe')
@endcomponent
@endsection
