<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<?php

        $registros = ["Título da notícia 1", "Título da notícia 2", "Título da notícia 3"];
        $idx = 0;

        while ($idx < 3) {
            echo "$registros[$idx] <br/>";
            $idx++;
        }

	?>

</body>
</html>