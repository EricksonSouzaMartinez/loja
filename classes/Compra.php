<?php
require_once "Produto.php";

class Compra
{
    public $id;
    public $cp_ativo;
    public $pessoa_id;
    public $produto_id;
    public $quantidade;
    public $data;
    public $valor;


    function valorProduto(){
        $produto = new Produto;
        $this->valor = $produto->preco_produto * $this->quantidade;
        return $this->valor;
    }
}