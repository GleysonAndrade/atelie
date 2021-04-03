<?php
/* Smarty version 3.1.39, created on 2021-04-03 14:52:41
  from 'C:\MAMP\htdocs\atelie\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606881397aa3d9_21449343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52944f9e6a867ee3d6151c8f777f6a3c5601eb8b' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\atelie\\view\\pedido_confirmar.tpl',
      1 => 1617461554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606881397aa3d9_21449343 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Website title - bootstrap html template</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<?php echo '<script'; ?>
 src="js/jquery-2.0.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<!-- Bootstrap4 files-->
<?php echo '<script'; ?>
 src="js/bootstrap.bundle.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<?php echo '<script'; ?>
 src="js/script.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
<?php echo '</script'; ?>
>

</head>
<body>

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Confirmar Pedido </h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<main class="col-md-9">
<div class="card">

<table class="table table-borderless table-shopping-cart">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>  
<thead class="text-muted">
<tr class="small text-uppercase">
  <th scope="col">Produto</th>
  <th scope="col" width="120">Quantidade</th>
  <th scope="col" width="120">Valor</th>
  <th scope="col" class="text-right" width="200"> </th>
</tr>
</thead>
<tbody>
<tr>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
				<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</var> 
			<small class="text-muted"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_peso'];?>
g</small> 
		</div> <!-- price-wrap .// -->
	</td>
	<td> 
		<form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
		<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
		<input type="hidden" name="acao" value="del">
		<button class="btn btn-outline-danger">Cancelar</button>
		</form>
	</td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<div class="card-body border-top">
	<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
" class="btn btn-outline-success float-md-right"> Finalizar Pedido > <i class="fa fa-chevron-right"></i> </a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO']->value;?>
" class="btn btn-outline-info"> <i class="fa fa-chevron-left"></i> Voltar Carrinho </a>
</div>	
</div> <!-- card.// -->

<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
</div>

	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card mb-3">
			<div class="card-body">
			<form>
				<div class="form-group">
				
				</div>
			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total: </dt>
					  <dd class="text-right">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Desconto:</dt>
					  <dd class="text-right">R$ 0,00</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total Compra:</dt>
					  <dd class="text-right  h5"><strong>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</strong></dd>
					</dl>
					<hr>
					<p class="text-center mb-3">
						<img src="media/images/payments.png" height="26">
					</p>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
</body>
</html><?php }
}
