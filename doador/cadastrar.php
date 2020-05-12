<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="../images/favicon.png"/>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <title>CADASTRAR DOADOR</title>
    </head>
    <body class="bg-light">
        <br>
        <br>
        <div class="container">

            <form class="needs-validation" action="salvar_cadastro.php" method="POST" novalidate>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom01">NOME</label>
                        <input required type="text" class="form-control" id="validationCustom01" name="nome" placeholder="NOME" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col-md-10 mb-3">
                        <label for="validationCustom02">RUA</label>
                        <input required type="text" class="form-control" id="validationCustom02" name="rua" placeholder="RUA" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom03">NÚMERO</label>
                        <input required type="text" class="form-control" id="validationCustom03" name="numero" placeholder="NÚMERO" required>
                        <div class="invalid-feedback">
                            Por favor, informe uma número válido.
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom04">BAIRRO</label>
                        <input required type="text" class="form-control" id="validationCustom04" name="bairro" placeholder="BAIRRO" required>
                        <div class="invalid-feedback">
                            Por favor, informe um bairro válido.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">CIDADE</label>
                        <input required type="text" class="form-control" id="validationCustom01" name="cidade" placeholder="CIDADE"  required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">ESTADO</label>
                        <input required type="text" class="form-control" id="validationCustom01" name="estado" placeholder="ESTADO"  required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">TELEFONE</label>
                        <input required type="text" class="form-control" id="validationCustom02" name="telefone" placeholder="TELEFONE" required>
                        <div class="valid-feedback">
                            Tudo certo!
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="validationCustom03">EMAIL</label>
                        <input required type="text" class="form-control" id="validationCustom03" name="email" placeholder="EMAIL" required>
                        <div class="invalid-feedback">
                            Por favor, informe uma email válido.
                        </div>
                    </div>


                </div>
                <div class="form-row">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="sangue">TIPO SANGUÍNEO</label>
                        <select required="" class="custom-select mr-sm-2" id="sangue" name="sangue">
                            <option selected>SELECIONE</option>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="B">B</option>
                            <option value="o">O</option>
                        </select>
                    </div>
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="rh">FATOR RH</label>
                        <select required="" class="custom-select mr-sm-2" id="rh" name="rh">
                            <option selected>SELECIONE</option>
                            <option value="NEGATIVO">NEGATIVO</option>
                            <option value="POSITIVO">POSITIVO</option>

                        </select>
                    </div>
                </div>
                <br>
                <a class="btn btn-danger" href="../index.php" role="button">VOLTAR</a>
                <button class="btn btn-primary" type="submit">CADASTRAR</button>
                
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






        </div>