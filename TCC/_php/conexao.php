<?php
session_start();
define('LOCALHOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', null);
define('DB', 'tcc');

$conexao = mysqli_connect(LOCALHOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
