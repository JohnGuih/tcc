<?php session_start(); ?>

<html lang="pt-br">

	<head>
		<meta charset="UTF-8"/>
		<title> Web Lab </title>
		<link rel="stylesheet" href="_css/estilo.css">
		<style>
			section#tool p {
		    display: inline;
			background-color: rgb(233, 240, 136);
			border-radius: 5px;
			padding: 2px;
            margin-right: 3px;
            }
            section#tool {
			padding: 10px;
			width: 380px;
			height: 40px;
			position: absolute;
			background-color: #CECECE;
			margin-top: 120px;
			line-height: 30px;
            }
            input#enviar {
			position: absolute;
			padding: 10px;
			margin-left: 310;
			margin-top: -40;
			float: right;
            }
            p#erro{
			color: red;
			}
		</style>
	</head>
	
	<body>
	<div id="interface_login">
		
		<header class="cabecalho">

			<img id="logo" src="_imagens/logo_peq.png">
			<h1>Projeto Web Lab v0.2</h1>

		</header>
	
	<section id="corpo_login">
    <form action='/TCC/_php/enviar_doenca.php' method='post'>
        <?php if(isset($_SESSION['campo_vazio'])){
			echo "<p class='redtext' id='erro'>Não deixe os campos doença e sintoma vazios.</p>";
			unset($_SESSION['campo_vazio']);
		}
		?>
        <p>Informe os dados da doença: </p>
        Nome da doença: <input type='text' name='doenca'><br><br>
        <section id='tool'>
        </section>
        <input type='submit' id='enviar' value='Finalizar'>
    </form>
        <table style="padding: 5px;">
        Sintoma relacionado: 
	    	<tr>
			<td><input type="radio" value="tosse" name="sintoma">Tosse</td>
		    <td><input type="radio" value="espirro" name="sintoma">Espirro</td>
	    	<td><input type="radio" value="sudorese" name="sintoma">Sudorese</td>
            </tr>
            <tr>
            <td><input type="radio" value="dor" name="sintoma">Dor</td>
			<td><input type="radio" value="formigamento" name="sintoma">Formigamento</td>
			<td><input type="radio" value="coceira" name="sintoma">Coçeira</td>
	    	</tr>
		</table>
        <button onclick="aplicar_sintoma()">Aplicar</button>
	</section>
	</div>
    <script>
        id = 0
		function aplicar_sintoma() {
			id = ++id
			var sintoma = document.querySelector('input[name="sintoma"]:checked').value;
            document.getElementById('tool').insertAdjacentHTML('beforeend', '<p id="'+id+'" nome="'+id+'"'+'onclick="remover('+id+')">'+sintoma+'</p>');
			document.getElementById('tool').insertAdjacentHTML('beforeend', '<input id="'+id+'" type="hidden"'+' name="sintoma[]"'+'value="'+sintoma+'">');
		}
        function remover(numero) {
			document.getElementById(numero).remove()
			document.getElementById(numero).remove()
		}
	</script>
	</body>
</html>