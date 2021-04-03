<?php

$smarty = new Template();
$carrinho = new Carrinho();
$smarty-> assign('PRO', $carrinho->GetCarrinho());
$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));

$smarty->display('carrinho.tpl');

/*echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';*/

?>