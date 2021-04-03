<?php
 
$smarty = new Template();

$produto = new Produto();

$produto->GetProdutoId(Rotas::$pag[1]);

$image = new ProdutoImagen();

$image->GetImagePRO(Rotas::$pag[1]);

$smarty->assign('PRO', $produto->GetItens());

$smarty->assign('TEMA', Rotas::get_SiteTEMA());

$smarty->assign('IMAGEN', $image->GetItens());

$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());

$smarty->display('produto_info.tpl');


?>