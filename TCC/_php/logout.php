<?php
session_start();
session_destroy();
//unset($_SESSION['nome da sessao']); apaga somente uma sessão
header('Location: /TCC/tela_de_login.php');
exit();