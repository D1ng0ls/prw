<?php
    include("conexao.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM fluxo_caixa WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar de Fluxo de Caixa</title>
</head>
<body>
<form action="altera_fluxo_caixa_exe.php" method="post">
        <table align="center">
        <tr>
                <th colspan="2" style="font-size: 1.5rem;">Alterar de Fluxo de Caixa</th>
            </tr>
            <tr>
                <td>
                    <p>Data:</p>
                </td>
                <td><input type="date" name="data" value="<?php echo $row['data'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Tipo:</p>
                </td>
                <td>
                    <input type="radio" name="tipo" value="Entrada" <?php if($row['tipo']=='Entrada') echo "checked"?>>Entrada
                    <input type="radio" name="tipo" value="Saída" <?php if($row['tipo']=='Saída') echo "checked"?>>Saída
                </td>
            </tr>
            <tr>
                <td>
                    <p>Valor:</p>
                </td>
                <td><input type="number" name="valor" value="<?php echo $row['valor'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Histórico:</p>
                </td>
                <td><input type="text" name="historico" value="<?php echo $row['historico'] ?>"></td>
            </tr>
            <tr>
                <td>
                    <p>Cheque:</p>
                </td>
                <td><select name="cheque">
                    <option <?php if($row['cheque']=='Sim') echo "selected"?>>Sim</option>
                    <option <?php if($row['cheque']=='Não') echo "selected"?>>Não</option>
                </select></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                <td colspan="2"><br><input type="submit" class="btnEnviar" value="Enviar"></td>
            </tr>
        </table>
    </form>
</body>
</html>