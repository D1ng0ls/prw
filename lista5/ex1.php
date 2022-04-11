<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Informáticos</h1>
    <hr>
    <form method="get">
        <input type="text" name="txtPesquisa" placeholder="Pesquisar...">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    $produtos = array('mouse', 'teclado', 'mousepad', 'monitor', 'webcam', 'headset', 'fone', 'caixinha de som', 'microfone');
    $pesquisa = $_GET['txtPesquisa'];
    $pesquisa = strtolower($pesquisa);

    $indice = array_search($pesquisa, $produtos);
    $indice++;
    if($indice) {
        echo "Produto encontrado!<br>Código do produto: ".($indice-1);
    } else {
        echo "Produto não encontrado!";
    }
?>