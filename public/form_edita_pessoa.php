<?php include "cabecalho.php";?>
    <h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";
include "../_sys/consulta_pessoa.php";
include "../_sys/logica_usuario.php";
verificaUsuario();
$id=$_POST['id'];
$pessoa=buscaPessoa($conexao,$id);

$acessoC = ($pessoa['acesso']==1)?"checked='checked'":"";
$acessoF = ($pessoa['acesso']==2)?"checked='checked'":"";
//var_dump($pessoa);
?>
    <form action="../_sys/edita_pessoa.php" class="form" method="post">
        <input type="hidden" name="id" value="<?=$pessoa['IDPessoa']?>">
     <?php include ("form_base_pessoa.php");?>

            <tr>
                <td><button class="btn">Alterar</button></td>

            </tr>
        </table>
    </form>
<?php include "rodape.php";