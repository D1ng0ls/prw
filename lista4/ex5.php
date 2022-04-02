<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Imóbilis</h1>
        <hr>
        <form method="get" name="f_ano">
        <label for="txtLarg">Largura: </label><input type="number" value="0" name="txtLarg">
        <br><label for="txtCompr">Comprimento: </label><input type="number" value="0" name="txtCompr">

        <br><br><input id="btnEnviar" type="submit" value="Enviar">
        </form>
    </body>
    <?php
        $larg = $_GET["txtLarg"];
        $compr = $_GET["txtCompr"];

        echo "<br>Área: ".($larg*$compr)."m²";
    ?>
</html>
