<html>
    <head>
        <title>Agencia espacial</title>
    </head>

    <body>
        <?php
        $velocidad = 200;
        $aceleracion = 6;
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

        switch ($aceleracion) {
            case 0:
            case 1:
            case 2:
                echo("Hay que aumentar la aceleración.");
                break;
            case 3:
                echo("Falta algo de aceleración.");
                break;
            case 4:
            case 5:
            case 6:
            case 7:
                echo("La aceleración es perfecta.");
                break;
            case 8:
            case 9:
                echo("Hay que decelerar por peligro de destrucción.");
                break;
            default:
                echo("La cifra no está contemplada.");
                break;
        }
        ?>
    </body>
</html>