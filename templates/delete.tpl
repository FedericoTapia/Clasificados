<div class="col-sm-4">
<h3>Eliminar Auto</h3>
<form action="{$BASE_URL}borrarAuto" method="post">
<label>Id Auto: 
</label>
    <div class="form-group">
    <select  class="seleccionar" name="autos">
    <option default>-- Seleccion --</option>
        {foreach from=$autos item=$auto}
            <option
             value = '{$auto->id_auto}'>
                {$auto->fabricante}
                {$auto->modelo}
            </option>
        {/foreach}
    </select>
    </div>
<button type="submit" class="btn btn-danger">Borrar</button>    
</form>
</div>