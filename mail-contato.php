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

$mail->From = 'contato@rossinaestamparia.com.br';
$mail->FromName = 'Contato do Site';

$mail->Debugoutput = 'html';

$mail->Host = getenv('HOST-CONTATO');
$mail->Username = getenv('USERNAME-CONTATO');
$mail->Password = getenv('PASSWORD-CONTATO');
$mail->SMTPSecure = getenv('SMTPSECURE-CONTATO');
$mail->Port = getenv('PORT-CONTATO');
$mail->SMTPAuth = getenv('SMTPAUTH-CONTATO');

$mail->addReplyTo($Email, $Nome);//email para o rementente responder

$mail->addAddress('contato@rossinaestamparia.com.br','Carlos Rossina');//destino desse email a receber
//$mail->addAddress('agendamento@rossinaestamparia.com.br','Carlos Rossina');//destino desse email a receber
$mail->setFrom('Mensagem do site','Mensagem do Site');

$mail->isHTML(true);
$mail->CharSet = 'utf-8';
$mail->WordWrap = 70;

$mail->Subject = 'Mensagem de - '. $Nome;
$mail->Body = "<html>
<head>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>  
</head>
<body>
<div style='margin-left:5px;background: #FFFFFF; padding:5px;width:90%;'>
    <h3 style='color: orange;font-family: Arial, Helvetica, sans-serif;text-align:center;line-height:1.5em;background: #000;'>
       Mensagem para atendimento
    </h3>
    <a href='https://www.rossinaestamparia.com.br' style='text-decoration:none;'>
        <h3 style='color:black;font-weight:bold;font-family: Arial, Helvetica, sans-serif;text-align:center;line-height:1.5em;background: orange;'>
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
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></scrip>
</body>
</html>";
$mail->AltBody = 'Este é um corpo de mensagem de texto simples';

//Se a mensagem anterior for enviada, a resposta automática é enviada através do código abaixo
if($mail->Send()){

    $mailer_2 = new PHPMailer();
    $mailer_2->IsSMTP();
//    $mailer_2->SMTPDebug = 1;
//    $mailer_2->isHTML();
    $mailer_2->Host = getenv('HOST-CONTATO');
    $mailer_2->Username = getenv('USERNAME-CONTATO'); //Informe o e-mai o completo
    $mailer_2->Password = getenv('PASSWORD-CONTATO'); //Senha da caixa postal
    $mailer_2->Port = getenv('PORT-CONTATO'); //Indica a porta de conexão para a saída de e-mails
    $mailer_2->SMTPSecure = getenv('SMTPSECURE-CONTATO'); //(opção usada somente na plesk 11.5 - Linux)
    $mailer_2->SMTPAuth = getenv('SMTPAUTH-CONTATO'); //define se haverá ou não autenticação no SMTP

    $mailer_2->FromName = "Rossina Estamparia"; //Nome que será exibido para o destinatário
    $mailer_2->From = "contato@rossinaestamparia.com.br"; //Obrigatório ser a mesma caixa postal indicada em "username"
    $mailer_2->AddAddress($Email); //Destinatários
    $mailer_2->Subject = 'Sua Mensagem foi recebida';
    $mailer_2->CharSet = "UTF-8"; // Charset da mensagem (opcional)

    $message_2 = "Olá, $Nome \r\n\r\n";
    $message_2 .= "Recebemos seu contato no site e em breve responderemos sua mensagem.\r\n\r\n";
    $message_2 .= "Atenciosamente, Carlos Rossina\r\n\r\n";
    $message_2 .= "---------------------------------------------------------------\r\n";
    $message_2 .= "Mensagem enviada através do site https://rossinaestamparia.com.br/\r\n";

    $mailer_2->Body = $message_2;
    //$mailer_2->AltBody = $message_2;
    $mailer_2->Send();
}else{
    echo "Seu e-mail Não foi enviado, tente de novo: " . $mail->ErrorInfo;
}
return true;

//if (!$mail->send()) {
//    echo "Seu e-mail Não foi enviado, tente de novo: " . $mail->ErrorInfo;
//    return true;
//} //else {
//    echo "<h4 style='color: green; font-size: 16px;'><strong><span style='color: black'>$Nome. </span>IMPORTANTE!<br>
//Caso você não receba nossa resposta em 5 dias úteis pelo email, verifique sua caixa de spam (lixo eletrônico, quarentena, não solicitadas) ela pode ter entrado lá por equivoco de seu provedor.<br>
//Garanta o recebimento de nossos emails marcando-os como não spam (anti-spam, não é lixo eletrônico, autorizar email, e-mail confiável).<br>
//Adicione esse email aos seus contatos : </strong><strong style='color: #000; text-decoration: underline'><a href='mailto:contato@rossinaestamparia.com.br'>contato@rossinaestamparia.com.br</a> </strong></h4>";
////    return true;
//}