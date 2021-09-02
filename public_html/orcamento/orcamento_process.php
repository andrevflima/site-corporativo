<?php

	require '../PHPMailer/PHPMailerAutoload.php';

    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
	$cmessage = $_REQUEST['message'];
	$tipo = $_REQUEST['tipo'];

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
	$Mailer->Subject = 'Cotação de serviço solicitada por '.$name;
	
	//Corpo da Mensagem
	$Mailer->Body = 'Tipo de Serviço: '.$tipo. '<br><br> Descrição do serviço:<br>' .$cmessage. "<br> <br> Email do solicitante: ".$email;
	
	//Destinatario 
	$Mailer->AddAddress('');
	
	if($Mailer->Send()){
		header( "Location: http://zerohum.com.br/orcamento/" );
	}else{
		echo alert("Falha no envio do Email.");
	}

?>



