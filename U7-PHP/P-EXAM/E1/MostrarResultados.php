<!--
    ESTE ARCHIVO DEBE COLOCARSE EN LA MISMA
        CARPETA QUE EL ARCHIVO:
            - 'numeros.html'
-->

<html>
    <head>
        <title>Ejercicio 1</title>
        
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <h1>Ejercicio 1</h1>
        <?php
        // Ya se que es una exageración los comentarios que
        //  he puesto, pero, 1 punto es 1 punto.
        //  - "Hasta 1 punto por un código comentado con detalle."
        //
        // Primero obtenemos los 2 números del formulario.
        // Ya que el formulario le hemos especificado que
        //  use el método POST, uso la array de $_POST.
        $x1 = $_POST['num1'];
        $x2 = $_POST['num2'];

        // La función 'empty' sirve para comprobar si el
        //  valor del argumento que le pasamos es nulo,
        //  o su valor equivale a 0.
        // Le paso como argumento el elemento 'operacion1'
        //  de la array _POST, para que así, me compruebe
        //  si el valor está vacio, y antes de ponerlo, a
        //  la función, le pongo el símbolo de exclamación
        //  para que así, se invierta y sea verdadera cuando
        //  el valor no es vacio.
        if(!empty($_POST['operacion1'])) {
            echo "<h3>Operación 1:</h3>";

            // Primero defino 2 variables con el supuesto valor
            //  mínimo y el supuesto valor máximo.
            $min = $x1;
            $max = $x2;

            // Compruebo si el "supuesto valor mínimo" es mayor
            //  que el "supuesto valor máximo".
            if($min > $max) {

                // Si lo es, establezco 2do valor(supuesto máximo)
                //  como el mínimo, y viceversa.
                $min = $x2;
                $max = $x1;
            }

            // Inicializo la variable mcd.
            $mcd = 1;

            // Un bucle desde el valor mínimo, hasta el 1.
            for($i = $min; $i > 1; $i--) {
                // Defino 2 variables que son el resto de la división
                //  entre el número(primero o segundo), y el número 
                //  actual del bucle.
                $div_x1 = $x1 % $i;
                $div_x2 = $x2 % $i;

                // Si los dos números dan resto 0, eso significa que
                //  los 2 números son divisibles por el número del
                //  buclo 'i'.
                if($div_x1 == 0 && $div_x2 == 0) {
                    // Al ser los 2 divisibles, hemos encontrado
                    //  el MCD!!!!
                    $mcd = $i;

                    // Al encontrarlo, ya nos podemos salir del bucle.
                    break;
                }
            }

            // Uso echo y printf, ya que:
            // - "Hasta 1 punto por la variedad en el uso de estructuras 
            //    de control y de formas de mostrar los datos en pantalla."
            echo "<p>El MCD de los números $x1 y $x2 es: $mcd</p>";
            printf("<p>El número más grande de entre los números $x1 y $x2 es: $max</p>");

            // Casi se me olvida, los números primos xddddd
            $primos = array(2);
            $num = $primos[count($primos)-1];
            
            while($primos[count($primos)-1] < $max) {
                $countPrimos = count($primos);
                $primo = true;
                $num++;

                for($i = 0; $i < count($primos); $i++)
                    if($num % $primos[$i] == 0)
                        $primo = false;
                if($primo)
                    $primos[$countPrimos] = $num;
            }

            echo "<p>Primos a partir de $mcd hasta $max:</p>";
            foreach ($primos as $primo) {
                if($primo >= $mcd && $primo <= $max)
                    echo "<p>- $primo</p>";
            }
        }

        if(!empty($_POST['operacion2'])) {
            echo "<h3>Operación 2:</h3>";
            printf("<p>Mi nombre es %s y solamente tengo que implementar la opción %s.</p>", "Fernando Javier García Hurtado", "a");
        }
        ?>
    </body>
</html>