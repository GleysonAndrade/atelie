<?php
/* Smarty version 3.1.39, created on 2021-03-28 18:51:49
  from 'C:\xampp\htdocs\atelie\adm\view\adm_customaterial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060fa75aa77b2_95151629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '614d820fa1949db0d0fa96076475c1edb67a1eaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atelie\\adm\\view\\adm_customaterial.tpl',
      1 => 1616968304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060fa75aa77b2_95151629 (Smarty_Internal_Template $_smarty_tpl) {
?><br/>
<h3 class="text-center">Controle Custo de Material</h3>
<br>
<form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Produto</label>
      <select name="al_produto" id="al_produto" class="form-control">
        <option value="teste">Selecionar...</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRODUTOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
    </div>
    <div class="form-group col-md-8">
      <label for="inputPassword4">Descrição</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Digite uma descrição">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Metragem Total</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Digite a metragem total">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Metragem Usada</label>
      <input type="text" class="form-control" id="inputZip" placeholder="Digite a metragem usada">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Valor Total Fita</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Digite a metragem total">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Total Usado</label>
      <input type="text" class="form-control" id="inputZip" placeholder="Digite a metragem usada">
    </div>
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-success">Salvar</button>
</form><?php }
}
