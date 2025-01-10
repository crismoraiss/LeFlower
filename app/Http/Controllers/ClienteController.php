<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agendamento;
use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


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
                            'nome' => $cliente->nomecliente,
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
            if ($cliente->fotoCliente && file_exists($destinationPath.'/'.$cliente->fotoCliente)) {
                unlink($destinationPath.'/'.$cliente->fotoCliente);
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
}
