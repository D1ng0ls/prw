<?php
include("conexao.php");
$id_agenda = $_POST["id_agenda"];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$dt_cadastro = date("Y-m-d");

$data = implode("/",array_reverse(explode("-",$dt_cadastro)));

$fotoNome = $_FILES['foto']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extensions_arr = array("jpg","jpeg","png","gif");

if( in_array($imageFileType,$extensions_arr) ){        
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
        $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
    }
}

echo "Nome: $nome
<br>Apelido: $apelido
<br>Telefone: $telefone
<br>Celular: $celular
<br>Email: $email
<br>Estado: $estado
<br>Cidade: $cidade
<br>Endereco: $endereco
<br>Bairro: $bairro
<br>Data: $data";

if(strlen($fotoNome) > 0){
$sql = "UPDATE agenda SET
        nome='$nome',
        apelido='$apelido',
        telefone='$telefone',
        celular='$celular',
        email='$email',
        estado='$estado',
        cidade='$cidade',
        endereco='$endereco',
        bairro='$bairro',
        dt_cadastro='$dt_cadastro',
        foto_blob='$fotoBlob',
        foto_nome='$fotoNome'
        WHERE id_agenda=$id_agenda";
} else {
    $sql = "UPDATE agenda SET
        nome='$nome',
        apelido='$apelido',
        telefone='$telefone',
        celular='$celular',
        email='$email',
        estado='$estado',
        cidade='$cidade',
        endereco='$endereco',
        bairro='$bairro',
        dt_cadastro='$dt_cadastro'
        WHERE id_agenda=$id_agenda";
}

$result = mysqli_query($con, $sql);
if ($result) {
    echo "<br><br>Dados alterados com sucesso!";
} else {
    echo "<br><br>Erro ao tentar alterar os dados: ".mysqli_error($con);
}
?>

<a href="index.php">Voltar</a>