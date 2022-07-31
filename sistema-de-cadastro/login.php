<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <a href="home.php">Voltar</a>
    <form action="testeLogin.php" method="POST" class="container">
        <h1 class="container__title">Login</h1>
        <input class="container__postInput" type="text" name = "email" id="email" required placeholder="Email">
        <input class="container__postInput" type="password" name="senha" id="senha" required placeholder="Senha">
        <input class="container__inputSubmit" name="submit" type="submit" Fazer Login">
    </form>
</body>
</html>