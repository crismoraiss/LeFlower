@extends('site.dashboard.dashboardLayout.layout')

@section('dash-cliente')
    <div class="content">
        {{-- DIV PARA A ACESSIBILIDADE --}}
        <h4>Olá, {{ $cliente->nomeCliente }}</h4>
    </div>
    @component('components.loupe')
    @endcomponent
@endsection
