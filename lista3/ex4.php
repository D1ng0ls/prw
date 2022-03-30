<?php
    $data = date("m-d-Y");
    $dia = substr($data,3,2);
    $mes = substr($data,0,2);
    $ano = substr($data,6,4);
    
    echo "Dia: ".$dia."<br>Mês: ".$mes."<br>Ano: ".$ano;
?>