<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<?php

        $itens = ["fogão", "mesa", "cadeira", "cadeira", "geladeira"];

        foreach ($itens as $item) {
            echo "$item";
            echo "<br/>";
        }

	?>

</body>
</html>