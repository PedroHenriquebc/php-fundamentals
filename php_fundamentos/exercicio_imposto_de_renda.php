<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Imposto de Renda</title>
</head>

<body>

    
    <?php 

        function calcularIR($salario) {
        $imposto = 0;

        if($salario >= 1903.98 && $salario <= 2826.65) {
            $imposto = $salario * 0.075; 
        } else if ($salario >= 2826.66 && $salario <= 3751.05) {
            $imposto = $salario * 0.15;
        } else if ($salario >= 3751.06 && $salario <= 4664.68) {
            $imposto = $salario * 0.225;
        } else if($salario > 4664.68){
            $imposto = $salario * 0.275;
        }

        return $imposto;
        }

        $salario = 1903.97;
        $imposto = calcularIR($salario)

    ?>

    <h3>Imposto de Renda</h3>
    <p>Salário: R$<?= $salario ?></p>
    <p>Imposto: R$<?= $imposto ?></p>


</body>

</html>