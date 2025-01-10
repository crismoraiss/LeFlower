<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Agendamento;
use App\Jobs\EnviarNotificacaoAgendamento;
use Carbon\Carbon;

// Foca em uma única responsabilidade de enviar notificações
class EnviarNotificacoesAgendamentos extends Command
{
    // Define a assinatura do comando no Artisan que é usado para executá-lo.(linha de comando do Laravel)
    protected $signature = 'notificacoes:enviar';

    // Define a descrição do comando, que é mostrada ao listar os comandos disponíveis
    protected $description = 'Enviar notificações de agendamentos pendentes';

    // Construtor da classe. Chama o construtor da classe pai  que é o Command
    public function __construct()
    {
        parent::__construct();
    }

    // Método principal que é executado quando o comando é chamado
    public function handle()
    {
        // Buscar agendamentos que estão a 24 horas de distância e que ainda estão pendentes
        $agendamentos = Agendamento::where('dataAgendamento', Carbon::now()->addDay()->toDateString())
                                   ->where('statusAgendamento', 'pendente')
                                   ->get();

        // Para cada agendamento encontrado, d;"espacha" um job para enviar a notificação
        foreach ($agendamentos as $agendamento) {
            EnviarNotificacaoAgendamento::dispatch($agendamento);
        }

        $this->info('Notificações enviadas com sucesso.');
    }

    //Executar o Job Manualmente: php artisan notificacoes:enviar - para testar comandos específicos.
    //Executar o Scheduler Manualmente: php artisan schedule:run - para testar todas as tarefas agendadas.
    //Processar a Fila de Jobs: php artisan queue:work - processar jobs enfileirados enquanto desenvolve ou testa.
}
