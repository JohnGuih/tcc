<?php
session_start();
include ('conexao.php');

$email = $_SESSION["email"];
$senha = $_SESSION["senha"];

$query = "select nome, sobrenome, sexo, nascimento, peso, altura, sangue, id from usuarios where email = '{$email}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    while ($registro = mysqli_fetch_array($result)) {
        $_SESSION["nome"] = $registro['nome'];
        $_SESSION["sobrenome"] = $registro['sobrenome'];
        $_SESSION["sexo"] = $registro['sexo'];
        $_SESSION["nascimento"] = $registro['nascimento'];
        $_SESSION["peso"] = $registro['peso'];
        $_SESSION["altura"] = $registro['altura'];
        $_SESSION["sangue"] = $registro['sangue'];
        $_SESSION["id"] = $registro['id'];
    }
    echo $_SESSION["email"]; 
    header("Location: /TCC/painel.php");
    exit();
} else {
    //$_SESSION['erro'] = true;
    //header("Location: /TCC/tela_de_cadastro.php");
    //exit();
}