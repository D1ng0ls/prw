<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" name="f_ano">
        <input type="date" name="data" value="Y">

        <br><br><input id="btnEnviar" type="submit" value="Enviar">
        </form>
    </body>
    <?php
    $data = $_POST["data"];
    $ano = substr($data,0,4);
    $ano = intval($ano);


    if (($ano%4==0 && !$ano%100==0) || $ano%400==0 ){
        echo "Ano bissexto";
    } else {
        echo "Ano não bissexto";
    }
    
    ?>
</html>
