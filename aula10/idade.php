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
			$valor = $_GET["v"];
			echo "O Valor enviado foi $valor<br>";
			echo "A Raiz Quadrada do valor é ". number_format(sqrt($valor), 2);
		 ?><br>
		 <a href="01exercicio.html">Voltar</a>
	 </div>
</body>
</html>