<?php
    $nome = $_POST["txtNome"]; //obrigatórios
    $email = $_POST["txtEmail"]; //obrigatórios
    $sexo = $_POST["optSexo"]; //obrigatórios
    $estado = $_POST["selEstado"]; //obrigatórios
    $cidade = $_POST["txtCidade"]; //obrigatórios
    $mensagem = $_POST["txtMessage"];
    $termos = $_POST["chkTermos"]; //obrigatórios
    $noticias = $_POST["chkNoticias"];
    $erro = false;

    if (empty($nome)){
        $erro = true;
    }
    if (empty($email)){
        $erro = true;
    }
    if (empty($sexo)) {
        $erro = true;
    }
    if ($estado == "Selecionar..."){
        $erro = true;
    }
    if (empty($cidade)){
        $erro = true;
    }
    if ($termos == false) {
        $erro = true;
    }

    if ($noticias) {
        $sim = "Aceito";
    } else {
        $sim = "Recusado";
    }
    
    if($erro) {
        echo "Preencha os campos corretamente!!";
    } else {
        echo "<h1>Dados Pessoais</h1>".
            "Nome: ".$nome.
            "<br>E-mail: ".$email.
            "<br>Sexo: ".$sexo.
            "<br><br><hr><h1>Endereço:</h1>".
            "Estado: ".$estado.
            "<br>Cidade: ".$cidade.
            "<br><br><hr><h1>Outras informações:</h1>".
            "Mensagem: ".$mensagem.
            "<br>Termos: Aceito".
            "<br>Notícias: ".$sim;
    }
?>