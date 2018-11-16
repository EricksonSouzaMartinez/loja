<table class="table border">
            <tr>
                <td><label for="produto">Produto:</label>
                    <input class="form-control" type="text" name="nome_produto" value="<?=$produto->nome_produto?>"></td>
            </tr>

            <tr>
                <td><label for="preco">Preco:</label>
                    <input class="form-control preco_produto" type="text" name="preco_produto" value="<?=$produto->preco_produto?>"></td>
            </tr>

            <tr>
                <td><label class="estoque" for="quantidade">Quantidade:</label>
                    <input class="form-control" type="text" name="quantidade_produto" value="<?=$produto->quantidade_produto?>"></td>
            </tr>
            <tr>
                <td><label for="usado">Usado:</label>
                    <input type="checkbox" name="usado" <?=$usado;?>value="true"></td>
            </tr>
            <tr>
                <td><label for="quantidade">Categorias:</label>
                    <select name="categoria_id" class="form-control">
                        <?php foreach ($categorias as $categoria):
                        $essaEhcategoria = $produto->categoria == $categoria['ct_id'];
                        $selecao=$essaEhcategoria ? "selected='selected'": "";
                        ?>
                        <option  value="<?=$categoria['ct_id']?>" <?=$selecao?>>
                            <?=$categoria['Nome_categoria']?>
                            <?php endforeach;?>
                        </option>>
                    </select>
                </td>
            </tr>