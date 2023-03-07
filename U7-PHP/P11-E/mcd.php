<html>
    <head>
        <title>Máximo común divisor con 2 números</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <?php
        const NUM_1 = 18490;
        const NUM_2 = 91823;
        echo("NUM_1: " . NUM_1 . "; NUM_2: " . NUM_2 . "<br>");
        
        $min = NUM_1;
        $max = NUM_2;
        if(NUM_1 > NUM_2) {
            $min = NUM_2;
            $max = NUM_1;
        }
        echo "MIN: $min; MAX: $max<br>";

        $div = 1;
        for($i = $min; $i > 1; $i--) {
            $dmin = NUM_1 % $i;
            $dmax = NUM_2 % $i;

            if($dmin == 0 && $dmax == 0) {
                $div = $i;
                break;
            }
        }


        echo "DIV: $div<br>";
        ?>
    </body>
</html>