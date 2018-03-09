<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<?php 
		$txt	= isset($_GET["t"])?$_GET["t"]:"Texto Generico";
		$tam	= isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor	= isset($_GET["cor"])?$_GET["cor"]:"#000000";

	 ?>
	<meta charset="UTF-8">
	<title>Operações</title>
	<link rel="stylesheet" href="../aula05/_css/estilo.css">
	<style>
		span.texto {
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
</head>
<body>
	<div>
		<?php
			echo "<span class='texto'>$txt</span>";
		 ?><br><br><br>
		 <a href="03exercicio.html">Voltar</a>
	 </div>
</body>
</html>