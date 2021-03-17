
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache"/>
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>{$NOME}</title>

<link href="{$GET_TEMA}/images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="{$GET_TEMA}/tema/js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="{$GET_TEMA}/tema/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="{$GET_TEMA}./tema/css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- custom style -->
<link href="{$GET_TEMA}/tema/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="{$GET_TEMA}/tema/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="{$GET_TEMA}/tema/js/script.js" type="text/javascript"></script>

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

<header class="section-header">

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-2 col-4">
		<a href="{$PAG_HOME}" class="brand-wrap">
			<img class="logo" src="{$GET_TEMA}/images/logo.png">
		</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-6 col-sm-12">
		<form action="#" class="search">
			<div class="input-group w-100">
			    <input type="text" class="form-control" placeholder="Pesquisar">
			    <div class="input-group-append">
			      <button class="btn btn-primary" type="submit">
			        <i class="fa fa-search"></i>
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-4 col-sm-6 col-12">
		<div class="widgets-wrap float-md-right">
			<div class="widget-header  mr-3">
				<a href="{$PAG_CARRINHO}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
				<span class="badge badge-pill badge-danger notify">0</span>
			</div>
			<div class="widget-header icontext">
				<a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
				<div class="text">
					<span class="text-muted">Bem Vindo!</span>
					<div> 
						<a href="#">Entrar</a> |  
						<a href="#"> Registrar</a>
					</div>
				</div>
			</div>

		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
</header> <!-- section-header.// -->


<nav class="navbar navbar-main navbar-expand-lg navbar-light">
  <div class="container">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
      	<li class="nav-item dropdown">
          <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp  Categorias</strong></a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supermarket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Baby &amp Toys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fitness sport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Furnitures</a>
        </li>
      </ul>
    </div> <!-- collapse .// -->
  </div> <!-- container .// -->
</nav>

</header> <!-- section-header.// -->

{php}
Rotas::get_Pagina();
{/php}

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top">
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Laços</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Empresa</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Sobre</a></li>
						<li> <a href="#">Nossa Loja</a></li>
						<li> <a href="#">Regras e Termos</a></li>
						<li> <a href="#">Mapa do Site</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Socorro</h6>
					<ul class="list-unstyled">
						<li> <a href="{$PAG_CONTATO}">Contato</a></li>
						<li> <a href="#">Reembolso de Dinheiro</a></li>
						<li> <a href="#">Status do Pedido</a></li>
						<li> <a href="#">Informação de Envio</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Conta</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Login do Usuário</a></li>
						<li> <a href="#">Registrar Usuário</a></li>
						<li> <a href="{$PAG_MINHACONTA}"> Minha Conta </a></li>
						<li> <a href="#">Meus Pedidos</a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Rede Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-whatsapp"></i> Whatsapp </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom border-top row">
			<div class="col-md-3">
				<p class="text-muted"> &copy 2021 {$NOME} </p>
			</div>
			<div class="col-md-7 text-md-center">
				<span  class="px-2">atelielauralaco@systecweb.online</span>
				<span  class="px-2">+55 (31)332-9375</span>
				<span  class="px-2">Rua Maceió 431, Vista Alegre Ibirite</span>
			</div>
			<div class="col-md-2 text-md-right text-muted">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-amex"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
				<i class="fab fa-lg fa-cc-discover"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
</body>
</html>