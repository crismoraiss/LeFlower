@extends('site.dashboard.dashboardLayout.layout')

@section('dash-cliente')
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

    <div class="content">
        {{-- DIV PARA A ACESSIBILIDADE --}}

        <div class="profile-container">
            <div class="profile-header">
                <div class="profile-image">
                    <img id="profileImagePreview"
                        src="{{ $cliente->fotoCliente ? asset('assets/img-client/' . $cliente->fotoCliente) : 'https://via.placeholder.com/100' }}"
                        alt="Foto do Cliente" class="rounded-circle">
                </div>
                <div class="text-container">
                    <h1>Perfil do Cliente</h1>
                    <h4>Atualize os dados do cliente abaixo.</h4>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('cliente.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fotoCliente">Foto</label>
                            <input type="file" name="fotoCliente" id="fotoCliente" class="form-control" accept="image/*"
                                onchange="previewImage(event)">
                            <img id="profileImagePreview" src="{{ asset('assets/img-client/' . $cliente->fotoCliente) }}"
                                alt="Foto do Cliente" class="rounded-circle mt-2" style="display: none;">
                        </div>

                        <div class="form-group">
                            <label for="nomeCliente">Nome</label>
                            <input type="text" name="nomeCliente" id="nomeCliente" class="form-control"
                                value="{{ $cliente->nomeCliente }}" required>
                            @error('nomeCliente')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="telefoneCliente">Telefone</label>
                            <input type="text" name="telefoneCliente" id="telefoneCliente" class="form-control"
                                value="{{ $cliente->telefoneCliente }}" required>
                            @error('telefoneCliente')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>




                    </div>




                    <div class="col-md-6">









                        <div class="form-group">
                            <label for="emailCliente">Email</label>
                            <input type="email" name="emailCliente" id="emailCliente" class="form-control"
                                value="{{ $cliente->emailCliente }}" required>
                            @error('emailCliente')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="senhaCliente">Senha</label>
                            <input type="password" name="senhaCliente" id="senhaCliente" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="senhaCliente_confirmation">Confirmar Senha</label>
                            <input type="password" name="senhaCliente_confirmation" id="senhaCliente_confirmation"
                                class="form-control">
                        </div>
                    </div>


                </div>

                <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
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


    </div>
    @component('components.loupe')
    @endcomponent
@endsection
