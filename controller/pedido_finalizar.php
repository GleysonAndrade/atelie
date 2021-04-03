<?php

if(isset($_SESSION['PRO'])){

$smarty = new Template();
$carrinho = new Carrinho();

$smarty-> assign('PRO', $carrinho->GetCarrinho());
$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));


$smarty->display('pedido_finalizar.tpl');

}else{
    echo '<h4 class="alert alert-danger">Adicine produtos no carrinho! </h4>';
    Rotas::Redirecionar(1, Rotas::pag_Produto());
}
/*echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';*/

?>