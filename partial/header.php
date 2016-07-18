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
    <meta property="og:url" content="https://rossinaestamparia.com.br/" />
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://rossinaestamparia.com.br/images/logo-rossina.png" />
    <meta property="og:site_name" content="Rossina Estamparia Digital" />
    <link rel="icon" type="image/x-icon" href="https://rossinaestamparia.com.br/favicon.ico" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="alternate" hreflang="pt-br" href="https://rossinaestamparia.com.br/" />
    <link rel="stylesheet" href="dist/css/bundle.css" type="text/css">
    <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" type="text/css">
    <link rel="stylesheet" href="components/normalize-css/normalize.css" type="text/css">
    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="node_modules/node-waves/dist/waves.css" type="text/css">
<!--    <link rel="stylesheet" href="http://foundation.zurb.com/sites/docs/v/5.5.3/assets/css/docs.css" type="text/css">-->
<!--    <link rel="stylesheet" href="node_modules/material-design-lite/material.min.css" type="text/css">-->
    <style>
        #meuMenu {background:#069; width:100%; padding:5px; margin-top:1px; z-index: 1; }
        .callout{border: none;}
        .fixar {position:fixed; margin-top: 0px !important;}
        .none-solid{border:none;}
        .bordar{border: 2px solid #ccc;}
        .fi-grande3{width: 60px;}
        @import url(//fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900);
        html, body {background: #FFFFFF; }
        .card {font-family: 'Roboto', sans-serif; overflow: hidden; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            color: #272727; border-radius: 2px; margin-bottom: 20px;}
        .card .title {line-height: 3rem; font-size: 1.5rem; font-weight: 300; }
        .card .content {padding: 1.3rem; font-weight: 300; border-radius: 0 0 2px 2px; }
        .card p {margin: 0; }
        .card .action {border-top: 1px solid rgba(160, 160, 160, 0.2); padding: 1.3rem; }
        .card a {color: #ffab40; margin-right: 1.3rem; transition: color 0.3s ease; text-transform: uppercase; text-decoration: none; }
        .card .image {position: relative; }
        .card .image .title {position: absolute; bottom: 0; left: 0; padding: 1.3rem; color: #fff; }
        .card .image img { border-radius: 2px 2px 0 0; }
        .button{box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);}
        .warning2{background-color: #f0005e;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);}
        .hr-linha-rosa{background: #2962FF; height: 2px}
        .warning2 a{color: #FFFFFF}
        .primary2{background-color: #2962FF;box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);}
        .primary2 a{color: #FFFFFF;}
        .color-branco{color:#fff}
        .color-preto{color:#000000;}
        .color-vermelho a{color:#F2E81A;}
        title-link{color: #1830ff; text-decoration: underline}
        .flat-box{background: #f9a825}
        .flat-box a{color: #ffffff }
        .danger2{background: #ffff00; padding: 10px; font-size: 24px; font-weight: bold}
        .danger2 a{color: #FFF;}
        .color-azul{color: #069;}
        .alert2{background: #ff3d00;}
        .alert2 a{color: #FFFFFF;}
        .secondary2 {background: #424242;}
        .success2{background: #00e676;}
        .success2 a{color: #FFFFFF;}
        .action a{color: #FFFFFF}
        .black{background: #000000 }
        .black2{background: #212121 }
        .full-width {padding: 2rem 2rem 0 4rem; text-align: center; color: #fff; text-transform: uppercase; background: #000000;}
        .full-width {max-width: 1600px;}
        .full-width i {font-size: 100px;}
        .full-width h4 {color: #fff; font-size: 1em; font-weight: 400; text-transform: uppercase; margin-top: 2.5rem; margin-bottom: 10px;}
        .full-width p, .full-width a {font-weight: 300; font-size: .8em; color: #fff;}
        @media only screen and (min-width: 40.063em) {.full-width .columns:nth-child(n+2) {border-left: 1px solid #b3b3b3; min-height: 380px; margin-top: 15px; margin-bottom: 15px}}
        .footer-links {list-style-type: none;}
        .footer-links a { margin-top: .5em; font-size: 14px}
        .footer-links a:hover {color: #F2E81A;}
        .img-padding{padding-bottom: 20px; }
        .grey{background: #424242;}
        .number-camisa{width: 65px;}
        /*.hr-padding{padding: 0; margin: 0; height: 2px;}*/
    </style>

    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="//v2.zopim.com/?3XaCdlRGe1AUsvDN1Rry3Z6PX2x8d2TX";z.t=+new Date;$.
                type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zopim Live Chat Script-->

</head>
<body class="fadeIn">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P8G82V"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P8G82V');</script>
<!-- End Google Tag Manager -->
<nav id="meuMenu">
    <div id='cssmenu'>
        <ul>
            <li class="show-for-medium"><a href="index.php"><img src="images/logo-rossina.png" width="150"></a></li>
            <li class="show-for-small-only">
                <a href="/" style="font-weight: bold; color: #F2E81A">
                    <i class="fi-home fi-grande2" style="font-weight: bold; color: #F2E81A"></i> Home
                </a>
            </li>
            <li><a href="contatos.php" style="font-weight: bold; color: #00ff00"><i class="fi-telephone fi-grande2" style="font-weight: bold; color: #00ff00"></i> CONTATOS</a></li>
            <li><a href="camisetas.php"><i class="fi-male-female fi-grande2"></i> Camisas</a>
            <li><a href="tecidos.php"><i class="fi-photo fi-grande2"></i> Tecidos</a></li>
            <li><a href="servicos.php"><i class="fi-paint-bucket fi-grande2"></i> Serviços</a></li>
            <li><a href="silk-digital.php"><i class="fi-list fi-grande2"></i> Silk Digital</a></li>
            <li><a href="videos-calandra-plotter-kornit-digital.php"><i class="fi-play-video fi-grande2"></i> Vídeos</a></li>
            <li><a href="form.php"><i class="fi-page-multiple fi-grande2"></i> Agendar Visita</a></li>
            <li><a href="empresa.php"><i class="fi-home fi-grande2"></i> A Empresa</a></li>
            <li><a href="faqs.php"><i class="fi-link fi-grande2"></i> Faqs</a></li>
        </ul>
    </div>
</nav>