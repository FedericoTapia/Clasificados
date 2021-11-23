{include file="templates/header.tpl"}

    <div class="row">


    <form action="{$BASE_URL}buyCar" method="post">

    <div class="col-sm-4 text-center" >

        <div class="test">
        <img src="./libs/images/carsIMG/Civic95SI.png" class="product">
        <h1>{$auto[0]->modelo}</h1>
        <p class="price">Precio: {$auto[0]->precio}</p>
        <h3 class="data">Fabricante: {$auto[0]->fabricante}</h3>
        <h3 class="data">Modelo: {$auto[0]->anio}</h3>
        <h3 class="data">Tipo de carroseria: 
        
        {foreach from=$carroceria item=$chasis}
            {if $auto[0]->id_carroceria_fk == $chasis->id_carroceria}
                {$chasis->Carroceria}</h3>
            {/if}
        {/foreach}
        
        
         
        <button type="submit" name="idCar" class="btn btn-success btn-lg" value="{$auto[0]->id_auto}">Comprar</button>
        </form>
        </div>
    </div>
    <div class="test">
        <h3>COMENTARIOS</h3>
        {foreach from=$comentarios item=$comentario}
        <p class="price">Precio: {$comentario->comentario}</p>
        <h3 class="data">puntaje: {$comentario->puntaje}</h3>

        {foreach from=$usuarios item=$usuario}
            {if $comentario->id_usuario == $usuario->id}
                <h3 class="data">puntaje: {$usuario->userName}</h3>
            {/if}
        {/foreach}

        {/foreach}
    </div>


</div>




{include file="templates/footer.tpl"}