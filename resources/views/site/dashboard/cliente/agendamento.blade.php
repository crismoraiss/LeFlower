@extends('site.dashboard.dashboardLayout.layout')

<title>Cliente - Agendar </title>

@section('dash-cliente')

    <head>
        <title>Agendamento de Horários</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background: linear-gradient(to right, #e6e9f0 0%, #eef1f5 100%);
            }

            .container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin: auto;
            }

            h1 {
                color: #324b5c;
                text-align: center;
            }

            .info,
            .horario {
                background-color: #ffffff;
                border: none;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                margin-bottom: 15px;
            }

            .horario {
                cursor: pointer;
                transition: transform 0.2s, background-color 0.3s;
                padding: 10px;
                text-align: center;
            }

            .horario:hover {
                transform: translateY(-2px);
                background-color: #59848e;
                color: #ffffff;
            }

            .agendar-btn {
                background: linear-gradient(to right, #59848e, #416f7a);
                color: #ffffff;
                padding: 10px 20px;
                border-radius: 25px;
                cursor: pointer;
                border: none;
                transition: background-color 0.3s, transform 0.2s;
                display: block;
                width: 100%;
                margin-top: 20px;
            }

            .agendar-btn:hover {
                background: linear-gradient(to right, #416f7a, #324b5c);
                transform: translateY(-2px);
            }

            input[type="date"],
            select {
                border-radius: 5px;
                border: 1px solid #ccc;
                padding: 10px;
                width: 100%;
                box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
                transition: box-shadow 0.3s;
            }

            input[type="date"]:hover,
            select:hover {
                box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            .acordeao .acordeao-item {
                border: 1px solid #59848e;
                margin: 10px 0;
                border-radius: 5px;
                transition: box-shadow 0.3s;
                background-color: #ffffff;
                padding: 10px;
                letter-spacing: 1px;
            }

            .data-tipo-servico {
                font-size: 60px;
            }

            .nomeServico {
                color: #59848e;
            }

            .selected-nomeServico {
                color: #fff;
                /* Escolha a cor que deseja para o texto selecionado */
            }

            .acordeao .acordeao-item-header {
                cursor: pointer;
                padding: 10px;
                font-weight: bold;
                color: #59848e;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .acordeao .acordeao-item-header:hover {
                cursor: pointer;
                padding: 10px;
                font-weight: bold;
                color: #fff;
            }

            .acordeao .acordeao-item-body {
                display: none;
                padding: 20px;
                font-size: 14px;
                border-top: 1px solid #ddd;
            }

            /* ESTILIZAÇÃO CALENDÁRIO */
            .flatpickr-calendar {
                background-color: #ffffff;
                border: none;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            .flatpickr-months {
                background-color: #59848e;
                color: #ffffff;
            }

            .flatpickr-weekday {
                color: #59848e;
                font-weight: bold;
            }

            .flatpickr-day {
                border-radius: 50%;
                color: #59848e;
            }

            .flatpickr-day.selected,
            .flatpickr-day.startRange,
            .flatpickr-day.endRange {
                background-color: #59848e;
                color: #ffffff;
                border: none;
            }

            .flatpickr-day:hover {
                background-color: #e4b48d;
                color: #ffffff;
            }

            .flatpickr-day.disabled,
            .flatpickr-day.disabled.in-range,
            .flatpickr-day.disabled.out-of-range,
            .flatpickr-day.disabled:hover {
                color: rgba(89, 132, 142, 0.205);
                cursor: not-allowed;
            }

            .flatpickr-prev-month,
            .flatpickr-next-month {
                color: #ffffff;
            }

            .flatpickr-monthDropdown-months,
            .flatpickr-current-month {
                background-color: #59848e;
                color: #ffffff;
            }

            .flatpickr-day.today {
                border: 1px solid #59848e;
                color: #ffffff;
            }

            .flatpickr-current-month .numInputWrapper input[type="number"] {
                color: #ffffff;
            }

            /* Select Meses */
            .flatpickr-current-month .flatpickr-monthDropdown-months option {
                background-color: black;
                color: #ffffff;
            }

            .flatpickr-current-month .flatpickr-monthDropdown-months option:hover {
                background-color: #416f7a;
                color: #ffffff;
            }

            /* Setas  */
            .flatpickr-months .flatpickr-prev-month.flatpickr-next-month,
            .flatpickr-months .flatpickr-next-month.flatpickr-next-month {
                fill: #ffffff;
            }

            .flatpickr-months .flatpickr-prev-month.flatpickr-prev-month {
                fill: #ffffff;
            }

            /* Estilo Serviço selecionado */
            .acordeao .acordeao-item.selected {
                background-color: #59848e;
                color: #ffffff;
            }

            #horariosContainer {
                display: flex;
                justify-content: space-between;
                flex-direction: row;
                flex-wrap: wrap;
            }

            /* Horários */
            .funcionario {
                display: flex;
                align-items: flex-start;
                margin: 15px 0;
                cursor: pointer;
                transition: background-color 0.3s;
                position: relative;
                flex-direction: column;
                align-items: center;
                width: 30%;
            }

            .foto-funcionario {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                object-fit: cover;
                margin-bottom: 10px;
            }

            .funcionario:hover {
                background-color: #f0f0f0;
            }

            .nome {
                color: #59848e;
                font-weight: bold;
                font-size: 20px;
                letter-spacing: 2px;
            }

            .cartao {
                border: 1px solid #e0e0e0;
                border-radius: 10px;
                padding: 10px;
                text-align: center;
                width: 100%;
                margin-bottom: 10px;
                transition: margin 0.3s;
            }

            .horarios {
                display: flex;
                flex-wrap: wrap;
                background-color: #ffffff;
                padding: 10px;
                border: 1px solid #e0e0e0;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 10;
                max-height: 260px;
                overflow-y: auto;
                justify-content: center;
            }

            .horario {
                margin: 5px;
                width: 45%;
            }

            .horario input[type="radio"] {
                display: none;
            }

            .horario label {
                border: 1px solid #e4b48d;
                border-radius: 20px;
                padding: 3px 10px;
                color: #e4b48d;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
                display: inline-block;
            }

            .horario input[type="radio"]:checked+label {
                background-color: #e4b48d;
                color: white;
            }

            .reservar {
                border: 1px solid #ccc;
                border-radius: 20px;
                padding: 10px 20px;
                margin-left: 20px;
                cursor: pointer;
            }

            /* Responsividade */
            @media (max-width: 1200px) {
                .funcionario {
                    flex-direction: column;
                    align-items: center;
                }

                .cartao {
                    width: 100%;
                    margin-right: 0;
                }

                .horarios {
                    position: static;
                    width: 100%;
                    margin-top: 10px;
                    justify-content: center;
                }

                .horario {
                    margin: 5px;
                    width: 45%;
                }
            }

            @media (max-width: 900px) {
                .funcionario {
                    flex-direction: column;
                    align-items: center;
                }

                .cartao {
                    width: 100%;
                    margin-right: 0;
                }

                .horarios {
                    position: static;
                    width: 100%;
                    margin-top: 10px;
                    justify-content: center;
                }

                .horario {
                    margin: 5px;
                    width: 44%;
                }
            }

            @media (max-width: 768px) {
                #horariosContainer {
                    display: flex;
                    width: 100%;
                    flex-direction: column;
                    align-items: center;
                }

                .funcionario {
                    flex-direction: column;
                    align-items: center;
                    width: 95%;
                }

                .cartao {
                    width: 100%;
                    margin-right: 0;
                    margin-bottom: 10px;
                }

                .horarios {
                    position: static;
                    width: 100%;
                    margin-top: 10px;
                }

                .horario {
                    width: 40% !important;
                    margin: 5px;
                }
            }

            .foto-funcionario {
                width: 150px;
                height: 150px;
            }

            @media (max-width: 600px) {
                .funcionario {
                    flex-direction: column;
                    align-items: center;
                }

                .cartao {
                    width: 100%;
                    margin-right: 0;
                    margin-bottom: 20px;
                }

                .horarios {
                    position: static;
                    width: 100%;
                    margin-top: 10px;
                }

                .horario {
                    width: 100%;
                    margin: 5px;
                }
            }

            /* Modal */
            .modal {
                display: none;
                /* Altere esta linha */
                position: absolute;
                z-index: 1;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgb(89 132 142 / 61%);
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }

            .modal-content {
                background-color: #fff;
                padding: 0;
                border: 1px solid #888;
                width: 80%;
                max-width: 800px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }

            .close {
                color: #aaa;
                font-size: 28px;
                font-weight: bold;
                position: absolute;
                right: 20px;
                top: 10px;
                cursor: pointer;
            }

            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
            }

            .modal-body {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                width: 100%;
                padding: 0;
            }

            .modal-text {
                flex: 1;
                padding: 20px;
                text-align: left;
                box-sizing: border-box;
            }

            .modal-text h2 {
                color: #59848e;
                font-family: 'Roboto', sans-serif;
                font-weight: bold;
                text-align: center;
            }

            .modal-text p {
                color: #333;
                font-family: 'Roboto', sans-serif;
                margin: 10px 0;
            }

            .agendar-btn {
                background: linear-gradient(to right, #59848e, #59848e);
                color: #ffffff;
                padding: 10px 20px;
                border-radius: 25px;
                cursor: pointer;
                border: none;
                transition: background-color 0.3s, transform 0.2s;
                display: inline-block;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                margin-top: 20px;
            }

            .agendar-btn:hover {
                background: linear-gradient(to right, #59848e, #59848e);
                transform: translateY(-2px);
            }

            .modal-image {
                flex: 1;
                text-align: center;
                max-height: 100%;
                overflow: hidden;
            }

            .modal-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }

            /* Responsividade */
            @media (max-width: 768px) {
                .modal-body {
                    flex-direction: column-reverse;
                }

                .modal-image {
                    max-height: 300px;
                }

                .modal-image img {
                    border-radius: 10px 10px 0 0;
                }

                .modal-text {
                    text-align: justify;
                    padding: 10px;
                }

                .modal-text h2 {
                    margin-top: 10px;
                }

                .agendar-btn {
                    width: 80%;
                    margin: 20px auto;
                    display: flex;
                    justify-content: center;
                }
            }

            /* ANIMAÇÃO MODAL CONFIRMAR */
            @keyframes modalFadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-50px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .modal.fade-in {
                animation: modalFadeIn 0.5s ease-out;
            }

            /* Adicionar estilos para o modal de erro */
        .error-modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .error-modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            width: 40%;
            border-radius: 10px;
            text-align: center
        }

        .close-error-modal {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-error-modal:hover,
        .close-error-modal:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        </style>
    </head>

    <body>
        <div class="content">
            {{-- DIV PARA A ACESSIBILIDADE --}}
        <div class="container">
            <h1>Agendamento</h1>
            <form id="agendamentoForm" action="{{ route('agendar') }}" method="POST">
                @csrf
                <label for="especialidade">Categoria Serviço</label>
                <select name="especialidade" id="especialidade" required>
                    <option value="">Selecione...</option>
                    @foreach ($especialidades as $especialidade)
                        <option value="{{ $especialidade->especialidade }}">{{ $especialidade->especialidade }}</option>
                    @endforeach
                </select>

                <input type="hidden" name="idCliente" value="{{ $cliente->idCliente }}">
                <input type="hidden" name="idFuncionario" id="idFuncionario">
                <input type="hidden" name="idServico" id="idServico">

                <div id="servicosAcordeao" class="acordeao"></div>

                <div id="calendarioContainer">
                    <label for="data">Selecione uma data:</label>
                    <input type="text" id="data" name="data" required>
                </div>

                <div id="horariosContainer">
                    <!-- Horários disponíveis serão inseridos aqui -->
                </div>


                <button id="abrirModalAgendar" class="agendar-btn" type="button">Agendar</button>

                <div id="agendarModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="modal-body">
                            <div class="modal-text">
                                <h2>Confirmar Agendamento?</h2>
                                <p>Serviço: <span id="modal-servico"></span></p>
                                <p>Data: <span id="modal-data"></span></p>
                                <p>Horário: <span id="modal-horario"></span></p>
                                <p>Funcionário: <span id="modal-funcionario"></span></p>
                                <p>Preço: <span id="modal-preco"></span></p>
                                <button id="confirmarAgendar" class="agendar-btn">Confirmar</button>
                            </div>
                            <div class="modal-image">
                                <img src="{{ asset('assets/img-gaby/confirmar.jpeg') }}" alt="Cliente feliz no salão">
                            </div>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('error'))
                <div id="errorModal" class="error-modal">
                    <div class="error-modal-content">
                        <span class="close-error-modal">&times;</span>
                        <h2 style="color: #59848e;">ATENÇÃO!</h2>
                        <p>{{ session('error') }}</p>
                    </div>
                </div>
            @endif
            </form>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>
        <script src="{{ asset('js/modalagendar.js') }}"></script> {{-- JS do modal de confirmação --}}
        <script>
            $(document).ready(function() {
                @if (session('error'))
                var errorModal = document.getElementById("errorModal");
                var span = document.getElementsByClassName("close-error-modal")[0];

                errorModal.style.display = "block";

                span.onclick = function() {
                    errorModal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == errorModal) {
                        errorModal.style.display = "none";
                    }
                }
            @endif
                // Função para formatar a duração
                function formatarDuracao(duracao) {
                    const partes = duracao.split(':');
                    const horas = parseInt(partes[0], 10);
                    const minutos = parseInt(partes[1], 10);

                    let duracaoFormatada = '';
                    if (horas > 0) {
                        duracaoFormatada += `${horas * 60 + minutos} minutos`;
                    } else {
                        duracaoFormatada += `${minutos} minutos`;
                    }
                    return duracaoFormatada;
                }
                $('#especialidade').change(function() {
                    var especialidadeSelecionada = $(this).val();
                    if (especialidadeSelecionada) {
                        $.ajax({
                            url: "{{ route('listarServicos') }}",
                            method: 'GET',
                            data: {
                                especialidade: especialidadeSelecionada
                            },
                            success: function(data) {
                                $('#servicosAcordeao').empty();
                                $.each(data, function(index, servico) {
                                    var duracaoFormatada = formatarDuracao(servico
                                        .duracaoServico);
                                    var acordeaoItem = $(
                                        '<div class="acordeao-item"></div>');
                                    var header = $(
                                        '<div class="acordeao-item-header" data-tipo-servico="' +
                                        servico.idServico + '">' +
                                        '<span class="nomeServico" style="float: left; letter-spacing: 1px;">' +
                                        servico.nomeServico + '</span>' +
                                        '<span style="float: right; color: #e4b48d; letter-spacing: 1px;">R$' +
                                        servico.valorServico + '</span>' +
                                        '</div>');
                                    var body = $(
                                        '<div class="acordeao-item-body" style="display: none;">' +
                                        '<p>Duração: ' + duracaoFormatada + '</p>' +
                                        '<p>Descrição: ' + servico.descricaoServico +
                                        '</p>' +
                                        '</div>');
                                    acordeaoItem.append(header, body);
                                    $('#servicosAcordeao').append(acordeaoItem);

                                    header.click(function() {
                                        var itemBody = $(this).next(
                                            '.acordeao-item-body');
                                        if (itemBody.is(':visible')) {
                                            itemBody.slideUp();
                                        } else {
                                            $('#servicosAcordeao .acordeao-item-body')
                                                .slideUp();
                                            itemBody.slideDown();
                                        }
                                        $('#servicosAcordeao .acordeao-item')
                                            .removeClass('selected');
                                        acordeaoItem.addClass('selected');

                                        $('#idServico').val($(this).data(
                                            'tipo-servico'));

                                        // Remove a classe de todos os nomes de serviço
                                        $('.nomeServico').removeClass(
                                            'selected-nomeServico');
                                        // Adiciona a classe ao nome do serviço selecionado
                                        $(this).find('.nomeServico').addClass(
                                            'selected-nomeServico');

                                        var tipoServicoSelecionado = $(this).data(
                                            'tipo-servico');
                                        var dataSelecionada = $('#data').val();
                                        carregarHorariosDisponiveis(
                                            especialidadeSelecionada,
                                            tipoServicoSelecionado,
                                            dataSelecionada);
                                    });
                                });
                            },
                            error: function() {
                                console.error("Erro ao carregar os serviços");
                            }
                        });
                    }
                });

                function carregarHorariosDisponiveis(especialidade, tipoServico, data) {
                    if (especialidade && tipoServico && data) {
                        $.ajax({
                            url: "{{ route('listarHorarios') }}",
                            method: 'GET',
                            data: {
                                especialidade: especialidade,
                                tipoServico: tipoServico,
                                data: data
                            },
                            success: function(data) {
                                $('#horariosContainer').empty();
                                var funcionarios = {};

                                data.forEach(function(horario) {
                                    if (!funcionarios[horario.idFuncionario]) {
                                        funcionarios[horario.idFuncionario] = {
                                            nome: horario.nomeFuncionario,
                                            cargo: horario.cargoFuncionario,
                                            foto: horario.fotoFuncionario,
                                            horarios: []
                                        };
                                    }
                                    funcionarios[horario.idFuncionario].horarios.push(horario
                                        .horario);
                                });

                                $.each(funcionarios, function(id, funcionario) {
                                    var card = $('<div class="funcionario"></div>');
                                    var info = $(
                                        '<div class="cartao"><img src="{{ asset('assets/img-user') }}/' +
                                        funcionario.foto +
                                        '" alt="' + funcionario.nome +
                                        '" class="foto-funcionario"><div class="nome">' +
                                        funcionario.nome + '</div><div class="funcao">' +
                                        funcionario.cargo + '</div></div>');
                                    var horariosDiv = $(
                                        '<div class="horarios" style="display: none;"></div>');
                                    funcionario.horarios.forEach(function(horario, index) {
                                        var horarioFormatted = horario.substring(0,
                                            5); // Certifique-se de que está no formato H:i
                                        var horarioItem = $(
                                            '<div class="horario"><input type="radio" id="horario-' +
                                            id + '-' + index +
                                            '" name="horario" value="' +
                                            horarioFormatted +
                                            '" data-id-funcionario="' + id +
                                            '"><label for="horario-' + id + '-' +
                                            index + '">' + horarioFormatted +
                                            '</label></div>');
                                        horariosDiv.append(horarioItem);
                                    });
                                    card.append(info).append(horariosDiv);
                                    $('#horariosContainer').append(card);

                                    card.click(function() {
                                        if (horariosDiv.is(':visible')) {
                                            horariosDiv.slideUp();
                                        } else {
                                            $('#horariosContainer .horarios').slideUp();
                                            horariosDiv.slideDown();
                                        }
                                    });
                                });

                                $('input[name="horario"]').change(function() {
                                    var idFuncionario = $(this).data('id-funcionario');
                                    $('#idFuncionario').val(idFuncionario);
                                });
                            },
                            error: function() {
                                console.error("Erro ao carregar os horários");
                            }
                        });
                    }
                }



                function getMaxDate() {
                    var today = new Date();
                    var maxDate = new Date();
                    maxDate.setMonth(today.getMonth() + 3);
                    return maxDate;
                }

                flatpickr("#data", {
                    locale: "pt",
                    enableTime: false,
                    dateFormat: "Y-m-d",
                    altInput: true,
                    altFormat: "d F, Y",
                    minDate: "today",
                    maxDate: getMaxDate(),
                    disable: [function(date) {
                        return (date.getDay() === 0);
                    }],
                    onDayCreate: function(dObj, dStr, fp, dayElem) {
                        if (dayElem.dateObj.getDay() === 0) {
                            dayElem.classList.add('disabled');
                        }
                        const today = new Date();
                        const maxDate = new Date();
                        maxDate.setMonth(today.getMonth() + 3);
                        if (dayElem.dateObj < today || dayElem.dateObj > maxDate) {
                            dayElem.classList.add('disabled', 'out-of-range');
                        }
                    },
                    onChange: function(selectedDates, dateStr, instance) {
                        var especialidadeSelecionada = $('#especialidade').val();
                        var tipoServicoSelecionado = $('.acordeao-item.selected .acordeao-item-header')
                            .data('tipo-servico');
                        carregarHorariosDisponiveis(especialidadeSelecionada, tipoServicoSelecionado,
                            dateStr);
                    }
                });
            });
        </script>
 <div>

 </div>
    </body>

    @component('components.loupe')
    @endcomponent
@endsection
