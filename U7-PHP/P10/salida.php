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
            $extras = $_POST['extras'];

            printf("Se ha seleccionado la CPU de %s <br>", $cpu);
            printf("Se ha seleccionado la RAMA de %s <br>", $ram);
            printf("Se ha seleccionado el disco de %s <br>", $disco);
            foreach($extras as $extra)
                printf("Extra seleccionado %s<br>", $extra);
        ?>
    </body>
</html>