{include file="templates/header.tpl"}
    
    <div class="row">
    
    
    {foreach from=$autos item=$auto}


    <div class="col-sm-4 text-center" >
    
        <div class="test">
        <img src="./libs/images/index/370z.jpg" class="product">
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
        
        
         
        <button class="btn btn-success btn-lg">Comprar</button>
        </div>
    </div>

{/foreach}



</div>




{include file="templates/footer.tpl"}
