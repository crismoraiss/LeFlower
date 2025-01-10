<?php

use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rota de login para API
Route::post('/login', [ClienteController::class, 'login'])->name('login');

// Rotas para ClienteController com middleware de autenticação e autorização
Route::middleware(['auth:sanctum', 'cliente'])->group(function () {
    // Rotas protegidas
    Route::apiResource('cliente', ClienteController::class);
    Route::get('/agendamento', [AgendamentoController::class, 'index']);
    Route::post('/agendar', [AgendamentoController::class, 'agendar']);
    Route::get('/agendamento/servicos', [AgendamentoController::class, 'listarServicos']);
    Route::get('/agendamento/horarios', [AgendamentoController::class, 'listarHorarios']);
    Route::put('/agendamento/{id}', [AgendamentoController::class, 'confirmar']);
});


