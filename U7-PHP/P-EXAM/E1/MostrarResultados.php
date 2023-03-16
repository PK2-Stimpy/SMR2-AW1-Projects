<html>
    <head>
        <title>Ejercicio 1</title>
        
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <h1>Ejercicio 1</h1>
        <?php
        $x1 = $_POST['num1'];
        $x2 = $_POST['num2'];

        if(!empty($_POST['operacion1'])) {
            echo "<h3>Operación 1:</h3>";

            $min = $x1;
            $max = $x2;
            if($min > $max) {
                $min = $x2;
                $max = $x1;
            }

            $mcd = 1;
            for($i = $min; $i > 1; $i--) {
                $div_x1 = $x1 % $i;
                $div_x2 = $x2 % $i;

                if($div_x1 == 0 && $div_x2 == 0) {
                    $mcd = $i;
                    break;
                }
            }

            echo "<p>El MCD de los números $x1 y $x2 es: $mcd</p>";
            printf("<p>El número más grande de entre los números $x1 y $x2 es: $max</p>");
        }

        if(!empty($_POST['operacion2'])) {
            echo "<h3>Operación 2:</h3>";
            printf("<p>Mi nombre es %s y solamente tengo que implementar la opción %s.</p>", "Fernando Javier García Hurtado", "a");
        }
        ?>
    </body>
</html>