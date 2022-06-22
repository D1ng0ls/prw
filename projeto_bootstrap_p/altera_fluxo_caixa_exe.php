<?php
include("conexao.php");
$id = $_POST["id"];
$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];

echo "Data: $data
<br>Tipo: $tipo
<br>Valor: $valor
<br>Historico: $historico
<br>Cheque: $cheque";

$sql = "UPDATE fluxo_caixa SET
    data='$data',
    tipo='$tipo',
    valor='$valor',
    historico='$historico',
    cheque='$cheque'
    WHERE id=$id";

$result = mysqli_query($con, $sql);
if ($result) {
    echo "<br><br>Dados alterados com sucesso!";
} else {
    echo "<br><br>Erro ao tentar alterar os dados: ".mysqli_error($con);
}
?>

<a href="index.php">Voltar</a>