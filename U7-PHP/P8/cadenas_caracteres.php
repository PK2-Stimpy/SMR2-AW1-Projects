<html>
    <head>
        <title>Farmacia</title>
    </head>

    <body>
        <?php
        $bienvenida = "Bienvenido a la Farmacia de Eusebio Ramón";
        $usuario = "Jose Antonio";
        $saludo = "Buenas, Sr./Sra. $usuario";
        $tarifa_reparto = "10€";
        $precio_medicamento = "13€";

        echo "$bienvenida <br>";
        echo "¿Cuál es tu nombre? <br>";
        echo "$saludo <br>";
        echo "La tarifa de reparto del medicamento es de $tarifa_reparto. <br>";
        echo "El precio del medicamento es de $precio_medicamento. <br>";

        echo "<h1>Amplicación</h1>";
        $palabra_bienvenido = "Bienvenido";
        $palabra_bienvenido[9] = 'a';

        $bienvenida_mayus = strtoupper($bienvenida);
        $saludo_minus = strtolower($saludo);
        $saludo_trim = trim($saludo);
        $bienvenida_pos = strpos($bienvenida, 've');
        $tarifas_comparacion = strcmp($tarifa_reparto, $precio_medicamento);
        $bienvenido_a = $palabra_bienvenido;
        $ascii_b = ord($bienvenida[9]);

        echo "$bienvenida_mayus<br>$saludo_minus<br>$saludo_trim<br>$bienvenida_pos<br>$tarifas_comparacion<br>$bienvenido_a<br>$ascii_b<br>";
        ?>
    </body>
</html>