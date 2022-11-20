<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    
        /*
            is_array(array) -> Verifica se o parâmetro é um array
            array_keys(array) -> Retorna todas as chaves de um array
            sort(array) -> Ordena um array e reajusta seus índices
            asort(array) -> Ordena um array preservando os índices
            count(array) -> Conta a quantidade de elementos de um array
            array_merge(array) -> Funde um ou mais arrays
            explode(array) -> Divide uma string baseada em um delimitador
            implode(array) -> Junta elementos de um array em uma string
        */

        /*
        $array = array("notebook", "teclado");
        $retorno = is_array($array);

        if ($retorno) {
            echo "Sim, é um array";
        } else {
            echo "Não é um array";
        }
        */

        /*
        $array = [1 => "a", 7 => "b", 18 => "c"];
        echo "<pre>";
            print_r($array);
        echo "</pre>";

        $chaves_array = array_keys($array);
        echo "<pre>";
            print_r($chaves_array);
        echo "</pre>";
        */

        /*
        $array = array("mouse", "notebook", "teclado", "cabo hdmi", "gabinete");
        echo "<pre>";
            print_r($array);
        echo "</pre>";

        sort($array); //se conseguir ordenar retorna true, senão, false
        echo "<pre>";
            print_r($array);
        echo "</pre>";
        */

        /*
        $array = array("mouse", "notebook", "teclado", "cabo hdmi", "gabinete");
        echo "<pre>";
            print_r($array);
        echo "</pre>";

        asort($array); //se conseguir ordenar retorna true, senão, false
        echo "<pre>";
            print_r($array);
        echo "</pre>";
        */

        /*
        $array = array("mouse", "notebook", "teclado", "cabo hdmi", "gabinete");
        echo "<pre>";
            print_r($array);
            echo count($array);
        echo "</pre>";
        */

        /*
        $array1 = array("mouse", "notebook");
        $array2 = array("teclado", "cabo hdmi", "gabinete");

        $novo_array = array_merge($array1, $array2);
        echo "<pre>";
            print_r($novo_array);
        echo "</pre>";
        */

        /*
        $string = "20/11/2022";
        $array_retorno = explode("/", $string);
        echo "<pre>";
            echo $string;
            print_r($array_retorno);
        echo "</pre>";
        */

        $array = ["a", "b", "x", "y"];
        $string_retorno = implode(",", $array);
        echo $string_retorno;

    ?>

</body>

</html>