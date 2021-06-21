<?php
    $a = 37;
    if($a % 10 == 0)
    {
        echo "É divísel por 10";
    }
    elseif($a % 2 == 0)
    {
        echo "É divísel por 2";
    }
    elseif($a % 5 == 0)
    {
        echo "É divísel por 5";
    }
    elseif($a % 10 != 0 and $a % 2 != 0 and $a % 5 != 0 )
    {
        echo "Não é divísel por 10, 2 e 5";
    }
?>
