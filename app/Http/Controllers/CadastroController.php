<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Usuario;
use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CadastroController extends Controller
{
    public function index()
    {
        return view('site.cadastro');
    }

    public function cadastroCliente(Request $request)
    {
        // Validar todos os campos como obrigatórios
        $request->validate([
            'nomeUsuarioRegistro'   => 'required|string|max:100',
            'senhaUsuarioRegistro'  => 'required|string|max:255',
            'emailUsuarioRegistro'  => 'required|email|max:200|unique:tblusuarios,emailUsuario',
            'telefoneUsuarioRegistro' => 'required|string|max:16',
        ]);

        $usuario = new Usuario();
        $cliente = new Cliente();

        $usuario->nomeUsuario = $request->input('nomeUsuarioRegistro');
        $cliente->nomeCliente = $request->input('nomeUsuarioRegistro');

        $usuario->senhaUsuario = $request->input('senhaUsuarioRegistro');
        $cliente->senhaCliente = $request->input('senhaUsuarioRegistro');

        $usuario->emailUsuario = $request->input('emailUsuarioRegistro');
        $cliente->emailCliente = $request->input('emailUsuarioRegistro');
        $cliente->telefoneCliente = $request->input('telefoneUsuarioRegistro');

        // Processar o upload da imagem
        if ($request->hasFile('fotoCliente')) {
            $image = $request->file('fotoCliente');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/img-client');
            $image->move($destinationPath, $name);
            $cliente->fotoCliente = $name;
        } else {
            $cliente->fotoCliente = null;
        }

        $cliente->save();

        // Atualizar o ID do cliente no usuário e salvar
        $usuario->tipoUsuario_id = $cliente->idCliente;
        $usuario->tipoUsuario_type = 'cliente'; // Adiciona o valor "cliente" ao campo tipoUsuario_type
        $usuario->save();

        Session::flash('message', 'Cadastro realizado com sucesso! Por favor, faça o login.');

        return redirect()->route('login');
    }

}
