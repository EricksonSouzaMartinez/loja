<?php
include "../conexao/conecta.php";
require_once "../classes/Pessoa.php";
require_once "../classes/Produto.php";

function realizarCompra($conexao,$IDPessoa,Produto $produto,$contador,$valor){
	$query= "INSERT INTO Compra (Pessoa_nome,IDProduto,Quantidade_Compra, data_compra,valor_compra) VALUES ({$IDPessoa},{$produto->id},{$contador},current_date(), $valor)";
	return mysqli_query($conexao,$query);
}

function mostraCompra($conexao,$IDPessoa,$PessoaAcesso){
	$compras=array();
    if ($PessoaAcesso == 2 ) {
        $resultado = mysqli_query($conexao, $query = "SELECT cp.*,ps.Nome as Nome_compra, pr.Nome_Produto as produto_compra FROM Compra as cp 
          left JOIN Pessoas as ps ON ps.IDPessoa = cp.Pessoa_nome
          LEFT JOIN Produtos as pr ON pr.IDProduto = cp.IDProduto order BY cp.IDCompra desc");

        while ($compra_array = mysqli_fetch_assoc($resultado)) {

            $compra =new Compra();
            $pessoa =new Pessoa();
            $produto =new Produto();

            $pessoa->nome=$compra_array['Nome_compra'];
            $produto->nome_produto=$compra_array['produto_compra'];

            $compra->id=$compra_array['IDCompra'];
            $compra->cp_ativo=$compra_array['cp_ativo'];
            $compra->pessoa_id=$pessoa->nome;
            $compra->produto_id=$produto->nome_produto;
            $compra->quantidade=$compra_array['quantidade_compra'];
            $compra->data=$compra_array['data_compra'];
            $compra->valor=$compra_array['valor_compra'];
            array_push($compras, $compra);

//            var_dump(
//                $compra->pessoa_id."<br>",
//                $compra->produto_id."<br>",
//                $compra->quantidade."<br>",
//                $compra->data."<br>",
//                $compra->valor."<br>");
//            array_push($compras, $compra);
        }
        return $compras;
    }else{

        $compras=array();
         $resultado = mysqli_query($conexao, $query = "SELECT cp.*,ps.Nome as Nome_compra, pr.Nome_Produto as produto_compra FROM Compra as cp 
          left JOIN Pessoas as ps ON ps.IDPessoa = cp.Pessoa_nome
          LEFT JOIN Produtos as pr ON pr.IDProduto = cp.IDProduto 
          WHERE ps.IDPessoa = {$IDPessoa} order BY cp.IDCompra desc");

        while ($compra_array = mysqli_fetch_assoc($resultado)) {

            $compra =new Compra();
            $pessoa =new Pessoa();
            $produto =new Produto();


            $pessoa->nome=$compra_array['Nome_compra'];
            $produto->nome_produto=$compra_array['produto_compra'];

            $compra->id=$compra_array['IDCompra'];
            $compra->cp_ativo=$compra_array['cp_ativo'];
            $compra->pessoa_id=$pessoa->nome;
            $compra->produto_id=$produto->nome_produto;
            $compra->quantidade=$compra_array['quantidade_compra'];
            $compra->data=$compra_array['data_compra'];
            $compra->valor=$compra_array['valor_compra'];



//            var_dump(
//              $compra->pessoa_id."<br>",
//              $compra->produto_id."<br>",
//              $compra->quantidade."<br>",
//              $compra->data."<br>",
//              $compra->valor."<br>");
//            array_push($compras, $compra);
        }
        return $compras;
    }
}
