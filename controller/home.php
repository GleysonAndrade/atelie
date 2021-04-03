<?php

$smarty = new Template();

$smarty-> assign('HOME', 'Página HOME');

//include_once Rotas::get_Pasta_Controller() . '/produto.php';

$smarty->display('home.tpl');

?>