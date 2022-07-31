<?php
    //para comentar, selecione o bloco e pressione CTRL + K + C
    if(isset($_POST['submit'])) {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email']; 
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
                  VALUES ('$nome', '$senha', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco');");           
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Formulário | GN</title>


</head>
<body>
<a href="home.php">Voltar</a>
    <form action = "formulario.php" method="POST" class="containner">
        <fieldset>
            <legend><b>Formulário de Clientes</b></legend>
            <br>
            <div class="containner__inputBox">
                <input type="text" name="nome" id="nome" class="containner__inputUser" required>
                <label for="nome" class="containner__labelInput">Nome Completo</label>
            </div>

            <div class="containner__inputBox">
                <input type="password" name="senha" id="senha" class="containner__inputUser" required>
                <label for="senha" class="containner__labelInput">Senha</label>
            </div>

            <div class="containner__inputBox">
                <input type="text" name="email" id="email" class="containner__inputUser" required>
                <label for="email" class="containner__labelInput">Email</label>
            </div>

            <div class="containner__inputBox">
                <input type="tel" name="telefone" id="telefone" class="containner__inputUser" required>
                <label for="telefone" class="containner__labelInput">Telefone</label>
            </div>

            <p>Sexo:</p>
            <br>
            <input type="radio" name="genero" value="feminino"  id="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" name="genero" value="masculino" id="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" name="genero" value="outro" id="outro" required>
            <label for="outro">Outro</label>

            <div class="containner__inputBox">
                <label for="data_nascimento"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento">
            </div>

            <div class="containner__inputBox">
                <input type="text" name="cidade" id="cidade" class="containner__inputUser" required>
                <label for="cidade" class="containner__labelInput">Cidade</label>
            </div>

            <div class="containner__inputBox">
                <input type="text" name="estado" id="estado" class="containner__inputUser" required>
                <label for="estado" class="containner__labelInput">Estado</label>
            </div>

            <div class="containner__inputBox">
                <input type="text" name="endereco" id="endereco" class="containner__inputUser" required>
                <label for="endereco" class="containner__labelInput">Endereço</label>
            </div>

            <input type="submit" name="submit" id="submit">
            
        </fieldset>
    </form>
</body>
</html>