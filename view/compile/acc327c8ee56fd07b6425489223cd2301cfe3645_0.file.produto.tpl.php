<?php
/* Smarty version 3.1.39, created on 2021-03-15 02:46:59
  from 'C:\xampp\htdocs\atelie\view\produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604ebc93ba10f0_36811728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acc327c8ee56fd07b6425489223cd2301cfe3645' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atelie\\view\\produto.tpl',
      1 => 1615772767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604ebc93ba10f0_36811728 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="produto" class="section-name  padding-y-sm">
<div class="container">

<header class="section-heading">
	<h3 class="section-title text-center">Produtos</h3>
</header><!-- sect-heading -->

<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="img-wrap"> <img src="media/images/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=""> </a>
			<figcaption class="info-wrap">
				<a href="" class="title"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
				<div class="price mt-1"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</div> <!-- price-wrap.// -->
			</figcaption>
		</div>
	</div> <!-- col.// -->
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
</div> <!-- row.// -->
</div><!-- container // -->
</section><?php }
}
