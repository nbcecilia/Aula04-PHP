<!DOCTYPE html>
<html lang="pt-br">
    <!-- 01 – CRIE UM PROGRAMA QUE RECEBA O VALOR DE UMA PARCELA E INFORME SE ELA SERÁ
PAGA ANTES DO VENCIMENTO, NO DIA DO VENCIMENTO OU DEPOIS DO VENCIMENTO E
CONSIDERE AS SEGUINTES SITUAÇÕES: 1) CASO SEJA PAGA ANTES DO VENCIMENTO, TERÁ 15%
DE DESCONTO; 2) CASO SEJA PAGA NO DIA DO VENCIMENTO, TERÁ 5% DE DESCONTO; 3) CASO
SEJA PAGO DEPOIS DO VENCIMENTO, TERÁ 20% DE ACRÉSCIMO; -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01</title>
</head>
<body>
    <form method="POST" >
        <h3>Questão 01</h3> <br><br>
        <label>Digite o valor da parcela: </label>
        <input type="text" name="valor" required> <br><br>
        <label>Marque a opção:</label>
        <select name="opcao" id="opcao">
            <option value="">Selecione:</option>
            <option value="ante">Antes do vencimento</option>
            <option value="durante">Na data do vencimento</option>
            <option value="apos">Depois do vencimento</option>
        </select><br><br>
        <button type="submit">Calcular</button> <br><br>  
    </form>
    <hr>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor']?? 0;
    $opcao = $_POST['opcao']?? 0;

    switch ($opcao) {
        case "ante":
            $ante = $valor - ($valor*0.15);
            echo "Valor com 15% desconto: R$ " . number_format($ante, 2, ',', '.');
            break;
        case "durante":
            $durante = $valor - ($valor*0.05);
            echo "Valor com 5% desconto: R$ " . number_format($durante, 2, ',', '.');
            break;
        case "apos":
            $apos = $valor + ($valor*0.20);
            echo "Valor com 20% multa: R$ " . number_format($apos, 2, ',', '.');
            break;
        
        default:
        echo "Opção Inválida";
    }
}
    ?>  
</body>
</html>