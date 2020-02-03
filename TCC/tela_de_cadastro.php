<?php
session_start();
?>

<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title> Cadastrar </title>
		<link rel="stylesheet" href="_css/estilo.css">
		<style>
			p#erro{
				color: red;
				text-align: center
			}
		</style>
	</head>
	
	<body>
		<div id="interface_cadastro">
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
			<section id="corpo_cadastro">
				<header class="cabecalho_de_cadastro">
					Informações de Cadastro
				</header>
			<form action="_php/cadastrar.php" method="post">
				<?php if(isset($_SESSION['nao_autenticado'])){
					echo "<p class='redtext' id='erro'>Complete todos os campos</p>";
					unset($_SESSION['nao_autenticado']);
				} elseif (isset($_SESSION['duplicado'])) {
					echo "<p class='redtext' id='erro'>Este email já foi cadastrado</p>";
				}
				?>
				<table id="tablecadastro">
					<tr><td>Email:</td><td><input type="text" name="email" id="email"></td></tr>
					<tr><td>Senha:</td><td><input type="password" name="senha" id="senha"></td></tr>
					<tr><td>Nome:</td><td><input type="text" name="nome" id="nome"></td></tr>
					<tr><td>Sobrenome:</td><td><input type="text" name="sobrenome" id="sobrenome"></td></tr>
					<tr><td>Sexo:</td><td>
						<select id="sexo" name="sexo">
							<option value="M">Masculino</option>
							<option value="F">Feminino</option>
						</select>
					</td></tr>
					<tr><td>Data de Nascimento:</td><td><input type="date" name="nascimento" id="nascimento"></td></tr>
				</table>
				<header class="cabecalho_de_cadastro">
					Informações Medicas
				</header>
				<table id="tablecadastro">
					<tr><td>Peso em kg:</td><td><input type="number" name="peso" id="peso"></td></tr>
					<tr><td>Altura em cm:</td><td><input type="number" name="altura" id="altura"></td></tr>
					<tr><td>Tipo Sanguineo:</td><td>
						<select id="sangue" name="sangue">
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
						</select>
					</td></tr>
				</table>
				<input type="submit" id="cadastro" value="Cadastrar">
			</form>
			</section>
		</div>
	</body>
</html>