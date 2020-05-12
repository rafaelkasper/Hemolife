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

        <title>CADASTRAR USUÁRIO</title>
    </head>
    <body class="bg-light">
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">HEMOLIFE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        
          <a class="btn btn-danger" href="../index.php" role="button">SAIR</a>
        
      </div>
    </nav>
        <br>
        <br>
        <br>
        <div class="container">
           
            <h3>CADASTRAR USUÁRIO</h3>
            <form class="needs-validation" action="salvar_usuario.php" method="POST" novalidate>
                <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="validationCustom01">USUARIO</label>
                        <input type="text" class="form-control" id="validationCustom01" name="usuario" placeholder="USUÁRIO" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>


                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">SENHA</label>
                        <input type="text" class="form-control" id="validationCustom02" name="senha" placeholder="SENHA" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>
                      </div>
                <div class="form-row">
<div class="col-md-2 mb-3">
                    <a class="btn btn-danger" href="home.php" role="button">VOLTAR</a>
</div>
                    <div class="col-md-2 mb-3">
                <button class="btn btn-primary" type="submit">CADASTRAR</button>
                </div>
                </div>
            </form>
            
            <script>
                // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
                (function() {
                'use strict';
                window.addEventListener('load', function() {
                // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                var forms = document.getElementsByClassName('needs-validation');
                // Faz um loop neles e evita o envio
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
                }, false);
                });
                }, false);
                })();
            </script>



                  