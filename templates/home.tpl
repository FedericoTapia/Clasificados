{include file="templates/header.tpl"}

    <div class="row">
        <h3 class="data">Bienvenido {$usuario}</h3>
    {if $admin == 1}
        <li><a href="adminPanel"><button class="btn btn-warning btn-lg">Panel de Administrador</button></a></li>
    {/if}
    <li><a href="carrocerias"><button class="btn btn-warning btn-lg">Administracion de carrocerias</button></a></li>

    {if $search == ""}
        <form action="{$BASE_URL}home" method="post">
            <label><h3>Tipo de carroceria: </h3>
            </label>
                <div class="form-group">
                <select  class="seleccionar" name="tipoCarroceria">
                <option default>-- Seleccion --</option>
                        {foreach from=$carroceria item=$chasis}
                        <option value = '{$chasis->id_carroceria}'>
                            {$chasis->Carroceria}
                        </option>
                        {/foreach}
                </select>
                </div>
            <button type="submit" class="btn btn-success">Filtrar</button>    
        </form>
            {foreach from=$autos item=$auto}
    <form action="{$BASE_URL}buyCar" method="post">

    <div class="col-sm-4 text-center" >

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
        
        
         
        <button type="submit" name="idCar" class="btn btn-success btn-lg" value="{$auto->id_auto}">Comprar</button>
        
        
        </form>
        </div>
    </div>

{/foreach}

    {else}
    <a href="{$BASE_URL}home"><button class="btn btn-primary">Volver al inicio</button></a>
        {foreach from=$autos item=$auto}
        
        {if $auto->id_carroceria_fk == $search}
            <form action="{$BASE_URL}buyCar" method="post">

    <div class="col-sm-4 text-center" >

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
        
        
         
        <button type="submit" name="idCar" class="btn btn-success btn-lg" value="{$auto->id_auto}">Comprar</button>
        </form>
        </div>
    </div>
        {/if}
        {/foreach}
    {/if}
    


</div>




{include file="templates/footer.tpl"}
