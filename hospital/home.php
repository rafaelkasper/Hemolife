<!DOCTYPE html>
<?php
include "../functions/valida_sessao.php";
?>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="icon" type="image/png" href="../images/favicon.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>HOME</title>
  </head>
  <body class="bg-light">
       <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">HEMOLIFE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <a class="btn btn-danger" href="../functions/logout.php" role="button">SAIR</a>
        
      </div>
    </nav>
      <div class="container">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="row">
  <div class="col-sm-4">
<div class="card text-center border-danger mb-3" style="width: 18rem;">
    <br>
    <i class="fas fa-hand-holding-heart fa-3x text-danger" style="padding-top: 2rem;"></i>
  <div class="card-body">
    <h5 class="card-title">CADASTRAR DOADOR</h5>
   
    <a href="cadastrar_doador.php" class="btn btn-primary">CADASTRAR</a>
  </div>
</div>
  </div>
            
          <div class="col-sm-4">
          <div class="card text-center border-secondary mb-3" style="width: 18rem;">
    <i class="fas fa-search fa-3x text-secondary " style="padding-top: 2rem;"></i>
  <div class="card-body">
    <h5 class="card-title">BUSCAR DOADOR</h5>
   
    <a href="buscar_doador.php" class="btn btn-primary">BUSCAR</a>
  </div>
          </div>
</div>
              
              <div class="col-sm-4">
<div class="card text-center border-info mb-3" style="width: 18rem;">
    <br>
    <i class="fas fa-users fa-3x text-info" style="padding-top: 2rem;"></i>
  <div class="card-body">
    <h5 class="card-title">CADASTRAR USUÁRIO</h5>
   
    <a href="cadastrar_usuario.php" class="btn btn-primary">CADASTRAR</a>
  </div>
</div>
  </div>
          </div>
    
    
    
    
    
      </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>