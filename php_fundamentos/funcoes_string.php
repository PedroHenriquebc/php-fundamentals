<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>

    <?php

        /*
            strtolower($texto) -> transforma todos os caracteres em minúsculos
            strtoupper($texto) -> transforma todos os caracteres em maiúsculo
            ucfirst($texto) -> transforma o primeiro caracter da string em maiúsculo
            strlen($texto) -> conta a quantidade de caracteres de uma strin
            str_replace(<procura por>, <substitui por>, $texto) -> Substitui uma cadeia de caracteres por outra dentro de uma string
            substr($texto, <posicao inicial>, <qtde caracteres>) -> retorna parte de uma string
        */

        $texto = "curso completo de PHP";

        echo "$texto" . "<br />";
        echo strtolower($texto) . "<br />";
        echo strtoupper($texto) . "<br />";
        echo ucfirst($texto) . "<br />";
        echo strlen($texto) . "<br />";
        echo str_replace("PHP", "JavaScript", $texto) . "<br />";
        echo substr($texto, 0, 5);

    ?>
    
</body>
</html>