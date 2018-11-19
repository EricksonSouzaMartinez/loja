<?php require_once "cabecalho.php";?>
    <h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php require_once "menu.php";
require_once "conteudo.php";
require_once "../consultas/consulta_pessoa.php";
require_once "../_sys/logica_usuario.php";
verificaUsuario();
$id=$_POST['id'];
$pessoa=buscaPessoa($conexao,$id);

$acessoC = ($pessoa['acesso']==1)?"checked='checked'":"";
$acessoF = ($pessoa['acesso']==2)?"checked='checked'":"";
//var_dump($pessoa);
?>
    <form action="../_sys/edita_pessoa.php" class="form" method="post">
        <input type="hidden" name="id" value="<?=$pessoa['IDPessoa']?>">
     <?php require_once "form_base_pessoa.php";?>

            <tr>
                <td><button class="btn btn-primary">Alterar</button></td>

            </tr>
        </table>
    </form>
<?php require_once "rodape.php";