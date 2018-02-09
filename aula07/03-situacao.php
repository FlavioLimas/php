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
			$nota1 = $_GET["n1"];
			$nota2 = $_GET["n2"];
			$media = ($nota1 + $nota2)/2;
			echo "A média entre $nota1 e $nota2 foi: $media<br>";
			echo "O aluno foi: ".(($media > 6)?"Aprovado":"Reprovado");
		 ?>
	 </div>
</body>
</html>