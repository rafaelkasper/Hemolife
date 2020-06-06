<?php
        include '../functions/valida_sessao.php';
	require_once '../PHPMailer/PHPMailer.php';
	include '../functions/conecta_banco.php';
        @$sangue = $_SESSION['sangue'];
        @$rh = $_SESSION['rh'];
      
        $busca= $con->query("SELECT * FROM doador WHERE sangue = '$sangue' AND rh = '$rh'");
         while ($rows = $busca->fetch_array()) { {
        $email= $rows['email'];
        $nome= $rows['nome'];
        //foreach (array($email) as $email) {
        //for ($i = 0; $i < count($email); $i++) {
      
	$Mailer = new PHPMailer();
	$Mailer->CharSet = 'UTF-8';
	//Define que serÃ¡ usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//ConfiguraÃ§Ãµes
	$Mailer->SMTPAuth = true;
	//$Mailer->SMTPSecure = 'ssl';
	
	//nome do servidor
	$Mailer->Host = 'colocar seu servidor de email';
	//Porta de saida de e-mail 
	$Mailer->Port = 587;
	
	//Dados do e-mail de saida - autenticaÃ§Ã£o
	$Mailer->Username = 'colocar seu email';
	$Mailer->Password = 'colocar a senha';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticaÃ§Ã£o)
	$Mailer->From = 'colocar seu email';
	
	//Nome do Remetente
	$Mailer->FromName = 'HEMOLIFE';
	
	//Assunto da mensagem
	$Mailer->Subject = 'DOAR SANGUE';
	
	//Corpo da Mensagem
	$Mailer->Body = 'Olá  '.$nome.'  precisamos do seu sangue! Por gentileza, entre em contato com o hospital!';
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = 'Olá'.$nome.'precisamos do seu sangue! Por gentileza, entre em contato com o hospital!';
	
	//Destinatario 
	$Mailer->AddAddress($email);
	
        $Mailer->SMTPDebug = 0;
        
	if($Mailer->Send()){
        echo '<script type="text/javascript">window.location = "buscar_doador.php"</script>';
	}else{
        echo '<script type="text/javascript">window.location = "buscar_doador.php"</script>';
	}
        }
        }
         //}
       //  }
        ?>
