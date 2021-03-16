{foreach from=$PRO item=P}
<article class="card">
	<div class="card-body">
			<div class="row">
				<aside class="col-md-6">
						<article class="gallery-wrap">
							<div class="card img-big-wrap">
								<a href="#"> <img src="bootstrap-ecommerce-html/images/items/12.jpg"></a>
							</div> <!-- card img-big-wrap.// -->
							<div class="thumbs-wrap">
								<a href="#" class="item-thumb"> <img src="bootstrap-ecommerce-html/images/items/12-1.jpg"></a>
								<a href="#" class="item-thumb"> <img src="bootstrap-ecommerce-html/images/items/12-2.jpg"></a>
								<a href="#" class="item-thumb"> <img src="bootstrap-ecommerce-html/images/items/1.jpg"></a>
								<a href="#" class="item-thumb"> <img src="bootstrap-ecommerce-html/images/items/5.jpg"></a>
							</div> <!-- thumbs-wrap .// -->
						</article> <!-- gallery-wrap .end// -->
				</aside>
				<main class="col-md-6">
					<article>
						<a href="#" class="text-primary btn-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{$P.cate_id}</font></font></a>
						<h3 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{$P.pro_nome}</font></font></h3>
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
							<h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{$P.pro_descricao}</font></font></h6>

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
							<var class="price h4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R$ {$P.pro_valor} </font></font></var> <br>
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
{/foreach}