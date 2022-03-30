<?php
    $data = date("m-d-Y");
    $semana = date("w");
    
    echo "Data: ".$data."<br>Dia da semana: ";

    switch ($semana) {
        case 0: echo "<span style='color:blue'>Domingo<span>"; break;
        case 1: echo "<span style='color:blue'>Segunda<span>"; break;
        case 2: echo "<span style='color:blue'>Terça<span>"; break;
        case 3: echo "<span style='color:blue'>Quarta<span>"; break;
        case 4: echo "<span style='color:blue'>Quinta<span>"; break;
        case 5: echo "<span style='color:blue'>Sexta<span>"; break;
        case 6: echo "<span style='color:blue'>Sábado<span>"; break;
    }
?>