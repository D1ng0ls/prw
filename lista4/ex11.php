<?php
    $nome = $_POST["txtNome"];
    $prontuario = $_POST["txtProntuario"];
    $idade = $_POST["txtIdade"];
    $periodo = $_POST["selPeriodo"];
    $modulo = $_POST["selModulo"];
    $erro = false;

    if (empty($nome)){
        $erro = true;
    }

    if (empty($prontuario)) {
        $erro = true;
    }

    if (empty($idade) || ($idade<15 || $idade>75)) {
        $erro = true;
    }

    if ($periodo == "Selecionar...") {
        $erro = true;
    }

    if ($modulo == "Selecionar...") {
        $erro = true;
    }

    if ($erro) {
        echo "Preencha os campos corretamente!!";
    } else {
        echo "Nome: ".$nome.
            "<br>Prontuário: ".$prontuario.
            "<br>Idade: ".$idade.
            "<br>Período: ".$periodo.
            "<br>Módulo: ".$modulo;
    }
?>