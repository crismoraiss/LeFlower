<?php

namespace App\Jobs;

use App\Models\Agendamento;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\AgendamentoNotificacao;

// Job é responsável por enviar uma notificação por e-mail para o cliente sobre um agendamento.

class EnviarNotificacaoAgendamento implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $agendamento;

    /**
     * Nova instância do job.
     *
     * @param Agendamento $agendamento
     */
    public function __construct(Agendamento $agendamento)
    {
        $this->agendamento = $agendamento;
    }

    /**
     * Executa o job
     *
     * @return void
     */
    public function handle()
    {
        // Gera o link de confirmação usando a rota 'confirmar.agendamento'
        $linkConfirmacao = route('confirmar.agendamento', ['id' => $this->agendamento->idAgendamento]);

        // Envia um e-mail para o cliente usando a classe de Mailable 'AgendamentoNotificacao'
        Mail::to($this->agendamento->cliente->emailCliente)->send(new AgendamentoNotificacao($linkConfirmacao));
    }
}
