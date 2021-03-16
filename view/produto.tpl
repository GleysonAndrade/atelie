<section id="produto" class="section-name  padding-y-sm">
<div class="container">

<header class="section-heading">
	<h3 class="section-title text-center">Produtos</h3>
</header><!-- sect-heading -->

<div class="row">
{foreach from=$PRO item=P}
	<div class="col-md-3">
		<div href="#" class="card card-product-grid">
			<a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="img-wrap"> <img src="media/images/{$P.pro_img}" alt=""> </a>
			<figcaption class="info-wrap">
				<a href="" class="title">{$P.pro_nome}</a>
				<div class="price mt-1">R${$P.pro_valor}</div> <!-- price-wrap.// -->
					 <a href="#" class="btn btn-outline-primary btn-sm"> Add to cart 
                     <i class="fa fa-shopping-cart"></i> 
                 </a>
			</figcaption>
		</div>
	</div> <!-- col.// -->
{/foreach}	
</div> <!-- row.// -->
</div><!-- container // -->
</section>