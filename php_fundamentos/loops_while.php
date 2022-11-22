<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<?php

        //break ->  interrompe a execução do laço
        //continue -> pula a itereção desconsiderando o que vem depois do continue

        $num = 1;
        echo "-- Início do loop -- <br/>";
		while ($num <= 10) {
            echo "$num <br/>";
            $num++; //critério de parada

            /*
            if($num == 5) {
                break;
            }
            */
        }
        echo "-- Fim do loop --";

	?>

</body>
</html>