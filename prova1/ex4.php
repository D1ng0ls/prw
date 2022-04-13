<?php
    $nome = $_POST["txtNome"];
    $estado = $_POST["selEstado"];
    $cpf = $_POST["txtCPF"];
    $rg = $_POST["txtRG"];
    $sexo = $_POST["optSexo"];
    $saldo = $_POST["txtSaldo"];
    $total = $_POST["txtTotal"];

    echo "<b><u>Dados cadastrados: </u></b>".
        "<br>Nome: ".$nome.
        "<br>Estado: ".$estado.
        "<br>CPF: ".$cpf.
        "<br>RG: ".$rg.
        "<br>Sexo: ".$sexo.
        "<br>Saldo: ".$saldo.
        "<br>Total da compra: ".$total;

    echo "<hr><br>";

    if (empty($nome)){
        $nome = "<span style='color:red'>Preencha o campo Nome</span>";
    }
    if (empty($cpf)){
        $cpf = "<span style='color:red'>Preencha o campo CPF</span>";
    }
    if (empty($rg)){
        $rg = "<span style='color:red'>Preencha o campo RG</span>";
    }
    if ($saldo<$total) {
        $saldo = "<span style='color:red'>Saldo Insuficiente para Concluir Compra!</span>";
    } else {
        $saldo -= $total;
    }

    echo "<b><u>Dados validados: </u></b>".
        "<br>Nome: ".$nome.
        "<br>Estado: ".$estado.
        "<br>CPF: ".$cpf.
        "<br>RG: ".$rg.
        "<br>Sexo: ".$sexo.
        "<br>Novo saldo: ".$saldo.
        "<br>Total da compra: ".$total;

    echo "<hr><br>";
?>