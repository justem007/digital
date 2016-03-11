<?php $title = ""; $description = ""; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="dist/bundle.css" type="text/css">
    <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" type="text/css">
    <link rel="stylesheet" href="components/normalize-css/normalize.css" type="text/css">
    <link rel="stylesheet" href="components/jquery-ui/themes/sunny/jquery-ui.min.css" type="text/css">
    <style>
        #meuMenu {
            background:#069;
            width:100%;
            padding:5px;
            margin-top:1px;
            z-index: 100;
        }
        .fixar {
            position:fixed;
            margin-top: 0px !important;
        }
        .none-solid{
            border:none;
        }
    </style>
</head>
<body class="fadeIn">
<nav id="meuMenu">
    <div id='cssmenu'>
        <ul>
            <li class="show-for-medium"><a href="index.php"><img src="images/logo-rossina.png" width="150"></a></li>
            <li><a href="index.php"><i class="fi-home fi-grande2"></i></a></li>
            <li class='active'>
                <a href="camisetas.php"><i class="fi-male-female fi-grande2"></i> Camisas</a>
                <ul>
                    <li><a href="camisetas.php"><i class="fi-list"></i> Todas</a></li>
                    <li><a href="camisetas.php#camisetaA">Camiseta básica masculina - 100% algodão - 30.1</a></li>
                    <li><a href="camisetas.php#camisetaB">Camiseta básica masculina- 100% algodão - 26.1</a></li>
                    <li><a href="camisetas.php#camisetaC">Polo - Malha piquet - 50% poliéster/50% algodão</a></li>
                    <li><a href="camisetas.php#camisetaD">Polo - Malha piquet - 100% algodão</a></li>
                    <li><a href="camisetas.php#camisetaE">Camiseta Masculina - Malha 100% poliéster para sublimação</a></li>
                    <li><a href="camisetas.php#camisetaF">Camiseta Full Print - Malha 100% poliéster</a></li>
                    <li><a href="camisetas.php#camisetaG">Regata Masculina - Malha 100% algodão 30.1</a></li>
                    <li><a href="camisetas.php#camisetaH">Camisetas Infantil - Malha 100% algodão 30.1</a></li>
                    <li><a href="camisetas.php#camisetaI">Polos Feminina - Malha piquet 100% algodão 30.1</a></li>
                    <li><a href="camisetas.php#camisetaJ">Baby look - Malha 100% algodão 30.1</a></li>
                </ul>
            </li>
            <li>
                <a href="tecidos.php"><i class="fi-photo fi-grande2"></i> Tecidos</a>
                <ul>
                    <li><a href="tecidos.php"><i class="fi-list"></i> Tecidos - Todos</a></li>
                    <li><a href="tecidos.php#tecidoA">MicroFibra Pesada - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoB">MicroFibra Leve - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoC">Gloss Light - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoD">Crepe de Chine - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoE">Chiffon Classic - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoF">Oxford Strech - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoG">Malha Newprene - 90% poliéster/4%elastano</a></li>
                    <li><a href="tecidos.php#tecidoH">Ergonomic Flex - 92% poliéster/8%elastano</a></li>
                </ul>
            </li>
            <li>
                <a href="servicos.php"><i class="fi-paint-bucket fi-grande2"></i> Serviços</a>
                <ul>
                    <li><a href="servicos.php"><i class="fi-list"></i> Serviços - Todos</a></li>
                    <li><a href="servicos.php#servicoA">Impressão Digital em Tecidos de Poliéster ou Misturas</a></li>
                    <li><a href="servicos.php#servicoB">Impressão Digital Direta (DTG) MÁQUINA DIGITAL KORNIT </a></li>
                    <li><a href="servicos.php#servicoC">Reprodução e Arte Final de Estampas </a></li>
                    <li><a href="servicos.php#servicoD">Transferência Sublimática em Calandra ou Prensa</a></li>
                    <li><a href="servicos.php#servicoE">Transfer de Recorte</a></li>
                    <li><a href="servicos.php#servicoF">Impermeabilização e Tratamento de Tecidos</a></li>
                    <li><a href="servicos.php#servicoG">Impressão Sublimática em Fitas e Cadarços</a></li>
                    <li><a href="servicos.php#servicoH">Comunicação Visual / Banners</a></li>
                    <li><a href="servicos.php#servicoI">Tecidos para Decoração </a></li>
                </ul>
            </li>
            <!--    <li>-->
            <!--        <a href="logistica.php"><i class="fi-shopping-cart"></i> Logística</a>-->
            <!--        <ul>-->
            <!--            <li><a href="logistica.php"><i class="fi-list"></i> Logística - Todos</a></li>-->
            <!--            <li><a href="logistica.php#logisticaA">COMBO 01: RISCO ZERO COM LOGÍSTICA</a></li>-->
            <!--            <li><a href="logistica.php#logisticaB">COMBO 02: CONTROLE TOTAL COM LOGÍSTICA</a></li>-->
            <!--            <li><a class="importantes" href="logistica.php#logisticaC">INFORMAÇÕES IMPORTANTES</a></li>-->
            <!--        </ul>-->
            <!--    </li>-->
            <li>
                <ul class="menu menuli" data-dropdown-menu>
                    <li>
                        <ul>
                            <li><a href="estampas-tecidos.php"><i class="fi-list"></i> Estampas - Todas</a></li>
                            <li><a href="estampas-tecidos.php#estampaAA">Abstratos</a></li>
                            <li><a href="estampas-tecidos.php#estampaA">Animais</a></li>
                            <li><a href="estampas-tecidos.php#estampaB">Estrelas</a></li>
                            <li><a href="estampas-tecidos.php#estampaC">Floral</a></li>
                            <li><a href="estampas-tecidos.php#estampaD">Folhas</a></li>
                            <li><a href="estampas-tecidos.php#estampaE">Geométrico</a></li>
                            <li><a href="estampas-tecidos.php#estampaF">Lantejolas</a></li>
                            <li><a href="estampas-tecidos.php#estampaG">Paisagem</a></li>
                            <li><a href="estampas-tecidos.php#estampaH">Poa</a></li>
                            <li><a href="estampas-tecidos.php#estampaI">Tie Dye</a></li>
                        </ul>

                    </li>
                    <li><a href="estampas-camisetas.php"><i class="fi-page-multiple fi-grande2"></i> Estampas-camisetas</a></li>
                </ul>
            </li>
            <!--            <li><a href="logstica.php"><i class="fi-like fi-grande2"></i> logística</a></li>-->
            <li><a href="videos-calandra-plotter-kornit-digital.php"><i class="fi-play-video fi-grande2"></i> Vídeos</a></li>
            <li>
                <a href="estampas-tecidos.php"><i class="fi-page-multiple fi-grande2"></i> Estampas-tecidos</a>
                <ul>
                    <li><a href="estampas-tecidos.php"><i class="fi-list"></i> Estampas - Todas</a></li>
                    <li><a href="estampas-tecidos.php#estampaAA">Abstratos</a></li>
                    <li><a href="estampas-tecidos.php#estampaA">Animais</a></li>
                    <li><a href="estampas-tecidos.php#estampaB">Estrelas</a></li>
                    <li><a href="estampas-tecidos.php#estampaC">Floral</a></li>
                    <li><a href="estampas-tecidos.php#estampaD">Folhas</a></li>
                    <li><a href="estampas-tecidos.php#estampaE">Geométrico</a></li>
                    <li><a href="estampas-tecidos.php#estampaF">Lantejolas</a></li>
                    <li><a href="estampas-tecidos.php#estampaG">Paisagem</a></li>
                    <li><a href="estampas-tecidos.php#estampaH">Poa</a></li>
                    <li><a href="estampas-tecidos.php#estampaI">Tie Dye</a></li>
                </ul>

            </li>
            <li><a href="estampas-camisetas.php"><i class="fi-page-multiple fi-grande2"></i> Estampas-camisetas</a></li>
        </ul>
    </div>
</nav>
<br>
<div class="large-12 medium-12 small-12">
    <h6 class="text-center aviso">Atendemos somente pessoas físicas e jurídicas que estão iniciando, produzam ou revendam produtos.
        <br>Não atendemos particulares <span class="consumidor">("consumidor final")</span> .</h6>
</div>
<div class="row">
    <h1 class="text-center subheader">Orçamento de camisetas e serviços de silk digital</h1>
    <p class="text-center subheader">
        Favor preencher o máximo de informação sobre o seu produto ou serviços de silk digital para que possamos te dar
        o melhor atendimento e retorno do seu pedido.
    </p>
</div>
<br>
<div class="large-12 medium-12 small-12">
    <fieldset>
        <legend class="subheader">Dados pessoais</legend>
        <div class="small-up-1 medium-up-1 large-up-1">
            <div class="column">
                <label>Você é uma pessoa ? *</label>
                <input type="radio" name="Turno" id="inlineRadio2" value="juridica"> Jurídica <br>
                <input type="radio" name="Turno" id="inlineRadio3" value="fisica"> Física
                <br>

                <label>Nome completo*
                    <input type="text" placeholder="seu nome" maxlength="100" minlength="5">
                </label>

                <label for="">Email *
                    <input type="text" placeholder="seu email">
                </label>

                <label for="">Contatos *
                    <input type="text" placeholder="celular ou telefone somente números com o ddd tudo junto">
                </label>

                <label for="">Seu CEP
                    <input type="text" placeholder="seu cep, somente números">
                </label>
            </div>
        </div>
    </fieldset>
    <br>
        <h3 class="subheader text-center">Orçamento do produto</h3>
    <br>
    <div id="accordion">
        <h3 class="text-center titulo">Camisa 30.1 cardada 26 cores</h3>
        <div>
            <h3 class="titulo text-center">Camisa 30.1 cardada 26 cores</h3>
            <label class="titulo text-center">Escolha o tamanho, quantidade, cor, área de impressão e etiquetas.</label>
            <fieldset>
                <label class="titulo">Setup de impressão das tintas</label>
                <label class="radio-inline">
                    <input type="radio" name="setup" value="cmyk"> setup tinta cmyk
                </label>
                <label class="radio-inline">
                    <input type="radio" name="setup" value="branco-cmyk"> setup tinta branca + cmyk
                </label>
                <legend class="scheduler-border"> </legend>
                <table class="stack">
                    <thead class="subheader">
                    <tr>
                        <th></th>
                        <th width="80"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <p class="titulo">tamanho</p>
                            <select>
                                <option value="">p</option>
                                <option value="">m</option>
                                <option value="">g</option>
                                <option value="">gg</option>
                                <option value="">xxg</option>
                            </select>
                        </td>
                        <td>
                            <p class="titulo">qtd</p>
                            <input type="number" value="0" min="1"/>
                        </td>
                        <td>
                            <p class="titulo">cor</p>
                            <select>
                                <option value="">branca</option>
                                <option value="">preta</option>
                                <option value="">verde musgo</option>
                                <option value="">verde pistache</option>
                                <option value="">verde bandeira</option>
                                <option value="">azul céu</option>
                                <option value="">azul turquesa</option>
                                <option value="">azul cyan</option>
                                <option value="">azul celeste</option>
                                <option value="">lilás</option>
                                <option value="">rosa</option>
                                <option value="">carmin</option>
                                <option value="">vermelho</option>
                                <option value="">vinho</option>
                                <option value="">cenoura</option>
                                <option value="">ouro</option>
                                <option value="">amarelo canário</option>
                                <option value="">amarelo claro</option>
                                <option value="">bege</option>
                                <option value="">bronze</option>
                                <option value="">marrom</option>
                                <option value="">ardósia</option>
                                <option value="">chumbo</option>
                                <option value="">cinza mescla</option>
                            </select>
                        </td>
                        <td>
                            <p class="titulo">frente</p>
                            <select>
                                <optgroup>
                                    <option>sem frente</option>
                                    <option>A4 (21 x 29,7) </option>
                                    <option>A3 (29,7 x 42)</option>
                                    <option>35cm x 45cm</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">costas</p>
                            <select>
                                <optgroup>
                                    <option>sem costas</option>
                                    <option>A4 (21 x 29,7) </option>
                                    <option>A3 (29,7 x 42)</option>
                                    <option>35cm x 45cm</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">manga-D</p>
                            <select>
                                <optgroup>
                                    <option>sem manga-D</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">manga-E</p>
                            <select>
                                <optgroup>
                                    <option>sem manga-E</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">peito</p>
                            <select>
                                <optgroup>
                                    <option>sem peito</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <div class="column">
                    <h3 class="titulo">Deseja acrescentar etiqueta junto ao orçamento? Escolha abaixo.</h3>
                    <p class="subheader">Se você escolher junto a etiqueta ela e um padrão de etiqueta com àrea máxima 48mm x 60mm,
                       sendo impressa com o seus dados ( cpf ou cnpj ).</p>
                    <label class="checkbox-inline">
                        <input type="checkbox">etiqueta avesso costas transfer <br>
                        <input type="checkbox">sem etiqueta transfer
                    </label>
                    <img src="images/etiqueta-Mbrancav2-para-web.jpg" width="220" alt="">
                    <img src="images/etiqueta-Mpt-para-web.jpg" width="220" alt="">
                    <br>
                    <br>
                    <h3 class="titulo">Ou. Enviar sua etiqueta personalizada? Área máxima 48mm x 60mm
                    </h3>
                    <input type="file"/>
                    <br><br>
                    <legend>Observação</legend>
                    <label for="">Escreva sua mensagem</label>
                            <textarea
                                class="form-control"
                                rows="5"
                                name="mensagem"
                                ng-model="main.mensagem"
                                ng-minlength="5"
                                ng-maxlength="300" >
                            </textarea>
            </fieldset>
        </div>
        <h3 class="text-center titulo">Camisa 26.1 cardada 6 cores</h3>
        <div>
            <h3 class="titulo text-center">Camisa 26.1 cardada 6 cores</h3>
            <label class="titulo text-center">Escolha o tamanho, quantidade, cor, área de impressão e etiquetas.</label>
            <fieldset>
                <label class="titulo">Setup de impressão das tintas</label>
                <label class="radio-inline">
                    <input type="radio" name="setup" value="cmyk"> setup tinta cmyk
                </label>

                <label class="radio-inline">
                    <input type="radio" name="setup" value="branco-cmyk"> setup tinta branca + cmyk
                </label>
                <legend class="scheduler-border"> </legend>
                <table class="stack">
                    <thead class="subheader">
                    <tr>
                        <th></th>
                        <th width="80"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <p class="titulo">tamanho</p>
                            <select>
                                <option value="">p</option>
                                <option value="">m</option>
                                <option value="">g</option>
                                <option value="">gg</option>
                                <option value="">xxg</option>
                            </select>
                        </td>
                        <td>
                            <p class="titulo">qtd</p>
                            <input type="number" value="0" min="1"/>
                        </td>
                        <td>
                            <p class="titulo">cor</p>
                            <select>
                                <option value="">branca</option>
                                <option value="">preta</option>
                                <option value="">verde musgo</option>
                                <option value="">verde pistache</option>
                                <option value="">verde bandeira</option>
                                <option value="">azul céu</option>
                                <option value="">azul turquesa</option>
                                <option value="">azul cyan</option>
                                <option value="">azul celeste</option>
                                <option value="">lilás</option>
                                <option value="">rosa</option>
                                <option value="">carmin</option>
                                <option value="">vermelho</option>
                                <option value="">vinho</option>
                                <option value="">cenoura</option>
                                <option value="">ouro</option>
                                <option value="">amarelo canário</option>
                                <option value="">amarelo claro</option>
                                <option value="">bege</option>
                                <option value="">bronze</option>
                                <option value="">marrom</option>
                                <option value="">ardósia</option>
                                <option value="">chumbo</option>
                                <option value="">cinza mescla</option>
                            </select>
                        </td>
                        <td>
                            <p class="titulo">frente</p>
                            <select>
                                <optgroup>
                                    <option>sem frente</option>
                                    <option>A4 (21 x 29,7) </option>
                                    <option>A3 (29,7 x 42)</option>
                                    <option>35cm x 45cm</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">costas</p>
                            <select>
                                <optgroup>
                                    <option>sem costas</option>
                                    <option>A4 (21 x 29,7) </option>
                                    <option>A3 (29,7 x 42)</option>
                                    <option>35cm x 45cm</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">manga-D</p>
                            <select>
                                <optgroup>
                                    <option>sem manga-D</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">manga-E</p>
                            <select>
                                <optgroup>
                                    <option>sem manga-E</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">peito</p>
                            <select>
                                <optgroup>
                                    <option>sem peito</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="column">
                    <label class="checkbox-inline">
                        <input type="checkbox">etiqueta avesso costas transfer <br>
                        <input type="checkbox">sem etiqueta transfer
                    </label>
                    <img src="images/etiqueta-Mbrancav2-para-web.jpg" width="220" alt="">
                    <img src="images/etiqueta-Mpt-para-web.jpg" width="220" alt="">
                    <br>
                    <legend class="titulo">Enviar etiqueta personalizada? Área máxima 48mm x 60mm
                    </legend>
                    <input type="file"/>
                    <br><br>
                    <legend>Observação</legend>
                    <label for="">Escreva sua mensagem</label>
                            <textarea
                                class="form-control"
                                rows="5"
                                name="mensagem"
                                ng-model="main.mensagem"
                                ng-minlength="5"
                                ng-maxlength="300" >
                            </textarea>
            </fieldset>
        </div>
        <h3 class="text-center titulo">Polo 100% algodão 19 cores.</h3>
        <div>
            <h3 class="titulo text-center">Polo 100% algodão 19 cores.</h3>
            <label class="titulo text-center">Escolha o tamanho, quantidade, cor, área de impressão e etiquetas.</label>
            <fieldset>
                <label class="titulo">Setup de impressão das tintas</label>
                <label class="radio-inline">
                    <input type="radio" name="setup" value="cmyk"> setup tinta cmyk
                </label>

                <label class="radio-inline">
                    <input type="radio" name="setup" value="branco-cmyk"> setup tinta branca + cmyk
                </label>
                <legend class="scheduler-border"> </legend>
                <table class="stack">
                    <thead class="subheader">
                    <tr>
                        <th></th>
                        <th width="80"></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <p class="titulo">tamanho</p>
                            <select>
                                <option value="">p</option>
                                <option value="">m</option>
                                <option value="">g</option>
                                <option value="">gg</option>
                                <option value="">xxg</option>
                            </select>
                        </td>
                        <td>
                            <p class="titulo">qtd</p>
                            <input type="number" value="0" min="1"/>
                        </td>
                        <td>
                            <p class="titulo">cor</p>
                            <select>
                                <option value="">branca</option>
                                <option value="">preta</option>
                                <option value="">verde musgo</option>
                                <option value="">verde pistache</option>
                                <option value="">verde bandeira</option>
                                <option value="">azul céu</option>
                                <option value="">azul turquesa</option>
                                <option value="">azul cyan</option>
                                <option value="">azul celeste</option>
                                <option value="">lilás</option>
                                <option value="">rosa</option>
                                <option value="">carmin</option>
                                <option value="">vermelho</option>
                                <option value="">vinho</option>
                                <option value="">cenoura</option>
                                <option value="">ouro</option>
                                <option value="">amarelo canário</option>
                                <option value="">amarelo claro</option>
                                <option value="">bege</option>
                                <option value="">bronze</option>
                                <option value="">marrom</option>
                                <option value="">ardósia</option>
                                <option value="">chumbo</option>
                                <option value="">cinza mescla</option>
                            </select>
                        </td>
                        <td>
                            <p class="titulo">frente</p>
                            <select>
                                <optgroup>
                                    <option>sem frente</option>
                                    <option>A4 (21 x 29,7) </option>
                                    <option>A3 (29,7 x 42)</option>
                                    <option>35cm x 45cm</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">costas</p>
                            <select>
                                <optgroup>
                                    <option>sem costas</option>
                                    <option>A4 (21 x 29,7) </option>
                                    <option>A3 (29,7 x 42)</option>
                                    <option>35cm x 45cm</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">manga-D</p>
                            <select>
                                <optgroup>
                                    <option>sem manga-D</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">manga-E</p>
                            <select>
                                <optgroup>
                                    <option>sem manga-E</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                        <td>
                            <p class="titulo">peito</p>
                            <select>
                                <optgroup>
                                    <option>sem peito</option>
                                    <option>10cm x 15cm</option>
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="file">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="column">
                    <label class="checkbox-inline">
                        <input type="checkbox">etiqueta avesso costas transfer <br>
                        <input type="checkbox">sem etiqueta transfer
                    </label>
                    <img src="images/etiqueta-Mbrancav2-para-web.jpg" width="220" alt="">
                    <img src="images/etiqueta-Mpt-para-web.jpg" width="220" alt="">
                    <br>
                    <legend class="titulo">Enviar etiqueta personalizada? Área máxima 48mm x 60mm
                    </legend>
                    <input type="file"/>
                    <br><br>
                    <legend>Observação</legend>
                    <label for="">Escreva sua mensagem</label>
                            <textarea
                                class="form-control"
                                rows="5"
                                name="mensagem"
                                ng-model="main.mensagem"
                                ng-minlength="5"
                                ng-maxlength="300" >
                            </textarea>
            </fieldset>
        </div>
    </div>
    <br>
    <fieldset class="large-12 column">
        <legend>Etiqueta padrão INMETRO ?</legend>

        <div class="column">
            <label class="checkbox-inline">
                <input type="checkbox">etiqueta interna p/costurar <br>
                <input type="checkbox">sem etiqueta interna p/costurar
            </label>
            <img src="images/etiqueta-interna-para-web.jpg" width="400" alt="">
        </div>
    </fieldset>
</div>

<hr class="hr-linha">
<div class="row small-up-1 medium-up-2 large-up-4 topo-logo">
    <div class="column">
        <h3 class="text-center"><i class="fi-telephone fi-grande"></i><br> <a href="tel:21-3245-9607">(21) 3245-9607</a> / <a href="tel:21-2602-7536">2602-7536</a></h3>
    </div>
    <div class="column">
        <h3 class="text-center"><i class="fi-book-bookmark fi-grande"></i><br><a class="iframe" href="form.php"> Agendar Visita</a></h3>
    </div>
    <div class="column">
        <h3 class="text-center"><i class="fi-mail fi-grande"></i><br> <a href="mailto:conatato@rossinaestamparia.com.br">contato@rossinaestamparia.com.br</a></h3>
    </div>
    <div class="column">
        <h3 class="text-center"><i class="fi-social-skype fi-grande"><br></i> <a href="skype:Rossina Estamparia"> Rossina Estamparia</a></h3>
    </div>
</div>

<div class="row column">
    <h5 class="text-center subheader">Atendemos de segunda a sexta de 8:00 as 17:00 hrs - Entregamos em todo Brasil</h5>
    <br>
    <h3 class="text-center subheader">Uma empresa 100% Brasileira
        <img src="images/brasil.jpg" width="30" alt="" title="">
        100% Ecologicamente correto
        <img src="images/ecologicamente-correto.jpg" width="30" alt="" title="ecologicamente correto">
    </h3>
</div>

<hr class="hr-linha">
<br>
<div class="row column">
    <h6 class="text-center aviso">Atendemos somente pessoas físicas e jurídicas que estão iniciando, produzam ou revendam produtos.
        <br>Não atendemos particulares <span class="consumidor">("consumidor final")</span> .</h6>
</div>
<br>
<div class="row small-up-1 medium-up-1 large-up-2">
    <div class="column">
        <ul class="menu subheader">
            <h5 class="titulo">Dados da Empresa</h5>
            <li class="text-center">
                Endereço: Avenida Presidente Roosevelt, 130 parte
            </li>
            Vista Alegre - São Gonçalo <br>
            Estado: Rio de Janeiro <br>
            Cep: 24722-070</li><br>
            <li>CNPJ: 05.035.305/0001-52</li><br>
            <h5 class="titulo">Contatos da Empresa</h5>
            <li>Telefones: (21) 3245-9607 / (21) 2602-7536 <br>
                Skype:  Rossina Estamparia <br>
                Email: contato@rossinaestamparia.com.br
            </li>
        </ul>
    </div>
    <div class="column">
        <a class="map" href="https://www.google.com/maps/embed?pb=!1m0!3m2!1spt-BR!2sbr!4v1452773759969!6m8!1m7!1sqrySgW9KPUZygdms6lJ9sA!2m2!1d-22.80565379364644!2d-42.96868425203316!3f111.32701882664166!4f-17.417897541748104!5f0.7820865974627469"
           style="border:0" ><img src="images/maps-rossina-estamparia-digital.jpg"></a>
    </div>
</div>
<div>
    <footer>
        <hr class="hr-linha">
        <!--    <h4 class="titulo text-bold text-center">Mapa do site</h4>-->
        <div class="row small-up-1 medium-up-2 large-up-4">
            <div class="column camisetas">
                <ul class="menu vertical">
                    <li class="buttonn"><a><i class="fi-arrow-down"></i> LINKS SITE <i class="fi-arrow-down"></i> </a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="camisetas.php">Camisas</a></li>
                    <li><a href="tecidos.php">Tecidos</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="logistica.php">Logística</a></li>
                    <li><a href="videos-calandra-plotter-kornit-digital.php">Vídeos</a></li>
                    <li><a href="estampas-tecidos.php">Estampas para tecidos</a></li>
                    <li><a href="estampas-camisetas.php">Estampas para camisetas</a></li>
                </ul>
            </div>
            <div class="column camisetas">
                <ul class="menu vertical">
                    <li class="buttonn"><a><i class="fi-arrow-down"></i> LINKS CAMISETAS <i class="fi-arrow-down"></i></a></li>
                    <li><a href="camisetas.php#camisetaA">Camiseta básica masculina - 100% algodão - 30.1</a></li>
                    <li><a href="camisetas.php#camisetaB">Camiseta básica masculina- 100% algodão - 26.1</a></li>
                    <li><a href="camisetas.php#camisetaC">Polo - Malha piquet - 50% poliéster/50% algodão</a></li>
                    <li><a href="camisetas.php#camisetaD">Polo - Malha piquet - 100% algodão</a></li>
                    <li><a href="camisetas.php#camisetaE">Camiseta Masculina - Malha 100% poliéster para sublimação</a></li>
                    <li><a href="camisetas.php#camisetaF">Camiseta Full Print - Malha 100% poliéster</a></li>
                    <li><a href="camisetas.php#camisetaG">Regata Masculina - Malha 100% algodão 30.1</a></li>
                    <li><a href="camisetas.php#camisetaH">Camisetas Infantil - Malha 100% algodão 30.1</a></li>
                    <li><a href="camisetas.php#camisetaI">Polos Feminina - Malha piquet 100% algodão 30.1</a></li>
                    <li><a href="camisetas.php#camisetaJ">Baby look - Malha 100% algodão 30.1</a></li>
                </ul>
            </div>
            <div class="column camisetas">
                <ul class="menu vertical">
                    <li class="buttonn"><a><i class="fi-arrow-down"></i> LINKS TECIDOS <i class="fi-arrow-down"></i></a></li>
                    <li><a href="tecidos.php#tecidoA">MicroFibra Pesada - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoB">MicroFibra Leve - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoC">Gloss Light - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoD">Crepe de Chine - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoE">Chiffon Classic - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoF">Oxford Strech - 100% poliéster</a></li>
                    <li><a href="tecidos.php#tecidoG">Malha Newprene - 90% poliéster/4%elastano</a></li>
                    <li><a href="tecidos.php#tecidoH">Ergonomic Flex - 92% poliéster/8%elastano</a></li>
                </ul>
            </div>
            <div class="column camisetas">
                <ul class="menu vertical">
                    <li class="buttonn"><a><i class="fi-arrow-down"></i> LINKS SERVIÇOS <i class="fi-arrow-down"></i></a></li>
                    <li><a href="servicos.php#servicoA">Impressão Digital em Tecidos de Poliéster ou Misturas</a></li>
                    <li><a href="servicos.php#servicoB">Impressão Digital Direta (DTG) MÁQUINA DIGITAL KORNIT </a></li>
                    <li><a href="servicos.php#servicoC">Reprodução e Arte Final de Estampas </a></li>
                    <li><a href="servicos.php#servicoD">Transferência Sublimática em Calandra ou Prensa</a></li>
                    <li><a href="servicos.php#servicoE">Transfer de Recorte</a></li>
                    <li><a href="servicos.php#servicoF">Impermeabilização e Tratamento de Tecidos</a></li>
                    <li><a href="servicos.php#servicoG">Impressão Sublimática em Fitas e Cadarços</a></li>
                    <li><a href="servicos.php#servicoH">Comunicação Visual / Banners</a></li>
                    <li><a href="servicos.php#servicoI">Tecidos para Decoração </a></li>
                </ul>
            </div>
        </div>
        <hr class="hr-linha">
        <div class="row">
            <h6>
                Todos os direitos reservados a Rossina Estamparia Digital &#9400; -
            </h6>
        </div>
    </footer>
</div>
<script src="dist/form.js"></script>
<script>
    $(function() {
        var icons = {
            header: "ui-icon-circle-arrow-e",
            activeHeader: "ui-icon-circle-arrow-s"
        };
        $( "#accordion" ).accordion({
            icons: icons,
            heightStyle: "content"
        });
        $( "#toggle" ).button().click(function() {
            if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
                $( "#accordion" ).accordion( "option", "icons", null );
            } else {
                $( "#accordion" ).accordion( "option", "icons", icons );
            }
        });
    });
</script>
<script>
    var offset = $('#meuMenu').offset().top;
    var $meuMenu = $('#meuMenu');
    $(document).on('scroll', function () {
        if (offset <= $(window).scrollTop()) {
            $meuMenu.addClass('fixar');
        } else {
            $meuMenu.removeClass('fixar');
        }
    });
</script>
</body>
</html>