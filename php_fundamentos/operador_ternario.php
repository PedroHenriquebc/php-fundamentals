<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>

<body>
	<?php

	$possuiCartao = false;
	$valorCompra = 250;
	$recebeuDesconto = false;
	$valorFrete = 50;

	if ($possuiCartao && $valorCompra >= 100) {
		$recebeuDesconto = true;
		$valorFrete = 0;
	}
	?>

	<h1>Detalhes do pedido</h1>

	<p>Possui cartão da loja? <?= $possuiCartao ? "Sim" : "Não"; ?>
		<?php
		// <condição> ? true : false

		/*
			if ($possuiCartao) {
				echo "Sim";
			} else {
				echo "Não";
			}
			*/
		?>

	</p>

	<p>Valor da compra: <?= $valorCompra ?></p>


	<p>Recebeu desconto no frete?
		<?php
		// podemos atribuir o valor da operção ternária à uma variável
		$teste = $possuiCartao ? "Sim" : "Não";
		echo $teste;

		/*
			if ($possuiCartao) {
				echo "Sim";
			} else {
				echo "Não";
			}
			*/
		?>
	</p>

	<p>Valor do frete: <?= $valorFrete ?></p>

</body>

</html>