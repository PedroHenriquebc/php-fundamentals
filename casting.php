<!DOCTYPE html>

<html>

<head>
    <title>Curso PHP</title>
</head>

<body>

    <?php

    //gettype() => retorna o tipo do item dentro dos parênteses

    $valor = 10;
    //$valor2 = (float) $valor; //pode ser float ou double
    $valor2 = (string) $valor;
    
    
    //$valor = 15.60;
    //$valor2 = (int) $valor; //pode ser int ou integer

    //$valor = "22.12";
    //$valor2 = (boolean) $valor; //pode ser boolean ou bool(Retorna 1 para um valor válido e nada para um inválido)

    //$valor = true;
    //$valor2 = (int) $valor; //retorna 1 para true ou 0 para falso
    //$valor2 = (string) $valor; //retorna a string 1 para true e string vazia para falso


    echo $valor . " " . gettype($valor);
    echo "<br>";
    echo $valor2 . " " . gettype($valor2);

    ?>

</body>

</html>