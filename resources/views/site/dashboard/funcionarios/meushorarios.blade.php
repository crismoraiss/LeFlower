@extends('site.dashboard.dashboardLayout.layout')

@section('dashboard')
<div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}


<style>
    .btn-editar {
        background-color: #59848e; /* Azul */
        border-color: #59848e;
        color: white;
    }

    .btn-editar:hover {
        background-color: #e4b48d;
        border-color: #e4b48d;
    }

    .btn-desativar {
        background-color: #e4b48d; /* Vermelho */
        border-color: #e4b48d;
        color: white;
    }

    .btn-desativar:hover {
        background-color: #59848e;
        border-color: #59848e;
        color: white;
    }
</style>

<h4>Meus Horarios</h4>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Lista de horarios</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>hora inicial</th>
                            <th>hora final</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($horarios as $horario)
                            <tr>

                                <td>{{ $horario->data_hora_inicial }}</td>
                                <td>{{ $horario->data_hora_final }}</td>
                                <td><a href="{{ route('dashboard.funcionarios.mheditar', $horario->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
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
