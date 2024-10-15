<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Restaurante Saboroso</title>
    <link rel="stylesheet" href="style.css">
</head>
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

    <section class="login-hero">
        <div class="hero-text">
            <h2>Bem-vindo!</h2>
            <p>Crie sua conta para gerenciar suas reservas.</p>
        </div>
    </section>

    <section id="login" class="login-section">
        <br><br><br><br><br><br>
        <div class="container">
            <h2>Cadastro</h2>
            <form action="processa_cadastro.php" method="POST" class="form-login">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="data">Data de Nascimento</label>
                    <input type="date" id="data" name="data" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn">Cadastrar</button>
                <p class="register-text">Já possui uma conta? <a href="login.php">Logar</a></p>
            </form>
        </div>
        <br><br><br><br><br><br>
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
