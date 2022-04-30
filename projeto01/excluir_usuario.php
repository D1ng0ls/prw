<?php
    include("conecxao.php");
    $id_usuario = $_GET["id_usuario"];

    $sql = "DELETE FROM usuario WHERE id_usuario=$id_usuario";
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados excluido com sucesso!";
    } else {
        echo "<br><br>Erro ao tentar excluir o usuário: ".mysqli_error($con);
    }
?>
<a href="index.html">Voltar</a>