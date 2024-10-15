<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reservas</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 10px 0;
    text-align: center;
}

section {
    padding: 20px;
    margin: 10px;
    background-color: white;
    border-radius: 5px;
}

h2 {
    color: #333;
}

footer {
    text-align: center;
    padding: 10px 0;
    background-color: #333;
    color: white;
}
    </style>
</head>
<body>
    <header>
        <h1>Sistema de Reservas</h1>
        <p>Um sistema eficiente para gerenciar reservas e facilitar o acesso dos administradores às informações.</p>
    </header>

    <section id="sobre">
        <h2>Sobre o Sistema</h2>
        <p>Este sistema permite que usuários façam reservas de maneira fácil e rápida. Os administradores têm acesso a um painel de controle (CRUD) que exibe todas as reservas realizadas, permitindo a gestão completa das informações.</p>
    </section>

    <section id="funcionalidades">
        <h2>Funcionalidades</h2>
        <ul>
            <li><strong>Reserva de Usuário:</strong> Usuários podem criar reservas, fornecendo informações necessárias, como data, horário e tipo de serviço.</li>
            <li><strong>Validação de Reservas:</strong> As reservas são validadas antes de serem registradas no banco de dados para garantir a integridade dos dados.</li>
            <li><strong>Painel Administrativo (CRUD):</strong> Administradores podem criar, ler, atualizar e excluir reservas.</li>
            <li><strong>Banco de Dados:</strong> As reservas são armazenadas em um banco de dados MySQL, garantindo a persistência das informações.</li>
        </ul>
    </section>

    <section id="tecnologias">
        <h2>Tecnologias Utilizadas</h2>
        <ul>
            <li>PHP: Para o desenvolvimento da lógica do servidor.</li>
            <li>MySQL: Para armazenamento e gerenciamento das reservas.</li>
            <li>HTML: Para estruturação das páginas web.</li>
            <li>CSS: Para estilização e layout das páginas.</li>
        </ul>
    </section>

</body>
</html>
