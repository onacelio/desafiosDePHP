<?php
    $senha = $_POST['senha'];

    if($senha === 'professor') {
        echo "<script>
                window.location.href = 'professor.php'
            </script>";
    } else if ($senha === 'aluno') {
        echo "<script>
                window.location.href = 'prova.php'
            </script>";
    } else {
        echo "<script>
                window.location.href = 'index.php'
            </script>";
    }
?>