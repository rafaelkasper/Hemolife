<?php
//VERIFICA AS CREDENCIAIS DE ACESSO E AUTORIZA O ACESSO
$acesso = $_POST["login"];
$senha = $_POST["senha"];
// acesso ao banco de dados
include "conecta_banco.php";
$login = $con->real_escape_string($acesso);
$senha = $con->real_escape_string($senha);

if((!empty($login)) AND (!empty($senha))) {
    $consulta = $con->query("SELECT * FROM hospital WHERE usuario='$login' limit 1");
    $linhas = $consulta->num_rows;
    $row = $consulta->fetch_array();
   $nivel= $row['nivel_acesso'];
   if(password_verify($senha, $row['senha'])){
   session_start();
            $_SESSION['usuario'] = $login;
            $_SESSION['senha'] = $senha;
            $_SESSION['nivel_acesso'] = $nivel;
            header("Location: ../hospital/home.php");
    
        
}
    
   else  {
        echo "<html><body>";
       
        include "erro_login.php";
        echo "</body></html>";
}

 }
