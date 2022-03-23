<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" name="form">
            <label>Digite um número de 1 a 12 </label><input type="number" min="1" max="12" value="1" name="f_number">
            <input type="submit" name="Enviar">
        </form>
    </body>
</html>

<?php
$num=0;

if (isset($_POST["f_number"])){
    $num=$_POST["f_number"];
}

switch($num){
    case 1: echo "<br>Janeiro"; break;
    case 2: echo "<br>Fevereiro"; break;
    case 3: echo "<br>Março"; break;
    case 4: echo "<br>Abril"; break;
    case 5: echo "<br>Maio"; break;
    case 6: echo "<br>Junho"; break;
    case 7: echo "<br>Julho"; break;
    case 8: echo "<br>Agosto"; break;
    case 9: echo "<br>Setembro"; break;
    case 10: echo "<br>Outubro"; break;
    case 11: echo "<br>Novembro"; break;
    case 12: echo "<br>Dezembro"; break;
    default: echo "<br>Mês inválido!"; break;
}
?>