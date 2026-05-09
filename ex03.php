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
        <input type="datalist" name="dia" step="1" required><br><br>
        <label> Digite um número de 1 a 12:</label><br><br>
        <input type="" name="mes" step="1" required><br><br>
        <button type="submit">Responder</button><br><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $dia= $_POST["dia"] ?? 0;
        $mes= $_POST["mes"] ?? 0;
        
    switch ($dia) {
    case 1:
        echo "Domingo<br>";
        break;

    case 2:
        echo "Segunda-feira<br>";
        break;

    case 3:
        echo "Terça-feira<br>";
        break;

    case 4:
        echo "Quarta-feira<br>";
        break;

    case 5:
        echo "Quinta-feira<br>";
        break;

    case 6:
        echo "Sexta-feira<br>";
        break;

    case 7:
        echo "Sábado<br>";
        break;

    default:
        echo "Dia inválido<br>";
}
switch ($mes) {
    case 1:
        echo "Janeiro";
        break;

    case 2:
        echo "Fevereiro";
        break;

    case 3:
        echo "Março";
        break;

    case 4:
        echo "Abril";
        break;

    case 5:
        echo "Maio";
        break;

    case 6:
        echo "Junho";
        break;

    case 7:
        echo "Julho";
        break;

    case 8:
        echo "Agosto";
        break;

    case 9:
        echo "Setembro";
        break;

    case 10:
        echo "Outubro";
        break;

    case 11:
        echo "Novembro";
        break;

    case 12:
        echo "Dezembro";
        break;

    default:
        echo "Mês inválido";
}        
}
    ?> 
</body>
</html>