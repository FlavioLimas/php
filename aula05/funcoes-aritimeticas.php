<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções Aritiméticas PHP</title>
	<link rel="stylesheet" href="_css/estilo.css">
	<style>
		h2 {
			font-size: 18px;
			font-family: "Arial";
			color: purple;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div>
		<?php 
			$v1 = $_GET["x"];
			$v2 = $_GET["y"];
			echo "<h2>Valores Recebidos: $v1 e $v2</h2>";
			echo "O valor absoluto de $v2 é: ". abs($v2);
			echo "<br>O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
			echo "<br>A raiz quadrada de $v1 é: ". sqrt($v1);
			echo "<br>O valor de $v2 arredondado é: ". round($v2); // ceil -> sempre arredonda para cima / floor -> sempre arredonda para baixo
			echo "<br>A parte inteira de $v2 é: ". intval($v2);
			echo "<br>O valor de $v1 em moeda é R$: ". number_format($v1, 2);
		 ?>
	</div>
</body>
</html>