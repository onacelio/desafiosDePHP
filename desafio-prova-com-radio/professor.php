<?php
    session_start();

    if(!isset($_SESSION['questions'])) {
        $_SESSION['questions'] = array();
        $_SESSION['corrects_alternatives'] = array();
        $_SESSION['alternatives'] = array();
    } 

    if(isset($_GET['question_name']) && isset($_GET['correct_alternative'])) {
        if($_GET['question_name'] != "" && $_GET['correct_alternative'] != "") {
            array_push($_SESSION['questions'], $_GET['question_name']);
            array_push($_SESSION['corrects_alternatives'], $_GET['correct_alternative']);
            $alternativaGet = array();
            array_push($alternativaGet, [$_GET['alternativaA'], $_GET['alternativaB'], $_GET['alternativaC'], $_GET['alternativaD'], $_GET['alternativaE']]);
            array_push($_SESSION['alternatives'], $alternativaGet);
            unset($_GET['question_name']);
            unset($_GET['correct_alternative']);
            unset($_GET['alternativaA']);
            unset($_GET['alternativaB']);
            unset($_GET['alternativaC']);
            unset($_GET['alternativaD']);
            unset($_GET['alternativaE']);
        } else {
            $_SESSION['message'] = 'Os campos não podem estar vazios!';
        }
    }

    if(isset($_GET['clear'])) {
        unset($_SESSION['questions']);
        unset($_SESSION['corrects_alternatives']);
    }

    if(isset($_GET['key'])) {
        array_splice($_SESSION['questions'], $_GET['key'], 1);
        array_splice($_SESSION['corrects_alternatives'], $_GET['key'], 1);
        unset($_GET['key']);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/professor.css">
    <title>Página do professor</title>
</head>
<body>

    <section class="container">
        <div class="header">
            <h1>Adicione as questões da prova: </h1>
        </div>
        <div class="form">
            <form action="" method="get">
                <label for="question_name">Questão: </label>
                <input type="text" name="question_name" placeholder="Questão da prova">
                <label for="correct_alternative">Alternativa Correta: </label>
                <div class="radio">
                    <input type="radio" name="correct_alternative" value="A"><p>A</p></input>
                    <input type="radio" name="correct_alternative" value="B"><p>B</p></input>
                    <input type="radio" name="correct_alternative" value="C"><p>C</p></input>
                    <input type="radio" name="correct_alternative" value="D"><p>D</p></input>
                    <input type="radio" name="correct_alternative" value="E"><p>E</p></input>
                </div>
                <label for="">Alternativas para marcar: </label>
                <input type="text" name="alternativaA" placeholder="Adicione a alternativa para A">
                <input type="text" name="alternativaB" placeholder="Adicione a alternativa para B">
                <input type="text" name="alternativaC" placeholder="Adicione a alternativa para C">
                <input type="text" name="alternativaD" placeholder="Adicione a alternativa para D">
                <input type="text" name="alternativaE" placeholder="Adicione a alternativa para E">
                <button type="submit">Adicionar questão</button>
            </form>

            <?php
                if(isset($_SESSION['message'])) {
                    echo "<p style='color: #EF5350'>", $_SESSION['message'], "</p>";
                }
            ?>
        </div>
        <div class="separator"></div>
        <div class="list-questions">
            <?php
                if(isset($_SESSION["questions"])) {
                    echo "<ul>";

                        foreach($_SESSION["questions"] as $key => $question) {
                            echo "<li>
                                    <span>$question</span>
                                    <button type='button' class='btn-clear' onclick='deletar$key()'>Remover</button>

                                    <script>
                                        function deletar$key() {
                                            if(confirm('Confirmar remoção?')) {
                                                window.location = 'http://localhost/projetos/desafio-prova-com-radio/professor.php?key=$key'
                                            }

                                            return false
                                        }
                                    </script>
                                </li>";
                        }

                    echo "</ul>";
                }
            ?>

            <form action="" method="get">
                <input type="hidden" name="clear" value="clear">
                <button type="submit" class="btn-clear">Apagar Questões</button>
            </form>

        </div>
        <div class="footer">
            Desenvolvido por @naceliooo
        </div>
    </section>

</body>
</html>