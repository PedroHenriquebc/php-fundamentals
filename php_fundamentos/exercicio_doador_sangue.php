<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doação de Sangue</title>
</head>
<body>

	<?php 

		$idade = 26;
		$peso = 55.8;
		
		$podeDoar = $idade <= 69 && $idade >= 16 && $peso >= 50 ? true : false;

	 ?>

	<h1>Dados pessoais</h1>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>Pode ser doador? <?= $podeDoar ? "Sim" : "Não" ?></p>

</body>
</html>