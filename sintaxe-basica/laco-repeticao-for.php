<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço de Repetição: for</title>
</head>
<body>
    <?php
        $instrumentos = array("Acordeon", "Violão", "Bateria");
        $elementos = count($instrumentos);
        for ($x = 0; $x < $elementos; $x++) {
            echo $instrumentos[$x];
            echo "<br>";
        }

    ?>
</body>
</html>