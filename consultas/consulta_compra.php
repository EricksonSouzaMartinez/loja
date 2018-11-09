<?php
include "../conexao/conecta.php";

function realizarCompra($conexao,$IDPessoa,$IDProduto,$contador,$valor){
	$query= "INSERT INTO Compra (Pessoa_nome,IDProduto,Quantidade_Compra, data_compra,valor_compra) VALUES ({$IDPessoa},{$IDProduto},{$contador},current_date(), $valor)";
	return mysqli_query($conexao,$query);
}

function mostraCompra($conexao,$IDPessoa){
	$compras=array();
	$query = "SELECT cp.*,ps.Nome as Nome_compra, pr.Nome_Produto as produto_compra FROM Compra as cp 
       left JOIN Pessoas as ps ON ps.IDPessoa = cp.Pessoa_nome
       LEFT JOIN Produtos as pr ON pr.IDProduto = cp.IDProduto 
       WHERE Pessoa_nome = {$IDPessoa} order BY cp.IDCompra desc";
	$resultado = mysqli_query($conexao,$query);
	while($compra =mysqli_fetch_assoc($resultado)){
		array_push($compras,$compra);
	}
	return $compras;
}