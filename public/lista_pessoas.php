<?php
include "../_sys/consulta_pessoa.php";
include "cabecalho.php";?>
    <h1 class="adiciona-pessoa">Lista de Pessoas</h1>
<?php
include "menu.php";
include "conteudo.php";
if(array_key_exists("removido",$_GET) && $_GET['removido']==1){
    ?>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <p class="alert-success"> A Pessoa foi Excluido</p>
    <?php
}
if(array_key_exists("cadastro",$_GET) && $_GET['cadastro']==1){
?>
    <p class="alert-success"> A Pessoa foi cadastrada</p>
<?php
}
?>
    <table class="table table-striped table-bordered">
<?php
$pessoas= mostraPessoa($conexao);
foreach($pessoas as $pessoa):
    ?>
    <tr>
        <td><?=$pessoa['Nome']?></td>
        <td><?=$pessoa['Telefone']?></td>
        <td><?=($pessoa['acesso']==1)?"Cliente":"Funcionario";?></td>
        <td>
                <form action="../_sys/remove_pessoa.php" method="post">
                    <input name="id" hidden value="<?=$pessoa['IDPessoa']?>">
                    <button class="btn-danger">Remover</button>
                </form>
        </td>
        <td>
                <form action="../public/form_edita_pessoa.php" method="post">
                    <input name="id" hidden value="<?=$pessoa['IDPessoa']?>">
                    <button class="btn-dark">Editar</button>
                </form>
        </td>
    </tr>
<?php
endforeach;
?>
    </table>
<?
include "rodape.php";

