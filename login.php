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
            <h2>Bem-vindo de volta!</h2>
            <p>Acesse sua conta para gerenciar suas reservas.</p>
        </div>
    </section>
    <?php

session_start(); 

$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'formulario');
mysqli_set_charset($conexao,'utf8');


$consulta = mysqli_query($conexao, "SELECT * FROM usuariosrestaurante") or die("Erro na reserva");
$total_linhas = $consulta->num_rows;

while ($dados = mysqli_fetch_assoc($consulta)) {
    $email = $dados['email'];
    $senha = $dados['senha'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['senha'];

    if ("$username == $email && $password == $senha") {
        $_SESSION['username'] = $username; 
        header("Location: index.html"); 
        exit();
    } else {
        $error = "Usuário ou senha incorretos!";
    }
}
?>

    <section id="login" class="login-section">
        <br><br><br><br><br><br>
        <div class="container">
            <h2>Login</h2>
            <form method="POST" class="form-login">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn">Entrar</button>
                <p class="register-text">Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
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
