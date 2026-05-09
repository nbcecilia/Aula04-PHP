<!-- 04 FAÇA UM PROGRAMA EM PHP QUE RECEBA QUTRO NOTAS DE UM ESTUDANTE E DEPOIS
COM SWITCH CASE INFORME AS SEGUINTES SITUAÇÕES: DE 1 A 4, REPROVADO; DE 5 A 6,
RECUPERAÇÃO; DE 7 A 8, APROVADO;  -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4</title>
</head>
<body>
    <h3>Questão 4</h3>
    <form method="POST">
     <label>Digite a 1ª nota: </label>
    <input type="number" name="n1" step ="0.1"required><br><br>
    <label>Digite a 2ª nota: </label>
    <input type="number" name="n2" step ="0.1" required><br><br>
    <label>Digite a 3ª nota: </label>
    <input type="number" name="n3"  step ="0.1" required><br><br>
    <label>Digite a 4ª nota: </label>
    <input type="number" name="n4" step ="0.1" required><br><br>
    <button type="submit">Responder</button>
    </form>
    
<hr>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1= $_POST["n1"] ?? 0;
        $n2= $_POST["n2"] ?? 0;
        $n3= $_POST["n3"] ?? 0;
        $n4= $_POST["n4"] ?? 0;
 $notafinal= ($n1 + $n2 + $n3 + $n4)/4;
        switch ($notafinal) {
            case '1':
                $notafinal >= 1 && $notafinal <= 4;
                echo"Nota final $notafinal, situação do aluno: Reprovado";
                break;
            case '2':
                $notafinal >= 5 && $notafinal <= 6;
                echo"Nota final $notafinal, situação do aluno: Recuperação";
                break;
            case '3':
                $notafinal >= 7 && $notafinal <= 8;
                echo"Nota final $notafinal, situação do aluno: Aprovado";
                break;
            
            default:
                echo"Nota inválida";
                break;
        }
    }
    ?>

</body>
</html>