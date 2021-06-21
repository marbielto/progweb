<?php
    if(!empty($_POST)){
        $_POST['nome'];

        $_POST['ra'];

        $_POST['curso'];

        $_POST['ma1'];

        $_POST['mb1'];

        $_POST['p1'];

        $_POST['ma2'];

        $_POST['mb2'];

        $_POST['p2'];

        $_POST['presenca'];
    }

    $a1 = 0.2*($_POST['ma1']) + 0.1*($_POST['mb1']) + 0.7*($_POST['p1']);
    $a2 = 0.2*($_POST['ma2']) + 0.1*($_POST['mb2']) + 0.7*($_POST['p2']);

    $media = ($a1 + (2*$a2)) / 3;


    echo "<b>"."DADOS DO ALUNO"."<b>"."<br>";
    echo "Nome: ".$_POST['nome']."<br>";
    echo "Curso: ".$_POST['curso']."<br>";
    echo "Média: ".$media."<br>";
    echo "Presença: ".$_POST['presenca']."%<br>";

    if($_POST['presenca']>=75 && $media>=5)
    {
        echo "Situação: Aprovado<br>";
    }elseif($_POST['presenca']>=75 && $media<5 && $media>3)
    {
        echo "Situação: RE<br>";

    }elseif($_POST['presenca']>=75 && $media>3)
    {
        echo "Situação: Reprovado por Nota.<br>";

    }elseif($_POST['presenca']<75)
    {
        echo "Situação: Reprovado por falta.<br>";

    }

    
?>
