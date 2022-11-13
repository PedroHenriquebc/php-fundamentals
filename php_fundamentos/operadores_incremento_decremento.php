<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php 
    /*
        ++$x => pré-incremento, o incremento é feito e depois retorna o comando
        $x++ => pós-incremento, retorna o comando e depois incrementa
        --$x => pré-decremento, o decremento é feito e depois retorna o comando
        $x-- => pós-decremento, retorna comando e depois decrementa 
    */
    ?>

    <?php
    $x = 5;
    echo "<h3>valor de x: $x</h3>";
    echo "<h4>Pré-incremento</h4>";
    echo "valor de x com pré-incremento: " . ++$x;
    echo "<br>";
    echo "valor de x atualizado: " . $x;
    ?>

    <h3>Pós-incremento</h3>
    <?php
    echo "valor de x com pós-incremento: " . $x++;
    echo "<br>";
    echo "valor de x atualizado: " . $x;
    ?>

    <h3>Pré-decremento</h3>
    <?php
    echo "valor de x com pré-decremento: " . --$x;
    echo "<br>";
    echo "valor de x atualizado: " . $x;
    ?>

    <h3>Pós-decremento</h3>
    <?php
    echo "valor de x com pós-decremento: " . $x--;
    echo "<br>";
    echo "valor de x atualizado: " . $x;
    ?>
</body>

</html>