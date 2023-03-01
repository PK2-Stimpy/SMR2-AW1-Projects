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

        echo("¿El valor de operaciones diarias es mayor igual que el máximo? " . ($operaciones_diarias >= operaciones_max_diarias));
        echo("¿El valor de operaciones semanales es mayor igual que el máximo? " . ($operaciones_semanales >= operaciones_max_semanales));
        echo("¿El valor de operaciones diarias es exactamente igual al máximo? " . ($operaciones_diarias == operaciones_max_diarias));
        echo("¿El valor de operaciones diarias es distinto al de operaciones semanales? " . ($operaciones_diarias != operaciones_semanales));
        ?>
    </body>
</html>