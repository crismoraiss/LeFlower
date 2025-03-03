@extends('site.dashboard.dashboardLayout.layout')

@section('dash-cliente')
    <!-- Link para o Lottie -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.6/lottie.min.js"></script>

    <style>
        .btn-opcoes {
            background-color: #59848e;
            /* Azul */
            border-color: #59848e;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-opcoes:hover {
            background-color: #e4b48d;
            border-color: #e4b48d;
            color: white;
        }

        .hidden-form {
            display: none;
        }

        .select-opcoes {
            padding: 10px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #59848e;
            color: #59848e;
            background-color: white;
            width: 100%;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%2359848e" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position-x: 100%;
            background-position-y: 5px;
        }

        .select-opcoes:hover {
            border-color: #e4b48d;
        }

        .table td,
        .table th {
            vertical-align: middle;
        }

        .status-confirmado,
        .status-cancelado {
            color: gray;
        }

        .descricao-opcoes {
            display: none;
            margin-top: 5px;
            color: #333;
            font-size: 14px;
            border: 1px solid #e4b48d;
            /* Bege */
            background-color: #f8f9fa;
            /* Fundo claro */
            padding: 10px;
            border-radius: 5px;
            position: absolute;
            z-index: 1000;
            width: 300px;
        }

        .descricao-opcoes.ativo {
            display: block;
        }

        .descricao-opcoes i {
            color: #59848e;
            /* Azul */
            margin-right: 5px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            text-align: center;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

    <div class="content">
        {{-- DIV PARA A ACESSIBILIDADE --}}
        <h4>Meus Agendamentos</h4>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Lista de Serviços</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Data do Agendamento</th>
                                    <th>Categoria</th>
                                    <th>Serviço</th>
                                    <th>Funcionario</th>
                                    <th>Data e Hora Inicial</th>
                                    <th>Status</th>
                                    <th id="opcoes-titulo" style="cursor: pointer; position: relative;">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($agendamentos as $agendamento)
                                    @php
                                        $agendamentoDate = new DateTime($agendamento->dataAgendamento);
                                        $currentDate = new DateTime();
                                        $dayBefore = clone $agendamentoDate;
                                        $dayBefore->modify('-1 day');
                                    @endphp
                                    <tr>
                                        <td>{{ $agendamento->dataAgendamento }}</td>
                                        <td>{{ $agendamento->categoriaAgendamento }}</td>
                                        <td>{{ $agendamento->servico->nomeServico }}</td>
                                        <td>{{ $agendamento->funcionario->nomeFuncionario }}</td>
                                        <td>{{ $agendamento->data_hora_inicial }}</td>
                                        <td
                                            class="{{ $agendamento->statusAgendamento == 'confirmado' ? 'status-confirmado' : ($agendamento->statusAgendamento == 'cancelado' ? 'status-cancelado' : '') }}">
                                            {{ ucfirst($agendamento->statusAgendamento) }}</td>
                                        <td>
                                            @if ($agendamento->statusAgendamento == 'pendente' && $currentDate >= $dayBefore && $currentDate < $agendamentoDate)
                                                <select class="select-opcoes"
                                                    onchange="handleOptionChange(this, {{ $agendamento->idAgendamento }})">
                                                    <option value="">Selecione</option>
                                                    <option value="confirmar">Confirmar</option>
                                                    <option value="cancelar">Cancelar</option>
                                                </select>

                                                <form id="confirmar-form-{{ $agendamento->idAgendamento }}"
                                                    action="{{ route('agendamentos.confirmarAgendamento', $agendamento->idAgendamento) }}"
                                                    method="POST" class="hidden-form">
                                                    @csrf
                                                    @method('PUT')
                                                </form>

                                                <form id="cancelar-form-{{ $agendamento->idAgendamento }}"
                                                    action="{{ route('agendamentos.cancelarAgendamento', $agendamento->idAgendamento) }}"
                                                    method="POST" class="hidden-form">
                                                    @csrf
                                                    @method('PUT')
                                                </form>
                                            @endif
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="descricao-opcoes" class="descricao-opcoes">
                            <i class="fas fa-exclamation-circle"></i>
                            Esse campo ficará disponível para você confirmar ou cancelar seu agendamento um dia antes do
                            mesmo.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para animação de parabéns -->
        <div id="modalParabens" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div id="animacaoParabens" style="height: 300px;"></div>
                <h2>Parabéns! Seu agendamento foi confirmado.</h2>
            </div>
        </div>

        <script>
            document.getElementById('opcoes-titulo').addEventListener('mouseenter', function() {
                var descricao = document.getElementById('descricao-opcoes');
                descricao.classList.add('ativo');
            });

            document.getElementById('opcoes-titulo').addEventListener('mouseleave', function() {
                var descricao = document.getElementById('descricao-opcoes');
                descricao.classList.remove('ativo');
            });

            function handleOptionChange(selectElement, agendamentoId) {
                if (selectElement.value === 'confirmar') {
                    document.getElementById('confirmar-form-' + agendamentoId).submit();
                    setTimeout(exibirModalParabens, 500); // Delay para garantir que o formulário seja submetido
                } else if (selectElement.value === 'cancelar') {
                    document.getElementById('cancelar-form-' + agendamentoId).submit();
                }
            }

            function exibirModalParabens() {
                var modal = document.getElementById("modalParabens");
                var span = document.getElementsByClassName("close")[0];

                modal.style.display = "block";

                // Animação Lottie
                var animacao = lottie.loadAnimation({
                    container: document.getElementById('animacaoParabens'),
                    renderer: 'svg',
                    loop: false,
                    autoplay: true,
                    path: 'https://assets10.lottiefiles.com/packages/lf20_56yyoqwo.json' // URL para animação de confetes
                });

                // Fechar o modal quando o usuário clicar no "x"
                span.onclick = function() {
                    modal.style.display = "none";
                    window.location.reload(); // Recarregar a página
                }

                // Fechar o modal quando o usuário clicar fora do modal
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                        window.location.reload(); // Recarregar a página
                    }
                }
            }
        </script>

        <!-- Link para o Font Awesome para usar o ícone -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </div>
@component('components.loupe') @endcomponent

@endsection
