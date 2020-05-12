<?php
include "../functions/valida_sessao.php";
include "../functions/conecta_banco.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$senha = password_hash($senha, PASSWORD_DEFAULT);

$cadastrar = $con->query("INSERT INTO hospital(usuario, senha) VALUES 
('$usuario', '$senha')");
header("Location: cadastrar_usuario.php");









 $con->close();

?>