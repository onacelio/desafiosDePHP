<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Gabarito</title>
</head>
<body>
    <h2>GABARITO</h2>
    <p>Questão 1: C</p>
    <p>Questão 2: E</p>
    <p>Questão 3: A</p>
    <p>Questão 4: A</p>
    <p>Questão 5: B</p>
    

    <?php
        $gabaritoOficial = ['C', 'E', 'A', 'A', 'B'];
        $gabaritoAluno = [$_POST['alternativaQuestao1'], $_POST['alternativaQuestao2'], $_POST['alternativaQuestao3'], $_POST['alternativaQuestao4'], $_POST['alternativaQuestao5']];
        echo "<h2> Seu Gabarito: </h2>";
        for($i = 0; $i < count($gabaritoAluno); $i++) {
            $i++;
            echo "Questão $i: ", $gabaritoAluno[$i - 1], "<br><br>";
            $i--;
        }
    ?>

    <?php 

        if($gabaritoOficial[0] == $gabaritoAluno[0]) {
            echo "<p style='color:green'> Questão 1: Correta </p>";
        } else {
            echo "<p style='color:red'> Questão 1: Incorreta </p>";
        }

        if($gabaritoOficial[1] == $gabaritoAluno[1]) {
            echo "<p style='color:green'> Questão 2: Correta </p>";
        } else {
            echo "<p style='color:red'> Questão 2: Incorreta </p>";
        }

        if($gabaritoOficial[2] == $gabaritoAluno[2]) {
            echo "<p style='color:green'> Questão 3: Correta </p>";
        } else {
            echo "<p style='color:red'> Questão 3: Incorreta </p>";
        }

        if($gabaritoOficial[3] == $gabaritoAluno[3]) {
            echo "<p style='color:green'> Questão 4: Correta </p>";
        } else {
            echo "<p style='color:red'> Questão 4: Incorreta </p>";
        }

        if($gabaritoOficial[4] == $gabaritoAluno[4]) {
            echo "<p style='color:green'> Questão 5: Correta </p>";
        } else {
            echo "<p style='color:red'> Questão 5: Incorreta </p>";
        }
    ?>
</body>
</html>