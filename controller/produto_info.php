<?php
 
$smarty = new Template();

$produto = new Produto();

$produto->GetProdutoId(Rotas::$pag[1]);

$smarty->assign('PRO', $produto->GetItens());

$smarty->display('produto_info.tpl');

?>