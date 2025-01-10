<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Agendamento;

class AgendamentoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $agendamento;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Agendamento $agendamento)
    {
        $this->agendamento = $agendamento;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('leflowersalao@gmail.com', 'Le Flower - Salão')
                    ->subject('Agendamento detalhes')
                    ->view('site.email.agendamento')
                    ->with([
                        'nomeCliente'       => $this->agendamento->cliente->nomeCliente,
                        'nomeServico'       => $this->agendamento->servico->nomeServico,
                        'dataAgendamento'   => $this->agendamento->dataAgendamento,
                        'horario'           => $this->agendamento->data_hora_inicial,
                        'nomeFuncionario'   => $this->agendamento->funcionario->nomeFuncionario,
                        'precoServico'      => $this->agendamento->servico->valorServico,
                    ]);
    }
}
