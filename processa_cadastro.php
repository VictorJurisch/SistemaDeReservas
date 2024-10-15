
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confrimação da Reserva</title>
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

    <section class="reservas-hero">
        <div class="hero-text">
            <h2>Reserve sua mesa</h2>
            <p>Garanta sua experiência única no Restaurante Saboroso!</p>
        </div>
    </section>
        <div class="about-section">
<?php 

$nome = $_POST['nome'];
$email= $_POST['email'];
$dt_nascimento = $_POST['data'];
$senha = $_POST['senha'];

$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'formulario');
mysqli_set_charset($conexao,'utf8');

$consulta = mysqli_query($conexao, "SELECT * FROM usuariosrestaurante WHERE email = '$email'") or die("Erro na reserva");
$total_linhas = $consulta->num_rows;


if($total_linhas != 0){
    ?>
    <div class="resultadoruim">
    <?php echo "E-mail já cadastrado no sistema"; ?>
    </div>
    <div class="link"><a href="cadastro.php">Voltar a Tela de cadastro</a></div>
    <?php
}else{
    $salva_dados = "INSERT INTO restaurante (nome, email, nasc, senha)
                    VALUES ('".$nome."', '".$email."', '".$dt_nascimento."', '".$senha."')";
    $conexao->query($salva_dados);
    ?>
    <div class="resultadobom">
    <?php echo "Bem vindo, $nome. Seu cadastro foi realizado com sucesso"; ?>
    </div>
    <div class="link"><a href="login.php">Ir para tela de login</a></div>
    <?php
}
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
    <footer id="contact" class="footer">
        <div class="container">
            <h2>Contato</h2>
            <p>Email: contato@restaurantesamericana.com</p>
            <p>Telefone: (31) 92186-4668</p>
        </div>
    </footer>
</body>
</html>