<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<?php 

		//o parametro pode ser de qualquer tipo
		$parametro = "2";

		switch ($parametro) {
			case 1:
				echo "Entrou no case 1";
				break;
			
			case 2:
				echo "Entrou no case 2";
				break;

			case 3:
				echo "Entrou no case 3";
				break;

			default:
				echo "Entrou no default";
		}
		
	 ?>

</body>
</html>