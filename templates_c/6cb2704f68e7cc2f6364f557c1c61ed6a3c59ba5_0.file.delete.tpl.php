<?php
/* Smarty version 3.1.39, created on 2021-10-15 05:39:50
  from 'C:\xampp\htdocs\proyectos\VentasTresa\templates\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168f8066fc213_45392602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cb2704f68e7cc2f6364f557c1c61ed6a3c59ba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\VentasTresa\\templates\\delete.tpl',
      1 => 1634269188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168f8066fc213_45392602 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-4">
<h3>Eliminar Auto</h3>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
borrarAuto" method="post">
<label>Id Auto: 
</label>
    <div class="form-group">
    <select  class="seleccionar" name="autos">
    <option default>-- Seleccion --</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autos']->value, 'auto');
$_smarty_tpl->tpl_vars['auto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auto']->value) {
$_smarty_tpl->tpl_vars['auto']->do_else = false;
?>
            <option
             value = '<?php echo $_smarty_tpl->tpl_vars['auto']->value->id_auto;?>
'>
                <?php echo $_smarty_tpl->tpl_vars['auto']->value->fabricante;?>

                <?php echo $_smarty_tpl->tpl_vars['auto']->value->modelo;?>

            </option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    </div>
<button type="submit" class="btn btn-danger">Borrar</button>    
</form>
</div><?php }
}
