<?php
    $nome = $_POST["txtNome"];
    $nota1 = $_POST["txtNota1"];
    $nota2 = $_POST["txtNota2"];
    $freq = $_POST["txtFreq"];
    $media = ($nota1 + $nota2)/2;

    echo
        "Aluno: ".$nome.
        "<br>Frequência: ".$freq.
        "<br>Notas: ".$nota1.", ".$nota2.
        "<br>Média: ".$media;
     
    if ($media<=5) {
        echo "<br><br><span style='color:red'>Reprovado por nota!</span>";
    } else if ($freq<75) {
        echo "<br><br><span style='color:red'>Reprovado por frequência!</span>";
    } else if ($media>5 && $freq>=75) {
        echo "<br><br><span style='color:green'>Aprovado!</span>";
    }
?>