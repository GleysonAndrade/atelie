<header class="section-heading">
	<h3 class="section-title text-center">Produtos</h3>
</header><!-- sect-heading -->

{if $PRO_TOTAL < 1}
<h4 class="alert alert-danger">Nenhum produto encontrado!</h4>
{/if}

<section id="produto" class="section-name  padding-y-sm">
<div class="container">
<div class="row">
{foreach from=$PRO item=P}
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="img-wrap"> <img src="{$P.pro_img}" alt=""> </a>
			<figcaption class="info-wrap">
				<a href="" class="title text-center">{$P.pro_nome}</a>
				<div class="price mt-1">
				<a>{$P.pro_desc_curta}</a>
				</div> <!-- price-wrap.// -->
				<div class="price mt-1">R$ {$P.pro_valor}</div> <!-- price-wrap.// --><br/>
					 <a href="#" class="btn btn-outline-primary btn-sm"> Carrinho
                     <i class="fa fa-shopping-cart"></i> 
                 </a>
			</figcaption>

</div> <!-- row.// -->
</div><!-- container // -->
{/foreach}
</section>

<section id="paginacao" class="row">
	<center>
	   {$PAGINAS}
	</center>
</section>