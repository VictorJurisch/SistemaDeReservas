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
$telefone = $_POST['telefone'];
$dt_reserva = $_POST['data'];
$hr_reserva = $_POST['hora'];
$num_pessoas = $_POST['pessoas'];
/*
echo("Nome: $nome, "); ?><br><?php
echo("Email: $email, ");?><br><?php
echo("Telefone: $telefone, ");?><br><?php
echo("Data: $dt_reserva, ");?><br><?php
echo("Hora: $hr_reserva, ");?><br><?php
echo("Pessoas: $num_pessoas");?><br><?php
*/
$dt_format = DateTime::createFromFormat('Y-m-d', $dt_reserva);
$dt_format = $dt_format ? $dt_format->format('d/m/Y') : "Formato de data inválido";

$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'formulario');
mysqli_set_charset($conexao,'utf8');

$consulta = mysqli_query($conexao, "SELECT * FROM restaurante WHERE dt_reserva = '$dt_reserva'") or die("Erro na reserva");
$total_linhas = $consulta->num_rows;

if($total_linhas >= 25){
    ?>
    <div class="resultadoruim">
    <?php echo "Já existem reservas demais para o dia $dt_format"; ?>
    </div>
    <a href="logout.php">Voltar</a>
    <?php
}else{
    $salva_dados = "INSERT INTO restaurante (nome, email, telefone, dt_reserva, hr_reserva, pessoas)
                    VALUES ('".$nome."', '".$email."', '".$telefone."', '".$dt_reserva."', '".$hr_reserva."', '".$num_pessoas."')";
    $conexao->query($salva_dados);
    ?>
    <div class="resultadobom">
    <?php echo "$nome, sua reserva do dia $dt_format às $hr_reserva foi registrada com sucesso"; ?>
    </div>
    <a href="logout.php">Voltar</a>
    <?php
    
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
    <footer id="contact" class="footer">
        <div class="container">
            <h2>Contato</h2>
            <p>Email: contato@restaurantesamericana.com</p>
            <p>Telefone: (31) 92186-4668</p>
        </div>
    </footer>
</body>
</html>