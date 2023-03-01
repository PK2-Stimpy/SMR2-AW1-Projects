<html>
    <head>
        <title>Asociación de matemáticas</title>
    </head>

    <body>
        <?php
        $contador = 0;
        while($contador <= 50) {
            $contador++;
            if($contador%2==0)
                echo($contador . "<br>");
        }

        $contador = 0;
        do {
            $contador++;
            if($contador%2!=0)
                echo($contador . "<br>");
        } while($contador <= 50);
        ?>
    </body>
</html>