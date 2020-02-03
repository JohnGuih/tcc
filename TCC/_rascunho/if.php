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
        $isMale = true;
        $isTall = true;
        if($isMale && $isTall){
            echo "You are a tall male<br>";
        } elseif($isMale || $isTall) {
            echo "You are tall or a male<br>";
        } else {
            echo "you are neither tall nor male<br>";
        } if(!$isMale){
            echo "You are a woman";
        }
    ?>
</body>
</html>