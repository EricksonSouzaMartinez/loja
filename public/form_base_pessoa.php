<?php ?>
<table class="table border">
    <tr>
        <td><label for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" value="<?=$pessoa['Nome']?>" onkeypress="f()"></td>
    </tr>
    <tr>
        <td><label for="telefone">Telefone:</label>
            <input class="form-control" type="text" name="telefone" maxlength="11" value="<?=$pessoa['Telefone']?>">
    </tr>
    <tr>
        <td>Cliente:
            <input type="radio" name="acesso" <?=$acessoC?>value="1">
            Funcionario:
            <input type="radio" name="acesso" <?=$acessoF?>value="2"></td>
    </tr>



    <script>
        function f() {
            alert("Teste");
        }
    </script>