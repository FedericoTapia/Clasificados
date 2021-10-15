<?php
/* Smarty version 3.1.39, created on 2021-10-14 22:15:44
  from 'C:\xampp\htdocs\proyectos\VentasTresa\templates\formAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61688ff03563b5_03816037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6c029ba2196535c7b04aab8d253a37167bf6977' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\VentasTresa\\templates\\formAdd.tpl',
      1 => 1634242459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61688ff03563b5_03816037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <h3>Crear Tareas</h3>
    <form action="' <?php echo BASE_URL;?>
 'agregarAuto" method="post">
    <label>fabricante <input type="text" name="fabricante"></label>
    <label>modelo <input type="number" name="modelo"></label>
    <label>carroceria <input type="number" name="id_carroseria_fk"></label>
    <label>año <input type="number" name="anio"></label>
    <label>kilometros <input type="number" name="kilometros"></label>
    <label>foto <input type="number" name="prioridad"></label>
    <button type="submit" class="btn btn-success">Crear</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
