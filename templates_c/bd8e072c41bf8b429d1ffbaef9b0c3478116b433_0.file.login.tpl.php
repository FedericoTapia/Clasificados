<?php
/* Smarty version 3.1.39, created on 2021-10-15 06:58:21
  from 'C:\xampp\htdocs\proyectos\VentasTresa\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61690a6dd14954_23550119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8e072c41bf8b429d1ffbaef9b0c3478116b433' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\VentasTresa\\templates\\login.tpl',
      1 => 1634273862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61690a6dd14954_23550119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
    <h3><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h3>
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
verificar" method="post">
            <div class="form-group"><label class="control-label">Email: </label><input type="email" name="email"></div>
            <div class="form-group"><label class="control-label">Pass: </label><input type="password" name="pass"></div>
            <button type="submit" class="btn btn-success">Ingresar</button>
        </form>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['mensaje']->value) {?>
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

        </div>    
    </div>
</div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
