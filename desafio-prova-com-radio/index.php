<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/login.css">
    <title>LOGIN</title>
</head>
<body>

    <header>
        LOGIN DO ALUNO/PROFESSOR
    </header>

    <main>
        <form action="verificacao.php" method="post" name="login">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="" required><br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="" required><br>
            <input type="submit" value="Entrar">
        </form>
    </main>
</body>
</html>