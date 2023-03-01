<html>
    <head>
        <title>Restaurante</title>
    </head>

    <body>
        <?php
        $precio_menu = 5.43;
        $comensales = 5;
        const $descuento = 10/100; // 0.1

        $descuento_menu = $precio_menu*$descuento;
        $total_menu = $precio_menu-$descuento_menu;
        $total = $total_menu*$comensales;

        echo("El precio del menú es " . $precio_menu . '€<br>');
        echo('El descuento por menú es de ' . $descuento_menu . '€<br>');
        echo('El total calculado para el número de comensales es de ' . $total . '€<br>');

        $ninios = 2;
        const $descuento_ninios = 20/100; // 0.2
        $total_menu = $precio_menu*$descuento_ninios;
        $total = $total_menu*$ninios;

        echo("El total calculado para el menú de los niños es de $total €.<br>");

        $celiaco = false;
        $lactosa = true;

        $ccl = ($celiaco && $lactosa)?"Sí":"No";
        $csl = ($celiaco && !$lactosa)?"Sí":"No";
        $cocl = ($celiaco || $lactosa)?"Sí":"No";

        echo("Menús para celiacos con lactosa: $ccl<br>");
        echo("Menús para celiacos sin lactosa: $csl<br>");
        echo("Menús para celiacos o con lactosa: $cocl<br>");
        ?>
    </body>
</html>