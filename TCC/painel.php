<? session_start(); ?>
<?php
include("_php/verifica_login.php");
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
			table {
 				width: 100%;
			}
			td {
				padding-left: 200px
			}
			th {
				height: 50px;
			}
			tr:nth-child(even) {
				background-color: #FFE4C4;
			}
			tr {
				background-color: #FFF8DC;
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
                <li><a href="painel.php"><?php echo ($_SESSION['nome']) ?></a></li>
				<li><a href="_php/Logout.php">Sair</a></li>
				<li><a href="tela_do_weblab.php">WebLab</a></li>
				<li><a href="sobre.php">Sobre</a></li>
			</ul>
		</nav>
		</header>
	
	<section id="corpo_login">
        <table id ='painel'>
		<tr><th colspan="2">Informações do usuario:</th></tr>
        <tr><td>Nome: </td><td><?php echo ($_SESSION["nome"]); ?></td></tr>
        <tr><td>Sobrenome: </td><td><?php echo ($_SESSION['sobrenome']) ?></td></tr>
        <tr><td>sexo: </td><td><?php 
                                    if ($_SESSION["sexo"] == "M") {
                                    echo "Masculino";
                                    } elseif ($_SESSION["sexo"] == "F") {
                                        echo "Feminino";
                                    } else {
                                        echo null;
                                    }
                                ?></td></tr>
        <tr><td>nascimento: </td><td><?php echo ($_SESSION["nascimento"]); ?></td></tr>
        <tr><td>peso: </td><td><?php echo ($_SESSION["peso"]); ?>kg</td></tr>
        <tr><td>altura: </td><td><?php echo ($_SESSION["altura"]); ?>cm</td></tr>
        <tr><td>sangue: </td><td><?php echo ($_SESSION["sangue"]); ?></td></tr>
        </table>
	</section>
	</div>
	</body>

</html>

<?php
