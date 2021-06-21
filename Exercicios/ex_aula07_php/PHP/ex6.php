<?php
   $mes = [
    "Janeiro", "Fevereiro",
    "Março", "Abril",
    "Maio", "Junho",
    "Julho", "Agosto",
    "Setembro", "Outubro",
    "Novembro", "Dezembro"];
  
    $numMes = 10;
  
    if($numMes >=1 && $numMes <=12){
      echo $mes[$numMes - 1];
    }else{
      echo "Mês inválido";
    }
?>