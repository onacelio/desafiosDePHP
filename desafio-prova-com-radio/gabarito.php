<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/gabarito.css">
    <title>Gabarito</title>
</head>
<body>

    <header>
        <h1>Prova de matemática - gabarito</h1>
    </header>

    <main>
        <div class="gabaritos">
        <?php
            $gabaritoOficial = ['D', 'D', 'B', 'A', 'A'];
            $gabaritoAluno = [$_POST['alternativaQuestao1'], $_POST['alternativaQuestao2'], $_POST['alternativaQuestao3'], $_POST['alternativaQuestao4'], $_POST['alternativaQuestao5']];
            echo "<h2>GAbarito Oficial: </h2>";
            for($x = 1; $x <= count($gabaritoOficial); $x++) {
                echo "<p>Questão $x: ", $gabaritoOficial[$x - 1], "</p>"; 
            }

            echo "<h2> Seu Gabarito: </h2>";
            for($i = 1; $i <= count($gabaritoAluno); $i++) {
                echo "<p>Questão $i: ", $gabaritoAluno[$i - 1], "</p>";
            }
        ?>
        </div>

        <div class="corretasOuIncorretas">
            <?php
                for($i = 1; $i <= count($gabaritoOficial); $i++) {
                    if($gabaritoOficial[$i - 1] == $gabaritoAluno[$i - 1]) {
                        echo "<p style='color:green'> Questão $i: Correta </p>";
                    } else {
                        echo "<p style='color:red'> Questão $i: Incorreta </p>";
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>