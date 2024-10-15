<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reservas - Restaurante Saboroso</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver logado
    exit();
}
?>
<body>

<header class="main-header">
        <nav class="navbar">
            <div class="container">
                <h1 class="logo"><img src="https://www.americanarestaurante.com.br/images/ARP_logotipo_branco-g.png" width="35%"></h1>
                <ul class="nav-list">
                    <li><a href="index.html">Início</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="PaginaDeReservas.php">Reservas</a></li>
                    <li><a href="consulta_reserva.php">Adiministração</a></li>
                </ul>
            </div>
        </nav>

    <section class="reservas-hero">
        <div class="hero-text">
            <h2>Reserve sua mesa</h2>
            <p>Garanta sua experiência única no Restaurante Saboroso!</p>
        </div>
    </section>

    <section id="reservas" class="reservas-section">
        <div class="container">
            <h2>Faça sua Reserva</h2>
            <form action="processa_reserva.php" method="POST" class="form-reserva">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="data">Data da Reserva</label>
                    <input type="date" id="data" name="data" required>
                </div>
                <div class="form-group">
                    <label for="hora">Hora da Reserva</label>
                    <input type="time" id="hora" name="hora" required>
                </div>
                <div class="form-group">
                    <label for="pessoas">Número de Pessoas</label>
                    <input type="number" id="pessoas" name="pessoas" min="1" required>
                </div>
                <button type="submit" class="btn">Confirmar Reserva</button>
            </form>
        </div>
    </section>

    <footer id="contact" class="footer">
        <div class="container">
            <h2>Contato</h2>
            <p>Email: contato@restaurantesamericana.com</p>
            <p>Telefone: (31) 92186-4668</p>
        </div>
    </footer>

</body>
</html>
