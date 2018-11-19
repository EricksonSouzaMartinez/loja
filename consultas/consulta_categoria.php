<?php
require_once "../conexao/conecta.php";

function listaCategoria($conexao){
    $categorias=array();
    $query = "select * from categorias where ct_ativo =1";
    $resultado = mysqli_query($conexao,$query);
    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias,$categoria);
    }
        return $categorias;
}

function insereCategoria($conexao,$categoria){
	$query = "insert into categorias (Nome_Categoria) values('{$categoria}')";
	 return mysqli_query($conexao,$query);
}