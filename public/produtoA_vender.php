<?php require_once "cabecalho.php";
require_once "../consultas/consulta_produto.php";
require_once "../_sys/logica_usuario.php";
require_once "../_sys/mostra_alerta.php";
require_once "../consultas/consulta_compra.php";?>
<link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
<h1 class="adiciona-pessoa">Produtos ha Venda</h1>
<?php require_once "menu.php";
require_once "conteudo.php";

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
        <td>SIMULAR VALOR</td>
    </tr>

<?php

$produtos=mostraProdutosHaVenda($conexao);

foreach($produtos as $produto):
    ?>
    <tr style="text-align: center" id="produto">
        <td><?=$produto->nome_produto?></td>
        <td id="preco_produto"><?=$produto->preco_produto?></td>
        <td><?=$produto->quantidade_produto?></td>
        <td><?=$produto->categoria->nome;?></td>
        <td><?=(($produto->usado)==1)?"sim":"Nao";?></td>
        <td>
            <form action="../public/venda.php" method="post">
                <input style="text-align: center" id="idContador" type="text" size="3" name="nameContador"  pattern="[0-9]{1,}" value="">
        </td>
         <td>
             <input type="hidden" name="IDPessoa" value="<?=$produto->IDPessoa;?>">
                 <input name="id" hidden value="<?=$produto->id?>">
                 <button class="btn btn-primary">Escolher</button>
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
require_once "rodape.php";

