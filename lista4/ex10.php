<?php
    $p = $_GET["txtTamP"];
    $m = $_GET["txtTamM"];
    $g = $_GET["txtTamG"];
    $total = $p*10 + $m*12 + $g*15;

    echo "Valor total arrecadado: <span style='color:blue'>R$".$total.",00</span>";
?>