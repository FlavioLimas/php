<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Operações</title>
	<link rel="stylesheet" href="../aula05/_css/estilo.css">
</head>
<body>
	<div>
		<?php
			$n 		= isset($_GET["num"])?$_GET["num"]:0;
			$o 		= isset($GET["oper"])?$_GET["oper"]:1;

			switch ($o) {
				case 1:
					$r = $n * 2;
					break;
				case 2:
					$r = $n ^ 3;
					break;
				case 3:
					$r = sqrt($n);
					break;
			}
			echo "O resultado da operação solicitada foi $r";
		 ?><br>
		 <a href="01exercicio.html">Voltar</a>
	 </div>
</body>
</html>