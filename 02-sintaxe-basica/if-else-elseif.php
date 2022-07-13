<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF, ELSE, ELSEIF</title>
</head>
<body>
    <h1>IF, ELSE, ELSEIF</h1>

    <?php
        $idade = 17;
        if ($idade > 18) {
            echo "Parabéns, você é de maior!";
        } elseif ($idade == 18){
            echo "Legal, você tem 18 anos :)";
        } elseif ($idade == 17) {
            echo "Está quase lá! jaja será de maior. :D";
        }
        else {
            echo "Vish, você é de menor :(";
        }
    ?>
</body>
</html>