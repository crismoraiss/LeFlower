@extends('layout.layout')
@section('title', 'Contato - Le Flower')
@section('conteudo')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
    body, input, textarea {
        font-family: "Poppins", sans-serif;
    }
    .lf-container {
        position: sticky;
        width: 100%;
        min-height: 100vh;
        padding: 2rem;
        background-color: #fafafa;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .lf-form {
        width: 100%;
        max-width: 70%;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        overflow: hidden;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .lf-contact-form {
        background-color: #59848e;
        position: relative;
    }
    .lf-circle {
        border-radius: 50%;
        background: linear-gradient(135deg, transparent 20%, #59848e);
        position: absolute;
    }
    .lf-circle.lf-one {
        width: 130px;
        height: 130px;
        top: 130px;
        right: -40px;
    }
    .lf-circle.lf-two {
        width: 80px;
        height: 80px;
        top: 10px;
        right: 30px;
    }
    .lf-contact-form:before {
        content: "";
        position: absolute;
        width: 26px;
        height: 26px;
        background-color: #59848e;
        transform: rotate(45deg);
        top: 50px;
        left: -13px;
    }
    .lf-form form {
        padding: 2.3rem 2.2rem;
        z-index: 10;
        overflow: hidden;
        position: relative;
    }
    .lf-title {
        color: #fff;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
        margin-bottom: 0.7rem;
        font-size: 24px
    }
    .lf-input-container {
        position: relative;
        margin: 1rem 0;
    }
    .lf-input {
        width: 100%;
        outline: none;
        border: 2px solid #fafafa;
        background: none;
        padding: 0.6rem 1.2rem;
        color: #fff;
        font-weight: 500;
        font-size: 15px;
        letter-spacing: 0.5px;
        border-radius: 25px;
        transition: 0.3s;
    }
    .lf-input.lf-textarea {
        padding: 0.8rem 1.2rem;
        min-height: 150px;
        border-radius: 22px;
        resize: none;
        overflow-y: auto;
    }
    .lf-input-container label {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        padding: 0 0.4rem;
        color: #fafafa;
        font-size: 0.9rem;
        font-weight: 400;
        pointer-events: none;
        z-index: 1000;
        transition: 0.5s;
    }
    .lf-input-container.lf-textarea label {
        top: 1rem;
        transform: translateY(0);
    }
    .lf-btn {
        padding: 0.6rem 1.3rem;
        background-color: #fff;
        border: 2px solid #fafafa;
        font-size: 15px;
        color: #59848e;
        line-height: 1;
        border-radius: 25px;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        margin: 0;
    }
    .lf-btn:hover {
        background-color: transparent;
        color: #fff;
    }
    .lf-input-container span {
        position: absolute;
        top: 0;
        left: 25px;
        transform: translateY(-50%);
        font-size: 10px;
        padding: 0 0.4rem;
        color: transparent;
        pointer-events: none;
        z-index: 500;
    }
    .lf-input-container span:before, .lf-input-container span:after {
        content: "";
        position: absolute;
        width: 10%;
        opacity: 0;
        transition: 0.3s;
        height: 5px;
        background-color: #59848e;
        top: 50%;
        transform: translateY(-50%);
    }
    .lf-input-container span:before {
        left: 50%;
        color: white;
    }
    .lf-input-container span:after {
        right: 50%;
    }
    .lf-input-container.focus label {
        top: 0;
        transform: translateY(-50%);
        left: 25px;
        font-size: 0.8rem;
    }
    .lf-input-container.focus span:before, .lf-input-container.focus span:after {
        width: 50%;
        opacity: 1;
    }
    .lf-contact-info {
        padding: 2.3rem 2.2rem;
        position: relative;
    }
    .lf-contact-info .lf-title {
        color: #59848e;
        font-size: 24px
    }
    .lf-text {
        color: #333;
        margin: 1.5rem 0 2rem 0;
        font-size: 15px
    }
    .lf-information {
        display: flex;
        color: #555;
        margin: 0.7rem 0;
        align-items: center;
        font-size: 0.95rem;
    }
    .lf-icon {
        width: 28px;
        margin-right: 0.7rem;
        margin-right: 15px
    }
    .lf-social-media {
        padding: 2rem 0 0 0;
    }
    .lf-social-media p {
        color: #333;
        font-size: 15px
    }
    .lf-social-icons {
        display: flex;
        margin-top: 0.5rem;
    }
    .lf-social-icons a {
        width: 35px;
        height: 35px;
        border-radius: 5px;
        background: linear-gradient(45deg, #e4b48d, #e4b48d);
        color: #000000;
        text-align: center;
        line-height: 35px;
        margin-right: 0.5rem;
        transition: 0.3s;
    }
    .lf-social-icons a:hover {
        transform: scale(1.05);
    }
    .lf-contact-info:before {
        content: "";
        position: absolute;
        width: 110px;
        height: 100px;
        border: 22px solid #59848e;
        border-radius: 50%;
        bottom: -77px;
        right: 50px;
        opacity: 0.3;
    }
    .lf-big-circle {
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: linear-gradient(to bottom, #59848e, rgb(73, 104, 110));
        bottom: 50%;
        right: 50%;
        transform: translate(-40%, 38%);
    }
    .lf-big-circle:after {
        content: "";
        position: absolute;
        width: 360px;
        height: 360px;
        background-color: #fafafa;
        border-radius: 50%;
        top: calc(50% - 180px);
        left: calc(50% - 180px);
    }
    .lf-square {
        position: absolute;
        height: 400px;
        top: 50%;
        left: 50%;
        transform: translate(181%, 11%);
        opacity: 0.2;
    }
    @media (max-width: 850px) {
        .lf-form {
            grid-template-columns: 1fr;
        }
        .lf-contact-info:before {
            bottom: initial;
            top: -75px;
            right: 65px;
            transform: scale(0.95);
        }
        .lf-contact-form:before {
            top: -13px;
            left: initial;
            right: 70px;
        }
        .lf-square {
            transform: translate(140%, 43%);
            height: 350px;
        }
        .lf-big-circle {
            bottom: 75%;
            transform: scale(0.9) translate(-40%, 30%);
            right: 50%;
        }
        .lf-text {
            margin: 1rem 0 1.5rem 0;
        }
        .lf-social-media {
            padding: 1.5rem 0 0 0;
        }
    }
    @media (max-width: 480px) {
        .lf-container {
            padding: 1.5rem;
        }
        .lf-contact-info:before {
            display: none;
        }
        .lf-square, .lf-big-circle {
            display: none;
        }
        .lf-form form, .lf-contact-info {
            padding: 1.7rem 1.6rem;
        }
        .lf-text, .lf-information, .lf-social-media p {
            font-size: 0.8rem;
        }
        .lf-title {
            font-size: 1.15rem;
        }
        .lf-social-icons a {
            width: 30px;
            height: 30px;
            line-height: 30px;
        }
        .lf-icon {
            width: 23px;
        }
        .lf-input {
            padding: 0.45rem 1.2rem;
        }
        .lf-btn {
            padding: 0.45rem 1.2rem;
        }
        .alert-success {
            color: #fff;
            background-color: #e4b48d;
            border-color: #e4b48d
        }
    }
</style>

<div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}
@section('logo')
<a href="/"><img style="width:50%;" class="banner" src="{{ asset('assets/logo4.png') }}" alt="logo"></a>
@endsection
<div style="" class="hero-wrapper hero-2" id="hero">
    <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">
        <div class="hero-slider" style="margin-bottom: -8px; position: relative;">
            <img class="videoLeFlower" src="{{ asset('assets/banner/flooooor.jpg') }}" alt="Your Image">
            <div class="container" style="position: absolute; top: 40%; left: 48%; transform: translate(-50%, -50%); z-index: 2; text-align: center;">
                <div style="" class="hero-style2">
                    <div>
                        <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s" style="font-size: 120px;">CONTATO</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lf-container">
    <span class="lf-big-circle"></span>
    <img src="../assets/img-gaby/shape.svg" class="lf-square" alt="" />
    <div class="lf-form">
        <div class="lf-contact-info">
            <h3 class="lf-title">Fale conosco</h3>
            <p class="lf-text">Olá, Agradecemos por entrar em contato conosco. Por favor, preencha os campos abaixo com suas informações e sua mensagem. Faremos o possível para responder o mais rápido possível. <br><br> Atenciosamente, Equipe Leflower</p>
            <div class="lf-info">
                <div class="lf-information">
                    <img src="../assets/img-gaby/location.svg" class="lf-icon" alt="" />
                    <p style="margin: auto 0; font-size: 15px; color: #43485c; margin-rigth:2px;"><a href="https://www.google.com/maps/place/Senac+S%C3%A3o+Miguel+Paulista/@-23.4955972,-46.434437,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce63dda7be6fb9:0xa74e7d5a53104311!8m2!3d-23.4955972!4d-46.4318621!16s%2Fg%2F11c5bl2g7p?entry=ttu">Senac - São Miguel Paulista, 1500</a></p>
                </div>
                <div class="lf-information">
                    <img src="../assets/img-gaby/email.svg" class="lf-icon" alt="" />
                    <p style="margin: auto 0; font-size: 15px; color: #43485c; margin-rigth:2px;">leflower.com</p>
                </div>
                <div class="lf-information">
                    <img src="../assets/img-gaby/phone.svg" class="lf-icon" alt="" />
                    <p style="margin: auto 0; font-size: 15px; color: #43485c; margin-rigth:2px;">11 95158-2537</p>
                </div>
            </div>
            <div class="lf-social-media">
                <p style="font-size: 15px">Siga-nos:</p>
                <div class="lf-social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="lf-contact-form">
            <span class="lf-circle lf-one"></span>
            <span class="lf-circle lf-two"></span>
            <form action="{{ route('contato.enviar') }}" method="POST" class="contato-form" id="formContato" autocomplete="off">
                @csrf
                <h3 class="lf-title">Contato</h3>
                <div class="lf-input-container">
                    <input type="text" name="nomeContato" id="nomeContato" class="lf-input" value="{{ old('nomeContato') }}">
                    <label style="font-size: 15px;" for="">Nome</label>
                    <div id="nomeCcntatoError" class="nomeContatoError"></div>
                </div>
                <div class="lf-input-container">
                    <input type="email" name="emailContato" id="emailContato" class="lf-input" value="{{ old('emailContato') }}">
                    <label style="font-size: 15px;" for="">Email</label>
                    <div id="emailCOntatoError" class="nomeCOntatoError"></div>
                </div>
                <div class="lf-input-container">
                    <input type="tel" name="foneContato" id="foneContato" class="lf-input" value="{{ old('foneContato') }}">
                    <label style="font-size: 15px;" for="">Telefone</label>
                    <div id="foneContatoError" class="foneContatoError"></div>
                </div>
                <div class="lf-input-container lf-textarea">
                    <textarea name="msgContato" id="msgContato" class="lf-input">{{ old('msgContato') }}</textarea>
                    <label style="font-size: 15px;" for="">Mensagem</label>
                </div>
                <div class="lf-input-container lf-textarea">
                    <input class="lf-btn" type="submit" onclick="formContato(event)">
                    <div id="contatoMensagem" class="contatoMensagem" style="margin: 10px; color: #59848e"></div>
                    <style>
                        .contatoMensagem {
                            color: brown
                        }
                    </style>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const inputs = document.querySelectorAll(".lf-input-container input, .lf-input-container textarea");
        function focusFunc() {
            let parent = this.parentNode;
            parent.classList.add("focus");
            parent.querySelector("label").style.display = "none";
            parent.querySelector("span").style.color = "#fafafa";
            parent.querySelector("span").style.transition = "0.5s";
        }
        function blurFunc() {
            let parent = this.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
                parent.querySelector("label").style.display = "block";
                parent.querySelector("span").style.color = "transparent";
                parent.querySelector("span").style.transition = "0.3s";
            }
        }
        inputs.forEach((input) => {
            input.addEventListener("focus", focusFunc);
            input.addEventListener("blur", blurFunc);
        });
    });
</script>

</div>

@component('components.loupe')
@endcomponent
@endsection
