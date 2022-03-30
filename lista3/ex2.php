<?php
    $palavra = "eduardo santos nunes da silva";
    $tamanhoP = strlen($palavra);

    echo "A palavra/frase digitada: <span style='color:blue'>".$palavra."</span>";

    for($i=0; $i < $tamanhoP; $i++) {
        switch ($palavra[$i]) {
            case 'a': $palavra[$i] = "x"; break;
            case 'e': $palavra[$i] = "x"; break;
            case 'i': $palavra[$i] = "x"; break;
            case 'o': $palavra[$i] = "x"; break;
            case 'u': $palavra[$i] = "x"; break;
            default: $palavra[$i] = $palavra[$i]; break;
        }
    }

    echo "<br>A palavra/frase gerada: <span style='color:red'>".$palavra."</span>";

?>