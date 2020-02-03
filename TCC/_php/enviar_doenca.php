<?php
session_start();
include('conexao.php');

if(empty($_POST["doenca"]) || empty($_POST["sintoma"])){
    $_SESSION['campo_vazio'] = true;
    header("Location: /TCC/tool.php");
    exit();
}

$doenca = $_POST['doenca'];
$sintoma = $_POST['sintoma'];
$ponteiro = 0;
$qtd = count($sintoma);

while($ponteiro < $qtd) {
    $query = "insert into sintomadoenca values(null, '$sintoma[$ponteiro]', '$doenca')";
    mysqli_query ($conexao, $query);
    $ponteiro++;
}
$query = "insert into doencas values('$doenca')";
mysqli_query ($conexao, $query);
header("Location: /TCC/tool.php");
?>