<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserIsCliente
{
    /**
     * Verifica se o usuário autenticado é um aluno.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->tipoUsuario_type === 'cliente') {
            return $next($request);
        }

        return response()->json(['data' => ['message' => 'Acesso negado. Somente clientes podem acessar esta área.']], 403);
    }
}
