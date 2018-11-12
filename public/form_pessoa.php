<?php include "cabecalho.php";
require_once "../_sys/mostra_alerta.php";
?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";
include "conteudo.php";
include "../_sys/logica_usuario.php";
verificaUsuario();
mostraAlerta("success");
mostraAlerta("danger");
$pessoa = array("Nome" => "", "Telefone" => "");
$acessoC = "";
$acessoF = "";
?>
<form action="../_sys/adiciona_pessoa.php" class="form" method="post">
    <?php include ("form_base_pessoa.php");?>
        <tr>
            <td><button class="btn btn-primary">Cadastrar</button></td>

        </tr>
    </table>
</form>
<?php include "rodape.php";