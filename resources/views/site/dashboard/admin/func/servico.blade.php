
@extends('site.dashboard.dashboardLayout.layout')

@section('dash-func')


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

    <h4>Serviços do Salão LeFlower</h4>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Serviços</h4>
                <div class="table-responsive">
                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>Atualizar</th>
                                <th>Desativar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($listaServico as $servicos)
                            <tr>
                                <td>{{ $servicos->tipoServico }}</td>
                                <td>{{ $servicos->nomeServico }}</td>
                                <td>{{ $servicos->descricaoServico }}</td>
                                <td>{{ $servicos->valorServico }}</td>


                                   {{-- atualizar e desativar --}}
                                   <td>
                                    <a href="{{ route('dashboard.admin.func.atualizar', $servicos->idServico) }}" class="btn btn-editar btn-sm">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('dashboard.admin.func.inativo', $servicos->idServico) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-desativar btn-sm">Desativar</button>
                                    </form>
                                </td>

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



