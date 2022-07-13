<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Um array armazena vários elementos dentro de apenas uma variável! */

        $instrumentos = array("Acordeon", "Violão", "Bateria");
        $elementos = count($instrumentos);
        echo "<h3>Eu tenho um " . $instrumentos[0] . "!</h3>";
        echo "<h3>Eu tenho um " . $instrumentos[1] . "!</h3>";
        echo "<h3>Eu tenho uma " . $instrumentos[2] . "!</h3>";
        echo "<h3>No total, eu possuo " . $elementos . " instrumentos!</h3>";
    ?>
</body>
</html>