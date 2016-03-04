<!DOCTYPE html>
<html class="no-js" lang="pt-br" dir="etl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="pt-br">
    <title><?php echo $title ?></title>
    <meta name="google-site-verification" content="google1a06754d50be5d0d" />
    <meta property="og:title" content="Rossina Estamparia Digital - Tecidos - Camisas - Camisetas - Serviços estamparia digital">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:site_name" content="Rossina Estamparia Digital">
    <meta property="og:url" content="http://rossinaestamparia.com.br/" />
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://www.rossinaestamparia.com.br/images/logo-rossina.png" />
    <meta property="og:site_name" content="Rossina Estamparia Digital" />
    <link rel="alternate" hreflang="pt-br" href="http://rossinaestamparia.com.br/" />
    <link rel="stylesheet" href="dist/bundle.css" type="text/css">
    <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" type="text/css">
    <link rel="stylesheet" href="components/normalize-css/normalize.css" type="text/css">
    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css" type="text/css">
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