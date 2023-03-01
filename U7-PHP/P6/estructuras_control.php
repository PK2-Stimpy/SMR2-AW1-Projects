<html>
    <head>
        <title>Agencia espacial</title>
    </head>

    <body>
        <?php
        $velocidad = 200;
        $aceleracion = 40;
        $altura = 105;

        const GRAVITACIONAL = 6.674e11;
        const ACELERACION_G = 9.8;
        const VELOCIDAD_MAX = 300;

        if($velocidad < VELOCIDAD_MAX && $aceleracion > ACELERACION_G)
            echo("Todos los parámetros son correctos.");
        else if($velocidad > VELOCIDAD_MAX)
            echo("La velocidad es excesiva.");
        else if($aceleracion < ACELERACION_G)
            echo("La aceleración es insuficiente.");
        ?>
    </body>
</html>