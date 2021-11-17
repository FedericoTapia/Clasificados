{include file="templates/header.tpl"}

    <div class="row">
        <h3 class="data">Bienvenido {$usuario}</h3>
    {if $admin == 1}
        <li><a href="adminPanel"><button class="btn btn-warning btn-lg">Panel de Administrador</button></a></li>
    {/if}
    
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



</div>




{include file="templates/footer.tpl"}
