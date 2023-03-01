<html>
    <head>
        <title>Banco</title>
    </head>

    <body>
        <?php
        $operaciones_diarias = "4";
        $operaciones_semanales = 7;

        const operaciones_max_diarias = 4;
        const operaciones_max_semanales = 8;

        echo("¿El valor de operaciones diarias es mayor igual que el máximo? " . ($operaciones_diarias >= operaciones_max_diarias ? 'Sí':'No') . '<br>');
        echo("¿El valor de operaciones semanales es mayor igual que el máximo? " . ($operaciones_semanales >= operaciones_max_semanales ? 'Sí':'No') . '<br>');
        echo("¿El valor de operaciones diarias es exactamente igual al máximo? " . ($operaciones_diarias == operaciones_max_diarias ? 'Sí':'No') . '<br>');
        echo("¿El valor de operaciones diarias es distinto al de operaciones semanales? " . ($operaciones_diarias != operaciones_max_semanales ? 'Sí':'No') . '<br>');

        $indicadores = 13;
        $filtro = 12;
        echo("El resultado de las operaciones and con los indicadores y el filtro es: " . ($indicadores & $filtro) . '<br>');
        ?>
    </body>
</html>