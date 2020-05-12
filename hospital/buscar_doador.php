<?php
//VERIFICA SE USUÁRIO TEM AUTORIZAÇÃO PARA ACESSAR A PÁGINA
include '../functions/valida_sessao.php';
include '../functions/conecta_banco.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>BUSCAR DOADOR </title>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../images/favicon.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href='../css/personalizado.css' rel='stylesheet' />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      

    </head>
    <header>
      
    </header>

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
        <div class="container">

                       <br>
            <br>

            <div class="container">
                <form method="POST" action="">
                    <br>
                    <p>
                         <div class="form-row">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="sangue">TIPO SANGUÍNEO</label>
                        <select required class="custom-select mr-sm-2" id="sangue" name="sangue">
                            <option selected>SELECIONE</option>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="B">B</option>
                            <option value="o">O</option>
                        </select>
                    </div>
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="rh">FATOR RH</label>
                        <select required class="custom-select mr-sm-2" id="rh" name="rh">
                            <option selected>SELECIONE</option>
                            <option value="NEGATIVO">NEGATIVO</option>
                            <option value="POSITIVO">POSITIVO</option>

                        </select>
                    </div>
                </div>
                    <br>
                        <input id="pesq" class="btn btn-primary" name="buscar" type="submit" value="Pesquisar">
                    
                </form>
            </div>
            <br>	
            <div class="overflow-x:auto">
                <table class="table table-bordered table-hover p-0 m-0" id="pesquisar">
                    <thead class="bg-info text-white text-center">
                        <tr>
                         
                            <th>NOME</th>
                            <th>CIDADE</th>
                            <th>TELEFONE</th>
                            <th>EMAIL</th>
                            <th>TIPO SANGUÍNEO</th>
                            <th>FATOR RH</th>
                            <!--<th>AÇÃO</th>!-->
                       
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            //EXIBE DADOS PARA EDIÇÃO
                            @$buscar = filter_input(INPUT_POST, 'buscar', FILTER_SANITIZE_STRING);
                            if ($buscar) {
                                $sangue = filter_input(INPUT_POST, 'sangue', FILTER_SANITIZE_STRING);
                                $rh = filter_input(INPUT_POST, 'rh', FILTER_SANITIZE_STRING);
                                
            $_SESSION['sangue'] = $sangue;
            $_SESSION['rh'] = $rh;  
                  
                               @$busca= $con->query("SELECT * FROM doador WHERE sangue = '$sangue' AND rh = '$rh'");
                            
                               
                                while ($rows = $busca->fetch_array()) { {
                                    @$id = $rows['id'];
                                        
                                        echo "<td class='align-middle'>" . $rows['nome'] . "</td>";
                                        echo "<td class='align-middle' style='text-align: center;'>" . $rows['cidade'] . "</td>";
                                        echo "<td class='align-middle' style='text-align: center;'>" . $rows['telefone'] . "</td>";
                                        echo "<td class='align-middle' style='text-align: center;'>" . $rows['email'] . "</td>";
                                        echo "<td class='align-middle' style='text-align: center;'>" . $rows['sangue'] . "</td>";
                                        echo "<td class='align-middle' style='text-align: center;'>" . $rows['rh'] . "</td>";
                                        
                                       
                                        echo "</tr>";
                                    }
                                }
                            }
                         
                            ?>
                    </tbody>
                </table>
                <br>
                <br>
                 <a class="btn btn-success" href="enviar_email.php" role="button">ENVIAR EMAIL</a>
            </div>
            <br>
             <a class="btn btn-danger" href="home.php" role="button">VOLTAR</a>
           
        </div>

            <?php //include '../functions/rodape.php'; ?>
    </body>
</html>