<?php require_once "cabecalho.php";
require_once "../consultas/consulta_categoria.php";
$usado = "";
$produto =array(
        "Nome_Produto" => "",
        "Preco_Produto" => "",
        "Quantidade_Produto" => "",
        "categoria_id" => "1");
$categorias= listaCategoria($conexao);
?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php require_once "menu.php";
require_once "conteudo.php";
require_once "../_sys/logica_usuario.php";
verificaUsuario();?>
<form action="../_sys/adiciona-produto.php?action=cadastro" class="form" method="post">
<?php require_once("form_base_produto.php");?>
        <tr>
            <td><button CLASS="btn btn-primary">Cadastrar</button></td>
        </tr>
	</table>
    <a href="form_categoria.php">Nova Categoria</a>
</form>
<?php require_once "rodape.php";