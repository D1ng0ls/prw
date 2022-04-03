<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form method="post" name="form">
        Nome: <input type="text" name="txtNome">
        <br>Idade: <input type="number" value="0" name="txtIdade">

        <br><br><input type="submit" value="Enviar">
    </form>
</body>
<?php
    $nome = $_POST["txtNome"];
    $idade = $_POST["txtIdade"];

    echo "<br><span style='color:red'>".$nome."</span> possuí <span style='color:blue'>".($idade*365)."</span> dias de vida (aproximadamente)";
?>
</html>