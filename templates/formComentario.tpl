<div class="row">
    <div class="col-sm-4">
    <h3>Comentar:</h3>
        <form id="form-comment" action="https://localhost/TPEs/web2/Clasificados/" method="post">
            <div class="form-group">
                <label class="control-label">Comentario: </label><br><input type="text" name="comentario" id="comentario">
            </div>
            <div class="form-group">
                <label class="control-label">Puntaje (del 1 al 5): </label><br><input type="number" min="1" max="5" name="puntaje" id="puntaje">
            </div>
            <div class="form-group">
                
                <label class="control-label">Vehiculo: </label><br><h3>{$auto[0]->modelo}</h3>
                <input type="hidden" id="auto" name="idAuto" value="{$idAuto}">
            </div>
            <div class="form-group">
                <label class="control-label">Comentaras como: </label><br><h3>{$usuario}</h3>
                <input type="hidden" id="usuario" name="idusuario" value="{$idUsuario}">
            </div>
            <button type="submit" class="btn btn-primary" id="subir">Postear</button>
        </form>
    </div>
</div>
<script src="js/formComment.js"></script>