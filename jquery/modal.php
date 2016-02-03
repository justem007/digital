<html>
<head>
    <title>Janela modal</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>

    <style type="text/css">

        .window{
            display:none;
            width:300px;
            height:300px;
            position:absolute;
            left:0;
            top:0;
            background:#FFF;
            z-index:9900;
            padding:10px;
            border-radius:10px;
        }

        #mascara{
            position:absolute;
            left:0;
            top:0;
            z-index:9000;
            background-color:#000;
            display:none;
        }

        .fechar{display:block; text-align:right;}

    </style>

</head>


<body>
<a href="form.php" rel="modal">Janela modal</a>
<a href="texto.php" rel="modal">Janela 2 modal</a>


<div class="window" id="janela1">

</div>

<!-- mascara para cobrir o site -->
<div id="mascara"></div>
</body>
</html>