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
			function soma(){
				$p = func_get_args(); // armazena os argumentos passados como parametros num vetor
				$t = func_num_args(); // Retorna o numero de argumentos da funcao
				$s = 0;
				for ($i=0; $i < $t; $i++) { 
					$s += $p[$i];
				}
				return $s;
			}

			// $r = soma(3, 5, 2);
			echo "<p>A soma dos valores é: ".soma(3, 5, 2)."</p>";
		 ?><br><br><br>
		 <a href="03exercicio.html">Voltar</a>
	 </div>
</body>
</html>