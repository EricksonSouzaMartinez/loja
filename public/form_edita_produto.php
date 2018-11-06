<?php include "cabecalho.php";
include "../_sys/consulta_categoria.php";
include "../_sys/consulta_produto.php";

$categorias= listaCategoria($conexao);
$id=$_POST['id'];
$produto=buscaProduto($conexao,$id);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
    <h1 class="adiciona-pessoa">Alterar Produto</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";
include "../_sys/logica_usuario.php";
verificaUsuario();?>
    <form action="../_sys/edita_produto.php" class="form" method="post">
        <input name="id" type="hidden" value="<?=$produto['IDProduto']?>">
        <?php include ("Form_base.php");?>
            <tr>
                <td><button CLASS="btn">Alterar</button></td>
            </tr>
        </table>
    </form>
<?php include "rodape.php";