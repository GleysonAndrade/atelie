<?php

require './lib/autoload.php';

include_once Rotas::get_Pasta_Controller() . '/produto.php';

$smarty->display('home.tpl');
?>