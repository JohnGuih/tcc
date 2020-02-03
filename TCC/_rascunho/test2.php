<html>
<meta charset=utfmb4>
Para alterar placas de carros clique abaixo: <hr>
<form method=POST>
Código: <input type=text name=codigo>
Nova placa: <input type=text name=placa>
<input type=submit value="Alterar Carro">
<a href=carro.php><input type=button value="Voltar"></a>
</form>
</html>
<?php
if(isset($_POST["codigo"])){
mysql_connect ("localhost:3306", "root", "root");
mysql_select_db("estacionamento");
$codigo = $_POST["codigo"];
$placa = $_POST["placa"];
mysql_query ("set table");
$consulta = mysql_query("select * from Carros");
while($exibir = mysql_fetch_array($consulta)){
echo "<br>Código:".$exibir['codigo'];
echo " - Placa:".$exibir['placa'];
}
mysql_close();
}
?>