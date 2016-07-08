<?php

session_start();

$token = "6720720054e9d24fbf6c20a831ff287e";
$senhaAcesso = 'insert65@';

if ($_REQUEST['token'] == $token)
    $tokenValido = true;

if ($_REQUEST['senhaAcesso'] == $senhaAcesso && empty($_SESSION['usuarioValido']))
    $_SESSION['usuarioValido'] = true;

if ($_REQUEST['sair'])
    unset($_SESSION['usuarioValido']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title></title>
</head>
<body>
<pre>
	<?php
    if ($tokenValido) {
        $exec = shell_exec("git pull origin master 2>&1");
        echo $exec;

        $textoLog = PHP_EOL . "Data: " . date(d . "/" . m . "/" . Y . " - " . H . ":" . i . ":" . s);
        $textoLog .= PHP_EOL . $exec;

        $arquivoLog = fopen('log.txt', 'a+');
        fwrite($arquivoLog, $textoLog);
        fclose($arquivoLog);
    } else if ($_SESSION['usuarioValido']) {
        ?>
        <form action="index.php" method="post">
			<input type="hidden" name="token" value="6720720054e9d24fbf6c20a831ff287e">
			<input type="submit" value="Atualizar">
		</form>
        <?php
        if ($_SESSION['usuarioValido'])
            echo '<p><a href="index.php?sair=true">Sair</a></p>';
        $texto = file('log.txt');
        foreach ($texto as $linha) {
            echo $linha;
        }
    } else {
        ?>
        <div class="container">
            <div class="row">
                <form action="index.php" method="post">
			<div>
				<input class="form-control" type="password" placeholder="Senha" name="senhaAcesso">
			</div>
			<input class="btn btn-default" type="submit" value="Acessar Sistema">
		</form>
            </div>
        </div>

        <?php
    }
    ?>
</pre>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
