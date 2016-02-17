<?php
if(isset($_POST['Nome'])){
    $Nome = $_POST['Nome'];
}
if(isset($_POST['Email'])){
    $Email = $_POST['Email'];
}
if(isset($_POST['Fone'])){
    $Fone = $_POST['Fone'];
}
if(isset($_POST['Celular'])){
    $Celular = $_POST['Celular'];
}
if(isset($_POST['Turno'])){
    $Turno = $_POST['Turno'];
}
if(isset($_POST['DiaSemana'])){
    $DiaSemana = $_POST['DiaSemana'];
}
if(isset($_POST['Mensagem'])){
    $Mensagem = $_POST['Mensagem'];
}

$Vai 		=   "<b>Nome:</b> $Nome <br><br>" . "<b>E-mail:</b> $Email <br><br>" . "<b>Telefone:</b> $Fone <br><br>" . "<b>Celular:</b> $Celular <br><br>" . "<b>Turno:</b> $Turno <br><br>" . "<b>Dia-Semana:</b> $DiaSemana <br><br>".
    "<b>Mensagem:</b><br> $Mensagem";

if(isset($_POST['g-recaptcha-response'])){
    $captcha_data = $_POST['g-recaptcha-response'];
}

if(!$captcha_data){
    echo "Por Favor , Confirme o captcha";
    exit;
}
$secretKey = "6LcbcRgTAAAAAPi_QltWziJ5y8xPEP30dYKjAIap";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha_data."&remoteip=".$ip);

$responseKeys = json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {
    echo '<h2>Você pare ser um spamm ! Get the @$%K out</h2>';
} else {
    echo '<h3 style="color:blue;">Obrigador por agendar uma visita</h3>';
}

//$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
//$Email		= $_POST["Email"];	// Pega o valor do campo Email
//$Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
//$Celular	= $_POST["Celular"];	// Pega o valor do campo Telefone
//$Turno		= $_POST["Turno"];	// Pega o valor do campo Email
//$DiaSemana	= $_POST["DiaSemana"];	// Pega o valor do campo Email
//$Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem

//foreach ($_POST as $key => $value) {
//    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
//}

date_default_timezone_set('America/Sao_Paulo');

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'vendor/autoload.php';

$mail = new PHPMailer;
$mail->setLanguage('br', 'vendor/phpmailer/phpmailer/language/');

$mail->isSMTP();

//$mail->SMTPDebug = 2;

$mail->From = 'justem007@hotmail.com';
$mail->FromName = 'Ricardo Justem';

$mail->Debugoutput = 'html';

$mail->Host = 'smtp.live.com';
$mail->Username = "justem007@hotmail.com";
$mail->Password = "ric389122";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->addReplyTo('ricardojustem@gmail.com', $Nome);//email para o rementente responder
$mail->addAddress('contato@rossinaestamparia.com.br', 'Rossina Estamparia Digital');//destino desse email a receber
$mail->setFrom('ricardojustem@gmail.com', 'Rossina Estamparia Digital');

//$mail->Body($Vai);

$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 50;

$mail->Subject = 'Agendar Visita - Rossina';
$mail->Body    = 'Enviando Mensagem para agendar visita';
$mail->AltBody = 'Este é um corpo de mensagem de texto simples';

$mail->msgHTML($Vai);

if (!$mail->send()) {
    echo "Seu e-mail Não foi enviado, tente de novo: " . $mail->ErrorInfo;
} else {
    echo "<h1 style='color: green; font-size: 24px;'>Mensagem enviada com sucesso! Aquarde o retorno da mensagem</h1>";
    return true;
}