<?php
/* Smarty version 3.1.39, created on 2021-04-02 02:20:41
  from 'C:\MAMP\htdocs\atelie\view\produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60667f7993dd74_27746022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada827751d5a1f3d081c75f810b3b87319cb4d08' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\atelie\\view\\produto.tpl',
      1 => 1617329866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60667f7993dd74_27746022 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="section-heading">
	<h3 class="section-title text-center">Produtos</h3>
</header><!-- sect-heading -->

<?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
<h4 class="alert alert-danger">Nenhum produto encontrado!</h4>
<?php }?>

<section id="produto" class="section-name  padding-y-sm">
<div class="container">
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
" class="img-wrap"> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=""> </a>
			<figcaption class="info-wrap">
				<a href="" class="title text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a>
				<div class="price mt-1">
				<a><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc_curta'];?>
</a>
				</div> <!-- price-wrap.// -->
				<div class="price mt-1">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</div> <!-- price-wrap.// --><br/>
					 <a href="#" class="btn btn-outline-primary btn-sm"> Carrinho
                     <i class="fa fa-shopping-cart"></i> 
                 </a>
			</figcaption>

</div> <!-- row.// -->
</div><!-- container // -->
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>

<section id="paginacao" class="row">
	<center>
	   <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

	</center>
</section><?php }
}
