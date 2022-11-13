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


		/*
			Se possuir cartão da loja e o valor
			da compra for mais que 100, então 
			recebe descoonto e o frete é grátis
		*/
		if ($possuiCartao && $valorCompra >= 100) {
			$recebeuDesconto = true;
			$valorFrete = 0;
		}
	?>

	<h1>Detalhes do pedido</h1>

	<p>Possui cartão da loja? 
		<?php
			if ($possuiCartao) {
				echo "Sim";
			} else {
				echo "Não";
			}
		?>
	</p>

	<p>Valor da compra: <?= $valorCompra ?></p>
		

	<p>Recebeu desconto no frete? 
		<?php
			if ($possuiCartao) {
				echo "Sim";
			} else {
				echo "Não";
			}
		?>
	</p>	

	<p>Valor do frete: <?= $valorFrete ?></p>
		
</body>
</html>