<?php
    session_start();
    //print_r($_SESSION);

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) ==true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sistema.css">
    
    <title>SISTEMA | GN </title>

</head>
<body>
    <nav>
    <?php
        echo "<br>";
        echo "<h1>Acessou o Sistema! Seja bem vindo <u>$logado</u>.</h1>";
    ?>
    </nav>

    
    <a href="sair.php">Sair</a>
    
</body>
</html>