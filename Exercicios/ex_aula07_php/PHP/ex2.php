<?php 
    $a = 1;
    $b = 2;
    $soma = $a + $b;
    if($soma > 20)
    {
        $resultado = $soma+8;
        echo $resultado;
    }
    elseif($soma <= 20)
    {
        $resultado = $soma-5;
        echo $resultado;
    }
?>