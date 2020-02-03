<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $phrase = "Joao Guilherme";
        //         0123456789.... numero de cada posição
        echo strtoupper($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo $phrase[0]; //selecionar letra
        echo "<br>";
        $phrase[0] = "B"; //Armasena caractere em local especifico
        echo $phrase;
        echo "<br>";
        echo str_replace("Boao", "Girafa", $phrase); //Trocar palavra
        echo "<br>";
        echo substr($phrase, 5); //Imprime na tela a partir de uma posição especifica
        echo "<br>";
        echo substr($phrase, 5, 3); //Imprime a partir de um intervalo
    ?>
</body>
</html>