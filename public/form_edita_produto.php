<?php require_once "cabecalho.php";
require_once "../consultas/consulta_categoria.php";
require_once "../consultas/consulta_produto.php";
require_once "../classes/Produto.php";
require_once "../classes/Categoria.php";

$produto = new Produto();
$categoria = new Categoria();

$categorias= listaCategoria($conexao);

$produto->id=$_POST['id'];
$produto=buscaProduto($conexao,$produto);
$usado = ($produto->usado) ? "checked='checked'" : "";


?>
    <h1 class="adiciona-pessoa">Alterar Produto</h1>
<?php require_once "menu.php";
require_once "conteudo.php";
require_once "../_sys/logica_usuario.php";
verificaUsuario();?>
    <form action="../_sys/edita_produto.php" class="form" method="post">
        <input name="id" type="hidden" value="<?=$produto->id?>">
        <?php require_once("form_base_produto.php");?>
            <tr>
                <td><button CLASS="btn btn-primary">Alterar</button></td>
            </tr>
        </table>
    </form>
<?php require_once "rodape.php";