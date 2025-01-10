<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Agendamento;
use Carbon\Carbon;

class CancelarAgendamentosPendentesDiario extends Command
{
    protected $signature = 'agendamentos:cancelar-pendentes-diario';
    protected $description = 'Cancela agendamentos pendentes se a data do agendamento for hoje';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $hoje = Carbon::today();

        // Selecionar agendamentos pendentes cuja data de agendamento é hoje
        $agendamentos = Agendamento::where('statusAgendamento', 'pendente')
                                    ->whereDate('dataAgendamento', $hoje)
                                    ->get();

        foreach ($agendamentos as $agendamento) {
            $agendamento->update(['statusAgendamento' => 'cancelado']);
            $this->info("Agendamento ID {$agendamento->idAgendamento} cancelado.");
        }

        $this->info('Agendamentos pendentes verificados e cancelados se necessário.');
    }
}
