<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="get">
    Pasta: <select name="selPasta">
        <option>Selecionar...</option>
        <option>images</option>
    </select>
    <br>Quantidade de imagens: <select name="selImagens">
        <option>Selecionar...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select>

    <br><br><input type="submit" value="Enviar">
    </form>

    <?php
        $pasta = $_GET['selPasta'];
        $img = $_GET['selImagens'];

        for ($i=1; $i <= $img; $i++) {
            echo "Imagem -".$i."<img src='".$pasta."/img_".$i.".png' width='150' height='100'><br>";
        }
    ?>
</body>
</html>