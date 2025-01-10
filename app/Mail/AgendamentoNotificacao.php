<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AgendamentoNotificacao extends Mailable
{
    use Queueable, SerializesModels;

    public $linkConfirmacao;

    /**
     * Nova instância de Mailable.
     *
     * @param string $linkConfirmacao
     */
    public function __construct($linkConfirmacao)
    {
        // Inicializa a propriedade linkConfirmacao com o valor passado para o construtor
        $this->linkConfirmacao = $linkConfirmacao;
    }

    /**
     * Constrói a mensagem.
     *
     * @return $this
     */
    public function build()
    {
        // Configura o assunto do e-mail, a view e os dados que serão passados para a view
        return $this->subject('Confirme seu agendamento')
                    ->view('site.email.confirmacao_agendamento')
                    ->with(['linkConfirmacao' => $this->linkConfirmacao]);
    }
}
