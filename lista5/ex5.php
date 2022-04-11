<?php
    $texto = $_GET['txtTexto'];
    $texto = explode(' ', $texto);

    echo "<table border='1' style='text-align: center;'><tr><th colspan='2'>Palavras quebradas</th></tr>";
    for ($i=0; $i<count($texto); $i++){
        echo "<tr>
            <td>".$i."</td>
            <td>".$texto[$i]."</td></tr>";
    }
    echo "</table><br><br>";

    sort($texto);
    echo "<table border='1' style='text-align: center;'><tr><th colspan='2'>Palavras quebradas (crescente)</th></tr>";
    for ($i=0; $i<count($texto); $i++){
        echo "<tr>
            <td>".$i."</td>
            <td>".$texto[$i]."</td></tr>";
    }
    echo "</table><br><br>";

    echo "<table border='1' style='text-align: center;'><tr><th colspan='2'>Palavras quebradas (maiúscula)</th></tr>";
    for ($i=0; $i<count($texto); $i++){
        echo "<tr>
            <td>".$i."</td>
            <td>".strtoupper($texto[$i])."</td></tr>";
    }
    echo "</table><br><br>";
?>