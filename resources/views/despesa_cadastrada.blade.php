<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Despesa Cadastrada - EconPay</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #60c864, #d7eed7);
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #4CAF50;
        }
        .header {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 10px;
            border-radius: 12px 12px 0 0;
        }
        .header h1 {
            color: #ffffff;
            font-size: 28px;
            margin: 0;
            padding-left: 15px;
        }
        .hash {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            margin-left: 15px;
        }
        h1 {
            color: #2E7D32;
            font-size: 26px;
            margin-bottom: 20px;
        }
        p {
            color: #555555;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .despesa-info {
            background-color: #f0f4f0;
            padding: 15px;
            border-radius: 8px;
            border-left: 6px solid #4CAF50;
            margin-bottom: 20px;
        }
        .despesa-info p {
            margin: 5px 0;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #777777;
            font-size: 14px;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
        .button {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
        }
        .button:hover {
            background-color: #388E3C;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>EconPay</h1>
        <p class="hash">#{{ bin2hex(random_bytes(8)) }}</p>
    </div>

    <div class="email-container">
        <h1>Olá, {{ $usuario->nome }}!</h1>
        <p>Uma nova despesa foi cadastrada com sucesso no seu nome. Abaixo estão os detalhes da despesa:</p>

        <div class="despesa-info">
            <p><strong>Descrição:</strong> {{ $despesa->descricao }}</p>
            <p><strong>Valor:</strong> R$ {{ number_format($despesa->valor, 2, ',', '.') }}</p>
            <p><strong>Data:</strong> {{ $despesa->data }}</p>
        </div>

        <p>Se você não reconhece esta despesa, entre em contato conosco imediatamente para que possamos ajudar.</p>

        <p style="text-align: center;">
            <a href="mailto:support@example.com" class="button">Entrar em Contato</a>
        </p>

        <div class="footer">
            <p>Obrigado por usar o sistema de controle de despesas da EconPay!</p>
            <p><a href="#">Visite nosso site</a> | <a href="#">Política de Privacidade</a></p>
        </div>
    </div>
</body>
</html>
