<?php
$title = "Contatos Rossina Estamparia Digital";
$description = "Entre em contato agora para fazer orçamentos de camisas , tecidos ou serviços têxteis";
include_once("partial/header.php")
?>
<style>
    input,
    textarea {
        padding: 10px;
        display: block;
        width: 100%;
    }
    label{
        color: #069; font-size: 1em
    }
    ::-webkit-input-placeholder {
        color: orange;
        font: 12px verdana, arial, sans-serif;
    }

    :-moz-placeholder {
        color: orange;
        font: 12px verdana, arial, sans-serif;
    }

    ::-moz-placeholder {
        color: orange;
        font: 12px verdana, arial, sans-serif;
    }

    :-ms-input-placeholder {
        color: orange;
        font: 12px verdana, arial, sans-serif;
    }
</style>
<div class="callout">
    <div id="contatos"></div>
    <div class="row small-up-1 medium-up-2 large-up-1 topo-logo">
        <h1 style="font-size: 1.3em; color: orangered; text-align: center;">
            Aqui você enconta nossos contatos <br>
            Você pode preencher o formulario abaixo ou <a href="form.php" style="text-decoration: underline"> agendar uma visita na fábrica. </a> <br>
            Aqui você encontra nossos <a href="#contact" style="text-decoration: underline">telefones</a> , <a href="#contact" style="text-decoration: underline"> email</a> e <a href="#contact" style="text-decoration: underline">skype</a>  <br>
            Escolha a melhor forma de contato
        </h1>
        <h2 style="font-size: 1.3em; color: #069; text-align: center;"> Preencha o formulário com o máximo de informação para lhe oferecer um melhor atendimento</h2>
        <div class="column">
            <form action="mail-contato.php" method="post" class="row" id="contatoForm">
                <div class="large-12 columns">
                    <label for="Nome" style="">Nome
                        <input type="text" placeholder="seu nome" name="Nome" id="Nome" required>
                    </label>
                    <label>Email
                        <input type="text" placeholder="seu email" name="Email" id="Email" required>
                    </label>
                    <label>Telefone ou celular
                        <input type="text" placeholder="seu telefone ou celular" name="Fone" id="Fone" required>
                    </label>
                    <hr>
                    <legend>Você é uma pessoa do tipo ?</legend>
                    <input type="radio" name="Pessoa" value="Pessoa Física" id="inlineRadio12"><label for="inlineRadio12">Pessoa Física</label><br>
                    <input type="radio" name="Pessoa" value="Pessoa Jurídica" id="inlineRadio11"><label for="inlineRadio11">Pessoa Jurídica</label><br>
                    <br>
                </div>
                <br>
<!--                <div class="large-12 columns">-->
<!--                    <hr>-->
<!--                    <legend>Qual tipo o tipo de atendimeto que você deseja ?</legend>-->
<!--                    <input name="Atendimento[]" id="checkbox1" value="Camisas" type="checkbox"><label for="checkbox1">Camisas.</label><br>-->
<!--                    <input name="Atendimento[]" id="checkbox2" value="Tecidos estampados ou lisos" type="checkbox"><label for="checkbox2">Tecidos estampados ou lisos.</label><br>-->
<!--                    <input name="Atendimento[]" id="checkbox3" value="Serviços de estamparia em geral" type="checkbox"><label for="checkbox3">Serviços de estamparia em geral. (metro corrido, silk digital ...).</label><br>-->

<!--                    <input name="Atendimento[]" id="checkbox4" value="Tenho site ou ecommerce " type="checkbox">-->
<!--                    <label for="checkbox4">Marque aqui se - Você tem site ou ecommerce no ar ?</label><br>-->
<!---->
<!--                    <input name="Atendimento[]" id="checkbox5" value="Tenho loja física " type="checkbox">-->
<!--                    <label for="checkbox5">Marque aqui se - Você tem loja física ?</label><br>-->
<!---->
<!--                    <input name="Atendimento[]" id="checkbox6" value="Tenho site e loja física " type="checkbox">-->
<!--                    <label for="checkbox6">Marque aqui se - Você tem loja física e site ?</label><br>-->
<!---->
<!--                    <input name="Atendimento[]" id="checkbox7" value="Estou iniciando ou pesquisando um novo negócio" type="checkbox">-->
<!--                    <label for="checkbox7">Marque aqui se - Você esta iniciando ou pesquisando um novo negócio ?</label><br>-->
<!---->
<!--                    <input name="Atendimento[]" id="checkbox8" value="Estou iniciando um novo negócio na área téxtil" type="checkbox">-->
<!--                    <label for="checkbox8">Marque aqui se - Você esta iniciando um novo negócio na área téxtil ?</label><br>-->
<!--                    <br>-->
                    <hr>
<!--                </div>-->
                <div class="large-12 columns">
                    <label>
                        Escreva aqui sua mensagem.
                        <textarea name="Mensagem" id="messages" placeholder="mensagem" maxlength="500" rows="6" required></textarea>
                    </label>
                    <br>
                    <div class="g-recaptcha" data-theme="dark" data-sitekey="6LcIFSUTAAAAAH4qxvSTa3T1Faz0rZ8Fo9Y366iB"></div>
                    <br>
                </div>
                <br>
                <div id="retorno"></div>
                <div style="max-width: 300px; margin-left: 17px; .button2{background: #069}">
                    <input type="submit" name="Enviar" value="Clique aqui para enviar" class="success"/>
                </div>
            </form>
            <br>
            <h6 class="subheader" style="color: orangered" id="contact"><b><i>IMPORTANTE!</i></b><br>
                Caso você não receba nossa resposta em 5 dias úteis pelo email, verifique sua caixa de spam (lixo eletrônico, quarentena, não solicitadas) ela pode ter entrado lá por equivoco de seu provedor.
                Garanta o recebimento de nossos emails marcando-os como não spam (anti-spam, não é lixo eletrônico, autorizar email, e-mail confiável).
            </h6>
            <br>
            <hr>
        </div>
    </div>
    <div class="row small-up-1 medium-up-2 large-up-4 topo-logo">
        <div class="column callout success2">
            <div></div>
            <h3 class="text-center color-branco"><i>
                <a href="tel:21-3245-9607"><img src="images/icons/telefone.png" width="123"></i></a> <br>
                <a href="tel:21-3245-9607">(21) 3245-9607</a> /
                <a href="tel:21-2602-7536">2602-7536</a>
            </h3>
        </div>

        <div class="column callout warning2">
            <h3 class="text-center"><i><a href="mailto:contato@rossinaestamparia.com.br"><img src="images/icons/email-icon.png" width="100"></i></a><br><a href="mailto:contato@rossinaestamparia.com.br"> contato@rossinaestamparia.com.br</a></h3>
        </div>
        <div class="column callout alert2">
            <h3 class="text-center"><i><a class="iframe" href="form.php"><img src="images/icons/calendar-icon.png" width="100"></i></a><br><a class="iframe" href="form.php"> Agendar Visita</a></h3>
        </div>
        <div class="column callout primary2">
            <h3 class="text-center"><a href="skype:Rossinaestamparia"><img src="images/icons/skype.png" width="100"></i></a><br> <a href="skype:Rossinaestamparia">Rossinaestamparia</a></h3>
        </div>
    </div>
    <div class="row">
        <h4 class="text-center subheader" style="color: #FFF">.</h4>
        <h4 class="text-center subheader">Atendemos de segunda a sexta de 8:00 as 17:00 hrs<br>
            Entregamos via Correios e Metar Logística
        </h4>
        <br>
        <h3 class="text-center subheader">Uma empresa 100% Brasileira
            <img src="images/brasil.jpg" width="30" alt="" title="">
            100% Ecologicamente correto
            <img src="images/ecologicamente-correto.jpg" width="30" alt="" title="">
        </h3>
    </div>
</div>
<div class="row small-up-1 medium-up-1 large-up-2">
    <br>
    <div class="column">
        <ul class="menu subheader" style="font-weight: 700; font-size: 15px">
            <h5 class="titulo" style="text-decoration: underline">Contatos da Empresa</h5>
            <li><span style="color: #0b0b0b">Telefones:</span> (21) 3245-9607 / (21) 2602-7536 <br>
                <span style="color: #0b0b0b">Skype:</span>  Rossina Estamparia <br>
                <span style="color: #0b0b0b">Email:</span> contato@rossinaestamparia.com.br
            </li><br>
            <h5 class="titulo" style="text-decoration: underline">Dados da Empresa</h5>
            <li>NITISILK INDUSTRIA E COMERCIO DE ROUPAS LTDA - EPP<br>
                <span style="color: #0b0b0b">Endereço:</span> Avenida Presidente Roosevelt, 130 parte<br>
                Vista Alegre - São Gonçalo <br>
                Estado: Rio de Janeiro <br>
                Cep: 24722-070<br>
                CNPJ: 05.035.305/0001-52</li>
        </ul>
    </div>
    <div class="column">
        <a class="map" href="https://www.google.com/maps/embed?pb=!1m0!3m2!1spt-BR!2sbr!4v1452773759969!6m8!1m7!1sqrySgW9KPUZygdms6lJ9sA!2m2!1d-22.80565379364644!2d-42.96868425203316!3f111.32701882664166!4f-17.417897541748104!5f0.7820865974627469"
           style="border:0" ><img src="images/maps-rossina-estamparia-digital.jpg"></a><br><br>
        <span class="text-center" style="color: #FF0039; text-decoration: underline; font-weight: bold"><i class="fi-arrow-up"></i> clique na imagem acima para ver o ponto de referência no google-maps</span>
    </div>
</div>
<?php include("partial/footer.php") ?>
