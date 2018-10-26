<?php
include "cabecalho.php";
include "menu.php";

if(isset($_GET['cadastro']) && $_GET['cadastro']==1){
?>
    <p class="alert-success"> A Pessoa foi cadastrada</p>
<?php


}else {
    ?>
    <p class="alert-danger"> A Pessoa nao foi cadastrada</p>

    <?php
}

include "rodape.php";