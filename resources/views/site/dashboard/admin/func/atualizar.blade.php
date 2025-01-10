 @extends('site.dashboard.dashboardLayout.layout')

@section('dash-func')


<div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}

<style>
    .profile-container {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 1000px;
        margin: 0 auto;
    }

    .profile-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        position: relative;
    }

    .profile-header img {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-right: 20px;
    }

    .profile-header .text-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .profile-header h1 {
        margin: 0;
        font-size: 24px;
    }

    .profile-header h4 {
        margin: 5px 0 0 0;
        font-size: 18px;
        color: #555;
    }

    .profile-container .form-group {
        margin-bottom: 15px;
    }

    .profile-container .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .profile-container .form-group input,
    .profile-container .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .profile-container .btn-primary {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #59848e;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .profile-container .btn-primary:hover {
        background-color: #e4b48d;
    }

    .invalid-feedback {
        color: #ff0000;
    }

    #profileImagePreview {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-right: 20px;
    }
    </style>

    <div class="profile-container">
        <div class="profile-header">

            <div class="text-container">
                <h1>Editar Serviço</h1>
                <h4>Atualize os dados do serviço abaixo.</h4>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('dashboard.admin.func.updateServico', $servicos->idServico) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tipoServico">Tipo de Serviço</label>
                <input type="text" name="tipoServico" id="tipoServico" class="form-control" value="{{ $servicos->tipoServico }}" required>
            </div>
            <div class="form-group">
                <label for="nomeServico">Nome do Serviço</label>
                <input type="text" name="nomeServico" id="nomeServico" class="form-control" value="{{ $servicos->nomeServico }}" required>
            </div>
             <div class="form-group">
                <label for="duracaoServico">Duração do Serviço</label>
                <input type="time" name="duracaoServico" id="duracaoServico" class="form-control" value="{{ $servicos->duracaoServico }}" required>
            </div>
            <div class="form-group">
                <label for="descricaoServico">Descrição do Serviço</label>
                <input type="text" name="descricaoServico" id="descricaoServico" class="form-control" value="{{ $servicos->descricaoServico }}" required>
            </div>
            <div class="form-group">
                <label for="valorServico">Valor do Serviço</label>
                <input type="number" name="valorServico" id="valorServico" class="form-control" value="{{ $servicos->valorServico }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            const output = document.getElementById('profileImagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    </script>


{{-- acs --}}
</div>

@component('components.loupe') @endcomponent


@endsection

