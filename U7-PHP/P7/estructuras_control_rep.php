<html>
    <head>
        <title>Asociación de matemáticas</title>
    </head>

    <body>
        <?php
        echo"<h1>PAR</h1>";
        $contador = 0;
        while($contador <= 50) {
            $contador++;
            if($contador%2==0)
                echo($contador . "<br>");
        }

        echo"<h1>IMPAR</h1>";
        $contador = 0;
        do {
            $contador++;
            if($contador%2!=0)
                echo($contador . "<br>");
        } while($contador <= 50);

        echo"<h1>CONTADOR PAR</h1>";
        $contador = 0;
        $suma = 0;

        for($contador = 1; $contador <= 100; $contador++)
            $suma+=$contador;
        echo("Resultado: $contador");
        ?>
    </body>
</html>