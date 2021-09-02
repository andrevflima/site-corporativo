<?php
	require '../PHPMailer/PHPMailerAutoload.php';

    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
	$cmessage = $_REQUEST['message'];

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
	$Mailer->Host = 'smtplw.com.br';
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
	$Mailer->Subject ='Nova mensagem de - ' .$subject;
	
	//Corpo da Mensagem
	$Mailer->Body = $cmessage;
	
	//Destinatario 
	$Mailer->AddAddress('');
	
	if($Mailer->Send()){
		header( "Location: http://zerohum.com.br/contato/" );
	}else{
		echo alert("Falha no envio do Email.");
	}
	
?>



