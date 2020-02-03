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
				padding-left: 120px;
				padding-right: 50px;
			}
			th {
				height: 50px;
				padding-left: 50px;
				padding-right: 50px;
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
            Resultado:
            <table width="467">
            <tr><th>Doenças</td><th>Sintoma relacionado</td></tr>
            <?php 
            $ponteiro = 0;
            $qtd = count($_SESSION["doenca"]);
            while ($ponteiro < $qtd) {
                $loop = 0;
                $imprimirDoenca = $_SESSION["doenca"][$ponteiro];
                $imprimirSintoma = $_SESSION["sintoma"][$ponteiro];
                echo "<tr><td>$imprimirDoenca</td><td>";
                $qtdSintoma = count($imprimirSintoma);
                while($loop < $qtdSintoma) {
                    echo "$imprimirSintoma[$loop], ";
                    $loop++;
                }
                echo "</td></tr>";
                $ponteiro++;
            }            
            ?>
            </table>
	</section>
	</div>
	</body>

</html>

<?php
//print_r($_SESSION["doenca"]);
//while ($imprimir = $_SESSION["doenca"][$ponteiro])
//<td>$imprimirSintoma</td></tr>"