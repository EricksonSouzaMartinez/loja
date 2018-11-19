<?php require_once "cabecalho.php";?>
<h1>Enviar Email</h1>
<?php require_once "menu.php";
require_once "conteudo.php"; ?>

<form action="../_sys/envia_contato.php" class="form" method="post">
    <table class="table border">
        <tr>
            <td>Nome:<input type="text" name="nome" class="form-control"></td>
        </tr>
        <tr>
            <td>E-mail:<input type="text" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td>Mensagem:<input type="text" name="mensagem" class="form-control"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">enviar</button></td>
        </tr>
    </table>
</form>
<?php require_once "rodape.php";?>
