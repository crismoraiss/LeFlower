<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Relacionamento morfo
        Relation::morphMap([
            'cliente'        => 'App\Models\Cliente',
            'funcionario'  => 'App\Models\Funcionario',
        ]);

        // View Composer para injetar $func em todas as views que utilizam o layout 'dashboardLayout'
        View::composer('site.dashboard.dashboardLayout.layout', function ($view) {
            $idFuncionario = Session::get('id');
            $func = Funcionario::find($idFuncionario);
            $view->with('func', $func);
        });
    }
}
 