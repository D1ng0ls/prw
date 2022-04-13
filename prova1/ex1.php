<?php
    $salario=1000;

    if($salario <= 300) {
        $salarioNovo = $salario*1.5;
    } else {
        $salarioNovo = $salario*1.3;
    }

    echo "Salário atual: R$".number_format($salario, 2)."<br>Salário reajustado: R$".number_format($salarioNovo, 2);
?>