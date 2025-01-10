<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes Agendamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background-color: #59848e;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .header img {
            /* width: 50px;
            margin-bottom: 10px; */
            width: 20%;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            color: #59848e;
            margin-top: 0;
        }
        .content p {
            line-height: 1.6;
            font-size: 1.4rem;
        }
        .content .details {
            background-color: #f5f5f5;;
            padding: 10px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .content .details p {
            margin: 0;
        }
        .content .cta {
            text-align: center;
              margin: 20px 0 30px 0;
        }
        .content .cta a {
            background-color: #59848e;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            background-color: #59848e;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }
        .footer a {
            color: #e4b48d;
            text-decoration: none;
        }
        .steps {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .steps .step {
            width: 30%;
            text-align: center;
        }
        .steps .step img {
            width: 60px;
            /* margin-bottom: 10px; */
        }
        .steps .step p {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('assets/fundoBranco.png') }}" alt="Logo">
            <h1>Detalhes Agendamento</h1>
        </div>
        <div class="content">
            <h2>Olá {{ $nomeCliente }},</h2>
            <p>Seu agendamento foi realizado com sucesso! Aqui estão os detalhes:</p>
            <div class="details">
                <p><strong>Serviço:</strong> {{ $nomeServico }}</p>
                <p><strong>Preço:</strong> R$ {{ number_format($precoServico, 2, ',', '.') }}</p>
                <p><strong>Data:</strong> {{ \Carbon\Carbon::parse($dataAgendamento)->format('d/m/Y') }}</p>
                <p><strong>Horário:</strong> {{ $horario }}</p>
                <p><strong>Funcionário:</strong> {{ $nomeFuncionario }}</p>
            </div>
            <div class="content">
                <p>Para garantir que possamos atendê-lo(a) da melhor forma possível,<span style="color: #59848e; font-weight: bold;" > pedimos que realize a confirmação do seu agendamento.</span>   Enviaremos um e-mail de confirmação <span style="color: #59848e; font-weight: bold;">24 horas</span>  antes do horário marcado. Por favor, responda a esse e-mail confirmando sua presença ou informando qualquer alteração necessária.</p>
                <p>A sua confirmação é muito importante para nós, pois nos ajuda a organizar melhor nossa agenda e garantir um atendimento eficiente para todos os nossos clientes.</p>
                <p>Caso precise cancelar ou remarcar o seu compromisso, solicitamos que nos avise com pelo menos 24 horas de antecedência para que possamos ajustar nossa programação.</p>
                <p>Estamos à disposição para qualquer dúvida ou esclarecimento adicional. Agradecemos a sua atenção e esperamos vê-lo(a) em breve!</p>
                <span style="color: #59848e; font-weight: bold;"> Atenciosamente, equipe Leflower</span>
            </div>

            <div class="cta">
                <a href="https://yourwebsite.com">Visite nosso site</a>
            </div>
            <div class="steps">
                <div class="step">
                    <img src="https://imgur.com/a/VHeTu8r" alt="Step 1">
                    <p>Transforme seu visual com nossos especialistas.</p>
                </div>
                <div class="step">
                    <img src="{{ asset('assets/img-gaby/flower.png') }}" alt="Step 2">
                    <p>Desfrute de momentos de pura tranquilidade.</p>
                </div>
                <div class="step">
                    <img src="{{ asset('assets/img-gaby/people.png') }}" alt="Step 3">
                    <p>Encontre o estilo perfeito que combina com você.</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Seu Salão. Todos os direitos reservados.</p>
            <p>Visite a nossa <a href="https://yourwebsite.com/support">página de suporte</a> para mais informações.</p>
        </div>
    </div>

</body>
</html>
