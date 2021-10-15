<?php
/* Smarty version 3.1.39, created on 2021-10-15 03:42:26
  from 'C:\xampp\htdocs\proyectos\VentasTresa\templates\popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168dc82cb9609_19233170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a61dfb2e871209b61264cba91198170df01e04ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\VentasTresa\\templates\\popup.tpl',
      1 => 1634247725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168dc82cb9609_19233170 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="popup"><button class="btn btn-success btn-lg" onclick="myFunction()"> Agregar Auto</button>
  <div class="popuptext" id="myPopup"><h3>Agregar Auto</h3>
    <form action=" <?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
agregarAuto" method="post">
    <label>fabricante <input type="text" name="fabricante" class="onPop"></label><br>
    <label>modelo <input type="number" name="modelo" class="onPop"></label><br>
    <label>Carroceria<input type="number" name="$id_carroceria_fk" class="onPop"></label><br>        <br>
    <label>año <input type="number" name="anio" class="onPop"></label><br>
    <label>kilometros <input type="number" name="kilometros" class="onPop"></label><br>
    <label>Precio <input type="number" name="precio" class="onPop"></label><br>
    <button type="submit" class="btn btn-success" >Crear</button>
    <h3 onclick="myFunction()">X</h3>
    </form>
    </div>
</div>


<?php echo '<script'; ?>
>

function myFunction() {
var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
<?php echo '</script'; ?>
>

<?php }
}
