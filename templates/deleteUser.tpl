<div class="col-sm-4">
<h3>Eliminar Usuario</h3>
<form action="{$BASE_URL}borrarUsuario" method="post">
<label>Mail usuario: 
</label>
    <div class="form-group">
    <select  class="seleccionar" name="usuario">
    <option default>-- Seleccion --</option>
    
        {foreach from=$usuarios item=$usuario}
        {if $usuario->admin != 1}
            <option
             value = '{$usuario->id}'>
             {$usuario->email}
            </option>
        {/if}
        {/foreach}
    </select>
    </div>
<button type="submit" class="btn btn-danger">Borrar</button>    
</form>
</div>