<!--
</div>
	<div class="menu">
		<ul>
			<li>
				<a href="../index.php">Home</a>
			</li>
			<li>
				<a href="../public/form_pessoa.php">Cadastro Pessoa</a>
			</li>
			<li>
				<a href="../public/lista_pessoas.php">Lista de Pessoas</a>
			</li>
			<li>
				<a href="../public/form_produto.php">Cadastro Produtos</a>
			</li>
			<li>
				<a href="../public/lista_produtos.php">Produtos</a>
			</li>
			<li>
				<a href="../public/produtoA_vender.php">Lista Produtos</a>
			</li>
			<li>
				<a href="../public/lista_compra.php">Lista de Compra</a>
			</li>
            <li>
                <a href="../public/contato.php">Contato</a>
            </li>
			<li>
				<a href="../public/logout.php">Deslogar</a>
			</li>

		</ul>
</div>
-->

<?php include "../consultas/consulta_submenu.php";?>
</div>
<div class="menu">
	<ul>
		<?php
		$subsmenu = mostraSubMenu($conexao);
		var_dump($subsmenu);
		foreach ($subsmenu as $submenu):?>
			<li>
				<a href="<?=$submenu['sm_uri']?>"><?=$submenu['sm_nome']?></a>
			</li>
		<?php endforeach;
		?>
	</ul>
</div>