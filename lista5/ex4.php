<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Login</h1>
    <hr>
    <form method="post">
        <input type="text" name="txtNome" placeholder="Usuário">
        <br><input type="password" name="txtSenha" placeholder="Senha">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    $usuarios = array('eduardo'=>'1324',
                    'jose'=>'123',
                    'carlos'=>'senha123',
                    'pedro'=>'pedro1904',
                    'edmar'=>'spfc');
    $usuario = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];
    $usuario = strtolower($usuario);

    if (array_key_exists($usuario,$usuarios)) {
        if ($usuarios[$usuario] == $senha) {
            echo "Acesso liberado!";
        } else {
            echo "Senha incorreta! Acesso negado!";
        }
    } else {
        echo "Usuário não cadastrado!";
    }
?>