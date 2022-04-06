<?php
    $user = $_POST["txtLogin"];
    $password = $_POST["txtSenha"];

    $users = array("D1ng0ls"=>"123",
                    "Pedro"=>"abc",
                    "Jose"=>"1Da");
    
    if (array_key_exists($user,$users)) {
        if ($users[$user] == $password) {
            echo "Acesso liberado!";
        } else {
            echo "Senha incorreta! Acesso negado!";
        }
    } else {
        echo "Usuário não cadastrado!";
    }
?>