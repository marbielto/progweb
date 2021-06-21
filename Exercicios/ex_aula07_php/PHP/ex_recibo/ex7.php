<?php
    // Marcos Gabriel Barreto 102409
    $recibo1 = "****RECIBO DO PROFESSOR****\n";
    $usuario1 = "Devolver em 10 dias.\n";
    $livro = "Livro: PHP-Completo\n";
    $recibo2 = "****RECIBO DO ALUNO****\n";
    $usuario2 = "Devolver em 3 dias.\n";

    $texto1 = "$recibo1\n $livro\n $usuario1";
    echo nl2br($texto1);

    $texto2 = "\n$recibo2\n $livro\n $usuario2";
    echo nl2br($texto2);




?>