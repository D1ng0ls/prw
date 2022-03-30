<?php
    $palavra="eduardo";
    $nova='';
    $tamanhoP = strlen($palavra);

    echo "Palavra escolhida: ".$palavra."<br>Palavra gerada: <span style='color:red'>";

    for ($i=1; $i <= $tamanhoP; $i++) {
        echo substr($palavra,-$i,1); 
    }

    echo "</span>";
?>