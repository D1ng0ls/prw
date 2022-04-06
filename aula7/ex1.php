<?php
    $hoje=date("w");
    $diadasemana[0] = "Domingo";
    $diadasemana[1] = "Segunda";
    $diadasemana[2] = "Terça";
    $diadasemana[3] = "Quarta";
    $diadasemana[4] = "Quinta";
    $diadasemana[5] = "Sexta";
    $diadasemana[6] = "Sábado";

    echo "Hoje é ".$diadasemana[$hoje];
?>