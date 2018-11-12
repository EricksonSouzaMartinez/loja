</div>
<div class="menu">
	<ul>
        <?php include "../consultas/consulta_submenu.php";
		$subsmenu = mostraSubMenu($conexao);
		foreach ($subsmenu as $submenu):?>
			<li>
				<a href="<?=$submenu['sm_uri']?>"><?=$submenu['sm_nome']?></a>
			</li>
		<?php endforeach;
		?>
	</ul>
</div>