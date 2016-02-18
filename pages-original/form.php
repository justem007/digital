<?php require_once "recaptchalib.php"; ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Formulario de Visita</title>
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="components/normalize-css/normalize.css">
    <link rel="stylesheet" href="components/app.css">
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</head>
<body>
<div class="container-fluid">
    <form action="mail.php" method="post" class="form-group" id="agendaForm">
        <h1 class="text-center">Agende sua Visita</h1>
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
        <div class="form-group">
            <label for="Celular">Celular:</label>
            <input type="text" name="Celular" id="Celular" class="form-control" placeholder="seu celular" required/>
        </div>
        <br>
        <div class="medium-5 column labelade ">
            <label for="gender" class="error">Seleciona um dia dessa semana</label><br>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio1" value="domingo">Domingo
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio2" value="segunda">Segunda
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio3" value="terça">Terça
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio4" value="quarta">Quarta
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio5" value="quinta">Quinta
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio6" value="sexta">Sexta
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="DiaSemana" id="inlineRadio7" value="sábado">Sábado
            </label>
        </div>
        <hr>
        <div class="medium-5 columns labelade">
            <label for="gender" class="error">Seleciona um horário</label><br>
            <label class="radio-inline">
                <input type="radio" name="Turno" id="inlineRadio1" value="de 8:00 as 10:00">de 8:00 as 10:00
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="Turno" id="inlineRadio2" value="de 10:00 as 12:00">de 10:00 as 12:00
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="Turno" id="inlineRadio3" value="de 13:00 as 15:00">de 13:00 as 15:00
            </label><br>
            <label class="radio-inline">
                <input type="radio" name="Turno" id="inlineRadio4" value="de 15:00 as 17:00">de 15:00 as 17:00
            </label>
        </div>
        <br>
        <hr>
        <div class="medium-5 columns labelade">
            <label for="gender" class="error">Quais os produtos você deseja obter atendimento ?</label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="logistica" value="logistica">logística.
            </label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="camisetas" value="camisetas">camisetas.
            </label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="revenda-tecidos" value="revenda de tecidos">revenda de tecidos.
            </label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="comprar-tecidos-estampas" value="comprar de tecidos ou estampas">compra de tecidos ou estampas.
            </label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="servicos-terceirizacao" value="serviços e terceirização">serviços e terceirização.
            </label>
        </div>
        <br><br>
        <div class="columns input txt">
            <label for="Mensagem">Mensagem: </label>
            <textarea name="Mensagem" rows="4" cols="80" class="form-control">
            </textarea>
        </div>
        <br>
        <div id="retorno"></div>
        <br>
        <div class="g-recaptcha" data-theme="dark" data-sitekey="6LcbcRgTAAAAAJtERGYPRtnAZLAfPm1byf1hZ5UG"></div>
        <br>
        <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary btn-lg submit buttons"/>
        <hr>
        <button type="button" class="btn btn-default btn-lg visible-xs"><a href="index.php">Voltar - Home</a></button>
        <br>
    </form>
    <script src="dist/form.js"></script>
</div>
</body>
</html>