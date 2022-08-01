<?php
    session_start();

    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('<br>');
        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios where email = '$email' and senha = '$senha';";
        $result = $conexao->query($sql);
        // print_r($result);
        // print_r($sql);

        if (mysqli_num_rows($result)<1) {
            // print_r('Não existe');

            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            // print_r("Existe");
            header('Location: sistema.php');
        }

    } else {
        
        //Não Acessa
        header('Location: login.php');
    }

?>