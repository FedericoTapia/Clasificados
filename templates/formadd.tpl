{include file="templates/header.tpl"}
<div class="col-bg-4 text-center">
    <div class="row">

        <h1>Agregar Auto</h1>
        <br>
        <form action="{$BASE_URL}agregarAuto" method="post">
    </div>
    <div class="col-bg-4 text-center" style="background-color: black" height=200px>
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
        <button type="submit" class="btn btn-success">Vender</button>

        </form>

    </div>
</div>
{include file="templates/footer.tpl"}