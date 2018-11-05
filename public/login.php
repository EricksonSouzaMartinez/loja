<?php
include "../_sys/consulta_pessoa.php";
include "../_sys/logica_usuario.php";
$nome=$_POST['nome_pessoa'];
$telefone=$_POST['telefone_pessoa'];
$login = loginPessoa($conexao,$nome,$telefone);
$pessoaAcesso = buscaID($conexao,$nome,$telefone);
var_dump($pessoaAcesso);
if ($login == null){
	$_SESSION['danger']="Pessoa ou Telefone invalido.";
	header("Location:../index.php");
}else{
	logaUsuario($login['Nome']);
	$_SESSION['success']="";
	setcookie("pessoaacesso",$pessoaAcesso['IDPessoa']);
	header("Location:../index.php");
}
die();