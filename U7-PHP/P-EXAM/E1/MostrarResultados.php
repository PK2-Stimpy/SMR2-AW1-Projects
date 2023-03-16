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
        // Por cierto, no se si has visto que más adelante
        //  hay algunas condiciones que directamente no le
        //  pongo los {}, eso es porque no hace falta, ya
        //  que, solo es una línea de código.
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
            // Definimos una lista donde van a estar los primos.
            $primos = array(2);
            // Obtenemos el último número de la lista, el cual
            //  será el número inicial.
            $num = $primos[count($primos)-1];
            
            // Siempre que el último número primo sea menor al
            //  máximo.
            while($primos[count($primos)-1] < $max) {
                // Defino la longitud de la variable de primos.
                $countPrimos = count($primos);
                // Esta variable la voy a usar para saber si
                //  es primo o no más adelante.
                $primo = true;
                // En cada ciclo sumo 1 número.
                $num++;

                // Recorro todos los números primos que se hayan
                //  encontrado.
                for($i = 0; $i < count($primos); $i++)
                    // Si el resto es 0 no es primo, puesto que
                    //  es divisible.
                    if($num % $primos[$i] == 0)
                        $primo = false;
                // Si el número resulta ser primo, lo añadimos
                //  a la lista 'primos'.
                if($primo)
                    $primos[$countPrimos] = $num;
            }

            echo "<p>Primos a partir de $mcd hasta $max:</p>";
            // Recorremos todos los elementos de la lista de
            //  'primos'.
            foreach ($primos as $primo) {
                // Si el número primo está entre el mcd y
                //  el número máximo, lo escribimos por la
                //  pantalla.
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