<?php require_once '../consultas/consulta_submenu.php';?>
</div>
<div class="menu">
	<ul>
		<?php
		$subsmenu = mostraSubMenu($conexao,$PessoaAcesso);
		//var_dump($subsmenu);
		foreach ($subsmenu as $submenu):?>
			<li>
				<a href="<?=$submenu['sm_uri']?>"><?=$submenu['sm_nome']?></a>
			</li>
		<?php endforeach;
		?>
	</ul>
</div>