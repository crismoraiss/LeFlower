{{--
@extends('site.dashboard.dashboardLayout.layout')

@section('dash-func')
    <h4>Clientes do Salão LeFlower</h4>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Lista de Clientes</h4>
                <div class="table-responsive">
                    <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Email</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($listaCliente as $clientes)
                            <tr>
                                <td>{{ $clientes->nomeCliente }}</td>
                                <td>{{ $clientes->telefoneCliente }}</td>
                                <td>{{ $clientes->emailCliente }}</td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection


 --}}
