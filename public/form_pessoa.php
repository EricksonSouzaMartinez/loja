<?php require_once "cabecalho.php";
require_once "../_sys/mostra_alerta.php";?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php require_once "menu.php";
require_once "conteudo.php";
require_once "../_sys/logica_usuario.php";
verificaUsuario();
mostraAlerta("success");
mostraAlerta("danger");
$pessoa = array("Nome" => "", "Telefone" => "");
$acessoC = "";
$acessoF = "";
?>
<form action="../_sys/adiciona_pessoa.php" class="form" method="post">
    <?php require_once ("form_base_pessoa.php");?>
        <tr>
            <td><button class="btn btn-primary">Cadastrar</button></td>

        </tr>
    </table>
</form>
<?php require_once "rodape.php";