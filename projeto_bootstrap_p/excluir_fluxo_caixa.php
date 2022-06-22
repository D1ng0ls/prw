<?php
    include("conexao.php");
    $id = $_GET["id"];

    $sql = "DELETE FROM fluxo_caixa WHERE id=$id";
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Dados excluido com sucesso!";
    } else {
        echo "Erro ao tentar excluir o usuário: ".mysqli_error($con);
    }
?>

<a href="index.php">Voltar</a>