<?php

$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
$Email		= $_POST["Email"];	// Pega o valor do campo Email
$Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
$Celular	= $_POST["Celular"];	// Pega o valor do campo Telefone
$Turno		= $_POST["Turno"];	// Pega o valor do campo Email
$DiaSemana	= $_POST["DiaSemana"];	// Pega o valor do campo Email
$Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem

$Vai 		=   "<b>Nome:</b> $Nome <br><br>" . "<b>E-mail:</b> $Email <br><br>" . "<b>Telefone:</b> $Fone <br><br>" . "<b>Celular:</b> $Celular <br><br>" . "<b>Turno:</b> $Turno <br><br>" . "<b>Dia-Semana:</b> $DiaSemana <br><br>".
                "<b>Mensagem:</b><br> $Mensagem";

date_default_timezone_set('America/Sao_Paulo');

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->setLanguage('br', 'vendor/phpmailer/phpmailer/language/');

$mail->SMTPDebug = 2;

$mail->From ="justem007@hotmail.com";
$mail->FromName = "Ricardo Justem";

$mail->Debugoutput = 'html';

$mail->Host = 'smtp.live.com';
$mail->Username = "justem007@hotmail.com";
$mail->Password = "ric389122";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->addAddress('ricardojustem@gmail.com', 'Agendar Visita');//destino desse email a receber

$mail->addReplyTo('ricardojustem@gmail.com', 'Agendar Visita');//email para o rementente responder

//$mail->setFrom('ricardojustem@gmail.com', 'First Last');

$mail->Subject = 'Agendar Visita';

//$mail->Body($Vai);

$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 50;

$mail->msgHTML($Vai);

$mail->AltBody = 'Este é um corpo de mensagem de texto simples';

header();

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Mensagem enviada!";
    return true;
}