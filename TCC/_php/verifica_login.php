<?php
session_start();
if(!$_SESSION["email"]) {
    header("Location: /TCC/tela_de_login.php");
    exit();
}