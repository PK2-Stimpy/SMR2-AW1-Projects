<?php
$ip = $_SERVER['REMOTE_ADDR'];
$name = $_GET['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sedeño busca esposo</title>
</head>
<body>
    <center>
        <h1>SEDEÑO BUSCA ESPOSO</h1>
        <h3>El esposo que busca se llama: <?php echo($name); ?>.</h3>
        <?php
            if($name == "Daniel Pascual")
                echo("<h4>ESPERA! Eres tu? Sedeño te está buscando! Corre y dale un morreo!</h4>");
        ?>
    </center>
</body>
</html>