<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Website title - bootstrap html template</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Carrinho de Compras</h2>
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
{foreach from=$PRO item=P}  
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
			<div class="aside"><img src="{$P.pro_img}" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">{$P.pro_nome}</a>
				<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td class="text-center"> {$P.pro_qtd}</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">R$ {$P.pro_valor}</var> 
			<small class="text-muted"> {$P.pro_peso}g</small> 
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 
	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
	<a href="" class="btn btn-light"> Remover</a>
	</td>
</tr>
{/foreach}
</tbody>
</table>

<div class="card-body border-top">
	<a href="#" class="btn btn-primary float-md-right"> Finalizar compra <i class="fa fa-chevron-right"></i> </a>
	<a href="#" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continuar comprando </a>
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
					<label>Tem Cupom?</label>
					<div class="input-group">
						<input type="text" class="form-control" name="" placeholder="Coupon code">
						<span class="input-group-append"> 
							<button class="btn btn-primary">Inserir</button>
						</span>
					</div>
				</div>
			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total: </dt>
					  <dd class="text-right">R$ {$P.pro_subTotal}</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Desconto:</dt>
					  <dd class="text-right">R$ 0,00</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total Compra:</dt>
					  <dd class="text-right  h5"><strong>R$ {$TOTAL}</strong></dd>
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
</html>