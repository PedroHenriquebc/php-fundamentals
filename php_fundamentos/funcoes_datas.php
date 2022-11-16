<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php

        /*
            date(formato) -> Recupera a data atual
            date_default_timezone_get(timezone) -> Recupera o timezone default da aplicação
            date)default_timezone_set(timezone) -> Atualiza o timezone default da aplicação
            strtotime -> Transfoma datas textuais em segundos
            www.php.net/manual/en/function.date.php
            www.php.net/manual/en/timezones.php
        */
        
        echo date("d/m/Y H:i") . "<br />";
        echo date_default_timezone_get() . "<br />";
        date_default_timezone_set("America/Sao_Paulo") . "<br />";
        echo date("d/m/Y H:i") . "<br />";
        echo "<hr />";

        $data_inicial = "2022-11-15";
        $data_final = "2022-11-20";

        //timestamp
        //01/01/1970

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . " - " . $time_inicial;
        echo "<br />";
        echo $data_final . " - " . $time_final;

        $diferenca_times = $time_final - $time_inicial;

        echo "<br />";
        echo "A diferença de segundos entre a data inicial e final é de " . $diferenca_times;

        $segundos_por_dia = 24 * 60 * 60;

        echo "<br />";
        echo "Um dia possui " . $segundos_por_dia . " segundos";
        
        $diferenca_dias_datas = $diferenca_times / $segundos_por_dia;
        echo "<br />";
        echo "A diferença de dias entre as datas é de " . $diferenca_dias_datas . " dias"; 

    ?>

</body>

</html>