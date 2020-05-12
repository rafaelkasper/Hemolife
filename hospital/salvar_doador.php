<?php
include "../functions/valida_sessao.php";
include "../functions/conecta_banco.php";

$nome = $_POST['nome'];
$rua = $_POST['rua'];
$numero= $_POST['numero'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];
$estado= $_POST['estado'];
$telefone= $_POST['telefone'];
$email= $_POST['email'];
$sangue= $_POST['sangue'];
$rh= $_POST['rh'];

$cadastrar = $con->query("INSERT INTO doador(nome, rua, numero, bairro, cidade, estado, telefone, email, sangue, rh) VALUES 
('$nome', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$telefone', '$email', '$sangue', '$rh')");
header("Location: cadastrar_doador.php");
 $con->close();
?>