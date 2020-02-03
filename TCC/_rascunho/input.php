<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action = "input.php" method = "get">
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <br>
    <input type="submit">
    </form>
    <br>
    your name is <?php echo $_GET["name"] //Vai pegar o input chamado "name" e imprimir na tela ?>
    <br>
    your age is <?php echo $_GET["age"] ?>
    <br><br>
    <form action="input.php" method="post">
    Password: <input type="password" name="password">
    <input type="submit">
    </form>
    <br>
    your password is <?php echo $_POST["password"] //Vai fazer o mesmo que o get só que mais seguro?>
</body>
</html>