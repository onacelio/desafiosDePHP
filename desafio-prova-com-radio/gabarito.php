<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/gabarito.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet"> 
    <title>Gabarito</title>
</head>
<body>

    <header>
        <h1>Prova de matemática - gabarito</h1>
    </header>

    <main>
        <div class="gabaritos">
            <?php
                session_start();
                $gabaritoOficial = $_SESSION['corrects_alternatives'];
                $gabaritoAluno = [];
                
                for($i = 1; $i <= count($gabaritoOficial); $i++) {
                    $gabaritoAluno[] = $_POST["alternativaQuestao$i"];
                }
                
                echo "<h2>Gabarito Oficial: </h2>";
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