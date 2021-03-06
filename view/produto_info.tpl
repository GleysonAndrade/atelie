{foreach from=$PRO item=P}
<article class="card">
	<div class="card-body">
			<div class="row">
				<aside class="col-md-6">
						<article class="gallery-wrap">
							<div class="card img-big-wrap">
								<a href="#" class="img-wrap"> <img src="{$P.pro_img}"  > </a>
							</div> <!-- card img-big-wrap.// -->
							<div class="thumbs-wrap">
							{foreach from=$IMAGEN item=I}
								<a href="#" class="item-thumb"> <img src="{$I.img_nome}"></a>
							{/foreach}	
							</div> <!-- thumbs-wrap .// -->
						</article> <!-- gallery-wrap .end// -->
				</aside>
				<main class="col-md-6">
					<article>
						<a href="#" class="text-primary btn-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{$P.cate_nome}</font></font></a>
						<h3 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{$P.pro_nome}</font></font></h3>
						<a href="#" class="btn-link  mr-3 text-muted"> <i class=""></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ref: {$P.pro_ref}</font></font></a>
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
							<h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{$P.pro_desc_longa}</font></font></h6>

						</div>
						
						<div class="form-group">
							<label class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tamanhos dispon??veis</font></font></label>
							<div>
								<label class="js-check btn btn-check active">
									<input type="radio" name="option_size" value="option1" checked="">
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pequena</font></font></span>
								</label>
								<label class="js-check btn btn-check">
									<input type="radio" name="option_size" value="option1">
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M??dio</font></font></span>
								</label>
								<label class="js-check btn btn-check">
									<input type="radio" name="option_size" value="option1">
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Grande</font></font></span>
								</label>
								<label class="js-check btn btn-check disabled">
									<input type="radio" name="option_size" disabled="" value="option1">
									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Beb??s</font></font></span>
								</label>	
							</div>						
						</div>

						<div class="mb-3">
							<var class="price h4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ {$P.pro_valor} </font></font></var> <br>
							<!--<span class="monthly"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 32,00 / </font><a href="#" class="btn-link"><font style="vertical-align: inherit;">presta????o</font></a><font style="vertical-align: inherit;"> mensal</font></font><a href="#" class="btn-link"><font style="vertical-align: inherit;"></font></a></span>-->
						</div> <!-- price-detail-wrap .// -->

						<div class="mb-4">
						    <form name="carrinhho" method="post" action="{$PAG_COMPRAR}">
							  
							  <input type="hidden" name="pro_id" value="{$P.pro_id}">
							  <button class="btn btn-primary">Comprar</button>
							  <input type="hidden" name="acao" value="add">
							  <button class="btn btn-info">Adicionar Carrinho</button>
						     </form>	
						</div>
						
					</article> <!-- product-info-aside .// -->
				</main> <!-- col.// -->
			</div> <!-- row.// -->
	</div> <!-- card-body.// -->
</article>
{/foreach}