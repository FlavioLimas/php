<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Função</title>
	<link rel="stylesheet" href="../aula05/_css/estilo.css">
</head>
<body>
	<div>
		<?php
			function soma($a, $b){
				$s = $a + $b;
				echo "<p>A soma vale $s</p>";
			}

			soma(3, 1);
			soma(5, 3);
		 ?><br><br><br>
		 <a href="03exercicio.html">Voltar</a>
	 </div>
</body>
</html>