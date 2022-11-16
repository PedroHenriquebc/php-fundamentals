<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*
            ceil($numero) ->  Arredonda o valor para cima
            floor($numero) -> Arredonda o valor para baixo
            round($numero) -> Arredonda o valor com base nas casas decimais
                              (.0 a .4 => baixo / .5 => cima)
            rand() -> Gera um inteiro aleatório
            sqrt($numero) -> Retorna raiz quadrada
        */

        $numero = 7.3;
        echo $numero . "<br />";
        echo ceil($numero) . "<br />";
        echo floor($numero) . "<br />";
        echo round($numero) . "<br />";
        echo rand() . "<br />";
        echo sqrt($numero);

    ?>

</body>

</html>