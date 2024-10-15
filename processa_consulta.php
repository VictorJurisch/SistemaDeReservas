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

$email= $_POST['email'];
$dt_reserva = $_POST['data'];
$hr_reserva = $_POST['hora'];

$consulta = mysqli_query($conexao, "SELECT * FROM restaurante WHERE email = '$email' AND dt_reserva = '$dt_reserva' AND hr_reserva = '$hr_reserva'") or die("Erro na reserva");
$total_linhas = $consulta->num_rows;


?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
<div class="tabela">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Data da reserva</th>
                <th scope="col">Hora da reserva</th>
                <th scope="col">Mesa para Quantas Pessoas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
            while ($dados = mysqli_fetch_assoc($consulta)) {
            $id = $dados['id'];
            $nome = $dados['nome'];
            $email = $dados['email'];
            $telefone = $dados['telefone'];
            $dt_reserva = $dados['dt_reserva'];
            $hr_reserva = $dados['hr_reserva'];
            $num_pessoas = $dados['pessoas'];
                ?><td><?php echo $id; ?></td>
                <td><?php echo $nome; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $telefone; ?></td>
                <td><?php echo $dt_reserva; ?></td>
                <td><?php echo $hr_reserva; ?></td>
                <td><?php echo $num_pessoas; ?></td>
                <?php } ?>
            </tr>
        </tbody>
    </table>
    
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
