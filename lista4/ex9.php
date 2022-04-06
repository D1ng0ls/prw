<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form method="post" name="form">
        Nome: <input type="text" name="txtNome">
        <br>Horário: <input type="time" value="00:00" name="txtHora">

        <br><br><input type="submit" value="Enviar">
    </form>
</body>
<?php
    $nome = $_POST["txtNome"]; 
    $horario = $_POST["txtHora"];
    $horario = substr($horario,0,2);

    if ($horario<12) {
        echo "<br>Bom dia! ".$nome.".";
    } else if ($horario>=12 && $horario<18) {
        echo "<br>Boa tarde! ".$nome.".";
    } else if ($horario>=18) {
        echo "<br>Boa noite! ".$nome.".";
    }
?>
</html>