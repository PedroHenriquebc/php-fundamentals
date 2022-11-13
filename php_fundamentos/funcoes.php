<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    function exibirBoasVindas() {
        echo "Bem vindo!";
    }

    function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura * $comprimento;
        return $area;
    }

    exibirBoasVindas();
    echo "<br>";
    echo calcularAreaTerreno(6, 9);
    ?>
</body>

</html>