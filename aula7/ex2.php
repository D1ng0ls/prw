<?php
    $alunos=array('Eduardo', 'José', 'Pedro', 'Rogério');
    
    for ($i=0; $i < count($alunos); $i++) {
        echo 'Aluno: '.$i."<br>Nome: ".$alunos[$i]."<br><br>";
    }
    echo "<hr>";

    sort($alunos);
    for ($i=0; $i < count($alunos); $i++) {
        echo 'Aluno: '.$i."<br>Nome: ".$alunos[$i]."<br><br>";
    }
    echo "<hr>";

    $indice = array_search('Pedro', $alunos);
    if ($indice) {
        echo "Aluno encontrado!<br>Posição: ".$indice;
    } else {
        echo "Aluno não encontrado!";
    }
    echo "<br><br><hr>";

    print_r($alunos);
    echo "<br>";

    unset($alunos[2]);
    print_r($alunos);
    echo "<br>";
    
    $alunos=array_values($alunos);
    print_r($alunos);
?>