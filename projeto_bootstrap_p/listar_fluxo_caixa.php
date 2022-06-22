<?php
    include('conexao.php');
    $sql = "SELECT * FROM fluxo_caixa"; //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql); //retorna a primeira linha,
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem dos fluxos</title>
    <style>
    td {
        padding: 5px;
    }
    #titulo {
        font-size: 1.5em;
        padding-bottom: 15px;
    }
</style>
</head>

<body>
<table align="center">
        <tr>
            <th colspan="5" id="titulo">Listagem dos fluxos</th>
        </tr>
        <tr>
            <th>Código</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Excluir</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[tipo]</td>
                    <td>$row[valor]</td>
                    <td><a href='altera_fluxo_caixa.php?id=$row[id]'>$row[historico]</td>
                    <td><a href='excluir_fluxo_caixa.php?id=$row[id]'>Excluir</a>";
            }
        ?>
    </table>
</body>
</html>