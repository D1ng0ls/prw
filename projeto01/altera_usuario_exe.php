<?php
    include("conecxao.php");
    $id_usuario = $_POST["id_usuario"];
    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $telefone_usuario = $_POST['telefone_usuario'];
    
    echo "Nome: $nome_usuario<br>";

    $sql = "UPDATE usuario SET
            nome_usuario='".$nome_usuario."',
            email_usuario='".$email_usuario."',
            telefone_usuario='".$telefone_usuario."'
            WHERE id_usuario=".$id_usuario;
    
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados alterados com sucesso!";
    } else {
        echo "<br><br>Erro ao tentar alterar os dados: ".mysqli_error($con);
    }
?>

<a href="index.html">Voltar</a>