<?php
include "cabecalho.php";
require_once "../consultas/consulta_produto.php";
include "../_sys/logica_usuario.php";
include "../_sys/mostra_alerta.php";
require_once "../consultas/consulta_compra.php";
?>
<link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    
<h1 class="adiciona-pessoa">Produtos ha Venda</h1>

<?php 
include "menu.php";
include "conteudo.php";

verificaUsuario();
mostraAlerta("success");
mostraAlerta("danger");

    if (isset($_COOKIE['pessoaacesso'])) {
        $IDPessoa = $_COOKIE['pessoaacesso'];
}
?>  

    <table class="table table-striped table-bordered">
    <tr style="text-align: center;">
        <td>NOME</td>
        <td>PRECO</td>
        <td>ESTOQUE</td>
        <td>CATEGORIA</td>
        <td>ESTADO</td>
        <td>QUANTIDADE</td>
        <td>COMPRAR</td>
        <td>VALOR</td>
    </tr>

<?php

$produtos= mostraProdutosHaVenda($conexao);

foreach($produtos as $produto):
    ?>
    <tr style="text-align: center" id="produto" class="produto<?=$produto['IDProduto']?>">
        <td><?=$produto['Nome_Produto']?></td>
        <td id="preco_produto"><?=$produto['Preco_Produto']?></td>
        <td><?=$produto['Quantidade_Produto']?></td>
        <td><?=$produto['categoria_nome'];?></td>
        <td><?=($produto['usado']==1)?"sim":"Nao";?></td>
        <td>
            <form id="formContador" action="../_sys/escolher_produto.php" method="post">
               <input style="text-align: center" id="idContador" type="text" size="3" name="nameContador"  value="">
        </td>
         <td>
                <input type="hidden" name="IDPessoa" value="<?=$IDPessoa;?>">
                <input name="IDProduto" hidden value="<?=$produto['IDProduto']?>">
                <button id="compra" class="btn btn-primary" onclick="">Comprar</button>
            </form>
        </td>
        <td id="valortotal">0</td>
    </tr>

<?php
endforeach;
?>
    </table>
<script src="../js/newJS/produtosA_vender.js"></script>
<?
include "rodape.php";

