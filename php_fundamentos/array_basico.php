<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*   sequenciais (numéricos)   */
        $lista_frutas = array("Banana", "Maçã", "Morango", "Uva");
        //outra forma de declarar um array:
        //$lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];
        
        //atribuir novo item
        $lista_frutas[] = "Abacaxi";

        //alterar valor
        $lista_frutas[4] = "Abacate";

        //var_dump e print_r são mais usadas pra debug
        echo "<pre>";
            var_dump($lista_frutas);
        echo "</pre>";
        echo "<hr />";
        echo "<pre>";
            print_r($lista_frutas);
        echo "</pre>";

        //imprimir um determinado item
        echo $lista_frutas[2];


        /*   associativos  */
        /*
            $lista_frutas = array(
                "a" => "Banana", 
                "b" => "Maçã", 
                "x" => "Morango", 
                "z" => "Uva");
            
            ou

            $lista_frutas = [
                "a" => "Banana", 
                "b" => "Maçã", 
                "x" => "Morango", 
                "z" => "Uva"];

            echo "<pre>";
            var_dump($lista_frutas);
            echo "</pre>";
            echo $lista_frutas["b"];
        */

    ?>

</body>

</html>