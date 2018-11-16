<?php include "cabecalho.php";
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
<?php include "menu.php";?>
<?php include "conteudo.php";
include "../_sys/logica_usuario.php";
verificaUsuario();?>
<form action="../_sys/adiciona-produto.php?action=cadastro" class="form" method="post">
<?php include("form_base_produto.php");?>
        <tr>
            <td><button CLASS="btn btn-primary">Cadastrar</button></td>
        </tr>
	</table>
    <a href="form_categoria.php">Nova Categoria</a>
</form>
<?php include "rodape.php";