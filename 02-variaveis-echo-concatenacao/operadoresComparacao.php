<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
</head>
<body>
    <?php
    $a = 2;
    $b = "2";

    var_dump($a == $b);
    var_dump($a === $b);
    var_dump($a != $b);
    var_dump($a !== $b);
    var_dump($a < $b);
    var_dump($a > $b);
    var_dump($a <= $b);
    var_dump($a >= $b);
    var_dump($a <=> $b); /* se for menor, -1; se for igual:0, se for maior:1;*/ 
    ?>
</body>
</html>