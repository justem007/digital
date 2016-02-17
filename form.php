<?php
// busca a biblioteca recaptcha
require_once "recaptchalib.php"; ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de Visita</title>
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</head>
<body>
<h1 class="text-center">Agende sua Visita</h1>
<div class="container-fluid">
    <form action="mail.php" method="post" class="form-group" id="agendaForm">
        <h3 class="text-center alert-success">Favor preeencher todos os campos</h3>
        <div class="form-group">
            <label for="Nome">Nome Completo:</label>
            <input type="text" name="Nome" id="Nome"  class="form-control" placeholder="seu nome completo" required/>
        </div>
        <div class="form-group">
            <label for="Email">E-mail:</label>
            <input type="text" name="Email" id="Email" class="form-control" placeholder="seu email" required/>
        </div>
        <div class="form-group">
            <label for="Fone">Telefone:</label>
            <input type="text" name="Fone" class="form-control" id="Fone" placeholder="seu telefone"/>
        </div>
        <div class="medium-6 columns">
            <label for="Celular">Celular:</label>
            <input type="text" name="Celular" id="Celular" class="form-control" placeholder="seu celular" required/>
        </div>
        <br><br>
        <div class="medium-6 columns">
            <label for="gender" class="error">Por favor seleciona um dia dessa semana</label><br>
            <label for="DiaSemana">Dia da Semana:</label><br>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio1" value="domingo">Domingo
            </label>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio2" value="segunda">Segunda
            </label>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio3" value="terça">Terça
            </label>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio4" value="quarta">Quarta
            </label>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio5" value="quinta">Quinta
            </label>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio6" value="sexta">Sexta
            </label>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio7" value="sábado">Sábado
            </label>
        </div>
        <br>
        <hr>
        <br>
        <div class="medium-6 columns">
            <label for="gender" class="error">Por favor seleciona um horário</label><br>
            <label for="Turno">Escolha o Horário</label><br>
            <label class="radio-inline">
                <input type="radio" name="Turno" id="inlineRadio1" value="de 8:00 as 10:00">de 8:00 as 10:00
            </label>
            <label class="radio-inline">
                <input type="radio" name="Turno" id="inlineRadio2" value="de 10:00 as 12:00">de 10:00 as 12:00
            </label>
            <label class="radio-inline">
                <input type="radio" name="Turno" id="inlineRadio3" value="de 13:00 as 15:00">de 13:00 as 15:00
            </label>
            <label class="radio-inline">
                <input type="radio" name="Turno" id="inlineRadio4" value="de 15:00 as 17:00">de 15:00 as 17:00
            </label><br>
        </div>
        <br><br>
        <div class="columns">
            <label for="Mensagem">Mensagem: </label>
            <textarea name="Mensagem" rows="4" cols="80" class="form-control">
            </textarea>
        </div>
        <br>
        <div id="retorno"></div>
        <br>
        <div class="g-recaptcha" data-theme="dark" data-sitekey="6LcbcRgTAAAAAJtERGYPRtnAZLAfPm1byf1hZ5UG"></div>
        <br>
        <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary btn-lg submit"/>

    </form>
    <script src="components/jquery-validation/lib/jquery-1.9.1.js"></script>
    <script src="components/jquery-validation/dist/jquery.validate.js"></script>
    <script src="components/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="dist/ajax.js"></script>
</div>
</body>
</html>