<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>
<body>

	<?php

        $funcionarios = ["Pedro", "Maria", "Júlia"];

        echo "<pre>";
        print_r($funcionarios);
        echo "</pre>";

        foreach ($funcionarios as $idx => $nome_funcionario) {
            echo "ID $idx - Nome: $nome_funcionario <br/>";
        }

	?>

</body>
</html>