<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    
        //in_array() -> Retorna true ou false para existência do que está sendo procurado
        //array_search() -> Retorna o índice do valor pesquisado, caso ele exista ou null caso não exis  ta
         
        $lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];

        echo "<pre>";
        print_r($lista_frutas);
        echo "</pre>";

        echo array_search("Banana", $lista_frutas);
        echo "<br />";
        
        $existe = array_search("Maçã", $lista_frutas);

        if ($existe != null) {
            echo "True";
        } else {
            echo "False";
        }

        echo "<br />";

        $existe = in_array("Maçã", $lista_frutas);
        //true -> 1
        //false -> vazio
        if ($existe) {
            echo "True";
        } else {
            echo "False";
        }

    ?>

</body>

</html>