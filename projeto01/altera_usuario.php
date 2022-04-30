<?php
    include("conecxao.php");
    $id_usuario = $_GET["id_usuario"];
    $sql = "SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="altera_usuario.css">
    <title>Cadastro de usuários</title>
</head>
<body>
    <form action="altera_usuario_exe.php" method="post">
        <table>
            <tr>
                <th colspan="2">Cadastro de Clientes - IFSP</th>
            </tr>
            <tr>
                <td><p>Nome:</p></td>
                <td><input type="text" class="inpTxt" name="nome_usuario" maxlength="50"
                value="<?php echo $row['nome_usuario'] ?>"></td>
            </tr>
            <tr>
                <td><p>E-mail:</p></td>
                <td><input type="text" class="inpTxt" name="email_usuario" maxlength="50"
                value="<?php echo $row['email_usuario'] ?>"></td>
            </tr>
            <tr>
                <td><p>Telefone:</p></td>
                <td><input type="text" class="inpTxt inpTel" name="telefone_usuario" maxlength="30"
                value="<?php echo $row['telefone_usuario'] ?>"></td>
            </tr>
            <tr>
                <<input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario'] ?>">
                <td colspan="2"><br><input type="submit" class="btnEnviar" value="Enviar"></td>
            </tr>
        </table>   
    </form>
</body>
</html>