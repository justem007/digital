<?php require_once "recaptchalib.php"; ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Formulario de Visita</title>
    <link rel="stylesheet" href="components/jquery-ui/themes/blitzer/jquery-ui.min.css"/>
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="components/normalize-css/normalize.css">
    <link rel="stylesheet" href="components/pickadate/lib/themes/classic.css">
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
        <div class="form-group">
            <label for="Celular">Selecione dia e mês. Visitas todos os dias e fins de semana.</label>
            <input type="text" name="DiaSemana" id="calendario" class="form-control" placeholder="escolha a data">
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
        <hr>
        <div class="medium-5 columns labelade">
            <label for="gender" class="error">Quais os produtos você deseja obter atendimento ?</label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="logistica" value="logistica">logística.
            </label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="camisetas" value="camisetas ou revendas">camisetas ou revendas.
            </label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="revenda-tecidos" value="revenda de tecidos">revenda de tecidos.
            </label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="comprar-tecidos-estampas" value="comprar tecidos ou estampas">compra de tecidos ou estampas.
            </label><br>
            <label class="checkbox-inline">
                <input type="checkbox" name="Atendimento[]" id="servicos-terceirizacao" value="serviços e terceirização">serviços e terceirização.
            </label>
        </div>
        <br>
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
        <button type="button" class="btn btn-default btn-lg visible-sm"><a href="index.php">Voltar - Home</a></button>
    </form>
    <script src="dist/form.js"></script>
</div>
</body>
</html>