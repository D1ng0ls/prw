<?php
    include('conecxao.php');
    $sql = "SELECT * FROM usuario"; //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql); //retorna a primeira linha,
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="listar_usuarios.css">
    <title>Listagem de usuários</title>
</head>
<body>
    <table align="center">
        <tr>
            <th colspan="4" id="titulo">Listagem de usuários</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>
                    <td>$row[id_usuario]</td>
                    <td>$row[nome_usuario]</td>
                    <td>$row[email_usuario]</td>
                    <td>$row[telefone_usuario]</td>
                    ";
            }
        ?>
    </table>
</body>
</html>