<?php

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
	session_start();
	
}

require '../lib/autoload.php';

$smarty = new Template();

//Valores para Template
$smarty->assign('NOME', 'Laura Laços Atelie');

$smarty->assign('GET_HOME', Rotas::get_SiteHOME());

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());

$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());

$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());

$smarty->assign('PAG_HOME', Rotas::pag_Home());

$smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());

$smarty->display('adm_index.tpl');

?>