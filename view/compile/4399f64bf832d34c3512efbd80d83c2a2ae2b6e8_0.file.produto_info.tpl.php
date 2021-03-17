<?php
/* Smarty version 3.1.39, created on 2021-03-17 01:49:49
  from 'C:\xampp\htdocs\atelie\view\produto_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6051522d2c3669_12877269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4399f64bf832d34c3512efbd80d83c2a2ae2b6e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atelie\\view\\produto_info.tpl',
      1 => 1615942141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6051522d2c3669_12877269 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
<article class="card">
	<div class="card-body">
			<div class="row">
				<aside class="col-md-6">
						<article class="gallery-wrap">
							<div class="card img-big-wrap">
								<a href="#" class="img-wrap"> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=""> </a>
							</div> <!-- card img-big-wrap.// -->
							<div class="thumbs-wrap">
								<a href="#" class="item-thumb"> <img src=""></a>
								<a href="#" class="item-thumb"> <img src=""></a>
								<a href="#" class="item-thumb"> <img src=""></a>
								<a href="#" class="item-thumb"> <img src=""></a>
							</div> <!-- thumbs-wrap .// -->
						</article> <!-- gallery-wrap .end// -->
				</aside>
				<main class="col-md-6">
					<article>
						<a href="#" class="text-primary btn-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $_smarty_tpl->tpl_vars['P']->value['cate_nome'];?>
</font></font></a>
						<h3 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</font></font></h3>
						<a href="#" class="btn-link  mr-3 text-muted"> <i class=""></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
 ref</font></font></a>
						<div>
							<ul class="rating-stars">
								<li style="width:60%" class="stars-active">
									<img src="bootstrap-ecommerce-html/images/icons/stars-active.svg" alt="">
								</li>
								<li>
									<img src="bootstrap-ecommerce-html/images/icons/starts-disable.svg" alt="">
								</li>
							</ul>
							<span class="label-rating mr-3 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7/10</font></font></span>
							<a href="#" class="btn-link  mr-3 text-muted"> <i class="fa fa-heart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Guardar para depois </font></font></a>
							<a href="#" class="btn-link text-muted"> <i class="fa fa-book-open"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Comparar </font></font></a>
						</div> 

						<hr>
			
						<div class="mb-3">
							<h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_descricao'];?>
</font></font></h6>

						</div>
						
						<div class="form-group">
							<label class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tamanhos disponíveis</font></font></label>
							<div>
								<label class="js-check btn btn-check active">
									<input type="radio" name="option_size" value="option1" checked="">
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pequena</font></font></span>
								</label>
								<label class="js-check btn btn-check">
									<input type="radio" name="option_size" value="option1">
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Médio</font></font></span>
								</label>
								<label class="js-check btn btn-check">
									<input type="radio" name="option_size" value="option1">
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grande</font></font></span>
								</label>
								<label class="js-check btn btn-check disabled">
									<input type="radio" name="option_size" disabled="" value="option1">
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bebês</font></font></span>
								</label>	
							</div>						
						</div>

						<div class="mb-3">
							<var class="price h4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </font></font></var> <br>
							<!--<span class="monthly"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 32,00 / </font><a href="#" class="btn-link"><font style="vertical-align: inherit;">prestação</font></a><font style="vertical-align: inherit;"> mensal</font></font><a href="#" class="btn-link"><font style="vertical-align: inherit;"></font></a></span>-->
						</div> <!-- price-detail-wrap .// -->

						<div class="mb-4">
							<a href="#" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Compre Agora</font></font></a>
							<a href="#" class="btn btn-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar ao cartão</font></font></a>
						</div>
						
					</article> <!-- product-info-aside .// -->
				</main> <!-- col.// -->
			</div> <!-- row.// -->
	</div> <!-- card-body.// -->
</article>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
