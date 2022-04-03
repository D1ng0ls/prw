<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<style>
table, td {
    border:1px solid black;
    width: 20%;
}
table {
    text-align: center
}
</style>

<body>
    <form method="post" name="form">
        Selecione um número: <select name="selNumero">
            <option>Selecionar...</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
        </select>

        <br><br><input type="submit" value="Enviar">
    </form>
</body>
<?php
    $num = $_POST["selNumero"];

    if ($num == "Selecionar...") {
        echo "<br><br>Por favor selecione um número!";
    } else {
        echo "<br><br><table><tr><th colspan='3'>Tabuada do ".$num."</th></tr>";

        for ($i=1; $i<=10; $i++){
            echo "<tr>
            <td>".$i."</td>
            <td>".$num."</td>
            <td>".($i*$num)."</td>
            </tr>";
        }

        echo "</table>";
    }
?>
</html>