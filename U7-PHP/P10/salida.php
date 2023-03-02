<html>
    <head>
        <title>Empresa de informática</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <?php
            $cpu = $_POST['cpu'];
            $ram = $_POST['ram'];
            $disco = $_POST['disco'];
            $monitor = $_POST['monitor'];
            $teclado = $_POST['teclado'];
            $raton = $_POST['raton'];
            $impresora = $_POST['impresora'];

            $texto_monitor = sprintf("Se ha seleccionado el monitor de %s <br>", $monitor);
            $texto_teclado = sprintf("Se ha seleccionado el teclado de %s <br>", $teclado);
            $texto_raton = sprintf("Se ha seleccionado el ratón de %s <br>", $raton);

            printf("Se ha seleccionado la CPU de %s <br>", $cpu);
            printf("Se ha seleccionado la RAMA de %s <br>", $ram);
            printf("Se ha seleccionado el disco de %s <br>", $disco);
            print $texto_monitor;
            print $texto_teclado;
            print $texto_raton;
            echo "Se ha seleccionado la impresora de $impresora <br>";
        ?>
    </body>
</html>