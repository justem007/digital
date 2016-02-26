<?php require_once "recaptchalib.php"; ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Formulario de Visita</title>
    <link rel="stylesheet" href="components/jquery-ui/themes/blitzer/jquery-ui.min.css" />
    <!--    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="components/normalize-css/normalize.css">
    <link rel="stylesheet" href="components/app.css">
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .block {
            display: block;
        }
        form.cmxform label.error {
            display: none;
        }
    </style>
</head>
<body>
<!-- Fixed navbar -->

<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand menu" href="index.php"><img style="" src="images/logo-rossina.png" width="160" alt="logo rossina estamparia digital"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse text-uppercase menu2">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"><strong>home</strong></a></li>
                    <li><a href="camisetas.php"><strong>Camisetas</strong></a></li>
                    <li><a href="tecidos.php"><strong>Tecidos</strong></a></li>
                    <li><a href="servicos.php"><strong>Serviços</strong></a></li>
                    <li><a href="videos-calandra-plotter-kornit-digital.php"><strong>Vídeos</strong></a></li>
                    <li><a href="estampas-tecidos.php"><strong>Estampas-Tecidos</strong></a></li>
                    <li><a href="estampas-camisetas.php"><strong>Estampas-Camisetas</strong></a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    <form action="mail.php" method="post" class="form-group corpo" id="agendaForm">
        <h1 class="text-center"><strong>Agende sua Visita</strong></h1>
        <h4 class="text-center alert-success preencher"><strong>Favor preeencher todos os campos</strong></h4>
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
            <input type="text" name="Fone" class="form-control" id="Fone" placeholder="(99)99999-9999"/>
        </div>
        <div class="form-group">
            <label for="Celular">Celular:</label>
            <input type="text" name="Celular" id="Celular" class="form-control" placeholder="(99)99999-9999" required/>
        </div>
        <div class="form-group">
            <label for="Celular">Selecione dia e mês. Visitas todos os dias e fins de semana.</label>
            <input type="text" name="DiaSemana" id="calendario" class="form-control" placeholder="escolha a data" required="">
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
        <button type="button" class="btn btn-default btn-lg"><a href="index.php">Voltar - Home</a></button>
    </form>
    <script src="components/jquery-validation/lib/jquery-1.9.1.js"></script>
    <script src="components/jquery-ui/jquery-ui.js"></script>
    <script src="components/jquery-validation/dist/jquery.validate.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="dist/js/ajax.js"></script>
<!--    <script src="dist/js/form.js"></script>-->
<!--    <script type="text/javascript">-->
<!--        $('.phone').mask('(21)0000-0000');-->
<!--        $('.phone2').mask('(21)0000-0000');-->
<!--    </script>-->
</div>
</body>
</html>