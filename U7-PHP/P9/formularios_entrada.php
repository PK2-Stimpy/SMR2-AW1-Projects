<html>
    <head>
        <title>Red Social</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <?php
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $tratamiento = $_POST['tratamiento'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $tipo = $_POST['tipo'];

        $aficion_jugar = $_POST['aficion_jugar'];
        $aficion_montarpatin = $_POST['aficion_montarpatin'];
        $aficion_montarcaballo = $_POST['aficion_montarcaballo'];
        $aficion_porno = $_POST['aficion_porno'];
        $aficion_pescar = $_POST['aficion_pescar'];

        $vehiculo_coche = $_POST['vehiculo_coche'];
        $vehiculo_moto = $_POST['vehiculo_moto'];
        $vehiculo_patinete = $_POST['vehiculo_patinete'];
        $vehiculo_bicicleta = $_POST['vehiculo_bicicleta'];
        $vehiculo_helicopteroapache = $_POST['vehiculo_helicopteroapache'];

        $descripcion = $_POST['descripcion'];

        echo "Usuario: $usuario <br>";
        echo "Contraseña: $password <br>";
        echo "Tratamiento: $tratamiento <br>";
        echo "Nombre: $nombre <br>";
        echo "Apellidos: $apellidos <br>";
        echo "Edad: $edad <br>";
        echo "Tipo de cuenta: $tipo <br>";

        if(!empty($aficion_jugar))
            echo "Afición: Jugar <br>";
        if(!empty($aficion_montarpatin))
            echo "Afición: Montar Patín <br>";
        if(!empty($aficion_montarcaballo))
            echo "Afición: Montar Caballo <br>";
        if(!empty($aficion_porno))
            echo "Afición: Ver porno gay <br>";
        if(!empty($aficion_pescar))
            echo "Afición: Pescar <br>";

        if(!empty($vehiculo_coche))
            echo "Vehículo: Coche <br>";
        if(!empty($vehiculo_moto))
            echo "Vehículo: Moto <br>";
        if(!empty($vehiculo_patinete))
            echo "Vehículo: Patinete <br>";
        if(!empty($vehiculo_bicicleta))
            echo "Vehículo: Bicicleta <br>";
        if(!empty($vehiculo_helicopteroapache))
            echo "Vehículo: Helicóptero apache de combate <br>";
        echo "Descripción grupos: $descripcion <br>";

        $idiomas_noticias = $_POST['idiomas'];
        $mensajes_portada = $_POST['mensajes'];
        for($i = 0; $i < count($idiomas_noticias); $i++)
            echo("Idioma de noticia: " . $idiomas_noticias[$i]);
        
        echo("Mensajes portada: $mensajes_portada <br>");
        ?>
    </body>
</html>