{include file="templates/header.tpl"}

<div class="row">
    <div class="col-sm-12">
    <h3>{$titulo}</h3>
        <form action="{$BASE_URL}crearCuenta" method="post">
            <div class="form-group"><label class="control-label">Ingrese su nombre de usuario: </label><input type="text" name="newUserName"></div>
            <div class="form-group"><label class="control-label">Ingrese su Email: </label><input type="email" name="newEmail"></div>
            <div class="form-group"><label class="control-label">Ingrese la contraseña que desea tener: </label><input type="password" name="newPass"></div>
            <button type="submit" class="btn btn-success">Crear</button>
        </form>
    </div>
</div>

{include file="templates/footer.tpl"}