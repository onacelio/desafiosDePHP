<!--

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz usando radio</title>
    </head>
    <body>
        
        

        <form action="respostas.php" method="post" name="quiz">
            <label for="pergunta1">quanto é 1 + 1:</label>
            <ul>
                <input type="radio" name="alternativaQuestao1" id="A" value="A" required>0</input>
                <input type="radio" name="alternativaQuestao1" id="B" value="B" required>1</input>
                <input type="radio" name="alternativaQuestao1" id="C" value="C" required>2</input>
                <input type="radio" name="alternativaQuestao1" id="D" value="D" required>3</input>
                <input type="radio" name="alternativaQuestao1" id="E" value="E" requiredn>4</input>
            </ul>

            <label for="pergunta2">quanto é 1 + 1:</label>
            <ul>
                <input type="radio" name="alternativaQuestao2" id="A" value="A" required>0</input>
                <input type="radio" name="alternativaQuestao2" id="B" value="B" required>1</input>
                <input type="radio" name="alternativaQuestao2" id="C" value="C" required>2</input>
                <input type="radio" name="alternativaQuestao2" id="D" value="D" required>3</input>
                <input type="radio" name="alternativaQuestao2" id="E" value="E" required>4</input>
            </ul>

            <label for="pergunta3">quanto é 1 + 1:</label>
            <ul>
                <input type="radio" name="alternativaQuestao3" id="A" value="A" required>0</input>
                <input type="radio" name="alternativaQuestao3" id="B" value="B" required>1</input>
                <input type="radio" name="alternativaQuestao3" id="C" value="C" required>2</input>
                <input type="radio" name="alternativaQuestao3" id="D" value="D" required>3</input>
                <input type="radio" name="alternativaQuestao3" id="E" value="E" required>4</input>
            </ul>

            <label for="pergunta4">quanto é 1 + 1:</label>
            <ul>
                <input type="radio" name="alternativaQuestao4" id="A" value="A" required>0</input>
                <input type="radio" name="alternativaQuestao4" id="B" value="B" required>1</input>
                <input type="radio" name="alternativaQuestao4" id="C" value="C" required>2</input>
                <input type="radio" name="alternativaQuestao4" id="D" value="D" required>3</input>
                <input type="radio" name="alternativaQuestao4" id="E" value="E" required>4</input>
            </ul>

            <label for="pergunta2">quanto é 1 + 1:</label>
            <ul>
                <input type="radio" name="alternativaQuestao5" id="A" value="A" required>0</input>
                <input type="radio" name="alternativaQuestao5" id="B" value="B" required>1</input>
                <input type="radio" name="alternativaQuestao5" id="C" value="C" required>2</input>
                <input type="radio" name="alternativaQuestao5" id="D" value="D" required>3</input>
                <input type="radio" name="alternativaQuestao5" id="E" value="E" required>4</input>
            </ul>

            <input type="submit" value="Enviar prova">
        </form>

    </body>
    </html>

-->

<form action="respostas.php" method="post" name="quiz">
    <?php 
        $questoes = ['1 + 1: ', '2 + 2: ', '3 + 3: ', '4 + 4: ', '5 + 5: ', '6 + 6: '];
        $alternativas = ['A', 'B', 'C', 'D', 'E'];
        $alternativasParaMarcar = [
            ['1', '2', '3', '4', '5'], 
            ['4', '5', '2', '21', '1'],
            ['5', '4', '12', '56', '6'],
            ['5', '8', '390', '20', '1000'],
            ['10', '12', '14', '29990', '1'], 
            ['5', '4', '12', '2', '1']
        ];

        $aux = 0;
        for ($i = 1; $i <= count($questoes); $i++) {
            echo "Questão $i: <br>", $questoes[$i - 1];
            echo '<br>';
            for($x = 0; $x < count($alternativas); $x++) {
                echo "<input type='radio' name='alternativaQuestao$i' value='$alternativas[$x]' required>";
                echo "$alternativas[$x]) ";
                echo $alternativasParaMarcar[$aux][$x];
                echo "<br>";
            }
            $aux++;
        }

    ?>

    <input type="submit" value="enviar">
</form>