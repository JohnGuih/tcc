<?php session_start(); ?>

<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<title> Cadastrar </title>
		<link rel="stylesheet" href="_css/estilo.css">
	</head>
	
	<style>
		td {
			padding: 0px;
		}
		div#interface_weblab section#entrada_dos_sintomas {
			padding: 10px;
			width: 380px;
			height: 250px;
			position: absolute;
			background-color: #CECECE;
			margin-top: 420px;
			line-height: 30px;
		}
		section#entrada_dos_sintomas h1 {
			margin-top: -5px;
		}
		section#entrada_dos_sintomas p {
			display: inline;
			background-color: rgb(233, 240, 136);
			border-radius: 5px;
			padding: 2px;
			margin-right: 3px;
		}
	</style>

	<body>
		<div id="interface_weblab">
			<header class="cabecalho">
				<img id="logo" src="_imagens/logo_peq.png">
				<h1>Projeto Web Lab v0.2</h1>
				
				<nav id="menu">
					<ul>
						<?php 
							if(isset($_SESSION['autenticado'])){
								echo "<li><a href='painel.php'>Conta</a></li>";
								echo "<li><a href='_php/Logout.php'>Sair</a></li>";
							} else {
								echo "<li><a href='tela_de_login.php'>Entrar</a></li>";
								echo "<li><a href='tela_de_cadastro.php'>Cadastrar</a></li>";
							}
						?>
						<li><a href="tela_do_weblab.php">WebLab</a></li>
						<li><a href="sobre.php">Sobre</a></li>
					</ul>
				</nav>
			</header>
			<section id="corpo_weblab">
				<header class="cabecalho_do_weblab">
					Marque o sintoma e o local de efeito:
				</header>
				<div id="sintomas_e_locais">
					<input type="radio" value="dor" name="sintoma_local">Dor<br>
					<input type="radio" value="inchaco" name="sintoma_local">Inchaço<br>
					<input type="radio" value="dormencia" name="sintoma_local">Dormencia<br>
					<input type="radio" value="fraquesa" name="sintoma_local">fraquesa<br>
					<input type="radio" value="formigamento" name="sintoma_local">Formigamento<br>
					<input type="radio" value="coceira" name="sintoma_local">Coçeira<br>
				<header class="cabecalho_do_weblab">
					Marque o sintoma e a Frequencia:
				</header>
					<table style="padding: 5px;">
						<tr><td><input type="radio" value="nausea" name="sintoma_frequencia">Náusea</td><td><input type="radio" value="cansaco" name="sintoma_frequencia">Cansaço</td><td><input type="radio" value="tosse" name="sintoma_frequencia">Tosse</td><td><input type="radio" value="espirro" name="sintoma_frequencia">Espirro</td></tr>
						<tr><td><input type="radio" value="insonia" name="sintoma_frequencia">Insonia</td><td><input type="radio" value="tontura" name="sintoma_frequencia">Tontura</td><td><input type="radio" value="sudorese" name="sintoma_frequencia">Sudorese</td><td><input type="radio" value="desmaio" name="sintoma_frequencia">Desmaio</td></tr>
						
					</table>
				Frequencia: <select type="radio" id="frequencia" >
					<option value="baixa">Menos de uma vez por dia</option>
					<option value="media">Uma vez por dia</option>
					<option value="alta">Mais de uma vez por dia</option>
				</select>
				<button onclick="aplicar_sintoma_frequencia()">Aplicar</button>
				</div>
			</section>
			<aside id="modelo_local">
				Local: <select type="radio" id="local">
					<option value="cabeca">Cabeça</option>
					<option value="torax">Tórax</option>
					<option value="braco_esq">Braço Esquerdo</option>
					<option value="braco_dir">Braço Direito</option>
					<option value="barriga">Barriga</option>
					<option value="perna_esq">Perna Esquerda</option>
					<option value="perna_dir">Perna Direita</option>
				</select>
				<button onclick="aplicar_sintoma_local()">Aplicar</button><br><br>
				<img src="_imagens/modelo_medio.png">
			</aside>
			<section id="entrada_dos_sintomas">
				<h1>Sintomas: </h1>
			</section>
		</div>
		<script>
			var id = 0
			function aplicar_sintoma_local() {
				id = ++id
				var sintoma_local = document.querySelector('input[name="sintoma_local"]:checked').value;
				var local = document.getElementById("local").value;
				document.getElementById('entrada_dos_sintomas').insertAdjacentHTML('beforeend', '<p id="'+id+'" nome="'+id+'"'+'onclick="remover('+id+')">'+sintoma_local+'-'+local+'</p>');
			}
			function aplicar_sintoma_frequencia() {
				id = ++id
				var sintoma_frequencia = document.querySelector('input[name="sintoma_frequencia"]:checked').value;
				var frequencia = document.getElementById("frequencia").value;
				document.getElementById('entrada_dos_sintomas').insertAdjacentHTML('beforeend', '<p id="'+id+'" nome="'+id+'"'+'onclick="remover('+id+')">'+sintoma_frequencia+'-'+frequencia+'</p>');
			}
			function remover(numero) {
				var lista = document.getElementById("entrada_dos_sintomas");
				document.getElementById(numero).remove()
			}
		</script>
	</body>
</html>