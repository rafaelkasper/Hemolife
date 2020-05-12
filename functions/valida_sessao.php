<?php
//VERIFICA SE O USUÁRIO POSSUI ACESSO À PÁGINA
include "conecta_banco.php";
session_start();
if (IsSet($_SESSION["usuario"]))
    $usuario = $_SESSION["usuario"];
if (IsSet($_SESSION["senha"]))
    $senha = $_SESSION["senha"];

if (IsSet($_SESSION["nivel_acesso"]))
    $nivel_acesso = $_SESSION["nivel_acesso"];


if ($nivel_acesso == 1) {

    $_SESSION['usuario'] = $usuario;
     $_SESSION['senha'] = $senha;
      $_SESSION['nivel_acesso'] = $nivel_acesso;
    
} else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
   
    unset($_SESSION['nivel_acesso']);
    header("Location: ../index.php");
}

$con->close();
