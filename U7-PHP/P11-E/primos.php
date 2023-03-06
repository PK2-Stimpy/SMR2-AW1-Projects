<html>
    <head>
        <title>Primos</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    </head>

    <body>
        <?php
        const MAX_PRIMOS = 500;
        $primos = array('2');
        $num = $primos[count($primos) - 1];
        $isp = true;
        
        while(count($primos) < MAX_PRIMOS) {
            $arrCount = count($primos);
            $num++;

            for($i = 0,$isp=true; $i < $arrCount; $i++)
                if($num % $primos[$i] == 0)
                    $isp = false;
            if($isp)
                $primos[$arrCount] = $num;
        }

        echo "Num. Primos: <br>";
        foreach($primos as $primo)
            echo " - $primo<br>";
        ?>
    </body>
</html>