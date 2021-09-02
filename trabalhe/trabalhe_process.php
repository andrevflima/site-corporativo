<?php

	require '../PHPMailer/PHPMailerAutoload.php';

    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
	$cmessage = $_REQUEST['message'];
	$file = $_FILES['arquivo']['tmp_name'];
	$namefile = $_FILES['arquivo']['name'];
	$dir = '../upload/';

	move_uploaded_file($file,$dir.$namefile);
	$path_file = $dir.$namefile;

	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}

	
	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->CharSet = 'utf-8';
	
	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'tsl';
	
	//nome do servidor
	$Mailer->Host = 'smtp.gmail.com';
	//Porta de saida de e-mail 
	$Mailer->Port = 587;
	
	//Dados do e-mail de saida - autenticação
	$Mailer->Username = '';
	$Mailer->Password = '';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = '';
	
	//Nome do Remetente
	$Mailer->FromName = $name;
	
	//Assunto da mensagem
	$Mailer->Subject = 'Curriculo enviado por '.$name;

	//anexo
	$Mailer->AddAttachment($path_file);
	
	//Corpo da Mensagem
	$Mailer->Body = 'Mensagem: <br>'.$cmessage. "<br> <br> Email do solicitante: ".$email;
	
	//Destinatario 
	$Mailer->AddAddress('');
	
	if($Mailer->Send()){
		header( "Location: http://zerohum.com.br/trabalhe/ " );
		unlink("../upload/$namefile");
	}else{
		echo alert("Falha no envio do Email.");
	}

?>
