<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Operadores</title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
	<div>
		<?php 
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			$m = ($n1 + $n2) / 2;
			echo "<h2>Valores Recebidos: $n1 e $n2</h2>";
			echo "<h2>A Média dos Valores é: $m</h2>";
			echo "A soma vale ". ($n1+$n2);
			echo "<br>A subritração vale ". ($n1-$n2);
			echo "<br>A multiplicação vale ". ($n1*$n2);
			echo "<br>A divisão vale ". ($n1/$n2);
			echo "<br>O modulo vale ". ($n1%$n2);
		?>
	</div>
</body>
</html>