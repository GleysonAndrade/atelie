<br/>
<h3 class="text-center">Controle Custo de Material</h3>
<br>
<form>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Produto</label>
      <select name="al_produto" id="al_produto" class="form-control">
        <option value="teste">Selecionar...</option>
        {foreach from=$PRODUTOS item=P}
            <option value="{$P.pro_id}">{$P.pro_nome}</option>
        {/foreach}
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
</form>