{{-- @extends('site.dashboard.dashboardLayout.layout')

@section('dashboard')
<div class="container">
    <h2>Editar Horário</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.funcionarios.atualizarHorario', $horario->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="data_hora_inicial">Hora Inicial:</label>
            <input type="time" name="data_hora_inicial" class="form-control" value="{{ \Carbon\Carbon::parse($horario->data_hora_inicial)->format('H:i') }}">
        </div>
        <div class="form-group">
            <label for="data_hora_final">Hora Final:</label>
            <input type="time" name="data_hora_final" class="form-control" value="{{ \Carbon\Carbon::parse($horario->data_hora_final)->format('H:i') }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection

 --}}

 @extends('site.dashboard.dashboardLayout.layout')

 @section('dashboard')
 <div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}


 <style>
     .btn-editar {
         background-color: #59848e; /* Azul */
         border-color: #59848e;
         color: white;
         margin-top: 15px;
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

     .card {
         background-color: #f8f9fa;
         padding: 20px;
         border-radius: 5px;
     }
 </style>

 <h4>Meus Horários</h4>

 <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
         <div class="card-body">
             <h4 class="card-title">Editar Horário</h4>

             @if ($errors->any())
                 <div class="alert alert-danger">
                     <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
             @endif

             <div class="form-container">
                 <form action="{{ route('dashboard.funcionarios.atualizarHorario', $horario->id) }}" method="POST">
                     @csrf
                     <div class="form-group">
                         <label for="data_hora_inicial">Hora Inicial:</label>
                         <input type="time" name="data_hora_inicial" class="form-control" value="{{ \Carbon\Carbon::parse($horario->data_hora_inicial)->format('H:i') }}">
                     </div>
                     <div class="form-group">
                         <label for="data_hora_final">Hora Final:</label>
                         <input type="time" name="data_hora_final" class="form-control" value="{{ \Carbon\Carbon::parse($horario->data_hora_final)->format('H:i') }}">
                     </div>

                     <button type="submit" class="btn btn-primary btn-editar">Atualizar</button>
                 </form>
             </div>
         </div>
     </div>
 </div>


{{-- acs --}}
</div>

@component('components.loupe') @endcomponent

 @endsection
