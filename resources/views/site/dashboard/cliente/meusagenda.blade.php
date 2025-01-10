@extends('site.dashboard.dashboardLayout.layout')

@section('dash-cliente')


<div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}


<style>
    .btn-editar {
        background-color: #59848e; /* Azul */
        border-color: #59848e;
        color: white;
    }

    .btn-editar:hover {
        background-color:#e4b48d;
        border-color:#e4b48d;
    }

    .btn-desativar {
        background-color: #e4b48d; /* Vermelho */
        border-color: #e4b48d;
        color: white;
    }

    .btn-desativar:hover {
        background-color:  #59848e;
        border-color:  #59848e;
        color: white;
    }
</style>

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
                            {{-- <th>Data e Hora Final</th> --}}
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($agendamentos as $agendamento)
                        <tr>
                            <td>{{ $agendamento->dataAgendamento }}</td>
                            <td>{{ $agendamento->categoriaAgendamento }}</td>
                            <td>{{ $agendamento->servico->nomeServico }}</td> <!-- Certifique-se de que a relação com Cliente esteja definida -->
                            <td>{{ $agendamento->funcionario->nomeFuncionario }}</td> <!-- Certifique-se de que a relação com Cliente esteja definida -->
                            <td>{{ $agendamento->data_hora_inicial }}</td>
                            {{-- <td>{{ $agendamento->data_hora_final }}</td> --}}
                            <td>{{ $agendamento->statusAgendamento }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


{{-- acs --}}
</div>

@component('components.loupe') @endcomponent


@endsection
