<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<form action="respostas.php" method="post" name="quiz">
    <?php 
        $questoes = ['1 + 1: ',
        '2 + 2: ',
        '3 + 3: ',
        '4 + 4: ',
        '5 + 5: ', 
        '6 + 6: '];
        $alternativas = ['A', 'B', 'C', 'D', 'E'];
        $alternativasParaMarcar = [
            ['1', '2', '3', '4', '5'], 
            ['4', '5', '2', '21', '1'],
            ['5', '4', '12', '56', '6'],
            ['5', '8', '390', '20', '1000'],
            ['10', '12', '14', '29990', '1'], 
            ['5', '4', '12', '2', '1']
        ];
    ?>

    
    <?php 
        echo "<ul>";
            $aux = 0;
            for ($i = 1; $i <= count($questoes); $i++) {
                echo '<li>';
                    echo "Questão $i: ", $questoes[$i - 1];
                echo "</li>";
                echo "<ul>";
                for($x = 0; $x < count($alternativas); $x++) {
                    echo "<li>";
                        echo "<input type='radio' name='alternativaQuestao$i' value='$alternativas[$x]' required>";
                        echo "<span> $alternativas[$x]) </span>";
                        echo "<span><p style='display: inline'>", $alternativasParaMarcar[$aux][$x], "</p></span>";
                    echo "</li>";
                }
                echo "</ul>";
                $aux++;
            }
        echo "</ul>"
    ?>
    

    <input type="submit" value="enviar">
</form>
</body>
</html>