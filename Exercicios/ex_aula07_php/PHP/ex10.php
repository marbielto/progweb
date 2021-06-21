<?php

    $chico = 1.50;
    $juca = 1.10;
    $x = 0;

    while($juca < $chico) {
        $chico = $chico + 0.2;
        $juca = $juca + 0.3;
        $x ++;
    }

    echo "Serão necessários $x anos para o Juca ser maior que o Chico.";

?>