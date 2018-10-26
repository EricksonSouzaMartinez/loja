<?php include "cabecalho.php";?>
<h1 class="adiciona-pessoa">Novo Cadastro</h1>
<?php include "menu.php";?>
<?php include "conteudo.php";?>
<form action="../_sys/adiciona_pessoa.php" method="post">


	<table class="table">

        <tr>
		    <td><label for="nome">Nome</label></td>
        </tr>
        <tr>
            <td><input class="form-control" type="text" name="nome"></td>
        </tr>

        <tr>
            <td><label for="telefone">Telefone</label></td>
        </tr>
        <tr>
            <td><input class="form-control" type="text" name="telefone" maxlength="11"></tr>
        </tr>

        <tr>
            <td>Cliente
            <input type="radio" name="acesso" value="1"></td>
        </tr>

        <tr>
            <td>Funcionario
			<input type="radio" name="acesso" value="2"></td>
        </tr>

        <tr>
            <td><button>Cadastrar</button></td>

        </tr>
    </table>
</form>
<?php include "rodape.php";