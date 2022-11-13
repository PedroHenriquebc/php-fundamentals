<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
        
        $num1 = 15;
        $num2 = 2;

        echo "A soma entre " . $num1 . " e " . $num2 . " é " . ($num1 + $num2);
        echo "<br>";
        echo "A dubtração entre " . $num1 . " e " . $num2 . " é " . ($num1 - $num2);
        echo "<br>";
        echo "A multiplicação entre " . $num1 . " e " . $num2 . " é " . ($num1 * $num2);
        echo "<br>";
        echo "A divisão entre " . $num1 . " e " . $num2 . " é " . ($num1 / $num2);
        echo "<br>";
        echo "O módulo resto da divisão inteira entre " . $num1 . " e " . $num2 . " é " . ($num1 % $num2);
        
        //Podemos usar o operador de atribuição +=, -=, *=, /=, %=
        //Ex: $num1 += $num2;

    ?>

</body>

</html>