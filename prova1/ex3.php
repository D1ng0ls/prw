<?php
    $peso = $_GET['txtPeso'];
    $altura = $_GET['txtAltura'];
    $imc = $peso/pow($altura, 2);

    echo "IMC= ".number_format($imc, 2);

    if($imc<17) {
        echo "<br>Muito abaixo do <i>peso</i>";
    } else if($imc>=17 && $imc<18.5) {
        echo "<br>Abaixo do <i>peso</i>";
    } else if($imc>=18.5 && $imc<25) {
        echo "<br><i>Peso</i> normal";
    } else if($imc>=25 && $imc<30) {
        echo "<br>Acima do <i>peso</i>";
    } else if($imc>=30 && $imc<35) {
        echo "<br><i>Obesidade</i> I";
    } else if($imc>=35 && $imc<40) {
        echo "<br><i>Obesidade</i> II";
    } else {
        echo "<br><i>Obesidade</i> III";
    }
?>