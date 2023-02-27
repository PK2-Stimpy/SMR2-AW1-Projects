<html>
    <head>
        <title>Trabajando con constantes</title>
    </head>

    <body>
        <?php
        define("Vr_0", 0.42215773311582662702); // Volumen del Tetraedro de Reuleaux
        define("Vc_0", 1.26408473530530111307); // Constante de Vardi
        define("AfM_0", 1.5065918849); // Área del fractal de Mandelbrot
        define("S1_0", 1.09317045919549089396); // Constante de Smarandache
        define("q_0", 1.78723165018296593301); // Constante de Komornik

        const Vr_1 = 0.42215773311582662702;
        const Vc_0 = 1.26408473530530111307;
        const AfM_0 = 1.5065918849;
        const S1_0 = 1.09317045919549089396;
        const q_0 = 1.78723165018296593301;

        // Vr
        echo 'Vr = ';
        echo Vr_0;
        echo ' & ';
        echo constant('Vr_1');

        // Vc
        echo 'Vc = ';
        echo Vc_0;
        echo ' & ';
        echo constant('Vc_1');

        // AfM
        echo 'AfM = ';
        echo AfM_0;
        echo ' & ';
        echo constant('AfM_1');

        // S1
        echo 'S1 = ';
        echo S1_0;
        echo ' & ';
        echo constant('S1_1');

        // q
        echo 'q = ';
        echo q_0;
        echo ' & ';
        echo constant('q_1');
        ?>
    </body>
</html>