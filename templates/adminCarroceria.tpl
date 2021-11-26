{include file="templates/header.tpl"}
{if $admin == 1}
    <div class="row">
    <div class="col-sm-4 text-center" >
    <div>
    <h3 class="price">Tipos de carroceria</h3>
    <ul class="list-unstyled">
{foreach from=$carrocerias item=$carroceria}
        <li><h4>{$carroceria->Carroceria}</h4></li>
        <a href="borrarCarroceria/{$carroceria->id_carroceria}">Eliminar</a> <br>
{/foreach}
    <ul>
    </div>
    </div>
    {* agregar carroceria comienza aqui *}
    <div class="row">
    <div class="col-sm-4 text-center" >

    <h3 class="price">Agregar Carroceria</h3>
    <form action="{$BASE_URL}agregarCarroceria" method="post">
    <div class="col-bg-4 text-center" style="background-color: black" height=200px>
        <label>Tipo de carroceria <br><input type="text" name="newCarroceria"></label>
    </div>
    <button type="submit" class="btn btn-success">Agregar</button>
    </form>
    {if $mensaje}
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-danger" role="alert">
            {$mensaje}
        </div>    
    </div>
</div>
{/if}
    <h3 class="price">Editar Carroceria</h3>
    <form action="{$BASE_URL}modificarCarroceria" method="post">
    <div class="form-group">
    <label>Nuevo nombre de carroceria: <br><input type="text" name="editCarroceria"></label>
    <label>Nombre actual:
    <select  class="seleccionar" name="carroceriaEditId">
    <option default>-- Seleccion --</option>
        {foreach from=$carrocerias item=$carroceria}
            <option
             value = '{$carroceria->id_carroceria}'>
                {$carroceria->Carroceria}
            </option>
        {/foreach}
    </select></label>
    </div>
    <button type="submit" class="btn btn-primary">Editar Carroceria</button>
    </form>
    </div>
    </div>
{else}
    <h2>Lo sentimos no eres administrador</h2>
{/if}

{include file="templates/footer.tpl"}