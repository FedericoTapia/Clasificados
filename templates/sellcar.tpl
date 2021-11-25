{include file="templates/header.tpl"}

    <div class="row">
    <h3 class="data">¿Es lo que buscabas {$usuario}?</h3>
    <input type="hidden" id="admin" name="esadmin" value="{$admin}">

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
        <section id="comentarios">   
            <ul class="lista-comentarios">
            <script>getComments('{$idAuto}')</script>
            </ul>
        </section>
{if $usuario != ""}
    {include file="templates/formComentario.tpl"}
{/if}
    </div>


</div>




{include file="templates/footer.tpl"}