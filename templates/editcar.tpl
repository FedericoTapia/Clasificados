{include file="templates/header.tpl"}

    <div class="row">

    <form action="{$BASE_URL}editarAuto" method="post">

    <div class="col-sm-4 text-center" >
        {foreach from=$autos item=$auto}
            
        <div class="test">
        <img src="./libs/images/carsIMG/Civic95SI.png" class="product">
        <h1>{$auto->modelo}</h1>
        <p class="price">Precio: {$auto->precio}</p>
        <h3 class="data">Fabricante: {$auto->fabricante}</h3>
        <h3 class="data">Modelo: {$auto->anio}</h3>
        <h3 class="data">Tipo de carroseria: 
        
        {foreach from=$carroceria item=$chasis}
            {if $auto->id_carroceria_fk == $chasis->id_carroceria}
                {$chasis->Carroceria}</h3>
            {/if}
        {/foreach}
        </div>

        {/foreach}
        </div>
<div class="row">
    <div class="col-sm-4 text-center" >
    <div>
    <h3 class="price">Datos a editar</h3>
        <form action="{$BASE_URL}editarAuto" method="post">
    </div>
    <div class="col-bg-4 text-center" style="background-color: black" height=200px>
        <label>Auto que desea editar: <select class="seleccionar" name="id_auto">
                <option default>-- Seleccion --</option>
                {foreach from=$autos item=$auto}
                <option value="{$auto->id_auto} ">{$auto->fabricante} {$auto->modelo}</option>
                {/foreach}
            </select>
        </label>
        <label>Fabricante <input type="text" name="fabricante"></label>
        <label>Modelo <input type="text" name="modelo"></label>
    </div>

    <div class="col-bg-4 text-center" style="background-color: black" height=200px>
        
        <label>Carroceria: <select class="seleccionar" name="id_carroceria_fk">
                <option default>-- Seleccion --</option>
                {foreach from=$carroceria item=$chasis}
                <option value='{$chasis->id_carroceria}' >{$chasis->Carroceria}</option>
                {/foreach}
            </select>
        </label>
        


        <label>año <input type="number" name="anio"></label>
    </div>

    <div class="col-bg-4 text-center" style="background-color: black" height=200px>

        <label>Kilometros <input type="number" name="kilometros"></label>
        <label>Precio <input type="number" name="precio"></label>
        <br>
        <button type="submit" class="btn btn-primary">Editar Datos</button>

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
    </div>
    </div>
           
{include file="templates/footer.tpl"}