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
			include "funcoes.php"; // Permite que seja utilizado os recursos existentes no arquivo funcoes.php, sendo que ele tenta carregar os elementos da página mesmo se retornar algum erro
			// require "funcoes.php" Permite que seja utilizado os recursos existentes no arquivo funcoes.php, sendo que ele retorna erro caso tente carregar o arquivo e ele não exista ou tenha alguma problema
			// include_once ou require_once "funcoes.php" tenta incluir o arquivo pelo menos uma vez; se ele já existir ele não tenta carregar novamente; se ele não existir carregue uma vez
			echo "<h1>Testando novas funções</h1>";
			ola();
			mostraValor(4);
			echo "<h2>Finalizando o programa</h2>";
		?><br><br><br>
		<a href="#">Voltar</a>
	</div>
</body>
</html>