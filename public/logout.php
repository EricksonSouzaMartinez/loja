<?php require_once "../_sys/logica_usuario.php";
logout();
$_SESSION["success"]="Deslogado com sucesso.";
header("Location:../index.php");