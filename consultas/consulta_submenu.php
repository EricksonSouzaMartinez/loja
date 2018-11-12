<?php
require_once ("../conexao/conecta.php");

function mostraSubMenu($conexao){
    $subsmenu=array();
    $resultado=mysqli_query($conexao,"SELECT * FROM sub_menu WHERE sm_ativo = 1 ORDER BY sm_id ASC");
    while($submenu = mysqli_fetch_assoc($resultado)){
        array_push($subsmenu,$submenu);
    }
    return $subsmenu;
}

