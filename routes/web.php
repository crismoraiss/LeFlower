<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EsteticaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Models\ServicosModel;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
Route::get('/cadastrar-se', [CadastroController::class, 'index'])->name('cadastroCliente');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');

route::get('/contato', [ContatoController::class, 'index'])->name('contato');
route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

// AGENDAMENTO
route::get('/agendamento', [AgendamentoController::class, 'index'])->name('cliente.agendamento');
// route::get('/agendamento',[AgendamentoController::class, 'ListarEspecialidade'])->name('agendamento');
// route::get('/agendamento',[AgendamentoController::class, 'listarServicos'])->name('agendamento');
Route::get('/listar-servicos', [AgendamentoController::class, 'listarServicos'])->name('listarServicos');
Route::get('/agendamento/listarHorarios', [AgendamentoController::class, 'ListarHorarios'])->name('listarHorarios');
// Route::post('/agendar', [AgendamentoController::class, 'agendar'])->name('agendar');
Route::post('/agendar', [AgendamentoController::class, 'agendar'])->name('agendar');


// FUNÇÃO DE CONFIRMAR AGENDAMENTO **TAREFA
Route::get('/confirmar_agendamento/{id}', [AgendamentoController::class, 'confirmar'])->name('confirmar.agendamento');
// CONFIRMAR AGENDAMENTO
Route::put('/agendamentos/{id}/confirmarAgendamento', [AgendamentoController::class, 'confirmarAgendamento'])->name('agendamentos.confirmarAgendamento');
//CANCELAR AGENDAMENTO
Route::put('/agendamentos/{id}/cancelarAgendamento', [AgendamentoController::class, 'cancelarAgendamento'])->name('agendamentos.cancelarAgendamento');

// teste do dashboard
route::get('/dash/teste', [HomeController::class, 'dash'])->name('dash.teste');

// Serviços
Route::get('/servico/cabelo', [ServicoController::class, 'servicoCabelo'])->name('servicoCabelo');
Route::get('/servico/maquiagem', [ServicoController::class, 'servicoMaquiagem'])->name('servicoMaquiagem');
Route::get('/servico/cilio', [ServicoController::class, 'servicoCilios'])->name('servicoCilios');
Route::get('/servico/massagem', [ServicoController::class, 'servicoMassagem'])->name('servicoMassagens');
Route::get('/servico/unhas', [ServicoController::class, 'servicoUnha'])->name('servicoUnhas');
Route::get('/servico/rosto', [ServicoController::class, 'servicoRosto'])->name('servicoRosto');
Route::get('/servico/depilacao', [ServicoController::class, 'servicoDepilacao'])->name('servicoDepilacoes');
Route::get('/servico/sobrancelha', [ServicoController::class, 'servicoSobrancelha'])->name('servicoSobrancelhas');






// Rotas contato enviar/salvar
route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
route::post('/contatos/newsLetter', [ContatoController::class, 'salvarNoemail'])->name('newsletter.salvar');



// Rotas com middleware

// Dashboard cliente
Route::middleware(['autenticacao:cliente'])->group(function () {

    // dash cris
    // perfil pessoal
    Route::get('/cliente/perfil', [ClienteController::class, 'perfilCliente'])->name('dashboard.clientes');
    Route::post('/cliente/atualizar', [ClienteController::class, 'updateCliente'])->name('cliente.update');

    //  Meus agendamentos
    Route::get('/cliente/meusagendamentos', [ClienteController::class, 'meusAgenda'])->name('dashboard.meusagenda');


    Route::get('/cliente', [ClienteController::class, 'index'])->name('dashboard.cliente');
    Route::get('/agendar', [ClienteController::class, 'agendar'])->name('dashboard.agendar');
    // Rota AJAX
    Route::get('/agendar-cabelo', [ServicoController::class, 'AjaxCabelo'])->name('ajax.cabelo');

    Route::get('/servicos', function () {
        $servicos = ServicosModel::all();
        return response()->json($servicos);
    });

    Route::get('/servicos', [ServicoController::class, 'indexServico']);
});



// dash da cris
Route::middleware(['autenticacao:Administrador'])->group(function () {
    // Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.admin.func.admin');

    Route::get('dash/admin/func', [AdminController::class, 'indexFunc'])->name('dashboard.admin.func.index');

    Route::get('dash/admin/servico', [AdminController::class, 'indexFuncServico'])->name('dashboard.admin.func.servico');

    // cadastrar funcionario
    Route::get('dash/admin/func/criar', [AdminController::class, 'createFunc'])->name('dashboard.admin.func.create');
    Route::post('dash/admin/func/cadastrar', [AdminController::class, 'cadFunc'])->name('dashboard.admin.func.cad');

    // cadastrar serviço
    Route::get('dash/admin/func/adicionar', [AdminController::class, 'createServico'])->name('dashboard.admin.func.criar');
    Route::post('dash/admin/func/cadastrarservico', [AdminController::class, 'cadServico'])->name('dashboard.admin.func.cadservico');

    // editar/atualizar o perfil pessoal
    Route::get('dash/admin/perfil', [AdminController::class, 'perfilFunc'])->name('dashboard.admin.func.perfil');
    Route::post('dash/admin/update', [AdminController::class, 'updateFunc'])->name('dashboard.admin.func.update');

    // editar ou desativar os funcionarios
    Route::get('dash/admin/funcionarios/{id}/edit', [AdminController::class, 'editFuncionario'])->name('dashboard.admin.func.editar');
    Route::put('dash/admin/funcionarios/{id}/desativar', [AdminController::class, 'desativarFuncionario'])->name('dashboard.admin.func.desativar');
    Route::put('dash/admin/funcionarios/{id}/atualizar', [AdminController::class, 'updateFuncionario'])->name('dashboard.admin.func.updateFuncionario');

    // editar ou desativar os servicos
    Route::get('dash/admin/funcionarios/{id}/atualizar', [AdminController::class, 'atualizarServico'])->name('dashboard.admin.func.atualizar');
    Route::put('dash/admin/funcionarios/{id}/inativo', [AdminController::class, 'desativarServico'])->name('dashboard.admin.func.inativo');
    Route::put('dash/admin/funcionarios/{id}/alterar', [AdminController::class, 'updateServico'])->name('dashboard.admin.func.updateServico');
});


Route::middleware(['autenticacao:Esteticista'])->group(function () {
    Route::get('/esteticista', [EsteticaController::class, 'index'])->name('dashboard.funcionarios.estetica');


    //horarios disponiveis
    Route::get('/funcionario/meus-horarios', [EsteticaController::class, 'listarHorarios'])->name('dashboard.funcionarios.meushorarios');

    Route::get('dashboard/funcionarios/horario/{id}/editar', [EsteticaController::class, 'editarHorario'])->name('dashboard.funcionarios.mheditar');
    Route::post('dashboard/funcionarios/horario/{id}/atualizar', [EsteticaController::class, 'atualizarHorario'])->name('dashboard.funcionarios.atualizarHorario');


    // dash da cris
    // editar/atualizar o perfil pessoal
    Route::get('/funcionario/perfil', [EsteticaController::class, 'Fperfil'])->name('dashboard.funcionarios.fperfil');
    Route::post('/funcionario/update', [EsteticaController::class, 'FuncionarioUpdate'])->name('dashboard.funcionarios.updateF');


    // editar/atualizar o horario do serviço
    Route::get('/funcionario/{id}/editarH', [EsteticaController::class, 'editarH'])->name('dashboard.funcionarios.heditar');
    Route::post('/funcionario/{id}/updateH', [EsteticaController::class, 'updateH'])->name('dashboard.funcionarios.updateH');

    // listar agendamentos
    Route::get('/funcionario/agendamentos', [EsteticaController::class, 'meusAgendamentos'])->name('dashboard.funcionarios.funcagenda');
    //horarios disponiveis
    Route::get('/esteticista/meus-horarios', [EsteticaController::class, 'listarHorarios'])->name('dashboard.funcionarios.meushorarios');

    Route::get('dashboard/funcionarios/horario/{id}/editar', [EsteticaController::class, 'editarHorario'])->name('dashboard.funcionarios.mheditar');
    Route::post('dashboard/funcionarios/horario/{id}/atualizar', [EsteticaController::class, 'atualizarHorario'])->name('dashboard.funcionarios.atualizarHorario');
});

// Rota de login de usuario
Route::post('/login', [LoginController::class, 'autenticar'])->name('login.autenticar');

// Rota de cadastro de usuário
Route::post('/', [CadastroController::class, 'cadastroCliente'])->name('cadastro.store');

route::get('/sair', function () {
    session()->flush();
    return redirect('/');
})->name('sair');
// rota para limpar a e voltar para a página home


