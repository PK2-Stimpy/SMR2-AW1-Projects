<?php
$ip = $_SERVER['REMOTE_ADDR'];
$name = $_POST['name'];

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
        <?php
            if($name == "Daniel Pascual")
                echo("<h4>ESPERA! Eres tu? Sedeño te está buscando! Corre y dale un morreo!</h4>");
            else echo("<h4>No eres el que busca sedeño :(</h4>");
        ?>
    </center>
</body>
</html>