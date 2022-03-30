<?php
    $num1 = $_POST["txtNum1"];
    $num2 = $_POST["txtNum2"];
    $opcao = $_POST["optOperacao"];

    echo "<span style='color:green'>Resultado: ";

    if ($opcao == "soma") {
        echo ($num1+$num2);
    } else if ($opcao == "sub") {
        echo ($num1-$num2);
    } else if ($opcao == "div") {
        echo ($num1/$num2);
    } else if ($opcao == "mult") {
        echo ($num1*$num2);
    }

    echo "</span>";
?>