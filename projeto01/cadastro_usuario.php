<?php
    include('conecxao.php');

    $nome_usuario = $_POST['nome_usuario'];
    $email_usuario = $_POST['email_usuario'];
    $telefone_usuario = $_POST['telefone_usuario'];
    
    echo "Nome: $nome_usuario<br>E-mail: $email_usuario<br>Telefone: $telefone_usuario";

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
            VALUES ('".$nome_usuario."', '".$email_usuario."', '".$telefone_usuario."')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados inseridos com sucesso!";
    } else {
        echo "<br><br>Erro ao inserir a banco de dados: ".mysqli_error($con);
    }
?>