<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login";

mysqli_report(MYSQLI_REPORT_OFF);

$conexao = @mysqli_connect($servidor,$usuario,$senha,$banco);

if(mysqli_connect_errno()){
    die("Erro na conexão: " . mysqli_connect_errno() . "): " . mysqli_connect_error());
}

?>
