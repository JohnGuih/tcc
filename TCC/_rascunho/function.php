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
        function sayHi($name, $age){
            echo "Hello $name, you are $age <br>";
        }

        sayHi("João", 18);
        sayHi("Dave", 30);
        sayHi("Ana", 80);
    ?>
</body>
</html>