<?php
    session_start();
    if(!isset($_SESSION['usuario_email'])){
    header('Location: login.php');
    exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Bem vindo, <?php echo $_SESSION['usuario_email'];?></h1>

    <p>Você está logado no sistema</p>

    <a href="logout.php">Sair</a>
    
</body>
</html>
