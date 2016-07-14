<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Formulario de Visita</title>
        <link rel="stylesheet" href="components/jquery-ui/themes/blitzer/jquery-ui.min.css" />
        <link rel="stylesheet" href="components/normalize-css/normalize.css">
        <link rel="stylesheet" href="components/app.css">
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
                            <li><a href="silk-digital.php"><strong>Silk Digital</strong> </a></li>
                            <li><a href="videos-calandra-plotter-kornit-digital.php"><strong>Vídeos</strong> </a></li>
                            <li><a href="form.php"><strong>Agendar Visita</strong></a></li>
                            <li><a href="index.php#contatos"><strong>Contatos</strong></a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <form action="mail.php" method="post" class="form-group corpo" id="agendaForm">
                <h1 class="text-center"><strong>Agende sua Visita</strong></h1>
                <h4 class="text-center alert-warning preencher"><strong>Favor preeencher todos os campos</strong></h4>
                <div class="form-group">
                    <label for="Nome">Nome Completo:</label>
                    <input type="text" name="Nome" id="Nome"  class="form-control" placeholder="seu nome completo" required/>
                </div>
                <div class="medium-5 columns labelade">
                    <label for="gender" class="error">Você é uma pessoa do tipo </label><br>
                    <label class="radio-inline">
                        <input type="radio" name="Pessoa" id="inlineRadio11" value="Física CPF">Física CPF
                    </label><br>
                    <label class="radio-inline">
                        <input type="radio" name="Pessoa" id="inlineRadio12" value="Pessoa Jurídica CNPJ">Pessoa Jurídica CNPJ
                    </label><br>
                </div>
                <br>
                <div class="form-group">
                    <label for="Email">E-mail:</label>
                    <input type="text" name="Email" id="Email" class="form-control" placeholder="seu email" required/>
                </div>
                <div class="form-group">
                    <label for="Fone">Telefone:</label>
                    <input type="text" name="Fone" class="form-control" id="Fone" placeholder="somente números com o ddd tudo junto"/>
                </div>
                <div class="form-group">
                    <label for="Celular">Celular:</label>
                    <input type="text" name="Celular" id="Celular" class="form-control" placeholder="somente número com o ddd tudo junto" required/>
                </div>
                <div class="form-group">
                    <label for="Celular">Visitas de <i>SEGUNDA a SEXTA</i>. Não atendemos aos DOMINGOS</label>
                    <input type="text" name="DiaSemana" id="calendario" class="form-control" placeholder="escolha uma data de SEGUNDA a SEXTA" required="">
                </div>
                <div class="medium-5 columns labelade">
                    <label for="gender" class="error">Seleciona um horário de <i>SEGUNDA a SEXTA</i></label><br>
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
                <br><br>
                <div class="form-group">
                    <label for="Celular">Visitas aos <i>SÀBADOS.</i> Não atendemos aos DOMINGOS</label>
                    <input type="text" name="DiaSabado" id="calendario2" class="form-control" placeholder="escolha uma data no SÀBADO" required="">
                </div>
                <div class="medium-5 columns labelade">
                    <label for="gender" class="error">Seleciona um horário aos <i>SÀBADOS</i></label><br>
                    <label class="radio-inline">
                        <input type="radio" name="Sabados" id="inlineRadio2" value="de 8:00 as 09:30">de 8:00 as 09:30
                    </label><br>
                    <label class="radio-inline">
                        <input type="radio" name="Sabados" id="inlineRadio2" value="de 09:30 as 11:00">de 09:30 as 11:00
                    </label><br>
                    <label class="radio-inline">
                        <input type="radio" name="Sabados" id="inlineRadio2" value="de 11:00 as 12:30">de 11:00 as 12:30
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
                <div class="g-recaptcha" data-theme="dark" data-sitekey="6LcIFSUTAAAAAH4qxvSTa3T1Faz0rZ8Fo9Y366iB"></div>
                <br>
                <input type="submit" name="Enviar" value="Enviar" class="btn btn-primary btn-lg submit buttons"/>
                <hr>
                <button type="button" class="btn btn-default btn-lg"><a href="index.php">Voltar - Home</a></button>
            </form>
            <script src="dist/js/form.js"></script>
            <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
        </div>
    </body>
</html>