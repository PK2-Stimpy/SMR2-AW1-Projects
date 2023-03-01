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
        echo("Resultado: $suma<br>");

        echo"<h1>MESES</h1>";
        $meses_esp = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $meses_eng = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

        echo"<h2>ESPAÑOL</h2>";
        foreach ($meses_esp as $mes)
            echo("$mes <br>");
        
        echo"<h2>INGLÉS</h2>";
        foreach ($meses_eng as $mes)
            echo("$mes <br>");
        ?>
    </body>
</html>