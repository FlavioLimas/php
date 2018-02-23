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
			$nome 		= ($_GET["nome"])?$_GET["nome"]:["nao informado"];
			$ano_nasc 	= ($_GET["ano"])?$_GET["ano"]:["nao informado"];
			$sexo 		= ($_GET["sexo"])?$_GET["sexo"]:["nao informado"];
			$idade		= date("Y") - $ano_nasc;
			if ($nome || $ano_nasc === "nao informado") {
				echo "string";
			}

			echo "$nome e $sexo e tem $idade anos.";
		 ?><br>
		 <a href="02exercicio.html">Voltar</a>
	 </div>
</body>
</html>