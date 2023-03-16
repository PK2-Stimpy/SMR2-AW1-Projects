<html>
    <head>
        <title>Ejercicio 2</title>
        
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <h1>Ejercicio 2</h1>
        <?php
        $nombre = ucfirst(strtolower($_POST['nombre']));
        $apellidos = strtoupper($_POST['apellidos']);
        $pos = $_POST['pos'];
        $equipo = $_POST['equipo'];

        $color = (
            $pos=="Base" ?      "red" : (   // Si es Base
            $pos=="Altero" ?    "blue" :    // Si es Altero
                                "green"));  // Si es Pivot
        echo "<div style='color: $color;'>";

        echo "<p><b>Nombre:</b> $nombre</p>";
        echo "<p><b>Apellidos:</b> $apellidos</p>";
        printf("<p><b>Posición: </b>%s</p>", $pos);
        printf("<p><b>Equipo: </b>%s</p>", $equipo);

        echo "</div>";
        ?>
    </body>
</html>