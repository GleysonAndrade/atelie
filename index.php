<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['pedido'])){
    $_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
}

require './lib/autoload.php';

$smarty = new Template();
$categoria = new Categoria();
$categoria->GetCategoria();

//Valores para Template
$smarty->assign('NOME', 'Laura Laços Atelie');

$smarty->assign('GET_HOME', Rotas::get_SiteHOME());

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());

$smarty->assign('PAG_PRODUTO', Rotas::pag_Produto());

$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());

$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());

$smarty->assign('PAG_HOME', Rotas::pag_Home());

$smarty->assign('CATEGORIA', $categoria->GetItens());

$smarty->assign('DATA', Sistema::DataAtualBR());

$smarty->display('index.tpl');

?>