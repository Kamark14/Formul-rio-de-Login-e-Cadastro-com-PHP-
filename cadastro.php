<?php
include_once 'conexao.php';

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    
$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

    $salt = md5($senha . $usuario);

    $custo = "06";

    $senhaCriptografada = crypt($senha, "$2b$" . $custo . "$" . $salt . "$");

    $sql = "insert into usuario(Email_Usuario,Senha_Usuario)values('$usuario','$senhaCriptografada')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuario cadastrado com sucesso";
    }else{
        echo "Erro ao cadastrar usuario";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST">
        <input type="text" placeholder="Digite seu email" name="usuario">
        <input type="password" placeholder="Digite sua senha" name="senha">
        <input type="submit" value="Entrar">

    </form>

</body>
</html>
