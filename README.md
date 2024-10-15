<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

<h2>Como Rodar um Projeto Laravel</h2>

<h3>Pré-requisitos</h3>
<p>Antes de começar, você precisa ter os seguintes softwares instalados em sua máquina:</p>
<ol>
    <li><strong>PHP</strong> (versão 8.0 ou superior)</li>
    <li><strong>Composer</strong> (gerenciador de dependências para PHP)</li>
    <li><strong>MySQL</strong> ou outro banco de dados suportado</li>
</ol>

<h3>Passo a Passo</h3>
<ol>
    <li><strong>Clone o Repositório</strong>:
        <pre><code>git clone &lt;URL_DO_REPOSITORIO&gt;
cd &lt;NOME_DA_PASTA&gt;</code></pre>
    </li>
    <li><strong>Instale as Dependências</strong>:
        <pre><code>composer install</code></pre>
    </li>
    <li><strong>Crie um Arquivo <code>.env</code></strong>:
        Copie o arquivo <code>.env.example</code> para <code>.env</code>:
        <pre><code>cp .env.example .env</code></pre>
    </li>
    <li><strong>Configure o Banco de Dados</strong>:
        Edite o arquivo <code>.env</code> e configure as credenciais do seu banco de dados:
        <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha</code></pre>
    </li>
    <li><strong>Gere a Chave de Aplicação</strong>:
        <pre><code>php artisan key:generate</code></pre>
    </li>
    <li><strong>Rodar as Migrations</strong>:
        <pre><code>php artisan migrate</code></pre>
    </li>
    <li><strong>Inicie o Servidor de Desenvolvimento</strong>:
        <pre><code>php artisan serve</code></pre>
        Agora, você pode acessar sua aplicação em <code>http://localhost:8000</code>.
    </li>
</ol>

<h2>Sobre o Laravel</h2>
<p>Laravel é um framework de aplicação web com uma sintaxe expressiva e elegante. Acreditamos que o desenvolvimento deve ser uma experiência agradável e criativa para ser verdadeiramente gratificante. Laravel facilita o desenvolvimento ao aliviar tarefas comuns usadas em muitos projetos web, como:</p>
<ul>
    <li><a href="https://laravel.com/docs/routing">Engine de roteamento simples e rápido</a>.</li>
    <li><a href="https://laravel.com/docs/container">Poderoso contêiner de injeção de dependência</a>.</li>
    <li>Vários back-ends para armazenamento de <a href="https://laravel.com/docs/session">sessões</a> e <a href="https://laravel.com/docs/cache">cache</a>.</li>
    <li><a href="https://laravel.com/docs/eloquent">ORM de banco de dados expressivo e intuitivo</a>.</li>
    <li>Migrations de esquema de banco de dados <a href="https://laravel.com/docs/migrations">agnósticas</a>.</li>
    <li><a href="https://laravel.com/docs/queues">Processamento robusto de jobs em segundo plano</a>.</li>
    <li><a href="https://laravel.com/docs/broadcasting">Transmissão de eventos em tempo real</a>.</li>
</ul>
<p>Laravel é acessível, poderoso e fornece as ferramentas necessárias para aplicações grandes e robustas.</p>

<h2>Aprendendo Laravel</h2>
<p>Laravel possui a documentação e biblioteca de tutoriais em vídeo mais extensas e completas de todos os frameworks modernos de aplicações web, tornando fácil começar com o framework.</p>
<p>Você também pode experimentar o <a href="https://bootcamp.laravel.com">Laravel Bootcamp</a>, onde você será guiado para construir uma aplicação Laravel moderna do zero.</p>
<p>Se você não se sentir à vontade para ler, o <a href="https://laracasts.com">Laracasts</a> pode ajudar. O Laracasts contém milhares de tutoriais em vídeo sobre uma variedade de tópicos, incluindo Laravel, PHP moderno, testes unitários e JavaScript. Aprimore suas habilidades explorando nossa biblioteca de vídeos abrangente.</p>

<h2>Rotas da API</h2>

<p>A API fornece rotas para gerenciamento de usuários e despesas. As rotas são definidas usando o padrão RESTful, permitindo operações CRUD (Create, Read, Update, Delete). A seguir, estão as rotas disponíveis:</p>

<h3>Gerenciamento de Usuários (`/usuarios`)</h3>

<ul>
    <li><strong>`GET /usuarios`</strong>: Retorna uma lista de todos os usuários.</li>
    <li><strong>`POST /usuarios`</strong>: Cria um novo usuário. É necessário enviar os dados do usuário no corpo da requisição.</li>
    <li><strong>`GET /usuarios/{id}`</strong>: Retorna os detalhes de um usuário específico identificado pelo `{id}`.</li>
    <li><strong>`PUT /usuarios/{id}`</strong>: Atualiza os dados de um usuário específico identificado pelo `{id}`. Os dados atualizados devem ser enviados no corpo da requisição.</li>
    <li><strong>`DELETE /usuarios/{id}`</strong>: Remove um usuário específico identificado pelo `{id}`.</li>
</ul>

<h3>Gerenciamento de Despesas (`/despesas`)</h3>

<ul>
    <li><strong>`GET /despesas`</strong>: Retorna uma lista de todas as despesas.</li>
    <li><strong>`POST /despesas`</strong>: Cria uma nova despesa. Os dados da despesa devem ser enviados no corpo da requisição.</li>
    <li><strong>`GET /despesas/{id}`</strong>: Retorna os detalhes de uma despesa específica identificada pelo `{id}`.</li>
    <li><strong>`PUT /despesas/{id}`</strong>: Atualiza os dados de uma despesa específica identificada pelo `{id}`. Os dados atualizados devem ser enviados no corpo da requisição.</li>
    <li><strong>`DELETE /despesas/{id}`</strong>: Remove uma despesa específica identificada pelo `{id}`.</li>
</ul>

<h3>Informações do Usuário Autenticado</h3>
<ul>
    <li><strong>`GET /user`</strong>: Retorna as informações do usuário autenticado. Esta rota está protegida por autenticação usando o middleware <code>auth:sanctum</code>. Para acessar esta rota, o usuário deve estar autenticado.</li>
</ul>

<h3>Exemplo de Uso</h3>
<p>Para testar essas rotas, você pode usar ferramentas como <a href="https://www.postman.com/">Postman</a> ou <a href="https://curl.se/">cURL</a>. Certifique-se de que seu servidor Laravel está em execução antes de fazer requisições.</p>

<h2>Patrocinadores do Laravel</h2>
<p>Gostaríamos de agradecer aos seguintes patrocinadores por financiar o desenvolvimento do Laravel. Se você estiver interessado em se tornar um patrocinador, visite o <a href="https://partners.laravel.com">programa de Parceiros do Laravel</a>.</p>

<h3>Parceiros Premium</h3>
<ul>
    <li><a href="https://forge.laravel.com">Laravel Forge</a></li>
    <li><a href="https://envoyer.io">Laravel Envoyer</a></li>
    <li><a href="https://nova.laravel.com">Laravel Nova</a></li>
</ul>

<h2>Licença</h2>
<p>O Laravel é um software livre e open-source, sob a licença MIT. Para mais detalhes, consulte o arquivo <code>LICENSE</code> na raiz do projeto.</p>

</body>
</html>
