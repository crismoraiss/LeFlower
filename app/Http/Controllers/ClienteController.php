<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class ClienteController extends Controller
{
    public function index()
    {

        $idCliente = session('id');
        $cliente = Cliente::find($idCliente);

        $tipoUsuario = session('tipo');

        $usuario = Usuario::find($tipoUsuario);

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }
        return view('site.dashboard.cliente.cliente', compact('cliente', 'usuario'));
    }

    //API
    public function show($id)
    {
        $cliente = Cliente::find($id);

        if (!$cliente) {
            return response()->json(['message' => 'Cliente não encontrado'], 404);
        }

        return response()->json($cliente, 200);
    }

    //ATUALIZAR PERFIL
    // public function update(Request $request, $id)
    // {
    //     Log::info('Iniciando atualização do cliente', ['id' => $id]);

    //     $cliente = Cliente::find($id);

    //     if ($cliente === null) {
    //         Log::error('Cliente não encontrado', ['id' => $id]);
    //         return response()->json(['erro' => 'Impossível realizar a atualização. O cliente não existe!'], 404);
    //     }

    //     Log::info('Cliente encontrado', ['cliente' => $cliente]);

    //     // Verificar o tipo de conteúdo da requisição
    //     $contentType = $request->headers->get('Content-Type');
    //     Log::info('Tipo de Conteúdo da Requisição', ['content_type' => $contentType]);

    //     // Verificar os dados recebidos na requisição
    //     $requestData = $request->all();
    //     Log::info('Dados recebidos na requisição', ['data' => $requestData]);

    //     // Regras de validação
    //     $rules = [
    //         'nomeCliente' => 'sometimes|required|string|max:255',
    //         'telefoneCliente' => 'sometimes|required|string|max:15',
    //         'emailCliente' => 'sometimes|required|string|email|max:255',
    //         'senhaCliente' => 'sometimes|nullable|string|confirmed|min:2',
    //         'fotoCliente' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    //     ];
    //     Log::info('Regras de validação', ['rules' => $rules]);

    //     // Validar os dados
    //     $validatedData = $request->validate($rules);
    //     Log::info('Dados validados', ['validatedData' => $validatedData]);

    //     // Atualizar a foto do cliente se estiver presente
    //     if ($request->hasFile('fotoCliente')) {
    //         Log::info('Foto presente na requisição');

    //         $destinationPath = public_path('/assets/img-user');
    //         if ($cliente->fotoCliente && file_exists($destinationPath . '/' . $cliente->fotoCliente)) {
    //             Log::info('Deletando foto antiga', ['foto' => $cliente->fotoCliente]);
    //             unlink($destinationPath . '/' . $cliente->fotoCliente);
    //         }

    //         $image = $request->file('fotoCliente');
    //         $name = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $name);
    //         $validatedData['fotoCliente'] = $name;

    //         Log::info('Foto atualizada', ['fotoCliente' => $name]);
    //     }

    //     // Atualizar os campos do cliente
    //     $cliente->fill($validatedData);

    //     if ($request->filled('senhaCliente')) {
    //         $cliente->senhaCliente = bcrypt($request->input('senhaCliente'));
    //         Log::info('Senha criptografada');
    //     }

    //     $cliente->save();
    //     Log::info('Dados do cliente atualizados', ['cliente' => $cliente]);

    //     // Atualiza os dados na tabela tblusuarios
    //     $user = Usuario::where('tipoUsuario_type', 'cliente')->where('tipoUsuario_id', $id)->first();
    //     if ($user) {
    //         $user->nomeUsuario = $request->input('nomeCliente', $user->nomeUsuario);
    //         $user->emailUsuario = $request->input('emailCliente', $user->emailUsuario);
    //         if ($request->filled('senhaCliente')) {
    //             $user->senhaUsuario = bcrypt($request->input('senhaCliente'));
    //         }
    //         $user->save();

    //         Log::info('Dados do usuário atualizados', ['user' => $user]);
    //     }

    //     return response()->json($cliente, 200);
    // }

    public function update(Request $request, $id)
    {
        Log::info('Atualização do cliente com ID: ' . $id);
        Log::info('Dados recebidos:', $request->all());

        $cliente = Cliente::find($id);
        if ($cliente === null) {
            Log::error('Cliente não encontrado com ID: ' . $id);
            return response()->json(['erro' => 'Cliente não encontrado!'], 404);
        }

        // Obter as regras de validação e feedback do cliente
        $rules = $cliente->rules();
        $feedback = $cliente->feedback();

        // Adicionar a regra de validação para a imagem apenas se o arquivo estiver presente
        if ($request->hasFile('fotoCliente')) {
            $rules['fotoCliente'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        } else {
            // Remover a regra de validação para a imagem se não houver um arquivo presente
            unset($rules['fotoCliente']);
        }

        $validator = Validator::make($request->all(), $rules, $feedback);

        if ($validator->fails()) {
            Log::error('Erros de validação para cliente ID ' . $id . ': ', $validator->errors()->toArray());
            return response()->json($validator->errors(), 422);
        }

        // Processar o upload da nova imagem, se presente
        if ($request->hasFile('fotoCliente')) {
            if ($cliente->fotoCliente && Storage::disk('public')->exists('assets/img-user/' . $cliente->fotoCliente)) {
                Storage::disk('public')->delete('assets/img-user/' . $cliente->fotoCliente);
            }
            $imagem = $request->file('fotoCliente');
            $urlImagem = $imagem->store('assets/img-user', 'public');
            $cliente->fotoCliente = $urlImagem;
        }

        // Atualizar os dados do cliente, exceto a imagem, mas incluindo a imagem atualizada se houver
        $cliente->update($request->except(['fotoCliente']) + ['fotoCliente' => $cliente->fotoCliente]);

        Log::info('Cliente atualizado com sucesso: ', [$cliente]);
        return response()->json($cliente, 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'emailUsuario' => 'required|email',
            'senhaUsuario' => 'required',
        ]);

        $usuario = Usuario::where('emailUsuario', $credentials['emailUsuario'])
            ->where('senhaUsuario', $credentials['senhaUsuario'])
            ->first();

        if ($usuario && $usuario->tipoUsuario_type == 'cliente') {
            $cliente = $usuario->tipo_usuario()->first();
            if ($cliente) {
                return response()->json([
                    'message' => 'Login bem sucedido',
                    'user' => [
                        'id' => $usuario->idUsuario,
                        'nome' => $usuario->nomeUsuario,
                        'email' => $usuario->emailUsuario,
                        'tipo' => $usuario->tipoUsuario_type,
                        'dados_cliente' => [
                            'idCliente' => $cliente->idCliente,
                            'nome' => $cliente->nomeCliente,
                            'telefone' => $cliente->telefoneCliente,
                            'email' => $cliente->emailCliente,
                            'senha' => $cliente->senhaCliente,
                            'foto' => $cliente->fotoCliente,

                        ],
                    ],
                    'access_token' => $usuario->createToken('auth_token')->plainTextToken,
                    'token_type' => 'Bearer',
                ]);
            }
        }
        return response()->json(['data' => ['message' => 'Credenciais inválidas ou usuário não é um cliente']], 401);
    }


    public function agendar()
    {

        $idCliente = session('id');
        $cliente = Cliente::find($idCliente);

        return view('site.dashboard.cliente.agendamento', compact('cliente'));
    }

    // dash cris
    // Exibir perfil do cliente
    public function perfilCliente()
    {
        Log::info('Perfil do cliente acessado');
        $idCliente = session('id');
        if (!$idCliente) {
            Log::error('ID do cliente não encontrado na sessão');
            return redirect()->back()->with('error', 'ID do cliente não encontrado na sessão.');
        }
        Log::info('ID do Cliente: ' . $idCliente);

        $cliente = Cliente::find($idCliente);

        if (!$cliente) {
            Log::error('Cliente não encontrado com ID: ' . $idCliente);
            return redirect()->back()->with('error', 'Cliente não encontrado.');
        }

        return view('site.dashboard.cliente.cperfil', compact('cliente'));
    }

    // Atualizar perfil do cliente
    public function updateCliente(Request $request)
    {
        Log::info('Update profile request received', ['request' => $request->all()]);

        $idCliente = session('id');
        if (!$idCliente) {
            Log::error('ID do cliente não encontrado na sessão');
            return redirect()->back()->with('error', 'ID do cliente não encontrado na sessão.');
        }
        Log::info('ID do Cliente: ' . $idCliente);

        $cliente = Cliente::find($idCliente);

        if (!$cliente) {
            Log::error('Cliente não encontrado com ID: ' . $idCliente);
            return redirect()->back()->with('error', 'Cliente não encontrado.');
        }

        // Encontrar o usuário correspondente na tabela tblusuarios
        $user = Usuario::where('emailUsuario', $cliente->emailCliente)->first();

        if (!$user) {
            Log::error('Usuário não encontrado com o email: ' . $cliente->emailCliente);
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }

        $validatedData = $request->validate([
            'nomeCliente' => 'required|string|max:255',
            'telefoneCliente' => 'required|string|max:15',
            'emailCliente' => 'required|string|email|max:255',
            'senhaCliente' => 'nullable|string|confirmed|min:2',
            'fotoCliente' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Novo campo para foto
        ]);



        Log::info('Validation passed', ['validatedData' => $validatedData]);

        // Atualiza os dados na tabela clientes
        $cliente->nomeCliente = $validatedData['nomeCliente'];
        $cliente->telefoneCliente = $validatedData['telefoneCliente'];
        $cliente->emailCliente = $validatedData['emailCliente'];

        // Se uma nova foto for enviada, salva-a
        if ($request->hasFile('fotoCliente')) {
            $image = $request->file('fotoCliente');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img-user');
            $image->move($destinationPath, $name);

            // Deleta a foto antiga se existir
            if ($cliente->fotoCliente && file_exists($destinationPath . '/' . $cliente->fotoCliente)) {
                unlink($destinationPath . '/' . $cliente->fotoCliente);
            }

            $cliente->fotoCliente = $name;
        }

        // Atualiza os dados na tabela tblusuarios
        $user->emailUsuario = $validatedData['emailCliente'];

        if (!empty($validatedData['senhaCliente'])) {
            Log::info('Password field is filled');
            $cliente->senhaCliente = bcrypt($validatedData['senhaCliente']);
            $user->senhaUsuario = bcrypt($validatedData['senhaCliente']);
            Log::info('Senha criptografada: ' . $cliente->senhaCliente);
        } else {
            Log::info('Password field is not filled');
        }

        $cliente->save();
        $user->save();

        Log::info('Profile updated successfully for ID: ' . $idCliente);
        return redirect()->route('dashboard.clientes')->with('success', 'Perfil atualizado com sucesso!');
    }

    public function getAgendamentos(Request $request, $id)
    {
        if (!$id) {
            Log::error('ID do cliente não encontrado na requisição');
            return response()->json([
                'error' => 'ID do cliente não encontrado na requisição.'
            ], 400);
        }

        $cliente = Cliente::find($id);
        if (!$cliente) {
            Log::error('Cliente não encontrado com ID: ' . $id);
            return response()->json([
                'error' => 'Cliente não encontrado.'
            ], 404);
        }

        $agendamentos = $cliente->agendamentos()->with(['servico', 'funcionario'])->get();
        Log::info('Cliente: ' . $cliente);
        Log::info('Agendamentos: ' . $agendamentos);

        return response()->json($agendamentos, 200);
    }

    // Exibir agendamentos do cliente
    public function meusAgenda()
    {
        $idCliente = session('id');
        if (!$idCliente) {
            Log::error('ID do cliente não encontrado na sessão');
            return redirect()->back()->with('error', 'ID do cliente não encontrado na sessão.');
        }

        // Buscar o cliente e seus agendamentos
        $cliente = Cliente::find($idCliente);
        if (!$cliente) {
            Log::error('Cliente não encontrado com ID: ' . $idCliente);
            return redirect()->back()->with('error', 'Cliente não encontrado.');
        }

        $agendamentos = $cliente->agendamentos;
        Log::info('Cliente: ' . $cliente);
        Log::info('Agendamentos: ' . $agendamentos);

        return view('site.dashboard.cliente.meusagenda', compact('cliente', 'agendamentos'));
    }

    public function meusAgendamentosWeb(Request $request)
    {
        $idCliente = session('id');
        if (!$idCliente) {
            Log::error('ID do cliente não encontrado na sessão');
            return redirect()->back()->with('error', 'ID do cliente não encontrado na sessão.');
        }

        $cliente = Cliente::find($idCliente);
        if (!$cliente) {
            Log::error('Cliente não encontrado com ID: ' . $idCliente);
            return redirect()->back()->with('error', 'Cliente não encontrado.');
        }

        $agendamentos = $cliente->agendamentos;
        Log::info('Cliente: ' . $cliente);
        Log::info('Agendamentos: ' . $agendamentos);

        return view('site.dashboard.cliente.meusagenda', compact('cliente', 'agendamentos'));
    }
}
