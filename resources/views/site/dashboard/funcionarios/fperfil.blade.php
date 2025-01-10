@extends('site.dashboard.dashboardLayout.layout')

@section('dashboard')

<div class="content">
    {{-- DIV PARA A ACESSIBILIDADE --}}


<style>
    .profile-container {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 1015px;
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

    #profileImagePreview {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-right: 20px;
    }
    </style>

    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-image">
                <img id="profileImagePreview" src="{{ $func->fotoFuncionario ? asset('assets/img-user/' . $func->fotoFuncionario) : 'https://via.placeholder.com/100' }}" alt="Foto do Funcionário" class="rounded-circle">
            </div>
            <div class="text-container">
                <h1>Editar perfil</h1>
                <h4>{{ $func->nomeFuncionario }}</h4>
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

        <form action="{{ route('dashboard.funcionarios.updateF') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fotoFuncionario">Foto</label>
                        <input type="file" name="fotoFuncionario" id="fotoFuncionario" class="form-control" accept="image/*" onchange="previewImage(event)">
                        <img id="profileImagePreview" src="{{ asset('assets/img-user/' . $func->fotoFuncionario) }}" alt="Foto do Funcionário" class="rounded-circle mt-2" style="display: none;">
                    </div>
                    <div class="form-group">
                        <label for="nomeFuncionario">Nome</label>
                        <input type="text" name="nomeFuncionario" id="nomeFuncionario" class="form-control" value="{{ $func->nomeFuncionario }}" required>
                    </div>
                    <div class="form-group">
                        <label for="dataNascFuncionario">Data de Nascimento</label>
                        <input type="date" name="dataNascFuncionario" id="dataNascFuncionario" class="form-control" value="{{ $func->dataNascFuncionario }}">
                    </div>
                    <div class="form-group">
                        <label for="emailFuncionario">Email</label>
                        <input type="email" name="emailFuncionario" id="emailFuncionario" class="form-control" value="{{ $func->emailFuncionario }}" required>
                    </div>
                    <div class="form-group">
                        <label for="telefoneFuncionario">Telefone</label>
                        <input type="text" name="telefoneFuncionario" id="telefoneFuncionario" class="form-control" value="{{ $func->telefoneFuncionario }}" required>
                    </div>
                    <div class="form-group">
                        <label for="senhaFuncionario">Senha</label>
                        <input type="password" name="senhaFuncionario" id="senhaFuncionario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="senhaFuncionario_confirmation">Confirmar Senha</label>
                        <input type="password" name="senhaFuncionario_confirmation" id="senhaFuncionario_confirmation"
                            class="form-control">
                    </div>
                    <div id="error-message" style="color: rgb(0, 0, 0); display: none;">
                        As senhas não coincidem.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="salarioFuncionario">Salário</label>
                        <input type="number" name="salarioFuncionario" id="salarioFuncionario" class="form-control" value="{{ $func->salarioFuncionario }}" required>
                    </div>
                    <div class="form-group">
                        <label for="enderecoFuncionario">Endereço</label>
                        <input type="text" name="enderecoFuncionario" id="enderecoFuncionario" class="form-control" value="{{ $func->enderecoFuncionario }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nivelFuncionario">Nível</label>
                        <input type="text" name="nivelFuncionario" id="nivelFuncionario" class="form-control" value="{{ $func->nivelFuncionario }}" required>
                    </div>
                    <div class="form-group">
                        <label for="statusFuncionario">Status</label>
                        <input type="text" name="statusFuncionario" id="statusFuncionario" class="form-control" value="{{ $func->statusFuncionario }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cargoFuncionario">Cargo</label>
                        <input type="text" name="cargoFuncionario" id="cargoFuncionario" class="form-control" value="{{ $func->cargoFuncionario }}" required>
                    </div>
                    <div class="form-group">
                        <label for="idEspecialidade">Especialidade</label>
                        <input type="number" name="idEspecialidade" id="idEspecialidade" class="form-control" value="{{ $func->idEspecialidade }}" required>
                    </div>
                    {{-- <div class="form-group">
                        <label for="fotoFuncionario">Foto</label>
                        <input type="file" name="fotoFuncionario" id="fotoFuncionario" class="form-control" accept="image/*" onchange="previewImage(event)">
                        <img id="profileImagePreview" src="{{ asset('assets/img-user/' . $func->fotoFuncionario) }}" alt="Foto do Funcionário" class="rounded-circle mt-2" style="display: none;">
                    </div> --}}
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
        </form>
    </div>


{{-- acs --}}
</div>

@component('components.loupe') @endcomponent

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



    document.addEventListener('DOMContentLoaded', function() {
                const senha = document.getElementById('senhaFuncionario');
                const confirmarSenha = document.getElementById('senhaFuncionario_confirmation');
                const errorMessage = document.getElementById('error-message');

                confirmarSenha.addEventListener('input', function() {
                    if (confirmarSenha.value !== senha.value) {
                        errorMessage.style.display = 'block';
                    } else {
                        errorMessage.style.display = 'none';
                    }
                });

                const form = document.querySelector('form'); // Selecione o formulário correto
                form.addEventListener('submit', function(event) {
                    if (confirmarSenha.value !== senha.value) {
                        event.preventDefault();
                        errorMessage.style.display = 'block';
                    }
                });
            });

    </script>



@endsection
