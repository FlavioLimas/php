<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- <?php 
		$txt	= isset($_GET["t"])?$_GET["t"]:"Texto Generico";
		$tam	= isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor	= isset($_GET["cor"])?$_GET["cor"]:"#000000";
	 ?> -->
	<meta charset="UTF-8">
	<title>Função</title>
	<link rel="stylesheet" href="../aula05/_css/estilo.css">
</head>
<body>
	<div>
		<?php
			function teste_valor($x) { // passagem de parametros para funcao por valor
				$x += 2;
				echo "<p>O valor de X é: $x</p>";
			}
			function teste_referencia(&$x) { // passagem de parametros para funcao por referencia
				$x += 2;
				echo "<p>O valor de X é: $x</p>";
			}

			$a = 3;
			teste_valor($a);
			echo "<p>O valor de A é: $a</p>";

			$b = 3;
			teste_referencia($b);
			echo "<p>O valor de B é: $b</p>";

		?><br><br><br>
		<a href="#">Voltar</a>
	</div>
</body>
</html>