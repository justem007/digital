<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

if(isset($_POST['Nome'])){
    $Nome = htmlspecialchars(strip_tags($_POST['Nome']));
}
if(isset($_POST['Email'])){
    $Email = htmlspecialchars(strip_tags($_POST['Email']));
}
if(isset($_POST['Fone'])){
    $Fone = htmlspecialchars(strip_tags($_POST['Fone']));
}
if(isset($_POST['Celular'])){
    $Celular = htmlspecialchars(strip_tags($_POST['Celular']));
}
if(isset($_POST['Turno'])){
    $Turno = htmlspecialchars(strip_tags($_POST['Turno']));
}
if(isset($_POST['DiaSemana'])){
    $DiaSemana = htmlspecialchars(strip_tags($_POST['DiaSemana']));
}

if(isset($_POST['Atendimento'])){
    $Atendimento = $_POST['Atendimento'];
    $opcoes_text = implode(", ", $Atendimento);
}

if(isset($_POST['Mensagem'])){
    $Mensagem = $_POST['Mensagem'];
}

$ip = $_SERVER['REMOTE_ADDR'];
$data = date("d/m/Y");
$hora = date("H:i");

$Vai 		=   "<b>Nome:</b> $Nome <br><br>" . "<b>E-mail:</b> $Email <br><br>" . "<b>Telefone:</b> $Fone <br><br>" . "<b>Celular:</b> $Celular <br><br>" .
                "<b>Turno:</b> $Turno <br><br>" . "<b>Dia-Semana:</b> $DiaSemana <br><br>". "<b>Atendimento para:</b> $opcoes_text <br><br> " .
                "<b>Mensagem:</b><br> $Mensagem <br><br>" . "IP do Visitante: <b>$ip</b> <br><br>" . "Data Envio: <b>$data</b> <br><br>" . "Hora de Envio: <b>$hora</b>";

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
    echo '<h4 style="color:blue;">Obrigador por agendar uma visita!</h4>';
}

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

$mail->addReplyTo($Email, $Nome);//email para o rementente responder
$mail->addAddress('contato@rossinaestamparia.com.br', 'Rossina Estamparia Digital');//destino desse email a receber
//$mail->addAddress('justem007@hotmail.com', 'Rossina Estamparia Digital');//destino desse email a receber
//$mail->addAddress('ricardojustem@gmail.com', 'Rossina Estamparia Digital');//destino desse email a receber
//$mail->addAddress($Email, $Nome);//destino desse email a receber
$mail->setFrom('ricardojustem@gmail.com', 'Rossina Estamparia Digital');

//$mail->Body($Vai);

$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 70;

$mail->Subject = 'Agendar Visita - Rossina';
$mail->Body = "<html>
<head>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</head>
<body>
<div style='margin-left:5px;background: #FFFFFF; padding:5px;width:90%;'>
    <h2 style='color:#333333;font-family: Arial, Helvetica, sans-serif;text-align:center;line-height:1.5em;background: #CCC;'>
        Agendamento de atendimento personalizado
    </h2>
    <a href='https://www.rossinaestamparia.com.br' style='text-decoration:none;'>
        <h2 style='color:#FFFFFF;font-weight:bold;font-family: Arial, Helvetica, sans-serif;text-align:center;line-height:1.5em;background: #069;'>
            Rossina Estamparia Digital
        </h2></a>
<hr style='height:2px; background: #069;'>
<table class='table'>
    <tr class='active'>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Nome:</b> $Nome
            </p>
        </td>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Email:</b> $Email
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Telefone:</b> $Fone
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Celular:</b> $Celular
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Dia da Semana:</b> $DiaSemana
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Turno-Horário:</b> $Turno
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Atendimento para:</b> $opcoes_text
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Mensagem:</b> $Mensagem
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                Ip do contato: <b>$ip</b>
            </p>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                Data-envio: <b>$data</b>
            </p>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                Hora-envio: <b>$hora</b>
            </p>
        </td>
    </tr>
</table>
</div>
</body>
</html>";
$mail->AltBody = 'Este é um corpo de mensagem de texto simples';

//$mail->addAttachment('images/logo-rossina.png');

//$mail->msgHTML($Vai);

//$mail->msgHTML(file_get_contents('template-form.html'), dirname(__FILE__));

if (!$mail->send()) {
    echo "Seu e-mail Não foi enviado, tente de novo: " . $mail->ErrorInfo;
} else {
    echo "<h4 style='color: green; font-size: 24px;'>$Nome. Retornaremos em breve confirmando o agendamento.</h4>";
    return true;
}