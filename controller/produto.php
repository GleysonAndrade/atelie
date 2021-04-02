<?php
 
$smarty = new Template();

$produto = new Produto();

if(isset(Rotas::$pag[1])){
    $produto->GetProdutoCateId(Rotas::$pag[1]);
}else{
    $produto->GetProdutos();
}

$produto->GetProdutos();

$smarty->assign('PRO', $produto->GetItens());

$smarty->assign('PRO_INFO', Rotas::pag_ProdutoInfo());

$smarty->assign('PRO_TOTAL', $produto->TotalDados());

$smarty->assign('PAGINAS', $produto->ShowPaginacao());

$smarty->display('produto.tpl');

?>