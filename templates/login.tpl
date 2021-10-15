{include file="templates/header.tpl"}

<div class="row">
    <div class="col-sm-12">
    <h3>{$titulo}</h3>
        <form action="{$BASE_URL}verificar" method="post">
            <div class="form-group"><label class="control-label">Email: </label><input type="email" name="email"></div>
            <div class="form-group"><label class="control-label">Pass: </label><input type="password" name="pass"></div>
            <button type="submit" class="btn btn-success">Ingresar</button>
        </form>
    </div>
</div>
{if $mensaje}
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-danger" role="alert">
            {$mensaje}
        </div>    
    </div>
</div>
{/if}

{include file="templates/footer.tpl"}