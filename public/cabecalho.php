<?php error_reporting(E_ALL ^ E_NOTICE);

if (isset($_COOKIE['pessoaid'])) {
	$IDPessoa = $_COOKIE['pessoaid'];
	$PessoaAcesso = $_COOKIE['pessoaacesso'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Nossa Loja</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/cabecalho.css">
</head>
<body>
	<div class="header">
	