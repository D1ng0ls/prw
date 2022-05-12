<?php
    include("conexao.php");
    $id_agenda = $_GET["id_agenda"];

    $sql = "DELETE FROM agenda WHERE id_agenda=$id_agenda";
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Dados excluido com sucesso!";
    } else {
        echo "Erro ao tentar excluir o usuário: ".mysqli_error($con);
    }
?>

<a href="index.php">Voltar</a>