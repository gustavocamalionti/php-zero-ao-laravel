<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <h1>Switch/Case</h1>
    <?php 
        $nome = "João";
        switch($nome) {
            case "Gustavo":
                echo "Você é o Gustavo";
                break;

            case "Neri":
                echo "Você é o Neri";
                break;
            
            case "Lisiane":
                echo "Você é a Lisiane";
                break;

            case "Rodrigo":
            case "Rogério":
                echo "Você é o Rodrigo ou Rogério";
                break;
            
            default:
                echo "Você não é o Gustavo, nem a Lisiane, Rodrigo, Rogério e nem o Neri";
        }
    
    ?>
</body>
</html>