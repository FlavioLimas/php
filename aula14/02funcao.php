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
			function soma($a, $b){
				return $a + $b;
			}

			//$r = soma(3, 1);
			echo "<p>A soma entre os valores passados como parametro é: ".soma(3, 3)."</p>";
		 ?><br><br><br>
		 <a href="03exercicio.html">Voltar</a>
	 </div>
</body>
</html>