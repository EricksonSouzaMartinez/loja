<?php
require_once "../conexao/conecta.php";

function mostraSubMenu($conexao,$menuAcesso){
    $subsmenu=array();
    $resultado=mysqli_query($conexao,"SELECT * FROM 
sub_menu as sb RIGHT JOIN ps_funcao as psf 
ON sb.sm_id=psf.psf_submenu_id  
where 
psf.psf_acesso={$menuAcesso} ORDER BY sm_id ASC ");
    while($submenu = mysqli_fetch_assoc($resultado)){
        array_push($subsmenu,$submenu);
    }
    return $subsmenu;
}

