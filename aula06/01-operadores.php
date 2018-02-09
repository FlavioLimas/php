<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acrescímo 10%</title>
	<link rel="stylesheet" href="../aula05/_css/estilo.css">
</head>
<body>
	<div>
		<?php 
			$preco = $_GET["p"];
			echo "O Preço do Produto é R$: $preco";
			// $preco = $preco + ($preco*10/100);
			$preco += $preco*10/100;
			echo "<br>O Valor com acréscimo de 10% é R$: ". number_format($preco, 2);
		 ?>
	 </div>
</body>
</html>