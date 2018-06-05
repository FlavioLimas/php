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
			$d 		= ($_GET["ds"])?$_GET["ds"]:0;
			
			switch ($d) {
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo "Você terá aula hoje, pois é um dia da semana!";
					break;
				case 7:
				case 8:
					echo "Você não terá aula hoje, pois é fim de semana!";
					break;
				default:
				echo "Selecione um dia valido!";
			}
		 ?><br>
		 <a href="javascript:history.go(-1)">Voltar</a>
	 </div>
</body>
</html>