<html>
    <head>
        <title>Trabajando con constantes</title>
    </head>

    <body>
        <?php
        $nombre = "Nacho";
        $edad = 20;
        $casado = false;
        $nota = 7.8;
        $aficiones = ['correr', 'leer'];
        $apellidos = "pérez pérez";
        $provincia = "Valencia";
        $graduado = true;

        echo("nombre = $nombre " . gettype($nombre) . "<br>");
        echo("edad = $edad " . gettype($edad) . "<br>");
        echo("casado = $casado " . gettype($casado) . "<br>");
        echo("nota = $nota " . gettype($nota) . "<br>");
        echo("aficiones = $aficiones " . gettype($aficiones) . "<br>");
        echo("apellidos = $apellidos " . gettype($apellidos) . "<br>");
        echo("provincia = $provincia " . gettype($provincia) . "<br>");
        echo("graduado = $graduado " . gettype($graduado) . "<br>");

        define("Vr_0", 0.42215773311582662702); // Volumen del Tetraedro de Reuleaux
        define("Vc_0", 1.26408473530530111307); // Constante de Vardi
        define("AfM_0", 1.5065918849); // Área del fractal de Mandelbrot
        define("S1_0", 1.09317045919549089396); // Constante de Smarandache
        define("q_0", 1.78723165018296593301); // Constante de Komornik

        const Vr_1 = 0.42215773311582662702;
        const Vc_1 = 1.26408473530530111307;
        const AfM_1 = 1.5065918849;
        const S1_1 = 1.09317045919549089396;
        const q_1 = 1.78723165018296593301;

        // Vr
        echo 'Vr = ';
        echo Vr_0;
        echo ' & ';
        echo constant('Vr_1');
        echo '<br>';

        // Vc
        echo 'Vc = ';
        echo Vc_0;
        echo ' & ';
        echo constant('Vc_1');
        echo '<br>';

        // AfM
        echo 'AfM = ';
        echo AfM_0;
        echo ' & ';
        echo constant('AfM_1');
        echo '<br>';

        // S1
        echo 'S1 = ';
        echo S1_0;
        echo ' & ';
        echo constant('S1_1');
        echo '<br>';

        // q
        echo 'q = ';
        echo q_0;
        echo ' & ';
        echo constant('q_1');
        echo '<br>';

        // P4 \\
        $celiaco = false;
        $lactosa = true;

        echo "Menus: <br>";
        echo ""
        ?>
    </body>
</html>