<html>
    <head>
        <title>Red Social</title>
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

        echo "Usuario: $usuario <br>";
        echo "Contraseña: $password <br>";
        echo "Tratamiento: $tratamiento <br>";
        echo "Nombre: $nombre <br>";
        echo "Apellidos: $apellidos <br>";
        echo "Edad: $edad <br>";
        echo "Tipo de cuenta: $tipo <br>";
        ?>
    </body>
</html>