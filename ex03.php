<!-- 03 – CRIE UM PROGRAMA QUE RECEBA UM NÚMERO DE 1 A 7 E DEPOIS UM NÚMERO DE 1 A
12 E INFORME, RESPECTIVAMENTE, O DIA DA SEMANA E O MÊS CORRESPONDENTE À ESSES
NÚMEROS -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 04 - PHP</title>
</head>
<body>
    <h3>Questão 03</h3>
    <form method = "POST">
        <label> Digite um número de 1 a 7:</label><br><br>
        <input type="number" name="num" step="1" required><br><br>
        <label> Digite um número de 1 a 12:</label><br><br>
        <input type="number" name="num" step="1" required><br><br>
        <button type="submit">Responder</button><br><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $num= $_POST["num"] ?? 0;
        switch($num){
            case 1: 
                echo "";
                break;
            case 2: 
                echo "";
                break;
            case 3: 
                echo "";
                break;
            case 4: echo "";
                break;
            default: echo "";
        }
    }
    ?> 
</body>
</html>