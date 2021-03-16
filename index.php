<?php

require './lib/autoload.php';

$smarty = new Template();

//Valores para Template
$smarty->assign('NOME', 'Laura Laços Atelie');

$smarty->assign('GET_HOME', Rotas::get_SiteHOME());

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());

$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());

$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());

$smarty->assign('PAG_HOME', Rotas::pag_Home());

$smarty->display('index.tpl');

?>