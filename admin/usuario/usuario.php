<?php 
$pagina = @$_GET['u'];


if($pagina == NULL){
    require_once('listar.php');
}else{
    if($pagina == 'inserir'){require_once('inserir.php');}
    if($pagina == 'atualizar'){require_once('atualizar.php');}
    if($pagina == 'desativar'){require_once('desativar.php');}
<<<<<<< HEAD
    if($pagina == 'ativar'){require_once('ativar.php');}
    if($pagina == 'desativado'){require_once('desativado.php');}
=======
>>>>>>> 22aaec47541840dbacfceae7dc4152489de27b29
}

