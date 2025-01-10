<?php

namespace App\Http\Middleware;

use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Usuario;
use Closure;
use Illuminate\Http\Request;

class AutenticacaoSalaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $tipoUser)
    {
        $email = session('emailUsuario');
        if($email){
            $usuario = Usuario::where('emailUsuario', $email)->first();
            if(!$usuario){
                return redirect()->route('/login')->withErrors(['emailUsuario'=>'Não autenticado']);
            }
            $tipoUsuario = $usuario->tipo_usuario;
            if($tipoUsuario){
                $tipo = null;

                if($tipoUsuario instanceof Cliente){
                    $tipo = 'cliente';

                }elseif($tipoUsuario instanceof Funcionario){
                    $tipo = $tipoUsuario->nivelFuncionario;
                }
            }

            if($tipo == $tipoUser){
                return $next($request);
            }else{
                // return back()->withErrors(['emailUsuario'=>'Acesso não permitido para esse perfil']);
            }
        }
    }
}
