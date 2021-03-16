<?php
 
$smarty = new Template();

$produto = new Produto();

$produto->GetProdutos();

$smarty->assign('PRO', $produto->GetItens());

$smarty->assign('PRO_INFO', Rotas::pag_ProdutoInfo());

$smarty->display('produto.tpl');

?>