{{-- @extends('site.dashboard.dashboardLayout.layout')

@section('dash-func')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            width: 93%;
            margin: auto;
        }
        form div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="datetime-local"],
        select {
            width: calc(100% - 20px);
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .invalid-feedback {
            color: #ff0000;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

    <form action="{{ route('dashboard.admin.func.cadservico') }}" method="POST">
        @csrf
        <div>
            <label for="tipoServico">Tipo de Serviço:</label>
            <input type="text" id="tipoServico" name="tipoServico" required maxlength="40">
            @error('tipoServico')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="nomeServico">Nome do Serviço:</label>
            <input type="text" id="nomeServico" name="nomeServico" required maxlength="50">
            @error('nomeServico')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="duracaoServico">Duração do Serviço:</label>
            <input type="time" id="duracaoServico" name="duracaoServico" required>
            @error('duracaoServico')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="descricaoServico">Descrição do Serviço:</label>
            <input type="text" id="descricaoServico" name="descricaoServico" required>
            @error('descricaoServico')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="valorServico">Valor do Serviço:</label>
            <input type="number" id="valorServico" name="valorServico" required maxlength="40">
            @error('valorServico')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="statusServico">Status do Serviço:</label>
            <select id="statusServico" name="statusServico" required>
                <option value="ATIVO">Ativo</option>
                <option value="INATIVO">Inativo</option>
            </select>
            @error('statusServico')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection --}}
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

.edit-icon {
    position: absolute;
    bottom: 0;
    right: 0;
    background-image: url("/assets/profile.png");
    background-size: cover;
    width: 25px;
    height: 25px;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}

.edit-icon input {
    display: none;
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
</style>

<div class="profile-container">
    <div class="profile-header">
        <div class="text-container">
            <h1>Cadastro de Serviço</h1>
            <h4>Preencha os dados abaixo para cadastrar um novo serviço.</h4>
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

    <form action="{{ route('dashboard.admin.func.cadservico') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipoServico">Tipo de Serviço:</label>
                    <input type="text" name="tipoServico" id="tipoServico" class="form-control" required maxlength="40">
                    @error('tipoServico')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nomeServico">Nome do Serviço:</label>
                    <input type="text" name="nomeServico" id="nomeServico" class="form-control" required maxlength="50">
                    @error('nomeServico')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="duracaoServico">Duração do Serviço:</label>
                    <input type="time" name="duracaoServico" id="duracaoServico" class="form-control" required>
                    @error('duracaoServico')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>


            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="statusServico">Status do Serviço:</label>
                    <select name="statusServico" id="statusServico" class="form-control" required>
                        <option value="ATIVO">Ativo</option>
                        <option value="INATIVO">Inativo</option>
                    </select>
                    @error('statusServico')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="descricaoServico">Descrição do Serviço:</label>
                    <input type="text" name="descricaoServico" id="descricaoServico" class="form-control" required>
                    @error('descricaoServico')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="valorServico">Valor do Serviço:</label>
                    <input type="number" name="valorServico" id="valorServico" class="form-control" required>
                    @error('valorServico')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>


            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

{{-- acs --}}
</div>

@component('components.loupe') @endcomponent
@endsection
