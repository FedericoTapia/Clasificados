<div class="col-sm-4">
<h3>Dar permisos de administrador a un usuario</h3>
<form action="{$BASE_URL}hacerAdmin" method="post">
<label>Mail usuario: 
</label>
    <div class="form-group">
    <select  class="seleccionar" name="addAdmin">
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
<button type="submit" class="btn btn-success">Hacer admin</button>    
</form>
</div>
<div class="col-sm-4">
<h3>Quitar permisos de administrador</h3>
<form action="{$BASE_URL}sacarAdmin" method="post">
<label>Mail usuario: 
</label>
    <div class="form-group">
    <select  class="seleccionar" name="quitAdmin">
    <option default>-- Seleccion --</option>
    
        {foreach from=$usuarios item=$usuario}
            {if $usuario->admin != 0}
            <option
             value = '{$usuario->id}'>
             {$usuario->email}
            </option>
        {/if}
        {/foreach}

    </select>
    </div>
<button type="submit" class="btn btn-danger">Quitar admin</button>    
</form>
</div>
