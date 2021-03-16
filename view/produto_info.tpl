{foreach from=$PRO item=P}
<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<a href="#" class="img-wrap"> <img src="media/imagen{$P.pro_img}" ></a>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
				<a href="#" class="title mt-2 h5">{$P.pro_nome}</a>
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
				<p>{$P.pro_descricao}</p>
				
		</article> <!-- col.// -->
		<aside class="col-sm-3">
				<div class="price-wrap mt-2">
					<span class="price h5"> {$P.pro_valor}</span>	
					<del class="price-old"> $98</del>
				</div> <!-- info-price-detail // -->
				
				<p class="small text-success">Frete Grátis:  {$P.pro_frete_free} </p>
				<br>
				<p>
					<a href="#" class="btn btn-primary"> Comprar </a>
					<a href="#" class="btn btn-info"> Add Carrinho  </a>
				</p>
				<br>
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
{/foreach}