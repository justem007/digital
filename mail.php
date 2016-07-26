<?php

require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

if(isset($_POST['Nome'])){
    $Nome = htmlspecialchars(strip_tags($_POST['Nome']));
}

if(isset($_POST['Pessoa'])){
    $Pessoa = htmlspecialchars(strip_tags($_POST['Pessoa']));
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

if(isset($_POST['Sabados'])){
    $Sabados = htmlspecialchars(strip_tags($_POST['Sabados']));
}

if(isset($_POST['DiaSabado'])){
    $DiaSabado = htmlspecialchars(strip_tags($_POST['DiaSabado']));
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

if(isset($_POST['g-recaptcha-response'])){
    $captcha_data = $_POST['g-recaptcha-response'];
}

if(!$captcha_data){
    echo "Por Favor , Confirme o captcha";
    exit;
}
$secretKey = '6LcIFSUTAAAAAIRG7vNNJuYm3PqfiCmo-KrDAiWm';
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha_data."&remoteip=".$ip);

$responseKeys = json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {
    echo '<h2>Você parece  ser um spamm ! Get the @$%K out</h2>';
} else {
    echo '<h4 style="color:blue;">Obrigador por agendar uma visita!</h4>';
}

$mail = new PHPMailer;
$mail->setLanguage('br', 'vendor/phpmailer/phpmailer/language/');

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

$mail->isSMTP();

$mail->From = 'justem007@hotmail.com';
$mail->FromName = 'Ricardo Justem';

$mail->Debugoutput = 'html';

$mail->Host = getenv('HOST');
$mail->Username = getenv('USERNAME');
$mail->Password = getenv('PASSWORD');
$mail->SMTPSecure = getenv('SMTPSECURE');
$mail->Port = getenv('PORT');
$mail->SMTPAuth = getenv('SMTPAUTH');

$mail->addReplyTo($Email, $Nome);//email para o rementente responder

$mail->addAddress('contato@rossinaestamparia.com.br','Rossina Estamparia');//destino desse email a receber
//$mail->addAddress('justem007@hotmail.com','Ricardo Justem');//destino desse email a receber
$mail->setFrom('justem007@hotmail.com','Ricardo Justem');

$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 70;

$mail->Subject = 'Agendar Visita - Rossina';
$mail->Body = "<html>
<head>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>  
</head>
<body>
<div style='margin-left:5px;background: #FFFFFF; padding:5px;width:90%;'>
    <h3 style='color:#333333;font-family: Arial, Helvetica, sans-serif;text-align:center;line-height:1.5em;background: #CCC;'>
        Agendamento de atendimento personalizado
    </h3>
    <a href='https://www.rossinaestamparia.com.br' style='text-decoration:none;'>
        <h3 style='color:#FFFFFF;font-weight:bold;font-family: Arial, Helvetica, sans-serif;text-align:center;line-height:1.5em;background: #069;'>
            Rossina Estamparia Digital
        </h3></a>
<table class='table table-striped'>
    <tr class='active'>
        <td>
        <hr style='height:2px; color: #069;'>
        <h4 style='text-align: center; text-weight: bold;'>Dados Pessoais</h4>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Nome:</b> $Nome
            </p>
        </td>
    </tr>    
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Tipo de pessoa:</b> $Pessoa
            </p>
        </td>
    </tr>    
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
        <hr style='height:2px; color: #069;'>
        <h4 style='text-align: center; text-weight: bold;'>Dia e hora da visita</h4>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>Dia Útil:</b> $DiaSemana --- <b>Horário</b> $Turno
            </p>
        </td>
    </tr>
    <tr>
        <td>
            <p style='color:#333333;font-family: Arial, Helvetica, sans-serif; font-size:14px'>
                <b>No SÀBADO:</b> $DiaSabado --- <b>Horário</b> $Sabados
            </p>
        </td>
    </tr>
    <tr>
        <td>
        <hr style='height:2px; color: #069;'>
        <h4 style='text-align: center; text-weight: bold;'>Tipo de atendimento e mensagem</h4>
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
        <hr style='height:2px; color: #069;'>
        <h4 style='text-align: center; text-weight: bold;'>Origem de envio da mensagem</h4>
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
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></scrip
</body>
</html>";
$mail->AltBody = 'Este é um corpo de mensagem de texto simples';

//$mail->SMTPDebug = 2;

//$mail->addAttachment('images/logo-rossina.png');

//$mail->msgHTML($Vai);

//$mail->msgHTML(file_get_contents('template-form.html'), dirname(__FILE__));

if (!$mail->send()) {
    echo "Seu e-mail Não foi enviado, tente de novo: " . $mail->ErrorInfo;
} else {
    echo "<h4 style='color: green; font-size: 16px;'><strong>$Nome. IMPORTANTE!<br>
Caso você não receba nossa resposta em 5 dias úteis pelo email, verifique sua caixa de spam (lixo eletrônico, quarentena, não solicitadas) ela pode ter entrado lá por equivoco de seu provedor.<br>
Garanta o recebimento de nossos emails marcando-os como não spam (anti-spam, não é lixo eletrônico, autorizar email, e-mail confiável).<br>
Adicione esse email aos seus contatos : </strong><strong style='color: #000; text-decoration: underline'><a href='mailto:contato@rossinaestamparia.com.br'>contato@rossinaestamparia.com.br</a> </strong></h4>";
    return true;
}
