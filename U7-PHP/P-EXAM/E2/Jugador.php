<!--
    ESTE ARCHIVO DEBE COLOCARSE EN LA MISMA
        CARPETA QUE EL ARCHIVO:
            - 'baloncesto.html'
-->

<html>
    <head>
        <title>Ejercicio 2</title>
        
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <h1>Ejercicio 2</h1>
        <?php
        // ¿¿¡¡ucfirst!!??
        // - ucfirst es una función que pone la primera letra
        //      de una cadena de texto en mayúsculas.
        // - strtolower simplemente, pone una cadena de texto
        //      en minúsculas.
        // He usado ambas funciones ya que, una me pone todo
        //  en minúsculas y la otra pone la primera letra en
        //  mayúsculas, del texto en minúsculas.
        $nombre = ucfirst(strtolower($_POST['nombre']));
        // - strtoupper simplemente transforma una cadena de
        //      texto a mayúsculas(toda la cadena).
        $apellidos = strtoupper($_POST['apellidos']);
        $pos = $_POST['pos'];
        $equipo = $_POST['equipo'];

        // Esto es un condicional en línea(en verdad son 2).
        // Si la posición es Base, el color va a ser 'red',
        //  si la posición es Altero, el color va a ser 'blue',
        //  si no es ninguna de las anteriores(osea que es Pivot),
        //      el color va a ser 'green'.
        $color = (
            $pos=="Base" ?      "red" : (   // Si es Base
            $pos=="Altero" ?    "blue" :    // Si es Altero
                                "green"));  // Si es Pivot
        
        // Creación de un div para meter dentro todo y ponerle
        //  el color que hemos especificado a todo.
        echo "<div style='color: $color;'>";

        echo "<p><b>Nombre:</b> $nombre</p>";
        echo "<p><b>Apellidos:</b> $apellidos</p>";
        printf("<p><b>Posición: </b>%s</p>", $pos);
        printf("<p><b>Equipo: </b>%s</p>", $equipo);

        echo "</div>";
        ?>
    </body>
</html>