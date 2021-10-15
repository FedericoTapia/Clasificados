<?php
/* Smarty version 3.1.39, created on 2021-10-15 05:27:11
  from 'C:\xampp\htdocs\proyectos\VentasTresa\templates\formadd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168f50fd539c5_52285199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b88a80c3e1bea2846cd8688e5d3a306b0a8c4119' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\VentasTresa\\templates\\formadd.tpl',
      1 => 1634268431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6168f50fd539c5_52285199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-bg-4 text-center">
    <div class="row">

        <h1>Agregar Auto</h1>
        <br>
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
agregarAuto" method="post">
    </div>
    <div class="col-bg-4 text-center" style="background-color: black" height=200px>
        <label>Fabricante <input type="text" name="fabricante"></label>
        <label>Modelo <input type="text" name="modelo"></label>
    </div>

    <div class="col-bg-4 text-center" style="background-color: black" height=200px>
        
        <label>Carroceria: <select class="seleccionar" name="id_carroceria_fk">
                <option default>-- Seleccion --</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carroceria']->value, 'chasis');
$_smarty_tpl->tpl_vars['chasis']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chasis']->value) {
$_smarty_tpl->tpl_vars['chasis']->do_else = false;
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['chasis']->value->id_carroceria;?>
' ><?php echo $_smarty_tpl->tpl_vars['chasis']->value->Carroceria;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
