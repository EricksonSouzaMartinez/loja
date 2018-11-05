<?php
session_start();

function usuarioEstaLogado(){
	return isset($_SESSION["pessoalogada"]);
	}
function verificaUsuario(){
	if(!usuarioEstaLogado()){
		$_SESSION['danger'] = "voce nao tem acesso a essa funcionalidade";
		header("Location:../index.php");
			die();
	}
}
function usuarioLogado(){
	return $_SESSION["pessoalogada"];
}
function logaUsuario($nome){
	$_SESSION["pessoalogada"] = $nome;	
}

function logout(){
	session_destroy();
	session_start();
}
