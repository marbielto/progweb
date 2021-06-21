<?php
    //Exemplo1
    echo "Executando pelo servidor PHP!";
    echo "<h2 align='center'> Centralizado </h2>";

    print('Comando print');

?>

<html>
    <body>
        <?php
        //Exemplo2
            $cidade = "Araras";
            $estado = "SP";
            $idade = 180;
            $frase1 = "A cidade de $cidade esta no estado de $estado";
            $frase2 = "$cidade tem mais de $idade anos";
            echo "<h3>$frase1 </h3>";
            echo "<h4>$frase2 </h4>";
        ?>
    </body>
</html>

<?php  
    //Exemplo3
    $teste="Brasil";
    $php = '--- $teste ---<br>';
    echo $php;
    $php ="--- $teste ---";
    echo $php;
?>

<?php
    //Exemplo4
    $a = 100;
    $b = 10;
    if($a > $b){
        echo "a>b";
    }elseif($a<$b){
        echo("a<b");
    }else{
        echo("a=b");
    }
?>

<?php
    //Exemplo5
    echo("<br>");
    echo("Exemplo com if");
    echo("<br>");
    $i=1;
    if($i==0){
        echo("i igual a 0");
    }elseif($i==1){
        echo("i igual a 1");
    }elseif($i==2){
        echo("i igual a 2");
    }

    echo("<br>");
    echo("Exemplo com Switch");
    echo("<br>");

    switch($i){
        case 0:
            echo("i igual a 0");
            break;
        case 1:
            echo("i igual a 1");
            break;
        case 2:
            echo("i igual a 2");
            break;
    }
?>

<?php
    //Exemplo6
    for($a=1;$a<15;$a++)
    {
        echo " ".$a;
    }
?>

<?php
 //Exemplo7
    $a=1;
    while($a<15)
        echo " ".$a++;
?>


<?php
    //Exemplo8
    $cor[1] = "vermelho";
    $cor[2] = "verde";
    $cor[3] = "azul";
    $cor["teste"] = 1;
    echo $cor[1]."<br>";
    echo $cor[2]."<br>";
    echo $cor["teste"]."<br>";
?>

<?php
    $cor[1] = "vermelho";
    $cor[2] = "verde";
    $cor[3] = "azul";
    $cor["teste"] = 1;
    foreach ( $cor as $valor )
        echo "<br>".$valor;
?>

<?php
    $car = array
    (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    for($i=0;$i<4;$i++)
    {
        echo "<br>";
        for($j=0;$j<3;$j++)
            echo $car[$i][$j]." ";
    }
?>