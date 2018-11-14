<?php include "cabecalho.php";
require_once "../consultas/consulta_categoria.php";
require_once "../consultas/consulta_produto.php";

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
        <?php include("form_base_produto.php");?>
            <tr>
                <td><button CLASS="btn btn-primary">Alterar</button></td>
            </tr>
        </table>
    </form>
<?php include "rodape.php";