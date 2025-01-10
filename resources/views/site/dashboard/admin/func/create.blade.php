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
    input[type="file"],
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

<!-- Parte do formulário -->
<form action="{{ route('dashboard.admin.func.cad') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nomeFuncionario">Nome:</label>
        <input type="text" id="nomeFuncionario" name="nomeFuncionario" required maxlength="50">
        @error('nomeFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="emailFuncionario">Email:</label>
        <input type="email" id="emailFuncionario" name="emailFuncionario" required maxlength="100">
        @error('emailFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="dataNascFuncionario">Data de Nascimento:</label>
        <input type="date" id="dataNascFuncionario" name="dataNascFuncionario" required>
        @error('dataNascFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="telefoneFuncionario">Telefone:</label>
        <input type="tel" id="telefoneFuncionario" name="telefoneFuncionario" required maxlength="16">
        @error('telefoneFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="senhaFuncionario">Senha:</label>
        <input type="text" id="senhaFuncionario" name="senhaFuncionario" required maxlength="20">
        @error('senhaFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="salarioFuncionario">Salário:</label>
        <input type="text" id="salarioFuncionario" name="salarioFuncionario" required>
        @error('salarioFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="enderecoFuncionario">Endereço:</label>
        <input type="text" id="enderecoFuncionario" name="enderecoFuncionario" required maxlength="100">
        @error('enderecoFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="nivelFuncionario">Nível:</label>
        <input type="text" id="nivelFuncionario" name="nivelFuncionario" required maxlength="100">
        @error('nivelFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="statusFuncionario">Status:</label>
        <select id="statusFuncionario" name="statusFuncionario" required>
            <option value="ATIVO">Ativo</option>
            <option value="INATIVO">Inativo</option>
        </select>
        @error('statusFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="cargoFuncionario">Cargo:</label>
        <input type="text" id="cargoFuncionario" name="cargoFuncionario" required maxlength="30">
        @error('cargoFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="idEspecialidade">ID Especialidade:</label>
        <input type="text" id="idEspecialidade" name="idEspecialidade" required>
        @error('idEspecialidade')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="fotoFuncionario">Foto:</label>
        <input type="file" id="fotoFuncionario" name="fotoFuncionario">
        @error('fotoFuncionario')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit">Cadastrar</button>
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
    color: #000000;
}
</style>

<div class="profile-container">
    <div class="profile-header">
        <div class="text-container">
            <h1>Cadastro de Funcionário</h1>
            <h4>Preencha os dados abaixo para cadastrar um novo funcionário.</h4>
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

    <form action="{{ route('dashboard.admin.func.cad') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nomeFuncionario">Nome</label>
                    <input type="text" name="nomeFuncionario" id="nomeFuncionario" class="form-control" required maxlength="50">
                    @error('nomeFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dataNascFuncionario">Data de Nascimento</label>
                    <input type="date" name="dataNascFuncionario" id="dataNascFuncionario" class="form-control" required>
                    @error('dataNascFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="emailFuncionario">Email</label>
                    <input type="email" name="emailFuncionario" id="emailFuncionario" class="form-control" required maxlength="100">
                    @error('emailFuncionario')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                    @if (session('error') && str_contains(session('error'), 'O email já está em uso'))
                        <span class="invalid-feedback d-block">{{ session('error') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="telefoneFuncionario">Telefone</label>
                    <input type="tel" name="telefoneFuncionario" id="telefoneFuncionario" class="form-control" required maxlength="16">
                    @error('telefoneFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="senhaFuncionario">Senha</label>
                    <input type="password" name="senhaFuncionario" id="senhaFuncionario" class="form-control" required maxlength="20">
                    @error('senhaFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="salarioFuncionario">Salário</label>
                    <input type="text" name="salarioFuncionario" id="salarioFuncionario" class="form-control" required>
                    @error('salarioFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="enderecoFuncionario">Endereço</label>
                    <input type="text" name="enderecoFuncionario" id="enderecoFuncionario" class="form-control" required maxlength="100">
                    @error('enderecoFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nivelFuncionario">Nível</label>
                    <input type="text" name="nivelFuncionario" id="nivelFuncionario" class="form-control" required maxlength="100">
                    @error('nivelFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="statusFuncionario">Status</label>
                    <select name="statusFuncionario" id="statusFuncionario" class="form-control" required>
                        <option value="ATIVO">Ativo</option>
                        <option value="INATIVO">Inativo</option>
                    </select>
                    @error('statusFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cargoFuncionario">Cargo</label>
                    <input type="text" name="cargoFuncionario" id="cargoFuncionario" class="form-control" required maxlength="30">
                    @error('cargoFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="idEspecialidade">ID Especialidade</label>
                    <input type="text" name="idEspecialidade" id="idEspecialidade" class="form-control" required>
                    @error('idEspecialidade')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fotoFuncionario">Foto</label>
                    <input type="file" name="fotoFuncionario" id="fotoFuncionario" class="form-control">
                    @error('fotoFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>


</div>

{{-- acs --}}
</div>

@component('components.loupe') @endcomponent
@endsection


