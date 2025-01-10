<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


// dash cris
class LoginController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function autenticar(Request $request)
    {

        $regras = [
            'emailUsuario'   => 'required|email',
            'senhaUsuario'   => 'required'
        ];

        $msg = [
            'emailUsuario.required'     =>  'Email obrigatório',
            'emailUsuario.email'        =>  'O e-mail informado deve ser válido',
            'senhaUsuario.required'     =>  'Senha obrigatória',
        ];

        $request->validate($regras, $msg);

        $emailUsuario = $request->get('emailUsuario');
        $senhaUsuario = $request->get('senhaUsuario');

        Log::info("Tentativa de login com email: $emailUsuario");

        $usuario = Usuario::where('emailUsuario', $emailUsuario)->first();
        if (!$usuario) {
            Log::error("Usuário não encontrado com o email: $emailUsuario");
            return back()->withErrors(['emailUsuario' => 'O email informado não existe']);
        }

        Log::info("Usuário encontrado: {$usuario->emailUsuario}");

        if ($usuario->senhaUsuario !== $senhaUsuario) {
            Log::error("Senha incorreta para o usuário com email: $emailUsuario");
            return back()->withErrors(['senhaUsuario' => 'Senha incorreta']);
        }

        Log::info("Senha verificada para o usuário: {$usuario->emailUsuario}");

        $tipoUsuario = $usuario->tipoUsuario_type;
        Log::info("Tipo de usuário identificado: $tipoUsuario");

        session([
            'emailUsuario' => $usuario->emailUsuario,
            'tipo_usuario' => $tipoUsuario,
            'idUser' => $usuario->idUsuario,
            'tipo' => $usuario->tipoUsuario_type,
        ]);

        if ($tipoUsuario == 'cliente') {
            Log::info("Tentativa de login como cliente");
            $cliente = Cliente::find($usuario->tipoUsuario_id);
            if ($cliente) {
                Log::info("Cliente encontrado: {$cliente->nomeCliente}");
                session([
                    'id' => $cliente->idCliente,
                    'nome' => $cliente->nomeCliente,
                    'tipoUsuario_type' => 'cliente',
                    'nivelFuncionario' => null,
                ]);
                return redirect()->route('dashboard.clientes');
            } else {
                Log::error("Cliente não encontrado com idUsuario: {$usuario->idUsuario}");
                return back()->withErrors(['emailUsuario' => 'Cliente não encontrado.']);
            }
        }
        if ($tipoUsuario == 'funcionario') {
            Log::info("Tentativa de login como funcionário");
            $funcionario = Funcionario::find($usuario->tipoUsuario_id);
            if ($funcionario) {
                if ($funcionario->nivelFuncionario == 'Administrador') {
                    Log::info("Funcionário administrador encontrado: {$funcionario->nomeFuncionario}");
                    session([
                        'id' => $funcionario->idFuncionario,
                        'nome' => $funcionario->nomeFuncionario,
                        'nivelFuncionario' =>  $funcionario->nivelFuncionario,
                        'tipoUsuario_type' => null,
                    ]);
                    return redirect()->route('dashboard.admin.func.perfil');
                }

                if ($funcionario->nivelFuncionario == 'Esteticista') {
                    Log::info("Funcionário esteticista encontrado: {$funcionario->nomeFuncionario}");
                    session([
                        'id' => $funcionario->idFuncionario,
                        'nome' => $funcionario->nomeFuncionario,
                        'nivelFuncionario' => $funcionario->nivelFuncionario,
                        'tipoUsuario_type' => null,
                    ]);
                    return redirect()->route('dashboard.funcionarios.fperfil');
                }
            } else {
                Log::error("Funcionário não encontrado com idUsuario: {$usuario->idUsuario}");
                return back()->withErrors(['emailUsuario' => 'Funcionário não encontrado.']);
            }
        }

        Log::error("Erro desconhecido de autenticação");
        return back()->withErrors(['emailUsuario' => 'Erro desconhecido de autenticação']);
    }
}
