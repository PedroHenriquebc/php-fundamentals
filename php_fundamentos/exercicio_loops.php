<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<?php

        $array = [];
        for ($i=0; $i < 6; $i++) {
            $numeroAleatorio = rand(1,60);
            while (in_array($numeroAleatorio, $array)) {
                $numeroAleatorio = rand(1,60);
            }
            $array[] = $numeroAleatorio;
        }

        echo "<pre>";
        print_r($array);
        echo "</pre>";

	?>

</body>
</html>