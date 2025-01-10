<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Agendamento;
use App\Jobs\EnviarNotificacaoAgendamento;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

// Coordena a execução automática de várias tarefas, incluindo o comando de envio de notificações

class Kernel extends ConsoleKernel
{
    /**
     * Define a programação de comandos da aplicação.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Agendando o envio de notificações para agendamentos pendentes
        $schedule->call(function () {
            // Log para indicar que a tarefa de envio de notificações está sendo executada
            Log::info('Executando tarefa de envio de notificações.');

            // Buscar agendamentos que estão a 24 horas de distância e que ainda estão pendentes
            $agendamentos = Agendamento::where('dataAgendamento', Carbon::now()->addDay()->toDateString())
                                        ->where('statusAgendamento', 'pendente')
                                        ->get();

            // Verifica se há agendamentos pendentes
            if ($agendamentos->isEmpty()) {
                // Log para indicar que nenhum agendamento pendente foi encontrado
                Log::info('Nenhum agendamento pendente encontrado.');
            } else {
                // Log para indicar quantos agendamentos pendentes foram encontrados
                Log::info('Agendamentos pendentes encontrados: ' . $agendamentos->count());

                // Para cada agendamento encontrado, despacha um job para enviar a notificação
                foreach ($agendamentos as $agendamento) {
                    EnviarNotificacaoAgendamento::dispatch($agendamento);
                }
            }
        })->everyMinute(); // A tarefa será executada a cada minuto

        // Agendar cancelamento de agendamentos não confirmados
        $schedule->call(function () {
            // Log para indicar que a tarefa de cancelamento de agendamentos está sendo executada
            Log::info('Executando tarefa de cancelamento de agendamentos.');

            // Buscando e cancelando agendamentos que estão no passado e que ainda estão pendentes
            $cancelados = Agendamento::where('dataAgendamento', '<', Carbon::now()->toDateString())
                                     ->where('statusAgendamento', 'pendente')
                                     ->update(['statusAgendamento' => 'cancelado']);

            // Log para indicar quantos agendamentos foram cancelados
            Log::info('Agendamentos cancelados: ' . $cancelados);
        })->everyMinute(); // Define que essa tarefa será executada a cada minuto

        // Agendar cancelamento de agendamentos pendentes no dia do agendamento
        $schedule->command('agendamentos:cancelar-pendentes-diario')->daily();
    }

    /**
     * Registrar os comandos da aplicação.
     *
     * @return void
     */
    protected function commands()
    {
        // Faz carrega os comandos personalizados da aplicação
        $this->load(__DIR__.'/Commands');

        // Requer o arquivo de rotas para comandos no console
        require base_path('routes/console.php');
    }
}
