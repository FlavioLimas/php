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
			$a 		= isset($_GET["ano"])?$_GET["ano"]:1900;
			$i 		= date("Y") - $a;
			echo "Você nasceu em $a. e tera $i anos<br>";

			if ($i >= 18) {
				$v = "Já pode votar";
				$d = "Já pode dirigir";
			}
			else {
				if ($i >= 16 && $i <18) {
					# code...
				}
				$v = "Não pode votar";
				$d = "Não pode dirigir";
			}
			echo "Com essa idade voce $v e tambem $d";
		 ?><br>
		 <a href="01exercicio.html">Voltar</a>
	 </div>
</body>
</html>