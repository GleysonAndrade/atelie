<?php
/* Smarty version 3.1.39, created on 2021-03-17 18:19:22
  from 'C:\xampp\htdocs\atelie\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60523a1a70f1d5_35523061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16bebb790e0a39142b9c71bf28aafbcee35ec4bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atelie\\adm\\view\\adm_index.tpl',
      1 => 1616001553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60523a1a70f1d5_35523061 (Smarty_Internal_Template $_smarty_tpl) {
?><br><br><br><br><br>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/adm/css/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="col-md-12">
	    <div class="card">
	        <div class="card-body">
	              <div class="row">
		<div class="col-md-4">
		     <h3 class="text-center">Login Adiministrador <a href="#"></a></h3><br>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">ou</span>
      </div>

      <form role="form">
        <div class="form-group">
          <label for="inputUsernameEmail">Email</label>
          <input type="text" class="form-control" id="inputUsernameEmail">
        </div>
        <div class="form-group">
          <label for="inputPassword">Senha</label>
          <input type="password" class="form-control" id="inputPassword">
           <a class="pull-right" href="#">Esqueçeu a Senha?</a>
        </div>
        <div class="checkbox pull-right">
          <label>
            <input type="checkbox">
            Lembre me </label>
        </div>
        <button type="submit" class="btn btn btn-primary">
          Entar
        </button>
      </form>
		</div>
		<div class="col-md-8">
		    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../adm/images/Design sem nome.png" alt="First slide">
    <div class="carousel-caption d-none d-md-block">
    <h3>Subtext</h3>
  </div></div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://placehold.it/800x400/444444/FFFFFF&text=Second Slide" alt="Second slide">
    </div>
    <div class="carousel-caption d-none d-md-block">
    <h3>Subtext</h3>
  </div><div class="carousel-item">
      <img class="d-block w-100" src="http://placehold.it/800x400/444444/FFFFFF&text=Third Slide" alt="Third slide">
    <div class="carousel-caption d-none d-md-block">
    <h3>Subtext</h3>
  </div></div>
  </div>
</div>
		</div>
	</div>
	        </div>
	    </div>
	</div>
</div>

<footer></footer><?php }
}
