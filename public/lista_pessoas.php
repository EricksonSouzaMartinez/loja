<?php
require_once "../consultas/consulta_pessoa.php";
require_once "../_sys/mostra_alerta.php";
include "cabecalho.php";?>
    <h1 class="adiciona-pessoa">Lista de Pessoas</h1>
<?php
include "menu.php";
include "conteudo.php";
include "../_sys/logica_usuario.php";
verificaUsuario();
    ?>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">

    <?php
mostraAlerta("success");
mostraAlerta("danger");
?>
    <table class="table table-striped table-bordered">
        <tr style="text-align: center">
            <td>NOME</td>
            <td>TELEFONE</td>
            <td>ACESSO</td>
            <td>STATUS</td>
            <td>EDIÇÃO</td>
        </tr>
<?php
$pessoas= mostraPessoa($conexao,$IDPessoa,$PessoaAcesso);
foreach($pessoas as $pessoa):
    ?>
    <tr style="text-align: center">
        <td><?=$pessoa['Nome']?></td>
        <td><?=$pessoa['Telefone']?></td>
        <td><?=($pessoa['acesso']==1)?"Cliente":"Funcionario";?></td>
        <form action="../_sys/remove_pessoa.php" method="post">
        <form action="../_sys/remove_pessoa.php" method="post">
            <td>
                    <input name="idAtiva" hidden value="1"<?=$pessoa['IDPessoa']?>>
                    <button class="btn btn-light">Ativar</button>
                    <input name="idInativa" hidden value="0"<?=$pessoa['IDPessoa']?>>
                    <button class="btn btn-danger">Inativar</button>
            </td>
        </form>

        <td>
                <form action="../public/form_edita_pessoa.php" method="post">
                    <input name="id" hidden value="<?=$pessoa['IDPessoa']?>">
                    <button class="btn btn-dark">Editar</button>
                </form>
        </td>
    </tr>
<?php
endforeach;
?>
    </table>
<?
include "rodape.php";

