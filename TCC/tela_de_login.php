<?php
session_start();
?>

<html lang="pt-br">

	<head>
		<meta charset="UTF-8"/>
		<title> Web Lab </title>
		<link rel="stylesheet" href="_css/estilo.css">
		<style>
			p#erro{
				color: red;
				text-align: center
			}
		</style>
	</head>
	
	<body>
	<div id="interface_login">
		
		<header class="cabecalho">

			<img id="logo" src="_imagens/logo_peq.png">
			<h1>Projeto Web Lab v0.2</h1>
			
		<nav id="menu">
			<ul>
				<li><a href="tela_de_login.php">Entrar</a></li>
				<li><a href="tela_de_cadastro.php">Cadastrar</a></li>
				<li><a href="tela_do_weblab.php">WebLab</a></li>
				<li><a href="sobre.php">Sobre</a></li>
			</ul>
		</nav>
		</header>
	
	<section id="corpo_login">
	<form action = "_php/login.php" method = "POST">
		<?php if(isset($_SESSION['nao_autenticado'])){
			echo "<p class='redtext' id='erro'>Email ou senha incorretos</p>";
			unset($_SESSION['nao_autenticado']);
		}
		?>
	<table id="tablelogin">
		<tr><td>Email:</td><td><input type="email" id="email" name="email"></td></tr>
		<tr><td>Senha:</td><td><input type="password" id="senha" name="senha"></td></tr>
	</table>	
	<br><input id="login" type="submit" value="Entrar" style="margin-left: 50%;">
	</form>
	</section>
	</div>
	</body>

</html>