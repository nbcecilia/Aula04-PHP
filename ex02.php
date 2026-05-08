<!-- 02 – CRIE UMA CALCULADOR COM SWITCH CASE; -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 04 - PHP</title>

    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Questão 02</h3>
    <form method = "POST">
        
        <label> Digite o 1º número:</label><br><br>
        <input type="number" name="n1" step="1" required><br><br>
        <label> Digite o 2º número:</label><br><br>
        <input type="number" name="n2" step="1" required><br><br>
        <label> Selecione a operação:</label><br>
        <input type="radio" id="multi" name="op" value="multi" /> Multiplicação <br>
        <input type="radio" id="op" name="op" value="soma" /> Soma<br>
        <input type="radio" id="op" name="op" value="sub" /> Subtração <br>
        <input type="radio" id="op" name="op" value="divi" /> Divisão <br><br><br>
        <button type="submit">Calcular</button><br><br>
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1= $_POST["n1"] ?? 0;
        $n2= $_POST["n2"] ?? 0;
        $op= $_POST["op"] ?? 0;

        switch($op){
            case "multi":
                $total = $n1 * $n2; 
                echo "<br><h3>O valor da multiplicação é: $total ";
                break;
            case "soma":
                $total2 = $n1 + $n2;
                echo " <br><h3>O valor da soma é: $total2";
                break;
            case "sub":
                $total3 = $n1 - $n2;  
                echo "<br><h3>O valor da subtração é: $total3 ";
                break;
            case "divi": 
                $total4 = $n1 / $n2;
                echo "<br><h3>O valor da divisão é: $total4";
                break;
            default: echo "<h3>Opção Inválida";
        }
    }
    ?> 
</body>
</html>