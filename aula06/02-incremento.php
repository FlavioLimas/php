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
			$atual = $_GET["aa"];
			echo "O ano atual é $atual e o ano anterior é ". --$atual;
		 ?>
	 </div>
</body>
</html>