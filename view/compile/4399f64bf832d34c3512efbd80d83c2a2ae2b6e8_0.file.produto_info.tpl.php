<?php
/* Smarty version 3.1.39, created on 2021-03-15 01:10:23
  from 'C:\xampp\htdocs\atelie\view\produto_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604ea5ef3603e3_09183329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4399f64bf832d34c3512efbd80d83c2a2ae2b6e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atelie\\view\\produto_info.tpl',
      1 => 1615767020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604ea5ef3603e3_09183329 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<a href="#" class="img-wrap"> <img src="media/imagen<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" ></a>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
				<a href="#" class="title mt-2 h5"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
				<div class="rating-wrap mb-3">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active"> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
						<li>
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
					</ul>
					<small class="label-rating text-muted">132 reviews</small>
					<small class="label-rating text-success"> 
						<i class="fa fa-clipboard-check"></i> 154 orders </small>
				</div> <!-- rating-wrap.// -->
				<p><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</p>
				
		</article> <!-- col.// -->
		<aside class="col-sm-3">
				<div class="price-wrap mt-2">
					<span class="price h5"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span>	
					<del class="price-old"> $98</del>
				</div> <!-- info-price-detail // -->
				
				<p class="small text-success">Frete Grátis:  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_frete_free'];?>
 </p>
				<br>
				<p>
					<a href="#" class="btn btn-primary"> Comprar </a>
					<a href="#" class="btn btn-info"> Add Carrinho  </a>
				</p>
				<br>
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
