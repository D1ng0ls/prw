<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" name="f_estado">
        </label>Estado: <select id="estado" name="selEstado" onchange="habilitar()">
            <option>Selecionar...</option>
            <option>Acre</option>
            <option>Alagoas</option>
            <option>Amapá</option>
            <option>Amazonas</option>
            <option>Bahia</option>
            <option>Ceará</option>
            <option>Distrito Federal</option>
            <option>Espírito Santo</option>
            <option>Goiás</option>
            <option>Maranhão</option>
            <option>Mato Grosso</option>
            <option>Mato Grosso do Sul</option>
            <option>Minas Gerais</option>
            <option>Pará</option>
            <option>Paraíba</option>
            <option>Paraná</option>
            <option>Pernambuco</option>
            <option>Piauí</option>
            <option>Rio de Janeiro</option>
            <option>Rio Grande do Norte</option>
            <option>Rio Grande do Sul</option>
            <option>Rondônia</option>
            <option>Roraima</option>
            <option>Santa Catarina</option>
            <option>São Paulo</option>
            <option>Sergipe</option>
            <option>Tocantins</option>
        </select>

        <br><br><input id="btnEnviar" type="submit" value="Enviar">
        </form>

        <br><br><p>Capital: 
        <?php
        $estado = $_POST["selEstado"];

        switch ($estado) {
            case "Acre": echo "Rio Branco"; break;
            case "Alagoas": echo "Maceió"; break;
            case "Amapá": echo "Macapá"; break;
            case "Amazonas": echo "Manaus"; break;
            case "Bahia": echo "Salvador"; break;
            case "Ceará": echo "Fortaleza"; break;
            case "Distrito Federal": echo "Brasília"; break;
            case "Espírito Santo": echo "Vitória"; break;
            case "Goiás": echo "Goiânia"; break;
            case "Maranhão": echo "São Luís"; break;
            case "Mato Grosso": echo "Cuiabá"; break;
            case "Mato Grosso do Sul": echo "Campo Grande"; break;
            case "Minas Gerais": echo "Belo Horizonte"; break;
            case "Pará": echo "Belém"; break;
            case "Paraíba": echo "João Pessoa"; break;
            case "Paraná": echo "Curitiba"; break;
            case "Pernambuco": echo "Recife"; break;
            case "Piauí": echo "Teresina"; break;
            case "Rio de Janeiro": echo "Rio de Janeiro"; break;
            case "Rio Grande do Norte": echo "Natal"; break;
            case "Rio Grande do Sul": echo "Porto Alegre"; break;
            case "Rondônia": echo "Porto Velho"; break;
            case "Roraima": echo "Boa Vista"; break;
            case "Santa Catarina": echo "Florianópolis"; break;
            case "São Paulo": echo "São Paulo"; break;
            case "Sergipe": echo "Aracaju"; break;
            case "Tocantins": echo "Palmas"; break;
            default: echo " "; break;
        }
        ?>
        </p>
    </body>
</html>
