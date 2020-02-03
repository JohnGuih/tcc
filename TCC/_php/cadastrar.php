<?php
session_start();
include ('conexao.php');

	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$nome = $_POST["nome"];
	$sobrenome = $_POST["sobrenome"];
	$sexo = $_POST["sexo"];
	$nascimento = $_POST["nascimento"];
	$peso = $_POST["peso"];
	$altura = $_POST["altura"];
    $sangue = $_POST["sangue"];

    $query = "insert into usuarios values('$email', '$senha', '$nome', '$sobrenome', '$sexo', '$nascimento', $peso, $altura, '$sangue', null)";
    $queryVerify = "select id from usuarios where email = '{$email}'";

    $result = mysqli_query($conexao, $queryVerify);

    $row = mysqli_num_rows($result);

    if (!$email || !$senha || !$nome || !$sobrenome || !$sexo || !$nascimento || !$peso || !$altura || !$sangue) {
        $_SESSION['nao_autenticado'] = true;
        header("Location: /TCC/tela_de_cadastro.php");
        exit();
    } else {
        if ($row == 0) {
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;
            mysqli_query ($conexao, $query);
            header("Location: /TCC/_php/logincadastro.php");
            exit();
        } else {
            $_SESSION['duplicado'] = true;
            header("Location: /TCC/tela_de_cadastro.php");
            exit();
        }
    }
?>
