<?php
include "../_sys/consulta_pessoa.php";
include "cabecalho.php";?>

    <h1 class="adiciona-pessoa">Lista de Pessoas</h1>
<?php
include "menu.php";
include "conteudo.php";
if(isset($_GET['cadastro']) && $_GET['cadastro']==1){
?>
    <p class="alert-success"> A Pessoa foi cadastrada</p>
<?php


}else {
    ?>
    <p class="alert-danger"> A Pessoa nao foi cadastrada</p>
    <table class="table table-striped table-bordered">
    <?php
}

$pessoas= mostraPessoa($conexao);
foreach($pessoas as $pessoa):
    ?>
    <tr>
        <td><?=$pessoa['Nome']?></td>
        <td><?=$pessoa['Telefone']?></td>
        <td><?=$pessoa['acesso']?></td>

    </tr>
<?php
endforeach;
?>
    </table>
<?
include "rodape.php";

