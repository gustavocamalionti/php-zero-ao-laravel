<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php


    $x = 5;
    $y = 2; 

    $soma = $x + $y;
    echo "<h3>Soma entre " . $x . " e " . $y . " vale: " . $soma . "</h3>";
    
    $subtracao = $x - $y;
    echo "<h3>Subtração entre " . $x . " e " . $y . " vale: " . $subtracao . "</h3>";

    $multiplicacao = $x * $y;
    echo "<h3>Multiplicação entre " . $x . " e " . "$y" . " vale: " . $multiplicacao . "</h3>";
    
    $divisao = $x / $y;
    echo "<h3>Divisão entre " . $x . " e ". $y . " vale: ". $divisao . "</h3>";

    $resto = $x % $y;
    echo "<h3>Resto da divisão entre " . $x . " e ". $y . " vale: ". $resto . "</h3>";

    $exponencial = $x ** $y;
    echo "<h3>Exponenciação entre " . $x . " e " . $y . " vale: " . $exponencial . "</h3>";

    ?>
</body>
</html>