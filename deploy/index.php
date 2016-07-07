<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Usando GIT para atualizar arquivos no servidor de hospedagem</title>
</head>
<body>
	<pre>
	<?php
    $exec = shell_exec("git pull origin master 2>&1");
    echo $exec;
    ?>
	</pre>
</body>
</html>