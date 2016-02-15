<?php

$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
$Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
$Email		= $_POST["Email"];	// Pega o valor do campo Email
$Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem

$Vai 		= "Nome: $Nome\n\nE-mail: $Email\n\nTelefone: $Fone\n\nMensagem: $Mensagem\n";

date_default_timezone_set('America/Sao_Paulo');

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 2;

$mail->From ="ricardojustem@gmail.com";

$mail->FromName = "Ricardo Justem";

$mail->Debugoutput = 'html';

$mail->Host = 'smtp.gmail.com';

$mail->SMTPSecure = 'ssl';

$mail->Port = 465;

$mail->SMTPAuth = true;

$mail->Username = "ricardojustem@gmail.com";

$mail->Password = "ric389125";

$mail->addAddress('ricardojustem@gmail.com', 'Ricardo Justem');

$mail->addReplyTo('ricardojustem@gmail.com', 'First Last');

$mail->setLanguage('br', 'vendor/phpmailer/phpmailer/language/');

$mail->setFrom('ricardojustem@gmail.com', 'First Last');

$mail->Subject = 'E-mail enviado pra agenda';

$mail->msgHTML($Vai);

$mail->AltBody = 'Este é um corpo de mensagem de texto simples';

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Mensagem enviada!";
    return true;
}