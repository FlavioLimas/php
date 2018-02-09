<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operações</title>
	<link rel="stylesheet" href="../aula05/_css/estilo.css">
</head>
<body>
	<div>
		<?php 
			$ano = $_GET["an"];
			$idade = 2018 - $ano;
			echo "Quem nascel em $ano tem idade de $idade anos.<br>";
			echo "E dessa forma seu voto é ".(($idade >= 18 && $idade < 65)?"Obrigatório!":"Não Obrigatório!");
		 ?>
	 </div>
</body>
</html>