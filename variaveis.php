<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>
	<?php 
		//string
		$nome = "Pedro";

		//int
		$idade = 25;

		//float
		$peso = 67.5;

		//boolean
		$fumante = true; //(true = 1) ou (false = vazio)
	 ?>

	 <h1>Ficha cadastral</h1>
	 <br>
	 <p>Nome: <?= $nome ?></p>
	 <p>Idade: <?= $idade ?></p>
	 <p>Peso: <?= $peso ?></p>
	 <p>Fumante: <?= $fumante ?></p>

</body>
</html>