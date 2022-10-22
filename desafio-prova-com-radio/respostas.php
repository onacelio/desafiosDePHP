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

    <?php
        $gabaritoOficial = ['B', 'A', 'E', 'B', 'A', 'C'];
        $gabaritoAluno = [$_POST['alternativaQuestao1'], $_POST['alternativaQuestao2'], $_POST['alternativaQuestao3'], $_POST['alternativaQuestao4'], $_POST['alternativaQuestao5'], $_POST['alternativaQuestao6']];
        echo "<h2>GAbarito Oficial: </h2>";
        for($x = 1; $x <= count($gabaritoOficial); $x++) {
            echo "<p>Questão $x: ", $gabaritoOficial[$x - 1], "</p>"; 
        }

        echo "<h2> Seu Gabarito: </h2>";
        for($i = 1; $i <= count($gabaritoAluno); $i++) {
            echo "<p>Questão $i: ", $gabaritoAluno[$i - 1], "</p>";
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

        if($gabaritoOficial[5] == $gabaritoAluno[5]) {
            echo "<p style='color:green'> Questão 6: Correta </p>";
        } else {
            echo "<p style='color:red'> Questão 6: Incorreta </p>";
        }
    ?>
</body>
</html>