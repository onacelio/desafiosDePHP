<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/prova.css">
</head>
<body>

        <header>
            <h1>Prova de matemática</h1>
        </header>

        <main>
            <form action="gabarito.php" method="post" name="quiz">
                <?php 
                    session_start();

                    $alternativasParaMarcar = $_SESSION['alternatives'];
                    $gabaritoOficial = $_SESSION['corrects_alternatives'];
                    $questoes = $_SESSION['questions'];
                    /*$gabaritoOficial = ['D', 'D', 'B', 'A', 'A'];*/
                    // $_SESSION['gabarito'] = $gabaritoOficial;
                    // $questoes = [
                    //     'Uma circuferência trigonométrica com os angulos M, N, P e Q, respectivamente cada um representando o 1°, 2°, 3° e 4° quadrante tem a medida dos ângulos como: M = a; N = 90° + b; P = 70° + 3a + b; Q = ? Qual a medida associada ao angulo Q?',
                    //     'A expressão E = sen(π - x) - sen(π  + x) / sen (2π - x), com sen x ≠ 0, é equivalente a: ',
                    //     'Qual das afirmações a seguir é verdadeira? ',
                    //     'A partir de um ponto, observa-se o topo de um prédio sobum ângulo de 30°. Caminhando 24m em direção ao prédio, atingimos outro ponto, de onde se vê o topo do prédio segundo um ângulo de 60°. Desprezando a altura do observador, assinale, em metros, a altura do prédio: ',
                    //     'Qual o seno de 30°?'
                    // ];
                    $alternativas = ['A', 'B', 'C', 'D', 'E'];
                    
                    // $alternativasParaMarcar = [
                    //     ['330°', '320°', '335°', '340°', '350°'], 
                    //     ['E = 2 sen x', 'E = -2 sen x', 'E = 2', 'E = -2', 'E = sen x'],
                    //     ['sen 210° < cos 210° < tg 210°', 'cos 210° < sen 210° < tg 210°', 'tg 210° < sen 210° < cos 210°', 'tg 210° < cos 210° < sen 210°', 'sen 210° < tg 210° < cos 210°'],
                    //     ['12√3m', '12m', '8√3m', '4√3m', '4'],
                    //     ['1/2', '2/1', '√3', '√3/3', '3/2']
                    // ];
                ?>

                
                <?php 
                    echo "<ul>";
                        $aux = 0;
                        for ($i = 1; $i <= count($questoes); $i++) {
                            echo '<li>';
                                echo "<p class='questao' style='display: inline'>Questão $i - ", $questoes[$i - 1], "</p>";
                            echo "</li>";
                            echo "<ul>";
                            for($x = 0; $x < count($alternativas); $x++) {
                                echo "<li>";
                                    echo "<input type='radio' name='alternativaQuestao$i' value='$alternativas[$x]' required>";
                                    echo "<label for='alternativaQuestao$i'></label>";
                                    echo "<span> $alternativas[$x]) </span>";
                                    echo "<span><p style='display: inline'>", $alternativasParaMarcar[$aux][0][$x], "</p></span>";
                                echo "</li>";
                            }
                            echo "</ul>";
                            $aux++;
                        }
                    echo "</ul>";
                ?>
            
                <input type="submit" value="enviar">
            </form>
        </main>
</body>
</html>