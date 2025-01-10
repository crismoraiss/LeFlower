{{-- @extends('site.dashboard.dashboardLayout.layout')

@section('dash-func')
<div class="container">
    <h1>Editar Funcionário</h1>

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

    <form action="{{ route('dashboard.admin.func.updateFuncionario', $func->idFuncionario) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomeFuncionario">Nome</label>
            <input type="text" name="nomeFuncionario" id="nomeFuncionario" class="form-control" value="{{ $func->nomeFuncionario }}" required>
        </div>
        <div class="form-group">
            <label for="dataNascFuncionario">Data de Nascimento</label>
            <input type="date" name="dataNascFuncionario" id="dataNascFuncionario" class="form-control" value="{{ $func->dataNascFuncionario }}" required>
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
            <label for="enderecoFuncionario">Endereço</label>
            <input type="text" name="enderecoFuncionario" id="enderecoFuncionario" class="form-control" value="{{ $func->enderecoFuncionario }}" required>
        </div>
        <div class="form-group">
            <label for="salarioFuncionario">Salário</label>
            <input type="number" name="salarioFuncionario" id="salarioFuncionario" class="form-control" value="{{ $func->salarioFuncionario }}" required>
        </div>
        <div class="form-group">
            <label for="cargoFuncionario">Cargo</label>
            <input type="text" name="cargoFuncionario" id="cargoFuncionario" class="form-control" value="{{ $func->cargoFuncionario }}" required>
        </div>
        <div class="form-group">
            <label for="fotoFuncionario">Foto</label>
            <input type="file" name="fotoFuncionario" id="fotoFuncionario" class="form-control">
            @if ($func->fotoFuncionario)
                <img src="{{ asset('assets/img-user/' . $func->fotoFuncionario) }}" alt="Foto do Funcionário" width="100" height="100" class="rounded-circle mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
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
        <div class="profile-image">
            <img id="profileImagePreview" src="{{ $func->fotoFuncionario ? asset('assets/img-user/' . $func->fotoFuncionario) : 'https://via.placeholder.com/100' }}" alt="Foto do Funcionário" class="rounded-circle">
        </div>
        <div class="text-container">
            <h1>Editar Funcionário</h1>
            <h4>Atualize os dados do funcionário abaixo.</h4>
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

    <form action="{{ route('dashboard.admin.func.updateFuncionario', $func->idFuncionario) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nomeFuncionario">Nome</label>
                    <input type="text" name="nomeFuncionario" id="nomeFuncionario" class="form-control" value="{{ $func->nomeFuncionario }}" required>
                    @error('nomeFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="dataNascFuncionario">Data de Nascimento</label>
                    <input type="date" name="dataNascFuncionario" id="dataNascFuncionario" class="form-control" value="{{ $func->dataNascFuncionario }}">
                    @error('dataNascFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="emailFuncionario">Email</label>
                    <input type="email" name="emailFuncionario" id="emailFuncionario" class="form-control" value="{{ $func->emailFuncionario }}" required>
                    @error('emailFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="telefoneFuncionario">Telefone</label>
                    <input type="text" name="telefoneFuncionario" id="telefoneFuncionario" class="form-control" value="{{ $func->telefoneFuncionario }}" required>
                    @error('telefoneFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="enderecoFuncionario">Endereço</label>
                    <input type="text" name="enderecoFuncionario" id="enderecoFuncionario" class="form-control" value="{{ $func->enderecoFuncionario }}" required>
                    @error('enderecoFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="salarioFuncionario">Salário</label>
                    <input type="number" name="salarioFuncionario" id="salarioFuncionario" class="form-control" value="{{ $func->salarioFuncionario }}" required>
                    @error('salarioFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="cargoFuncionario">Cargo</label>
                    <input type="text" name="cargoFuncionario" id="cargoFuncionario" class="form-control" value="{{ $func->cargoFuncionario }}" required>
                    @error('cargoFuncionario')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fotoFuncionario">Foto</label>
                    <input type="file" name="fotoFuncionario" id="fotoFuncionario" class="form-control" accept="image/*" onchange="previewImage(event)">
                    {{-- @if ($func->fotoFuncionario)
                        <img src="{{ asset('assets/img-user/' . $func->fotoFuncionario) }}" alt="Foto do Funcionário" width="100" height="100" class="rounded-circle mt-2">
                    @endif --}}
                </div>
            </div>
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
