<!-- 05 – CRIE UM PROGRAMA PARA CONVERTER TEMPERATUR DE CELSIUS PARA FARENHEITH E VICE
VERSA -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 05</title>
</head>
<body>
    <h3>Questão 05</h3>
    <form method="POST">
        <label>Informe os graus Celsius:</label>
        <Input type="number" name="cel"></Input>
        <button type="submit">Converter</button>
        <hr>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
        $cel = $_POST['cel'] ?? 0;   

        
        switch ($cel) {
            case '1':
                $far=($cel*1.8)+32;
                echo" <h3>$far°F";
                break;
            
            default:
                echo"<h3>Opção Inválida";
                break;
        }
        }
        ?>
    </form>
    
</body>
</html>