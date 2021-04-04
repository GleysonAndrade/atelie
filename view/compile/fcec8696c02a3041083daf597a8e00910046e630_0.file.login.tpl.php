<?php
/* Smarty version 3.1.39, created on 2021-04-04 23:27:10
  from 'C:\MAMP\htdocs\atelie\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606a4b4ea3d131_14010976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcec8696c02a3041083daf597a8e00910046e630' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\atelie\\view\\login.tpl',
      1 => 1617578824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606a4b4ea3d131_14010976 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
 ';?>
include_once 'facebook.php'
<?php echo '?>';?>


<div class="d-flex justify-content-center" id="fazerlogin">
<aside class="col-md-4">
	<div class="card">
      <div class="card-body">
      <h4 class="card-title mb-4 text-center">Sign in</h4>
      <form>
      	  <a href="#" class="btn btn-facebook btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp  Sign in with Facebook</a>
      	  <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp  Sign in with Google</a>
          <div class="form-group">
            <div class="input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
				 </div>
				<input name="txt_email" class="form-control" placeholder="Username" type="text">
			</div> <!-- input-group.// -->
          </div> <!-- form-group// -->
          <div class="form-group">
            <div class="input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
				 </div>
				<input name="txt_senha" class="form-control" placeholder="Password" type="password">
			</div> <!-- input-group.// -->
          </div> <!-- form-group// -->
          <div class="form-group"> 
            <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label"> Remember </div> </label>
          </div> <!-- form-group form-check .// -->
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block"> Login  </button>
          </div> <!-- form-group// -->    
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- card .// -->
</aside>
</div>
<br/><?php }
}
