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
        $grades = array("Jim"=>"A+", "Pam"=>"A-", "Oscar"=>"F");
        $grades["Jim"] = "C";
        echo $grades["Jim"];
    ?>
</body>
</html>