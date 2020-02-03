<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
    <tr><td>Email:</td><td><input type="text" name="email" id="email"></td></tr>
	<tr><td>Senha:</td><td><input type="password" name="senha" id="senha"></td></tr>
	<tr><td>Nome:</td><td><input type="text" name="nome" id="nome"></td></tr>
	<tr><td>Sobrenome:</td><td><input type="text" nome="sobrenome" id="sobrenome"></td></tr>
	<tr><td>Sexo:</td><td>
    <input type="submit">
    </form>
    <?php 
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        echo $email;
        echo $senha;
        mysql_connect ("localhost:3306", "joao", "root");
        mysql_select_db ("tcc");
        mysql_query ("insert into tcc.test values('$email', '$senha')");
	    $consulta = mysql_query("select * from test");
	    while($exibir = mysql_fetch_array($consulta)){
	    	echo "<br>email:".$exibir['email'];
	    	echo " - senha:".$exibir['senha'];
	    }
    ?>
</body>
</html>