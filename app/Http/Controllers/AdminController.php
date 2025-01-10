<?php

// dash da cris

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;

// perfil do admin/atualizar
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;


// servico
use Illuminate\Support\Facades\DB; //teste sem o model
use App\Models\ServicosModel;
use App\Models\Cliente;

class AdminController extends Controller
{
    // listar os funcionarios
    public function indexFunc()
    {
        $idFuncionario = session('id');
        $func = Funcionario::find($idFuncionario);
        $listaFunc = Funcionario::where('statusFuncionario', 'ATIVO')->get();

        return view('site.dashboard.admin.func.index', compact('func', 'listaFunc'));
    }


    // Exibir/editar perfil do admin
    public function perfilFunc()
    {
        Log::info('Perfil do admin acessado');
        $idFuncionario = session('id');
        if (!$idFuncionario) {
            Log::error('ID do funcionário não encontrado na sessão');
            return redirect()->back()->with('error', 'ID do funcionário não encontrado na sessão.');
        }
        Log::info('ID do Funcionario: ' . $idFuncionario);

        $func = Funcionario::find($idFuncionario);

        if (!$func) {
            Log::error('Funcionário não encontrado com ID: ' . $idFuncionario);
            return redirect()->back()->with('error', 'Funcionário não encontrado.');
        }

        return view('site.dashboard.admin.func.perfil', compact('func'));
    }

    public function updateFunc(Request $request)
    {
        Log::info('Update profile request received', ['request' => $request->all()]);

        $idFuncionario = session('id');
        if (!$idFuncionario) {
            Log::error('ID do funcionário não encontrado na sessão');
            return redirect()->back()->with('error', 'ID do funcionário não encontrado na sessão.');
        }
        Log::info('ID do Funcionario: ' . $idFuncionario);

        $func = Funcionario::find($idFuncionario);

        if (!$func) {
            Log::error('Funcionário não encontrado com ID: ' . $idFuncionario);
            return redirect()->back()->with('error', 'Funcionário não encontrado.');
        }

        // Encontrar o usuário correspondente na tabela tblusuarios
        $user = Usuario::where('emailUsuario', $func->emailFuncionario)->first();

        if (!$user) {
            Log::error('Usuário não encontrado com o email: ' . $func->emailFuncionario);
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        $validatedData = $request->validate([
            'nomeFuncionario' => 'required|string|max:255',
            'dataNascFuncionario' => 'nullable|date',
            'emailFuncionario' => 'required|string|email|max:255',
            'telefoneFuncionario' => 'required|string|max:15',
            'enderecoFuncionario' => 'required|string|max:255',
            'senhaFuncionario' => 'nullable|string|confirmed|min:2',
            'salarioFuncionario' => 'required|numeric',
            'nivelFuncionario' => 'required|string|max:255',
            'statusFuncionario' => 'required|string|max:255',
            'cargoFuncionario' => 'required|string|max:255',
            'idEspecialidade' => 'required|integer',
            'fotoFuncionario' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        Log::info('Validation passed', ['validatedData' => $validatedData]);

        // Atualiza os dados na tabela tblfuncionarios
        $func->nomeFuncionario = $validatedData['nomeFuncionario'];
        $func->dataNascFuncionario = $validatedData['dataNascFuncionario'] ?? $func->getOriginal('dataNascFuncionario');
        $func->emailFuncionario = $validatedData['emailFuncionario'];
        $func->telefoneFuncionario = $validatedData['telefoneFuncionario'];
        $func->enderecoFuncionario = $validatedData['enderecoFuncionario'];
        $func->salarioFuncionario = $validatedData['salarioFuncionario'];
        $func->nivelFuncionario = $validatedData['nivelFuncionario'];
        $func->statusFuncionario = $validatedData['statusFuncionario'];
        $func->cargoFuncionario = $validatedData['cargoFuncionario'];
        $func->idEspecialidade = $validatedData['idEspecialidade'];

        // Atualiza os dados na tabela tblusuarios
        $user->emailUsuario = $validatedData['emailFuncionario'];
        if (!empty($validatedData['senhaFuncionario'])) {
            Log::info('Password field is filled');
            $func->senhaFuncionario = $validatedData['senhaFuncionario'];
            $user->senhaUsuario = $func->senhaFuncionario;
            Log::info('Senha não criptografada: ' . $func->senhaFuncionario);
        } else {
            Log::info('Password field is not filled');
        }

        // Atualiza a foto do funcionário se um novo arquivo foi enviado
        if ($request->hasFile('fotoFuncionario')) {
            Log::info('Foto do funcionário atualizada');

            // Exclui a foto antiga se existir
            if ($func->fotoFuncionario && file_exists(public_path('assets/img-user/' . $func->fotoFuncionario))) {
                unlink(public_path('assets/img-user/' . $func->fotoFuncionario));
            }

            // Salva a nova foto
            $image = $request->file('fotoFuncionario');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img-user');
            $image->move($destinationPath, $name);
            $func->fotoFuncionario = $name;
        }

        $func->save();
        $user->save();

        Log::info('Profile updated successfully for ID: ' . $idFuncionario);

        return redirect()->route('dashboard.admin.func.perfil')->with('success', 'Perfil atualizado com sucesso!');
    }


    // Criar funcionário
    public function createFunc()
    {
        // Verifica se o usuário está autenticado
        $idFuncionario = session('id');

        // Busca o funcionário no banco de dados
        $func = Funcionario::find($idFuncionario);

        // Se o funcionário não for encontrado, retorna erro 404
        if (!$func) {
            abort(404, 'Funcionario nao encontrado');
        }

        // Retorna a view com os dados do funcionário
        return view('site.dashboard.admin.func.create', compact('func'));
    }

    // CADASTRAR FUNCIONÁRIO NOVO
    public function cadFunc(Request $request)
    {
        $request->validate([
            'nomeFuncionario' => 'required|string|max:100',
            'emailFuncionario' => 'required|string|max:100|email|unique:tblusuarios,emailUsuario',
            'senhaFuncionario' => 'required|string|max:20',
            'telefoneFuncionario' => 'required|string|max:20',
            'salarioFuncionario' => 'required|numeric',
            'enderecoFuncionario' => 'required|string|max:100',
            'cargoFuncionario' => 'required|string|max:30',
            'statusFuncionario' => 'required|string|max:20',
            'dataNascFuncionario' => 'required|date',
            'idEspecialidade' => 'required|integer',
            'fotoFuncionario' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Novo campo para foto
        ]);

        // Criação do funcionário
        $func = new Funcionario();
        $func->nomeFuncionario = $request->input('nomeFuncionario');
        $func->emailFuncionario = $request->input('emailFuncionario');
        $func->senhaFuncionario = $request->input('senhaFuncionario');
        $func->telefoneFuncionario = $request->input('telefoneFuncionario');
        $func->salarioFuncionario = $request->input('salarioFuncionario');
        $func->enderecoFuncionario = $request->input('enderecoFuncionario');
        $func->nivelFuncionario = 'Esteticista'; // Definindo o valor padrão para 'nivelFuncionario'
        $func->cargoFuncionario = $request->input('cargoFuncionario');
        $func->statusFuncionario = $request->input('statusFuncionario');
        $func->dataNascFuncionario = $request->input('dataNascFuncionario');
        $func->idEspecialidade = $request->input('idEspecialidade');

        // Se uma foto for enviada, salva-a
        if ($request->hasFile('fotoFuncionario')) {
            $image = $request->file('fotoFuncionario');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img-user');
            $image->move($destinationPath, $name);
            $func->fotoFuncionario = $name;
        }

        try {
            $func->save();
        } catch (\Exception $e) {
            Log::error('Erro ao salvar o funcionário: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Erro ao salvar o funcionário. Por favor, tente novamente.');
        }

        // Verifique se o funcionário foi salvo corretamente
        if (!$func->idFuncionario) {
            Log::error('Erro ao salvar o funcionário: ID não foi gerado.');
            return redirect()->back()->with('error', 'Erro ao salvar o funcionário. Por favor, tente novamente.');
        }

        Log::info('Funcionário salvo com sucesso. ID do Funcionário: ' . $func->idFuncionario);

        // Criação do usuário
        $usuario = new Usuario();
        $usuario->nomeUsuario = $request->input('nomeFuncionario'); // Ajuste de 'name' para 'nomeUsuario'
        $usuario->emailUsuario = $request->input('emailFuncionario'); // Ajuste de 'email' para 'emailUsuario'
        $usuario->senhaUsuario = $request->input('senhaFuncionario'); // Ajuste de 'password' para 'senhaUsuario' sem criptografia
        $usuario->tipoUsuario_id = $func->idFuncionario; // Atribuindo o ID do funcionário ao tipoUsuario_id
        $usuario->tipoUsuario_type = 'funcionario'; // Define o tipo de usuário como 'funcionario'
        $usuario->statusUsuario = 'pendente'; // Define o status do usuário como 'pendente'

        try {
            $usuario->save();
            Log::info('Usuário salvo com sucesso. ID do Usuário: ' . $usuario->idUsuario);
        } catch (\Exception $e) {
            Log::error('Erro ao salvar o usuário: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Erro ao salvar o usuário. Por favor, tente novamente.');
        }

        return redirect()->route('dashboard.admin.func.index')->with('success', 'Funcionário e usuário cadastrados com sucesso!');
    }


    // atualizar e desativar funcionario
    public function editFuncionario($id)
    {
        $func = Funcionario::findOrFail($id);
        return view('site.dashboard.admin.func.editar', compact('func'));
    }

    public function updateFuncionario(Request $request, $id)
    {
        Log::info('Update profile request received', ['request' => $request->all()]);

        $request->validate([
            'nomeFuncionario' => 'required|string|max:255',
            'dataNascFuncionario' => 'required|date',
            'emailFuncionario' => 'required|string|email|max:255',
            'telefoneFuncionario' => 'required|string|max:15',
            'enderecoFuncionario' => 'required|string|max:255',
            'salarioFuncionario' => 'required|numeric',
            'cargoFuncionario' => 'required|string|max:255',
            'fotoFuncionario' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Log::info('Validation passed');

        $func = Funcionario::findOrFail($id);
        $func->nomeFuncionario = $request->nomeFuncionario;
        $func->dataNascFuncionario = $request->dataNascFuncionario;
        $func->emailFuncionario = $request->emailFuncionario;
        $func->telefoneFuncionario = $request->telefoneFuncionario;
        $func->enderecoFuncionario = $request->enderecoFuncionario;
        $func->salarioFuncionario = $request->salarioFuncionario;
        $func->cargoFuncionario = $request->cargoFuncionario;

        if ($request->hasFile('fotoFuncionario')) {
            Log::info('Processing photo upload');
            $image = $request->file('fotoFuncionario');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img-user');
            Log::info('Image name: ' . $name);
            Log::info('Destination path: ' . $destinationPath);

            $image->move($destinationPath, $name);
            Log::info('Image moved to destination');

            // Deleta a foto antiga se existir
            if ($func->fotoFuncionario && file_exists($destinationPath . '/' . $func->fotoFuncionario)) {
                unlink($destinationPath . '/' . $func->fotoFuncionario);
                Log::info('Old image deleted');
            }

            $func->fotoFuncionario = $name;
        }

        $func->save();

        Log::info('Profile updated successfully for ID: ' . $id);

        return redirect()->route('dashboard.admin.func.index')->with('success', 'Funcionário atualizado com sucesso!');
    }

    public function desativarFuncionario($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->statusFuncionario = 'INATIVO';
        $funcionario->save();

        return redirect()->route('dashboard.admin.func.index')->with('success', 'Funcionário desativado com sucesso!');
    }

    // SERVIÇOS
    public function indexFuncServico()
    {
        $idServico = session('id');
        $servicos = ServicosModel::find($idServico);
        $listaServico = ServicosModel::all();

        $listaServico = ServicosModel::where('statusServico', 'ATIVO')->get();

        return view('site.dashboard.admin.func.servico', compact('listaServico'));
    }


    // atualizar e desativar serviços
    public function atualizarServico($id)
    {
        $servicos = ServicosModel::findOrFail($id);
        return view('site.dashboard.admin.func.atualizar', compact('servicos'));
    }

    public function updateServico(Request $request, $id)
    {
        $request->validate([
            'nomeServico' => 'required|string|max:255',
            'tipoServico' => 'required|string|max:255',
            'descricaoServico' => 'required|string|max:255',
            'valorServico' => 'required|string|max:15',
        ]);

        $servicos = ServicosModel::findOrFail($id);
        $servicos->update($request->all());

        return redirect()->route('dashboard.admin.func.servico')->with('success', 'Serviço atualizado com sucesso!');
    }


    public function desativarServico($id)
    {
        $servicos = ServicosModel::findOrFail($id);
        $servicos->statusServico = 'INATIVO';
        $servicos->save();

        return redirect()->route('dashboard.admin.func.servico')->with('success', 'Serviço desativado com sucesso!');
    }

    // criar serviço
    public function createServico()
    {
        // Verifica se o usuário está autenticado
        $idServico = session('id');

        // Busca o serviço no banco de dados
        $servicos = ServicosModel::find($idServico);

        // Se o serviço não for encontrado, retorna erro 404
        if (!$servicos) {
            abort(404, 'Serviço não encontrado');
        }

        // Retorna a view com os dados do serviço
        return view('site.dashboard.admin.func.criar', compact('servicos'));
    }

    // CADASTRAR NOVO SERVIÇO
    public function cadServico(Request $request)
    {
        // Validação dos campos
        $validatedData = $request->validate([
            'tipoServico' => 'required|string|max:40',
            'nomeServico' => 'required|string|max:50',
            'duracaoServico' => 'required|date_format:H:i',
            'descricaoServico' => 'required|string',
            'valorServico' => 'required|string|max:40',
            'statusServico' => 'required|string|in:ATIVO,INATIVO', // Ajustado para enum
        ]);

        $servico = new ServicosModel();

        $servico->tipoServico = $validatedData['tipoServico'];
        $servico->nomeServico = $validatedData['nomeServico'];
        $servico->duracaoServico = $validatedData['duracaoServico'];
        $servico->descricaoServico = $validatedData['descricaoServico'];
        $servico->valorServico = $validatedData['valorServico'];
        $servico->statusServico = $validatedData['statusServico'];

        $servico->save();

        return redirect()->route('dashboard.admin.func.servico')->with('success', 'Serviço cadastrado com sucesso');
    }
}
