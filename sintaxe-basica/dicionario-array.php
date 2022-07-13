<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dicionário(associative) com Array</title>
</head>
<body>
    <?php
    $idade = array("Gustavo"=>"17", "Neri"=>"18", "Anderson"=>"19", "Giulia"=>"20");

    echo "<h3>Anderson tem " . $idade['Anderson'] . " anos!</h3>";

    foreach($idade as $name => $name_value) {
        echo "Nome = " . $name . " | Idade = " . $name_value;
        echo "<br>";

         /*Parar o Loop quando chegar no Neri */
         if ($name == "Neri") {
            echo "O Neri está na lista!";
            break;
         }
    }
    
    ?>
</body>
</html>