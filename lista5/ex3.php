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
    $usuarios = array('eduardo', 'jose', 'carlos', 'pedro', 'edmar');
    $senhas = array('1324', '123', 'senha123', 'pedro1904', 'spfc');
    $usuario = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];
    $usuario = strtolower($usuario);

    $indice = array_search($usuario, $usuarios);
    $indice++;
    if($indice) {
        $indice--;
        if($senhas[$indice] == $senha){
            echo "<br>Acesso liberado!";
        } else {
            echo "<br>Senha incorreta! Acesso negado!";
        }
    } else {
        echo "<br>Usuário não cadastrado!";
    }
?>